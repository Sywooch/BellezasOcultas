<?php
/* @var $this LugaresController */
/* @var $model Lugares */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_LUGAR'); ?>
		<?php echo $form->textField($model,'ID_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_USUARIO'); ?>
		<?php echo $form->textField($model,'ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_CATEGORIA'); ?>
		<?php echo $form->textField($model,'ID_CATEGORIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GRATUITO'); ?>
		<?php echo $form->textField($model,'GRATUITO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRECIO_APROX'); ?>
		<?php echo $form->textField($model,'PRECIO_APROX',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIRECCION'); ?>
		<?php echo $form->textArea($model,'DIRECCION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONCACTO'); ?>
		<?php echo $form->textArea($model,'CONCACTO',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'E_MAIL'); ?>
		<?php echo $form->textField($model,'E_MAIL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACTIVOS'); ?>
		<?php echo $form->textField($model,'ACTIVOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->