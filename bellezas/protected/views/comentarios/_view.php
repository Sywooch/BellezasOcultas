<?php
/* @var $this ComentariosController */
/* @var $data Comentarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_COMEN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_COMEN), array('view', 'id'=>$data->ID_COMEN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_LUGAR')); ?>:</b>
	<?php echo CHtml::encode($data->ID_LUGAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->ID_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION_COM')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION_COM); ?>
	<br />


</div>