<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#ff9999': get_post_custom_values("page-background")[0]; ?>
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
	var colorx = shadeColor1("<?php echo $page_background; ?>",30);
	console.log(colorx);
	var element ="<style>.menu-horizontal li a:hover{"+
	"background-color: "+ colorx +";"+
	"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}</style>";
	$("head").append(element);

	
</script>

<style type="text/css">
	/*Masonry css start	*/
	/* ---- grid ---- */

	.grid {
		background: #EEE;
		/* center */
		margin: 15px auto;
		padding: 15px 15px;
	}

	/* clearfix */
	.grid:after {
		content: '';
		display: block;
		clear: both;
	}

	/* ---- grid-item ---- */

	.grid-item {
		width: 250px;
		min-height: 120px;
		float: left;
		/*background: #D26;*/
		/*border: 2px solid #333;*/
		/*border-color: hsla(0, 0%, 0%, 0.5);*/
		border-radius: 5px;
	}
	/*Masonry css end */
</style>

<div class="container">
	<!-- start of Masonry -->
	<div class="grid">
		<?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=-1' . '&paged='.$paged);
	// $wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="grid-item">
			<div class="abc">
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img class="blog-img" src="<?php echo the_post_thumbnail_url(); ?>" alt="blog-image" />
				</div>
				<?php }  ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date-col font16">
					<p class="text-center"> <?php the_date(); ?></p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<strong>
						<h2 class="text-center">
							<a href="<?php the_permalink(); ?>" class="blog-link" title="Read more"><?php the_title(); ?></a>
						</h2></strong>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margintop10 font16">
						<p class="text-center">Posted By: <span class="capitalize-blg"><?php the_author(); ?></span></p>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center col-lg-offset-2 col-md-offset-2">
						<button type="button" class="btn btn-lg btn-block continue-button"><a class="blog-link-btn" href="<?php the_permalink(); ?>" title="Read more">Continue Reading</a></button>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>


	<!-- end of Masonry -->



















	<!-- this is start -->
	

	<!-- <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 blog-wrapper">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<?php //if ( has_post_thumbnail() ) { ?>
			<img class="blog-img" src="<?php //echo the_post_thumbnail_url(); ?>" alt="blog-image" />
			<?php // }  ?>
			
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date-col font16">
			<p class="text-center"> <?php //the_date(); ?></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<strong>
				<h2 class="text-center">
					<a href="<?php //the_permalink(); ?>" class="blog-link" title="Read more">
					// <?php //the_title(); ?></a>
				</h2></strong>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margintop10 font16">
				<p class="text-center">Posted By: <span class="capitalize-blg"><?php //the_author(); ?></span></p>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<p><?php //the_excerpt(); ?></p>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center col-lg-offset-2 col-md-offset-2">
				<button type="button" class="btn btn-lg btn-block continue-button"><a class="blog-link-btn" href="<?php //the_permalink(); ?>" title="Read more">Continue Reading</a></button>
			</div>
		</div> -->



		<!-- <?php //endwhile; ?> -->

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

		<!-- this is end -->	
	</div>



	<?php get_footer(); ?>
