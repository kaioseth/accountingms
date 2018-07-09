<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once('paths.php'); ?>
	<head>
		<title>Accounting MS - Contabilidade</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Accounting MS - Mario Martins Contabilidade">

		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>bootstrap4/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>padrao.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>responsive.css">

		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>topo.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>home.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>sobre.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>clientes.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>contato.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>rodape.css">
	</head>

	<body>
		<div class="super_container">
			<section>
				<?php include_once('topo.php') ?>
			</section>

			<section id="initial">
				<?php include_once('home.php'); ?>
			</section>

			<section>
				<?php include_once('sobre.php'); ?>
			</section>

			<!--<section id="clientes">
				<?php //include_once('clientes.php'); ?>
			</section>-->

			<section id="contato">
				<?php include_once('contato.php'); ?>
			</section>

			<section id="rodape">
				<?php include_once('rodape.php'); ?>
			</section>
		</div>

		<script src="<?php echo $js; ?>jquery-3.2.1.min.js"></script>
		<script src="<?php echo $estilo; ?>bootstrap4/popper.js"></script>
		<script src="<?php echo $estilo; ?>bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/greensock/TweenMax.min.js"></script>
		<script src="plugins/greensock/TimelineMax.min.js"></script>
		<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="plugins/greensock/animation.gsap.min.js"></script>
		<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
		<script src="plugins/progressbar/progressbar.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="<?php echo $js; ?>custom.js"></script>
	</body>

</html>