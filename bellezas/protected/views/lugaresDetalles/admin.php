<?php
/* @var $this LugaresDetallesController */
/* @var $model LugaresDetalles */

$this->breadcrumbs=array(
	'Lugares Detalles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LugaresDetalles', 'url'=>array('index')),
	array('label'=>'Create LugaresDetalles', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lugares-detalles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lugares Detalles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lugares-detalles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_LUGAR_DET',
		'ID_LUGAR',
		'ACCESO_DIS',
		'EMBARAZADA',
		'MENOR_EDAD',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
