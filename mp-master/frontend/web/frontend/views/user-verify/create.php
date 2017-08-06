<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\UserVerify */

$this->title = Yii::t('frontend', 'Create User Verify');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'User Verifies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-verify-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
