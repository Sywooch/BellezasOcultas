<?php
/* @var $this LugaresController */
/* @var $model Lugares */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lugares-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO'); ?>
		<?php echo $form->dropDownList($model,'ID_USUARIO',CHtml::listData(Usuarios::model()->findAll(),'ID_USUARIO','NOMBRE','APELLIDO_P')); ?>
		<?php echo $form->error($model,'ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CATEGORIA'); ?>
		<?php echo $form->dropDownList($model,'ID_CATEGORIA',CHtml::listData(Categorias::model()->findAll(),'ID_CATEGORIA','NOMBRE')); ?>
		<?php echo $form->error($model,'ID_CATEGORIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GRATUITO'); ?>
		<?php echo $form->checkBox($model,'GRATUITO'); ?>
		<?php echo $form->error($model,'GRATUITO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRECIO_APROX'); ?>
		<?php echo $form->textField($model,'PRECIO_APROX',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PRECIO_APROX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCION'); ?>
		<?php echo $form->textArea($model,'DIRECCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONCACTO'); ?>
		<?php echo $form->textArea($model,'CONCACTO',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CONCACTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'E_MAIL'); ?>
		<?php echo $form->textField($model,'E_MAIL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'E_MAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACTIVOS'); ?>
		<?php echo $form->checkBox($model,'ACTIVOS'); ?>
		<?php echo $form->error($model,'ACTIVOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->