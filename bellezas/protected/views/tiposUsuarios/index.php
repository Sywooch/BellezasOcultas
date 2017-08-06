<?php
/* @var $this TiposUsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Usuarioses',
);

$this->menu=array(
	array('label'=>'Create TiposUsuarios', 'url'=>array('create')),
	array('label'=>'Manage TiposUsuarios', 'url'=>array('admin')),
);
?>

<h1>Tipos Usuarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
