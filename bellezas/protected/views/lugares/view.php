<?php
/* @var $this LugaresController */
/* @var $model Lugares */

$this->breadcrumbs=array(
	'Lugares'=>array('index'),
	$model->ID_LUGAR,
);

$this->menu=array(
	array('label'=>'List Lugares', 'url'=>array('index')),
	array('label'=>'Create Lugares', 'url'=>array('create')),
	array('label'=>'Update Lugares', 'url'=>array('update', 'id'=>$model->ID_LUGAR)),
	array('label'=>'Delete Lugares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_LUGAR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lugares', 'url'=>array('admin')),
);
?>

<h1>Lugar: <?php echo $model->NOMBRE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_LUGAR',
		'ID_USUARIO',
		'ID_CATEGORIA',
		'NOMBRE',
		'GRATUITO',
		'PRECIO_APROX',
		'DIRECCION',
		'CONCACTO',
		'TELEFONO',
		'E_MAIL',
		'ACTIVOS',
		'DESCRIPCION',
	),
)); ?>
