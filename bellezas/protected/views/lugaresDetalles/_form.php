<?php
/* @var $this LugaresDetallesController */
/* @var $model LugaresDetalles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lugares-detalles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LUGAR'); ?>
		<?php echo $form->dropDownList($model,'ID_LUGAR',CHtml::listData(Lugares::model()->findAll(),'ID_LUGAR','NOMBRE')); ?>
		<?php echo $form->error($model,'ID_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACCESO_DIS'); ?>
		<?php echo $form->checkBox($model,'ACCESO_DIS'); ?>
		<?php echo $form->error($model,'ACCESO_DIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMBARAZADA'); ?>
		<?php echo $form->checkBox($model,'EMBARAZADA'); ?>
		<?php echo $form->error($model,'EMBARAZADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MENOR_EDAD'); ?>
		<?php echo $form->checkBox($model,'MENOR_EDAD'); ?>
		<?php echo $form->error($model,'MENOR_EDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->