<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#0ABBB5': get_post_custom_values("page-background")[0]; ?>
	<?php $page_font = get_post_custom_values("header-font")[0] == ""? '#fff': get_post_custom_values("header-font")[0]; ?>
	.header-background-custom{
		background-color: <?php echo $page_background; ?>;
		color: <?php echo $page_font; ?>;
	}
	.header-background{
		background-color: <?php echo $page_background; ?>;
	}
	.menu-horizontal li a{
		color: <?php echo $page_font; ?>;	
	}
	.footer{
		background-color: <?php echo $page_background; ?>;
		color: <?php echo $page_font; ?>;
	}
</style>
<script type="text/javascript">
	var colorx = shadeColor1("<?php echo $page_background; ?>",68);
	var element ="<style>.menu-horizontal li a:hover{"+
	"background-color: "+ colorx +";"+ 
	"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}</style>";
	$("head").append(element);
</script>
<!-- default slider if no slider block has been added by the admin -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0" id="home">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center divheight" id="divtest">
				<p class="home-text"  style="margin-top: 250px;"><span class="font48">Thème ordinaire</span>
					<p class="home-text">
						Welcome to the world of WOW
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-4 col-md-4 pull-right b-block">
				<h4 class="text-center"><b>Production</b></h4>
				<p class="pull-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="col-lg-4 col-md-4 pull-right b-block">
				<h4 class="text-center"><b>Design</b></h4>
				<p class="pull-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div> -->
			
			<?php
			while ( have_posts() ) : the_post(); ?> 
			<div class="col-lg-12 col-md-12 b-block home-background">
				<?php the_content(); ?> <!-- Page Content -->
			</div><!-- .entry-content-page -->

			<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>
</div>
</div>

<div class="container-fluid home-background">
	<div class="row">
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<?php $args = array( 'post_type' => 'slider' ); $loop = new WP_Query( $args );?>
			<?php $ab = wp_count_posts( "slider" ); ?>
			<?php if ( $ab->publish == 0 ) :?>
				<div class="carousel-inner">
					<div class="item active img-back default-img parallex-slider">
						<div class="carousel-caption">
							<h3 class="font36">Los Angeles</h3>
							<p class="font26">LA is always so much fun! LA is always so much fun! LA is always so much fun! LA is always so much fun! LA is always so much fun! LA is always so much fun!</p>
						</div>
					</div>

					<div class="item img-back default-img parallex-slider">
						<div class="carousel-caption">
							<h3 class="font36">Chicago</h3>
							<p class="font26">Thank you, Chicago! LA is always so much fun! LA is always so much fun!</p>
						</div>
					</div>

					<div class="item img-back default-img parallex-slider">
						<div class="carousel-caption">
							<h3 class="font36">New York</h3>
							<p class="font26">We love the Big Apple! LA is always so much fun! LA is always so much fun!</p>
						</div>
					</div>

				</div>
			<?php endif; ?>

			<!--dynamic slider slides posted by admin -->
			<div class="carousel-inner" role="listbox">
				<?php $slider = get_posts(array('post_type' => 'slider','order'=> 'ASC')); ?>
				<?php $count = 0; ?>
				<?php foreach($slider as $slide): ?>

					<div class="item  img-back parallex-slider <?php echo ($count == 0) ? 'active' : ''; ?>"
						style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?> )">

						<div class="carousel-caption">
							<h3 class="font36"><?php  echo $slider[$count]->post_title; ?></h3>
							<p class="font26"><?php  echo $slider[$count]->post_content; ?></p>
						</div>
					</div>
					<?php $count++; ?>
				<?php endforeach; ?>
			</div>

			<!-- left and right arrows control -->
			<a class="left carousel-control arrows" href="#mycarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control arrows" href="#mycarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<?php $args = array( 'post_type' => 'homeblock','order'=> 'ASC'); $loop = new WP_Query( $args );?>
	<?php $ab = wp_count_posts( "homeblock" ); ?>
	<?php if ( $ab->publish == 0 ) :?>
		<div class="container home-background">
			<div class="row">
				<div class="col-lg-4 col-md-4 b-head">
					<h2><b>OUR CONCERN</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 b-block">
					<p class="pull-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 parallax-2">
			</div>
		</div>
	<?php endif; ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="container home-background">
			<div class="row">
				<div class="col-lg-4 col-md-4 b-head">
					<h2><b><?php the_title(); ?></b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 b-block">
					<p class="pull-left"><?php the_content(); ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 parallax-1
			" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		</div>
	</div>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>

