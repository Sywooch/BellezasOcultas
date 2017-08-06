<?php
/* @var $this LugaresDetallesController */
/* @var $model LugaresDetalles */

$this->breadcrumbs=array(
	'Lugares Detalles'=>array('index'),
	$model->ID_LUGAR_DET=>array('view','id'=>$model->ID_LUGAR_DET),
	'Delete',
);

$this->menu=array(
	array('label'=>'List LugaresDetalles', 'url'=>array('index')),
	array('label'=>'Create LugaresDetalles', 'url'=>array('create')),
	array('label'=>'View LugaresDetalles', 'url'=>array('view', 'id'=>$model->ID_LUGAR_DET)),
	array('label'=>'Manage LugaresDetalles', 'url'=>array('admin')),
);
?>

<h1>Update LugaresDetalles <?php echo $model->ID_LUGAR_DET; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>