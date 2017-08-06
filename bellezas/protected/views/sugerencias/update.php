<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerenciases'=>array('index'),
	$model->ID_SUGER=>array('view','id'=>$model->ID_SUGER),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sugerencias', 'url'=>array('index')),
	array('label'=>'Create Sugerencias', 'url'=>array('create')),
	array('label'=>'View Sugerencias', 'url'=>array('view', 'id'=>$model->ID_SUGER)),
	array('label'=>'Manage Sugerencias', 'url'=>array('admin')),
);
?>

<h1>Update Sugerencias <?php echo $model->ID_SUGER; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>