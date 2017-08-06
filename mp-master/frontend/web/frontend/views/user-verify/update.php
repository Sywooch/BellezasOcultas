<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserVerify */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'User Verify',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'User Verifies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="user-verify-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
