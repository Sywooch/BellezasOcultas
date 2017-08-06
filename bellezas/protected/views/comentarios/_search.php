<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_COMEN'); ?>
		<?php echo $form->textField($model,'ID_COMEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_LUGAR'); ?>
		<?php echo $form->textField($model,'ID_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_USUARIO'); ?>
		<?php echo $form->textField($model,'ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPCION_COM'); ?>
		<?php echo $form->textField($model,'DESCRIPCION_COM',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->