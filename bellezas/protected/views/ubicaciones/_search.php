<?php
/* @var $this UbicacionesController */
/* @var $model Ubicaciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_UBICACION'); ?>
		<?php echo $form->textField($model,'ID_UBICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_LUGAR'); ?>
		<?php echo $form->textField($model,'ID_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LONGITUD'); ?>
		<?php echo $form->textField($model,'LONGITUD',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LATITUD'); ?>
		<?php echo $form->textField($model,'LATITUD',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->