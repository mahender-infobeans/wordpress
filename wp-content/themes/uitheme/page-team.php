<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#ffc04c': get_post_custom_values("page-background")[0]; ?>
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
	var colorx = shadeColor1("<?php echo $page_background; ?>",70);
	console.log(colorx);
	var element ="<style>.menu-horizontal li a:hover{"+
	"background-color: "+ colorx +";"+ 
	"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}</style>";
	$("head").append(element);
</script>
<div class="aboutus-header team-back">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="about-text text-trans">Our Team</h2>
				<h1 class="we-text"><?php echo get_option("team_page_title"); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center work-div">
			<p> <?php echo get_option("team_page_subtitle"); ?></p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
<!-- <?php 
// if ( has_post_thumbnail() ) 
{
    // the_post_thumbnail();
}
// else 
{ 
?>
<img src="<?php bloginfo('template_directory'); ?>/images/default-thumb-img.png" alt="<?php the_title(); ?>" />
<?php } ?> -->

<?php $args = array( 'post_type' => 'Team' ); $loop = new WP_Query( $args );?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
		<div class="image-overlay">
			<img class="team-image" src="<?php the_post_thumbnail_url(); ?>" alt="image-person" />
		</div>
		<div class="box-image">
		</div>
		<div class="text-center team-name">
			<p class="paddingtop8"><?php the_title(); ?></p>
		</div>
		<div class="overlay-team">
			<div class="text-designation"><?php the_content(); ?></div>
		</div>
	</div>
<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>