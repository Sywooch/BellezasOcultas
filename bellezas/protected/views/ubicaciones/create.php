<?php
/* @var $this UbicacionesController */
/* @var $model Ubicaciones */

$this->breadcrumbs=array(
	'Ubicaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ubicaciones', 'url'=>array('index')),
	array('label'=>'Manage Ubicaciones', 'url'=>array('admin')),
);
?>

<h1>Create Ubicaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>