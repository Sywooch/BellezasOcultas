<?php
/* @var $this UbicacionesController */
/* @var $model Ubicaciones */

$this->breadcrumbs=array(
	'Ubicaciones'=>array('index'),
	$model->ID_UBICACION=>array('view','id'=>$model->ID_UBICACION),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ubicaciones', 'url'=>array('index')),
	array('label'=>'Create Ubicaciones', 'url'=>array('create')),
	array('label'=>'View Ubicaciones', 'url'=>array('view', 'id'=>$model->ID_UBICACION)),
	array('label'=>'Manage Ubicaciones', 'url'=>array('admin')),
);
?>

<h1>Update Ubicaciones <?php echo $model->ID_UBICACION; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>