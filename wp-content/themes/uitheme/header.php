<!DOCTYPE html> 
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- font awesome -->
	<script src="https://use.fontawesome.com/8793d315f5.js"></script>


	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/222599/canvas-pointer.js?v=20150516"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/custom.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.theme.default.css">
	
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/responsive-tabs.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>


</head>
<body>
	<?php 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
	<header>
		
		<div class="header-background">
<!-- <?php echo is_front_page()?'home-top-header':''?> -->
			<div class="container-fluid">
				<div class="col-lg-3 col-md-3 col-sm-2 col-xs-4">
					<div class="logo pull-left">

						<!-- <a href="JavaScript:void(0)"><img src="https://unity3d.com/profiles/unity3d/themes/unity/images/company/brand/logos/primary/unity-logo.png"></a> -->
							<a href="<?php echo get_site_url(); ?>"><img alt="logo" src="<?php echo $image[0] == null ? bloginfo('template_directory').'/assets/images/logo.png'  : $image[0] ; ?>"></a>


					</div>
					<div class="col-xs-6 hidden-lg hidden-md hidden-sm pull-right">
						<button type="button" class="navbar-toggle button-toggle-menu " id="toggle-btn" data-toggle="collapse" data-target="#menu-header-horizontal"> 
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>

					</div>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-10 col-xs-8">

					<nav class="header-menu">
						<!-- <?php wp_nav_menu( array('menu' => 'header-horizontal',
							'menu_id' => 'menu-header-horizontal',
							'menu_class' => 'menu-horizontal navbar-collapse collapse nav navbar-nav right-768up'
							)); ?> -->

						<?php 
						wp_nav_menu( array( 'theme_location' => 'header-menu',
							'menu_id' => 'menu-header-horizontal',
							'menu_class' => 'menu-horizontal navbar-collapse collapse nav navbar-nav right-768up'
							) );
							?>

							<!-- <ul class="navbar-collapse collapse nav navbar-nav right-768up nav-ul" id="navbar-header">
								<li class="horizontal-nav  nav-li box">
									<a href="JavaScript:void(0);" class="box-inner">Home</a>
								</li>
								<li class="horizontal-nav  nav-li box">
									<a href="about-us.php" class="box-inner">About Us</a>
								</li>
								<li class="horizontal-nav  nav-li box">
									<a href="JavaScript:void(0);" class="box-inner">Services</a>
								</li>
								<li class="horizontal-nav  nav-li box">
									<a href="JavaScript:void(0);" class="box-inner">Portfolio</a>
								</li>
							</ul> -->
						</nav>

					</div>
				</div>
			</div>

			<!-- <div class="scroll  <?php echo is_front_page()?'home-side-header':'hidden'?>">
				<div class="logo1">
					<a href="JavaScript:void(0)"><img src="<?php echo $image[0]; ?>"></a>
				</div>
				<nav class="header-menu">
					<?php 
					wp_nav_menu( array( 'theme_location' => 'header-menu'
						) );
						?>
					</nav>
				<ul class="navigation-hide-onscroll">
					<li class="v-nav">
						<strike><a href="JavaScript:void(0);">Home</a></strike>
					</li>
					<li class="v-nav">
						<a href="JavaScript:void(0);">About Us</a>
					</li>
					<li class="v-nav">
						<a href="JavaScript:void(0);">Services</a>
					</li>
					<li class="v-nav">
						<a href="JavaScript:void(0);">Portfolio</a>
					</li>
				</ul>
			</div> -->

		</header>

