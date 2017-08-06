<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<!--<title><?php //echo CHtml::encode($this->pageTitle); ?></title>-->
	<title>Bellezas</title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?>Bellezas</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Usuarios', 'url'=>array('/usuarios/index')),
				array('label'=>'Tipos de usuarios', 'url'=>array('/tiposUsuarios/index', 'view'=>'about')),
				array('label'=>'Ubicaciones', 'url'=>array('/Ubicaciones/index')),
				array('label'=>'sugerencias', 'url'=>array('/sugerencias/index')),
                array('label'=>'Tipo de acceso', 'url'=>array('/lugaresdetalles/index')),
                array('label'=>'lugares', 'url'=>array('/lugares/index')),
                array('label'=>'fotos', 'url'=>array('/fotos/index')),
                array('label'=>'estatus', 'url'=>array('/estatus/index')),
                array('label'=>'comentarios', 'url'=>array('/comentarios/index')),
                array('label'=>'categorias', 'url'=>array('/categorias/index')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<!--<div id="footer">
		Copyright &copy; <?php //echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
