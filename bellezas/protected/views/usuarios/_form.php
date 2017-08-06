<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO DE USUARIO'); ?>
		<?php echo $form->dropDownList($model,'ID', CHtml::listData(TiposUsuarios::model()->findAll(),'ID','TIPO'));?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_P'); ?>
		<?php echo $form->textField($model,'APELLIDO_P',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'APELLIDO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_M'); ?>
		<?php echo $form->textField($model,'APELLIDO_M',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'APELLIDO_M'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREO'); ?>
		<?php echo $form->textField($model,'CORREO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONTRASENA'); ?>
		<?php echo $form->textField($model,'CONTRASENA',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'CONTRASENA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'TELEFONO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->