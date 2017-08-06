<?php
/* @var $this SugerenciasController */
/* @var $data Sugerencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SUGER')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_SUGER), array('view', 'id'=>$data->ID_SUGER)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->ID_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ESTA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_ESTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UBICACION')); ?>:</b>
	<?php echo CHtml::encode($data->UBICACION); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FOTO')); ?>:</b>
	<?php echo CHtml::encode($data->FOTO); ?>
	<br />

	*/ ?>

</div>