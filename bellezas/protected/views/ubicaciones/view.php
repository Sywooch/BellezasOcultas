<?php
/* @var $this UbicacionesController */
/* @var $model Ubicaciones */

$this->breadcrumbs=array(
	'Ubicaciones'=>array('index'),
	$model->ID_UBICACION,
);

$this->menu=array(
	array('label'=>'List Ubicaciones', 'url'=>array('index')),
	array('label'=>'Create Ubicaciones', 'url'=>array('create')),
	array('label'=>'Update Ubicaciones', 'url'=>array('update', 'id'=>$model->ID_UBICACION)),
	array('label'=>'Delete Ubicaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_UBICACION),'confirm'=>'¿Esta seguro de que quiere eliminar esta Ubicacion')),
	array('label'=>'Manage Ubicaciones', 'url'=>array('admin')),
);
?>

<h1>View Ubicaciones #<?php echo $model->ID_UBICACION; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_UBICACION',
		'ID_LUGAR',
		'LATITUD',
		'LONGITUD',

	),
));
$lat = $model["LATITUD"];
$lgn = $model["LONGITUD"];
$this->widget('ext.easymap.EasyMap', array(
    'id' => 'newmap',
    'latitude' => $lat,
    'longitude' => $lgn,
    'maptype' => 'ROADMAP', /*ROADMAP, SATELITE, HYBRID, TERRAIN*/
    'zoom' => '10',
    'width' => '600',
    'height' => '400',
    'markertitle' => '',
    'style' => array(
                    array(

                    'stylers'=>   array(array(
                         'hue'=>'#00ffe6', /*an RGB hex string*/
                         'saturation'=>'20', /*a floating point value between -100 and 100*/
                         ),),
                        ),

                        array(
                    'featureType'=>'road', /*road, road.local, landscape, landscape.natural*/
                    'elementType'=>'geometry', /*all, geometry, geometry.fill, geometry.stroke, labels, labels.icon, labels.text, labels.text.fill,     labels.text.stroke*/
                    'stylers'=>   array(array(
                         'lightness'=>'100', /*a floating point value between -100 and 100*/
                         'visibility'=>'simplified', /*on, off, or simplified*/
                          ),),
                        ),

                        array(
                    'featureType'=>'road',
                    'elementType'=>'labels',
                       'stylers'=>   array(array(
                                         'visibility'=>'off',

                          ),),
                        ),

                        ),



    ));?>
