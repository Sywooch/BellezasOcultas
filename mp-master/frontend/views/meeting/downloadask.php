<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Meeting;
use common\components\MiscHelpers;

/* @var $this yii\web\View */
/* @var $model frontend\models\MeetingActivity */


$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Meeting'), 'url' => ['/meeting/view','id'=>$model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meeting-activity-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="dropdown" >
        <?= $this->render('_download_button', [
            'meeting_id'=>$model->id,
            'buttonStyle'=>'large'
        ]) ?>
        </div>
    </div>
  </div>
    <div class="row ">
      <div class="col-md-6 col-md-offset-3 col-centered ">
    <p class="vertical-pad"><?= Html::a(Yii::t('frontend', 'View your meeting'), ['/meeting/view', 'id' => $model->id]) ?></p>
    </div>
  </div>

  </div>
