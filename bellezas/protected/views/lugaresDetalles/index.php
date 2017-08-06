<?php
/* @var $this LugaresDetallesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lugares Detalles',
);

$this->menu=array(
	array('label'=>'Create LugaresDetalles', 'url'=>array('create')),
	array('label'=>'Manage LugaresDetalles', 'url'=>array('admin')),
);
?>

<h1>Lugares Detalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
