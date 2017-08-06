<?php
/* @var $this UbicacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ubicaciones',
);

$this->menu=array(
	array('label'=>'Create Ubicaciones', 'url'=>array('create')),
	array('label'=>'Manage Ubicaciones', 'url'=>array('admin')),
);
?>

<h1>Ubicaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
