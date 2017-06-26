 
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



	<div class="container">
<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
	

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 blog-wrapper">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img class="blog-img" src="<?php the_post_thumbnail_url(); ?>" alt="blog-image" />
			</div>
			<?php } ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 font16">
				<p class="text-center date-col"> <?php the_date(); ?></p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<strong><h2 class="text-center capitalize-blg"> <?php the_title(); ?></h2></strong>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 capitalize-blg font16">
				<p class="text-center"> <?php the_author(); ?></p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<?php the_content(); ?>
			</div>


				<?php
    				endwhile; //resetting the page loop
    				wp_reset_query(); //resetting the page query
    			?>


		</div>