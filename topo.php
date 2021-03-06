<!-- Header -->
<header class="header d-flex flex-row justify-content-end align-items-center">

	<!-- Logo -->
	<div class="logo_container mr-auto">
		<div class="logo">
			<a href="#"><span>A</span>Accounting<span>ms</span></a>
		</div>
	</div>

	<!-- Main Navigation -->
	<nav class="main_nav justify-self-end">
		<ul class="nav_items">
			<li class="active"><a href="<?php echo $raiz; ?>"><span>home</span></a></li>
			<li><a href="<?php echo $servicos; ?>"><span>serviços</span></a></li>
			<li><a href="<?php echo $principios; ?>"><span>princípios</span></a></li>
			<li><a href="<?php echo $contato; ?>"><span>contato</span></a></li>
		</ul>
	</nav>

	<!-- Hamburger -->
	<div class="hamburger_container">
		<span class="hamburger_text">Menu</span>
		<span class="hamburger_icon"></span>
	</div>

</header>

<!-- Menu -->
<div class="fs_menu_overlay"></div>
<div class="fs_menu_container">
	<div class="fs_menu_shapes"><img src="images/menu_shapes.png" alt=""></div>
	<nav class="fs_menu_nav">
		<ul class="fs_menu_list">
			<li><a href="<?php echo $raiz; ?>"><span><span>H</span>Home</span></a></li>
			<li><a href="<?php echo $servicos; ?>"><span><span>S</span>Serviços</span></a></li>
			<li><a href="<?php echo $principios; ?>"><span><span>E</span>Princípios</span></a></li>
			<li><a href="<?php echo $contato; ?>"><span><span>C</span>Contato</span></a></li>
		</ul>
	</nav>
	<div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="fs_social">
			<li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f trans_300"></i></a></li>
			<li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter trans_300"></i></a></li>
			<li><a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in trans_300"></i></a></li>
		</ul>
	</div>
</div>