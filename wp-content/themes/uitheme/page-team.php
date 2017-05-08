<?php get_header(); ?>

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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center team-slogan">
			<p> <?php echo get_option("team_page_subtitle"); ?></p>
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