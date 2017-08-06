<?php
/* @var $this TiposUsuariosController */
/* @var $model TiposUsuarios */

$this->breadcrumbs=array(
	'Tipos Usuarioses'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TiposUsuarios', 'url'=>array('index')),
	array('label'=>'Create TiposUsuarios', 'url'=>array('create')),
	array('label'=>'Update TiposUsuarios', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TiposUsuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposUsuarios', 'url'=>array('admin')),
);
?>

<h1>Tipo de Usuario: <?php echo $model->TIPO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'TIPO',
	),
)); ?>
