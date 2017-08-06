<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sugerencias-form',
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
		<?php echo $form->labelEx($model,'ESTATUS'); ?>
		<?php echo $form->dropDownList($model,'ID_ESTA',CHtml::listData(Estatus::model()->findAll(),'ID_ESTA','DESCRIPCION')); ?>
		<?php echo $form->error($model,'ID_ESTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php //echo $form->textField($model,'FECHA');
        $this->widget("zii.widgets.jui.CJuiDatePicker",array(
            "attribute"=>"FECHA",
            "model"=>$model,
            "language"=>"es",
            "options"=>array(
                    "dateFormat"=>"yy-mm-dd"
        ))); ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UBICACION'); ?>
		<?php echo $form->textField($model,'UBICACION',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'UBICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOTO'); ?>
		<?php echo $form->textField($model,'FOTO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'FOTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->