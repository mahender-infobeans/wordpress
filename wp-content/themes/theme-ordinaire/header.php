<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
<title><?php wp_title('|', true, 'right'); ?></title>
	<!-- jQuery library -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
	<!-- font awesome -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/fa.js"></script>

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/owl.theme.default.css">
	
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/masonry.pkgd.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/script.js"></script>
<?php wp_head(); ?>
</head>
<body class=" <?php body_class( $class ); ?>">
<?php if ( ! isset( $content_width ) ) $content_width = 900; ?>

	<?php 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
	<header>
		
		<div class="header-background">
<!-- <?php echo is_front_page()?'home-top-header':''?> -->
			<div class="container-fluid">
				<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 padding15">
					<div class="col-xs-6 col-sm-12 col-md-12 logo pull-left margin-top10">
							<a href="<?php echo get_site_url(); ?>"><img alt="logo" src="<?php echo $image[0] == null ? esc_url( get_template_directory_uri() ).'/assets/images/logo.png'  : $image[0] ; ?>"></a>
					</div>
					<div class="col-xs-6 hidden-lg hidden-md hidden-sm pull-right">
						<button type="button" class="navbar-toggle button-toggle-menu " id="toggle-btn" data-toggle="collapse" data-target="#menu-header-horizontal"> 
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
					</div>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">
					<nav class="header-menu">
					
						<?php 
						wp_nav_menu( array( 'theme_location' => 'header-menu',
							'menu_id' => 'menu-header-horizontal',
							'menu_class' => 'menu-horizontal navbar-collapse collapse nav navbar-nav right-768up'
							) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
		 

