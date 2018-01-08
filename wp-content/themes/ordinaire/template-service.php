<?php /* Template Name: template-service */ ?>
<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#4FD5EE': get_post_custom_values("page-background")[0]; ?>
	<?php $page_font = get_post_custom_values("header-font")[0] == ""? '#fff': get_post_custom_values("header-font")[0]; ?>
	.header-background-custom{
		background-color: <?php echo $page_background; ?>;
		color: <?php echo $page_font; ?>;
	}
	.ordinaire-header-background{
		background-color: <?php echo $page_background; ?>;
	}
	.ordinaire-menu-horizontal li a{
		color: <?php echo $page_font; ?>;	
	}
	.ordinaire-footer,.ordinaire-footer a.ordinaire-infobeans-footer{
		background-color: <?php echo $page_background; ?>;
		color: <?php echo $page_font; ?>;
	}
</style> 
<script type="text/javascript">
	(function($){
		var ordinaire_colorx = shadeColor1("<?php echo $page_background; ?>",91);
		var ordinaire_element ="<style>.ordinaire-menu-horizontal li a:hover{"+
		"background-color: "+ ordinaire_colorx +";"+
		"box-shadow: 0px 0px 13px 0px "+ ordinaire_colorx +" inset;" +
		"}"+
		".current-menu-item{"+
		"background-color: "+ ordinaire_colorx+
		"}" +
		"</style>";
		$("head").append(ordinaire_element);
	}(jQuery));
</script>
<div class="ordinaire-serviceus-header">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 class="ordinaire-about-text text-trans">services</h3>
				<h2 class="ordinaire-we-text"><?php echo get_post_custom_values("title_page")[0] == ""? ' We Focus on UI and UX': get_post_custom_values("title_page")[0]; ?></h2>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid pos-relative">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ordinaire-work-div">
			How Do We Work?
		</div>
	</div>
	<div class="service-left hidden-xs"></div>
	<div class="service-right hidden-xs"></div>
	<div class="container">
		<div class="row margintop40">
			<?php $args = array( 'post_type' => 'services' ); $loop = new WP_Query( $args );?>
			<?php $ab = wp_count_posts( "services" ); ?>
			<?php if ( $ab->publish == 0 ) :?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="marginleft10 resp-text-center">Definition</p>
					<div class="ordinaire-image-box ordinaire-borderbox">
						<span class="ordinaire-ico-services"><i class="fa fa-book fa-5x" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="marginleft10 resp-text-center">Conception</p>
					<div class="ordinaire-image-box">
						<span class="ordinaire-ico-services"><i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="resp-text-center">Development</p>
					<div class="ordinaire-image-box">
						<span class="ordinaire-ico-services"><i class="fa fa-desktop fa-5x" aria-hidden="true"></i></span>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="block-title resp-text-center">Research</p>
					<div class="ordinaire-image-box border-color">
						<span class="ordinaire-ico-services"><i class="fa fa-search fa-5x" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="block-title resp-text-center">Selection</p>
					<div class="ordinaire-image-box ">
						<span class="ordinaire-ico-services"><i class="fa fa-hand-pointer-o fa-5x" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="block-title resp-text-center">Delivery</p>
					<div class="ordinaire-image-box ">
						<span class="ordinaire-ico-services"><i class="fa fa-cogs fa-5x" aria-hidden="true"></i></span>
					</div>
				</div>
			<?php endif; ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<p class="block-title resp-text-center"><?php the_title(); ?></p>
					<div class="ordinaire-image-box ">
						<span class="ordinaire-ico-services"><i class="<?php the_content(); ?>" aria-hidden="true"></i></span>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="row margin40 bottom-zero">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ordinaire-work-div">
			Services We Offer
		</div>
	</div>
	<div class="container">	
		<?php $args = array( 'post_type' => 'servicestab' ); $loop = new WP_Query( $args );?>
		<?php $ab = wp_count_posts( "servicestab" ); ?>
		<?php if ( $ab->publish == 0 ) :?>
			<div class="nav nav-tabs responsive owl-carousel owl-theme service-tab">
				<div class="tab-button item"><a role="tab" data-toggle="tab" class="deco-none red-class" href="#resp-tab1"> Heading 1</a></div>
				<div class="tab-button item"><a role="tab" data-toggle="tab" href="#resp-tab2">Heading 2</a></div>
				<div class="tab-button item"><a role="tab" data-toggle="tab" class="deco-none" href="#resp-tab3"> Heading 3</a></div>
			</div>

			<div class="tab-content responsive col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 ordinaire-tab-box">
				<div class="tab-pane active" id="resp-tab1">
					<h3>Add your Content here</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150s0, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="tab-pane" id="resp-tab2">
					<h3>Add your Content here</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="tab-pane" id="resp-tab3">
					<h3>Add your Content here</h3>
					<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<div class="container">
		<div class="row">
			<div id="tab-services">
				<div class="nav nav-tabs responsive owl-carousel owl-theme" role="tablist">
					<?php $loop = new WP_Query( array( 'post_type' => 'servicestab', 'posts_per_page' => -1 ) ); ?>
					<?php 
					$counter = 0;
					while ( $loop->have_posts() ) : $loop->the_post(); 
					$counter++;
					?>
					<div role="presentation" class="tab-button item post-<?php the_ID(); ?> <?php echo ($counter == 1) ? 'active' : ''?> head-class"><a href="#post-<?php the_ID(); ?>" aria-controls="home" role="tab" data-toggle="tab" class="deco-none red-class"><?php the_title();?></a></div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
			<div class="tab-content">
				<?php
				$counter = 0;
				$loop = new WP_Query( array( 'post_type' => 'servicestab', 'posts_per_page' => -1 ) );
				while ( $loop->have_posts() ) : $loop->the_post(); 
				$counter++;
				?>
				
				<div role="tabpanel" class="tab-pane responsive  col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 ordinaire-tab-box tab-content <?php echo ($counter == 1) ? 'active' : ''?>" id="post-<?php the_ID(); ?>">
					<?php the_content();?>

				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
</div>
</div>

<script type="text/javascript">
	(function($){
		$('.owl-carousel').owlCarousel({
			loop:false,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:3
				}
			}
		})
	}(jQuery));
</script>
<?php get_footer(); ?>