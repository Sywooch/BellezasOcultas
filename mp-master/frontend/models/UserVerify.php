<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use common\models\User;
use common\components\MiscHelpers;

/**
 * This is the model class for table "{{%user_verify}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $email_verified
 * @property string $email_verify_token
 * @property integer $email_verify_token_expire
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 */
class UserVerify extends \yii\db\ActiveRecord
{
  const NOT_VERIFIED=0;
  const IS_VERIFIED=10;
  const RESULT_SUCCESS=100;
  const RESULT_FAILED=110;
  const RESULT_EXPIRED=120;

  public function behaviors()
  {
      return [
          /*[
              'class' => SluggableBehavior::className(),
              'attribute' => 'name',
              'immutable' => true,
              'ensureUnique'=>true,
          ],*/
          'timestamp' => [
              'class' => 'yii\behaviors\TimestampBehavior',
              'attributes' => [
                  ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                  ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
              ],
          ],
      ];
  }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_verify}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'email_verified'], 'required'],
            [['user_id', 'email_verified' ], 'integer'],
            [['email_verify_token'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'user_id' => Yii::t('frontend', 'User ID'),
            'email_verified' => Yii::t('frontend', 'Email Verified'),
            'email_verify_token' => Yii::t('frontend', 'Email Verify Token'),
            'email_verify_token_expire' => Yii::t('frontend', 'Email Verify Token Expire'),
            'created_at' => Yii::t('frontend', 'Created At'),
            'updated_at' => Yii::t('frontend', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function request($user_id) {
      // requests a verification for an email address
      $uv = UserVerify::findOne($user_id);
      if (is_null($uv)) {
        $uv = new UserVerify();
        $uv->user_id  = $user_id;
        $uv->email_verified = UserVerify::NOT_VERIFIED;
        $uv->save();
      }
      $uv->email_verify_token = Yii::$app->security->generateRandomString(24);
      $uv->email_verify_token_expire = time() + (3 * 24 * 60 * 60); // expire in three days
      $uv->update();
      // send an email requesting
      $uv->deliver();
    }

    public static function checkVerification($user_id,$email_verify_token) {
      // verify that a request to verify is valid
      $uv = UserVerify::find()
        ->where(['user_id'=>$user_id,'email_verify_token'=>$email_verify_token])->one();
      if (!is_null($uv)) {
          if (time()>$uv->email_verify_token_expire) {
            // verification expired
            $uv->email_verified = UserVerify::NOT_VERIFIED;
            $uv->update();
            Yii::$app->getSession()->setFlash('error', Yii::t('frontend','Sorry, your verification token expired Please request another.'));
            return UserVerify::RESULT_EXPIRED;
          } else {
            $uv->email_verified = UserVerify::IS_VERIFIED;
            $uv->update();
            Yii::$app->getSession()->setFlash('success', Yii::t('frontend','Thank you. We have verified your email address.'));
            return UserVerify::RESULT_SUCCESS;
          }
      } else {
        // verification failed
        $uv->email_verified = UserVerify::NOT_VERIFIED;
        $uv->update();
        Yii::$app->getSession()->setFlash('error', Yii::t('frontend','Sorry, we were unable to verify your email address.'));
        return UserVerify::RESULT_FAILED;
      }
    }

//  TO DO in case Meeting::COMMAND_VERIFY_EMAIL:
// call a function here too to add a record for user_verify table

    public function deliver() {
      $priorLanguage=\Yii::$app->language;
      $u=User::findOne($this->user_id);
      if (isset($u)) {
        $links=[
          'home'=>MiscHelpers::buildCommand(0,Meeting::COMMAND_HOME,0,$this->user_id,$u->auth_key,0),
          'view'=>MiscHelpers::buildCommand(0,Meeting::COMMAND_USER_VERIFY_EMAIL,$this->email_verify_token,$this->user_id,$u->auth_key,0),
          'footer_email'=>MiscHelpers::buildCommand(0,Meeting::COMMAND_FOOTER_EMAIL,0,$this->user_id,$u->auth_key,0),
          'footer_block_all'=>MiscHelpers::buildCommand(0,Meeting::COMMAND_FOOTER_BLOCK_ALL,0,$this->user_id,$u->auth_key,0),
        ];
        $language = UserSetting::getLanguage($this->user_id);
        if ($language!==false) {
          \Yii::$app->language=$language;
        }
      } else {
        // log sentry error
        // user doesn't exist
          return false;
      }
      $subject = Yii::t('frontend','Verify Your Email Address');
      $details = Yii::t('frontend','Please click below to verify your email address');
      $content=[
        'subject' => $subject,
        'heading' => Yii::t('frontend','Please verify your email address'),
        'p1' => $details,
        'p2' => '',
        'plain_text' => $subject.', '.$details.'...'.Html::a(Yii::t('frontend','Verify Your Email'),$links['view'])
      ];
      $button= [
        'text' => Yii::t('frontend','Verify Your Email'),
        'command' => Meeting::COMMAND_USER_VERIFY_EMAIL,
        'obj_id' => $this->id,
      ];
      // Build the absolute links to the meeting and commands
      if (isset($button)) {
        $links['button_url']=$links['view'];
        $content['button_text']=$button['text'];
      }
      // send the message
      $message = Yii::$app->mailer->compose([
        'html' => 'generic-html',
        'text' => 'generic-text'
      ],
      [
        'meeting_id' => 0,
        'sender_id'=> 0,
        'user_id' => $this->user_id,
        'auth_key' => $u->auth_key,
        'content'=>$content,
        'links'=>$links,
        'button'=>$button,
    ]);
    $message->setFrom(['support@meetingplanner.io'=>'Meeting Planner Support']);
    $message->setReplyTo('support@meetingplanner.io');
    $message->setTo($u->email)
        ->setSubject($content['subject'])
        ->send();
    \Yii::$app->language=$priorLanguage;
    }
}
