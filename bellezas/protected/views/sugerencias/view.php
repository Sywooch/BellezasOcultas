<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerenciases'=>array('index'),
	$model->ID_SUGER,
);

$this->menu=array(
	array('label'=>'List Sugerencias', 'url'=>array('index')),
	array('label'=>'Create Sugerencias', 'url'=>array('create')),
	array('label'=>'Update Sugerencias', 'url'=>array('update', 'id'=>$model->ID_SUGER)),
	array('label'=>'Delete Sugerencias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_SUGER),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sugerencias', 'url'=>array('admin')),
);
?>

<h1>View Sugerencias #<?php echo $model->ID_SUGER; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_SUGER',
		'ID_USUARIO',
		'ID_ESTA',
		'FECHA',
		'NOMBRE',
		'DESCRIPCION',
		'UBICACION',
		'FOTO',
	),
)); ?>
