<?php
/* @var $this TiposUsuariosController */
/* @var $model TiposUsuarios */

$this->breadcrumbs=array(
	'Tipos Usuarioses'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposUsuarios', 'url'=>array('index')),
	array('label'=>'Create TiposUsuarios', 'url'=>array('create')),
	array('label'=>'View TiposUsuarios', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TiposUsuarios', 'url'=>array('admin')),
);
?>

<h1>Update TiposUsuarios <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>