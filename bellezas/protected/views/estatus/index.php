<?php
/* @var $this EstatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estatuses',
);

$this->menu=array(
	array('label'=>'Create Estatus', 'url'=>array('create')),
	array('label'=>'Manage Estatus', 'url'=>array('admin')),
);
?>

<h1>Estatuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
