<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USUARIO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_USUARIO), array('view', 'id'=>$data->ID_USUARIO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::encode($data->ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_P')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_M')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO_M); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->CORREO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTRASENA')); ?>:</b>
	<?php echo CHtml::encode($data->CONTRASENA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONO); ?>
	<br />

	*/ ?>

</div>