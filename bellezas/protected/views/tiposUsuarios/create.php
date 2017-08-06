<?php
/* @var $this TiposUsuariosController */
/* @var $model TiposUsuarios */

$this->breadcrumbs=array(
	'Tipos Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposUsuarios', 'url'=>array('index')),
	array('label'=>'Manage TiposUsuarios', 'url'=>array('admin')),
);
?>

<h1>Create TiposUsuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>