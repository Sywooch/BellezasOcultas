<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->ID_COMEN,
);

$this->menu=array(
	array('label'=>'List Comentarios', 'url'=>array('index')),
	array('label'=>'Create Comentarios', 'url'=>array('create')),
	array('label'=>'Update Comentarios', 'url'=>array('update', 'id'=>$model->ID_COMEN)),
	array('label'=>'Delete Comentarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_COMEN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comentarios', 'url'=>array('admin')),
);
?>

<h1>View Comentarios #<?php echo $model->ID_COMEN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_COMEN',
		'ID_LUGAR',
		'ID_USUARIO',
		'DESCRIPCION_COM',
	),
)); ?>
