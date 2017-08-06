<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\components\MiscHelpers;
use frontend\models\Meeting;
use frontend\models\UserContact;
?>
<?= Yii::t('frontend','Hi');?> <?= MiscHelpers::getDisplayName($user_id); ?>.
<?= Yii::t('frontend','We don\'t have any contact information for you for your upcoming meeting');?>, <?php echo $links['view']; ?>.
<?= Yii::t('frontend','Please click');?> <?php echo $links['add_contact'] ?> <?= Yii::t('frontend','to add your phone number or online conferencing details');?>.
