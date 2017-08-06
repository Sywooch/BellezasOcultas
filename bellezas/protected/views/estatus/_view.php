<?php
/* @var $this EstatusController */
/* @var $data Estatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ESTA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ESTA), array('view', 'id'=>$data->ID_ESTA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>