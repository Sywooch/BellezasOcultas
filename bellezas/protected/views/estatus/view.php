<?php
/* @var $this EstatusController */
/* @var $model Estatus */

$this->breadcrumbs=array(
	'Estatuses'=>array('index'),
	$model->ID_ESTA,
);

$this->menu=array(
	array('label'=>'List Estatus', 'url'=>array('index')),
	array('label'=>'Create Estatus', 'url'=>array('create')),
	array('label'=>'Update Estatus', 'url'=>array('update', 'id'=>$model->ID_ESTA)),
	array('label'=>'Delete Estatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ESTA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estatus', 'url'=>array('admin')),
);
?>

<h1>View Estatus #<?php echo $model->ID_ESTA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ESTA',
		'DESCRIPCION',
	),
)); ?>
