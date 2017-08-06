<?php
/* @var $this LugaresController */
/* @var $data Lugares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_LUGAR')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_LUGAR), array('view', 'id'=>$data->ID_LUGAR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->ID_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CATEGORIA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_CATEGORIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GRATUITO')); ?>:</b>
	<?php echo CHtml::encode($data->GRATUITO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRECIO_APROX')); ?>:</b>
	<?php echo CHtml::encode($data->PRECIO_APROX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CONCACTO')); ?>:</b>
	<?php echo CHtml::encode($data->CONCACTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('E_MAIL')); ?>:</b>
	<?php echo CHtml::encode($data->E_MAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTIVOS')); ?>:</b>
	<?php echo CHtml::encode($data->ACTIVOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	*/ ?>

</div>