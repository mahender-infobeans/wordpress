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

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

	<style type="text/css">
		
		/*animation here*/

		/*.box {
			position:relative;
			vertical-align: middle;
			color: #0b7;
			display: inline-block;
			height: 60px;
			line-height: 60px;
			text-align: center;
			transition: 0.5s;
			padding: 0 20px;
			cursor: pointer;
			border: 2px solid #0b7;
			-webkit-transition:0.5s;
		}

		.box:hover {
			border: 2px solid rgba(0,160,80,0);
			color: #FFF;
		}

		.box::before, .box::after {
			width: 100%;
			height:100%;
			z-index: 3;
			content:'';
			position: absolute;
			top:0;
			left:0;
			box-sizing: border-box;
			-webkit-transform: scale(0);
			transition: 0.5s;
		}

		.bar::before {
			border-bottom: 3px solid #FFF;
			border-left: 3px solid #FFF;
			-webkit-transform-origin: 100% 0%;
		}

		.bar::after {
			border-top: 3px solid #FFF;
			border-right: 3px solid #FFF;
			-webkit-transform-origin: 0% 100%;
		}

		.box:hover::after, .box:hover::before {
			-webkit-transform: scale(1);
		}

		.button-toggle-menu{
			background-color: #af97e7;
			color: #fff;
			margin-top: 15px;
		}
		.icon-bar{
			background-color: #fff;
			height: 2px;
			width: 100%;
		}*/
		

	</style>
</head>
<body>
	<?php if( !is_front_page() ) : ?>
		<header>
			<div class="header-background">

				<div class="container">
					<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
						<div class="logo pull-left">
							<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							?>
							<!-- <a href="JavaScript:void(0)"><img src="https://unity3d.com/profiles/unity3d/themes/unity/images/company/brand/logos/primary/unity-logo.png"></a> -->
							<a href="JavaScript:void(0)"><img src="<?php echo $image[0]; ?>"></a>
							
						</div>
						<button type="button" class="navbar-toggle button-toggle-menu" data-toggle="collapse" data-target="#navbar-header">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
						<nav class="header-menu">
							<ul class="navbar-collapse collapse nav navbar-nav right-768up nav-ul" id="navbar-header">
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
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		</header>
	<?php endif; ?>
	<section>
		<?php if( is_front_page() ) : ?>
			<div class="scroll">
				<div class="logo1">
					<a href="JavaScript:void(0)"><img src="<?php echo $image[0]; ?>"></a>
				</div>
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
			</div>
		<?php endif; ?>
	</section>
	<footer>

	</footer>
</body>
</html>