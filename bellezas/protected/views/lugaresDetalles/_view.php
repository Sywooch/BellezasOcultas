<?php
/* @var $this LugaresDetallesController */
/* @var $data LugaresDetalles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_LUGAR_DET')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_LUGAR_DET), array('view', 'id'=>$data->ID_LUGAR_DET)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_LUGAR')); ?>:</b>
	<?php echo CHtml::encode($data->ID_LUGAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACCESO_DIS')); ?>:</b>
	<?php echo CHtml::encode($data->ACCESO_DIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMBARAZADA')); ?>:</b>
	<?php echo CHtml::encode($data->EMBARAZADA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENOR_EDAD')); ?>:</b>
	<?php echo CHtml::encode($data->MENOR_EDAD); ?>
	<br />


</div>