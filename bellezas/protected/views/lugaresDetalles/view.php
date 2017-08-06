<?php
/* @var $this LugaresDetallesController */
/* @var $model LugaresDetalles */

$this->breadcrumbs=array(
	'Lugares Detalles'=>array('index'),
	$model->ID_LUGAR_DET,
);

$this->menu=array(
	array('label'=>'List LugaresDetalles', 'url'=>array('index')),
	array('label'=>'Create LugaresDetalles', 'url'=>array('create')),
	array('label'=>'Update LugaresDetalles', 'url'=>array('update', 'id'=>$model->ID_LUGAR_DET)),
	array('label'=>'Delete LugaresDetalles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_LUGAR_DET),'confirm'=>'Estas seguro de que deseas borrar el registro ?')),
	array('label'=>'Manage LugaresDetalles', 'url'=>array('admin')),
);
?>

<h1>View LugaresDetalles <?php echo $model->ID_LUGAR_DET; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_LUGAR_DET',
		'ID_LUGAR',
		'ACCESO_DIS',
		'EMBARAZADA',
		'MENOR_EDAD',
	),
)); ?>
