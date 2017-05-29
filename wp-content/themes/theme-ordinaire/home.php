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
	.footer,.footer a.infobeans-footer{
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
	"}"+
	".current-menu-item{"+
	"background-color: "+ colorx+
	"}" +
	"</style>";
	$("head").append(element);

	
</script>

<style type="text/css">
	/*Masonry css start	*/
	/* ---- grid ---- */

	.grid {
		background: #EEE;
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
		width: 350px;
		min-height: 120px;
		float: left;
	}
	/*Masonry css end */
</style>

<div class="container">
<p><?php the_tags(); ?></p>
	<!-- start of Masonry -->
	<div class="grid">
		<?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=-1' . '&paged='.$paged);
	// $wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="grid-item" >
			<div class="row masonry-body">
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 blog-image">
					<img class="blog-img" src="<?php echo the_post_thumbnail_url(); ?>" alt="blog-image" />
				</div>
				<?php }  ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 font16">
					<p class="text-center date-col"> <?php the_date(); ?></p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<strong>
						<h3 class="text-center capitalize-blg">
							<a href="<?php the_permalink(); ?>" class="blog-link" title="Read more"><?php the_title(); ?></a>
						</h3></strong>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 font16">
						<p class="text-center">Posted By: <span class="capitalize-blg"><?php the_author(); ?></span></p>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<button type="button" class="btn btn-lg btn-block continue-button"><a class="blog-link-btn" href="<?php the_permalink(); ?>" title="Read more">Continue Reading</a></button>
					</div>
				</div>
			</div>
			</div>
		<?php endwhile; ?>
	</div>


	<!-- end of Masonry -->





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
