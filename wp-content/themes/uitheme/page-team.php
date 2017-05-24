<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#D4E157': get_post_custom_values("page-background")[0]; ?>
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
	.footer,.footer a.infobeans-footer {
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
<div class="aboutus-header team-back">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="about-text text-trans">Our Team</h2>
				<h1 class="we-text"><?php echo get_post_custom_values("title_page")[0] == ""? 'Our Team': get_post_custom_values("title_page")[0]; ?></h1>
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

		<?php $args = array( 'post_type' => 'team' ); $loop = new WP_Query( $args );?>
		<?php $ab = wp_count_posts( "team" ); ?>
		<?php if ( $ab->publish == 0 ) :?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person1.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Add Name</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Add Designation</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person2.png" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Add Name</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Add Designation</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person3.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Add Name</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Add Designation</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person4.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Add Name</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Add Designation</div>
				</div>
			</div>
		<?php endif; ?>

		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
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
			<?php } ?>

			<?php if ( !has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/team-default.png" alt="image-person" />
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
			<?php } ?>
			

		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>










