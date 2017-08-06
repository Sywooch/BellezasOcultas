<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->ID_COMEN=>array('view','id'=>$model->ID_COMEN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comentarios', 'url'=>array('index')),
	array('label'=>'Create Comentarios', 'url'=>array('create')),
	array('label'=>'View Comentarios', 'url'=>array('view', 'id'=>$model->ID_COMEN)),
	array('label'=>'Manage Comentarios', 'url'=>array('admin')),
);
?>

<h1>Update Comentarios <?php echo $model->ID_COMEN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>