<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bellezas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl; ?>/assets/css/main.css" />
		<link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl; ?>/assets/css/mystyle.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo-->
							<div class="logo" >
								<h1 ><a href="<?php echo yii::app()->theme->baseUrl; ?>/views/layouts/main.php">Bellezas</a></h1>
								<span>De México</span>
							</div>

						<!-- Nav -->

							<nav id="nav" >
								<!--<ul>
									<li class="current"><a href="<?php //echo yii::app()->theme->baseUrl; ?>/views/layouts/index.html">Bienvenido</a></li>
									<li><a href="#">usuario</a></li>
									<li><a href="#">Tipos de usuario</a></li>
									<li><a href="#">Categorias</a></li>


									<li>
										<a href="#">Lugares</a>-->
										<!--Opciones despegable
										<ul>
											<li><a href="#">Ubicaciones</a></li>
											<li><a href="#">Sugerencias</a></li>
											<li><a href="#">Tipo de acceso</a></li>
											<li><a href="#">Fotos</a></li>
											<li><a href="#">Estatus</a></li>
											<li><a href="#">Comentarios</a></li>
										</ul>
										<li><a href="#">Login</a></li>-->

										<?php $this->widget('zii.widgets.CMenu',array(
											'items'=>array(
												array('label'=>'Usuarios', 'url'=>array('/usuarios/index')),
												array('label'=>'Tipos de usuarios', 'url'=>array('/tiposUsuarios/index', 'view'=>'about')),
												array('label'=>'categorias', 'url'=>array('/categorias/index')),
												array('label'=>'lugares','url'=>array('/lugares/index'),
															'items'=>array(
																array('label'=>'Ubicaciones', 'url'=>array('/Ubicaciones/index')),
																array('label'=>'sugerencias', 'url'=>array('/sugerencias/index')),
																				array('label'=>'Tipo de acceso', 'url'=>array('/lugaresdetalles/index')),
																				array('label'=>'fotos', 'url'=>array('/fotos/index')),
																				array('label'=>'estatus', 'url'=>array('/estatus/index')),
																				array('label'=>'comentarios', 'url'=>array('/comentarios/index')),
															),),
																array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
																array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
											),
										));?>
							</nav>

					</header>
				</div>

			<!-- Banner
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u 12u(medium)">
								<h2>Hi. This is Verti.</h2>
								<p>It's a free responsive site template by HTML5 UP</p>
							</div>
							<div class="5u 12u(medium)">
								<ul>
									<li><a href="#" class="button big icon fa-arrow-circle-right">Ok let's go</a></li>
									<li><a href="#" class="button alt big icon fa-question-circle">More info</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(medium)">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h1>Bellezas</h1>
											<div class="grid">
												<div class="row 50%">
												<div class="6u"><a href="#" class="image fit"><img src="<?php echo yii::app()->theme->baseUrl; ?>/images/pic01.png" alt="" /></a></div>
												</div>
											</div>

										</section>
									</div>

							</div>
							<div class="8u 12u(medium) important(medium)">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<?php if(isset($this->breadcrumbs)):?>
												<?php $this->widget('zii.widgets.CBreadcrumbs', array(
													'links'=>$this->breadcrumbs,
												)); ?><!-- breadcrumbs -->
											<?php endif?>

											<?php echo $content; ?>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Features -->
					<div id="features-wrapper">
						<div class="container">
							<div class="row">
								<div class="4u 12u(medium)">

									<!-- Box -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?php echo yii::app()->theme->baseUrl; ?>/images/pic01.jpg" alt="" /></a>
											<div class="inner">
												<header>
													<h2>Put something here</h2>
													<p>Maybe here as well I think</p>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
											</div>
										</section>

								</div>
								<div class="4u 12u(medium)">

									<!-- Box -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?php echo yii::app()->theme->baseUrl; ?>/images/pic02.jpg" alt="" /></a>
											<div class="inner">
												<header>
													<h2>An interesting title</h2>
													<p>This is also an interesting subtitle</p>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
											</div>
										</section>

								</div>
								<div class="4u 12u(medium)">

									<!-- Box -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?php echo yii::app()->theme->baseUrl; ?>/images/pic03.jpg" alt="" /></a>
											<div class="inner">
												<header>
													<h2>Oh, and finally ...</h2>
													<p>Here's another intriguing subtitle</p>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
											</div>
										</section>

								</div>
							</div>
						</div>
					</div>
			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="3u 6u(medium) 12u$(small)">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="3u 6u$(medium) 12u$(small)">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="3u 6u(medium) 12u$(small)">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="3u 6u$(medium) 12u$(small)">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										<p>1234 Fictional Road<br />
										Nashville, TN 00000<br />
										(800) 555-0000</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>



		<!-- Scripts -->

			<script src="<?php echo yii::app()->theme->baseUrl; ?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo yii::app()->theme->baseUrl; ?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo yii::app()->theme->baseUrl; ?>/assets/js/skel.min.js"></script>
			<script src="<?php echo yii::app()->theme->baseUrl; ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo yii::app()->theme->baseUrl; ?>/assets/js/main.js"></script>

	</body>
</html>
