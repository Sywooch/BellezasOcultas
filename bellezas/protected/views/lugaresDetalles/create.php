<?php
/* @var $this LugaresDetallesController */
/* @var $model LugaresDetalles */

$this->breadcrumbs=array(
	'Lugares Detalles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LugaresDetalles', 'url'=>array('index')),
	array('label'=>'Manage LugaresDetalles', 'url'=>array('admin')),
);
?>

<h1>Create LugaresDetalles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>