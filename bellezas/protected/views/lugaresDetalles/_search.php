<?php
/* @var $this LugaresDetallesController */
/* @var $model LugaresDetalles */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_LUGAR_DET'); ?>
		<?php echo $form->textField($model,'ID_LUGAR_DET'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_LUGAR'); ?>
		<?php echo $form->textField($model,'ID_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACCESO_DIS'); ?>
		<?php echo $form->textField($model,'ACCESO_DIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMBARAZADA'); ?>
		<?php echo $form->textField($model,'EMBARAZADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENOR_EDAD'); ?>
		<?php echo $form->textField($model,'MENOR_EDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->