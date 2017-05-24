<?php get_header(); ?>
<!-- 2nd page header -->
<style type="text/css">
<?php $page_background = get_post_custom_values("header-background")[0] == ""? '#abcdef': get_post_custom_values("header-background")[0]; ?>
<?php $page_font = get_post_custom_values("header-font")[0] == ""? '#333': get_post_custom_values("header-font")[0]; ?>
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
	var colorx = shadeColor1("<?php echo $page_background; ?>",84);
	var element ="<style>.menu-horizontal li a:hover{"+
	"background-color: "+ colorx +";"+ 
	"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}"+
	".current-menu-item{"+
	"background-color: "+ colorx +
	"}" +
	"</style>";
	$("head").append(element);
</script>
<div class="aboutus-header header-background-custom">	
	<div class="container">
		<div class="row"> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="about-text text-trans color-darkgray"><?php echo get_post_custom_values("page_tag")[0] == ""? 'Enter Page Tag': get_post_custom_values("page_tag")[0]; ?></h2>
				<h1 class="we-text color-darkgray"> <?php echo get_post_custom_values("title_page")[0] == ""? 'Enter some Title': get_post_custom_values("title_page")[0]; ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row color-darkgray">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px 15px;">
			<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
				<div class="entry-content-page">
					<?php the_content(); ?> <!-- Page Content -->
				</div><!-- .entry-content-page -->

				<?php
    				endwhile; //resetting the page loop
    				wp_reset_query(); //resetting the page query
    			?>
		</div>

	</div>
</div>
<?php get_footer(); ?>