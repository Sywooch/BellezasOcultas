<?php
/* @var $this UbicacionesController */
/* @var $data Ubicaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_UBICACION')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_UBICACION), array('view', 'id'=>$data->ID_UBICACION)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_LUGAR')); ?>:</b>
	<?php echo CHtml::encode($data->ID_LUGAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LONGITUD')); ?>:</b>
	<?php echo CHtml::encode($data->LONGITUD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LATITUD')); ?>:</b>
	<?php echo CHtml::encode($data->LATITUD); ?>
	<br />


</div>