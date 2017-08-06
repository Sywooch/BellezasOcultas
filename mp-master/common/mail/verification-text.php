<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?= Yii::t('frontend','Hi');?> <?= \common\components\MiscHelpers::getDisplayName($user->id); ?>,
<?= Yii::t('frontend','Please click the button below to verify your email address')?>:
<?= $verifyLink; ?>
