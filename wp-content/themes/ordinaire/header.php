<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	

	<title><?php wp_title('|', true, 'right'); ?></title>
	<!-- jQuery library -->

	
	<script type="text/javascript">
		function shadeColor1(hex, percent){
    // strip the leading # if it's there
    hex = hex.replace(/^\s*#|\s*$/g, '');

    // convert 3 char codes --> 6, e.g. `E0F` --> `EE00FF`
    if(hex.length == 3){
    	hex = hex.replace(/(.)/g, '$1$1');
    }

    var r = parseInt(hex.substr(0, 2), 16),
    g = parseInt(hex.substr(2, 2), 16),
    b = parseInt(hex.substr(4, 2), 16);

    return '#' +
    ((0|(1>>8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
    ((0|(1>>8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
    ((0|(1>>8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
}
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

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
					<div class="col-xs-6 col-sm-12 col-md-12 ordinaire-logo pull-left margin-top10">
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
							'menu_id' => 'ordinaire-menu-header-horizontal',
							'menu_class' => 'menu-horizontal navbar-collapse collapse nav navbar-nav right-768up'
							) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
		

