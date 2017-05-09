<?php get_header(); ?>
<style type="text/css">
<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#FFFA78': get_post_custom_values("page-background")[0]; ?>
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
	var colorx = shadeColor1("<?php echo $page_background; ?>",85);
	var element ="<style>.menu-horizontal li a:hover{"+
		"background-color: "+ colorx +";"+
		"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}</style>";
	$("head").append(element);
</script>
<!-- 2nd page header -->
<div class="aboutus-header bgcolor-yellow">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="about-text text-trans color-darkgray">Portfolio</h2>
				<h1 class="we-text color-darkgray"> <?php echo get_post_custom_values("title_page")[0] == ""? 'Stay Connected...': get_post_custom_values("title_page")[0]; ?></h1>
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
<div class="aboutus-header">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<?php $args = array( 'post_type' => 'projects' ); $loop = new WP_Query( $args );?>
				<?php $ab = wp_count_posts( "projects" ); ?> 
				<?php if ( $ab->publish == 0 ) :?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="box  portfolio-box-hover" style="background-image: url( /wp-content/themes/uitheme/assets/images/port-img.png );">
							<div class="overlay overlay-projects">
								<div class="text">
									<h3 class="fade-in-out" >ADD PROJECTS...</h3>
									<p class="show-hover"> The added projects will be appear here!</p>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>

						<div class="box portfolio-box-hover" 
						style="background-image: url( 
							<?php the_post_thumbnail_url(); ?>
							);">
							<div class="overlay overlay-projects">
								<div class="text">
									<h3><span class="fade-in-out" ><?php the_title(); ?></span></h3>
									<div class="show-hover">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php if ( !has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>

						<div class="box portfolio-box-hover" 
						style="background-image: url( /wp-content/themes/uitheme/assets/images/port-img.png );">
						<div class="overlay overlay-projects">
							<div class="text">
								<h3><span class="fade-in-out" ><?php the_title(); ?></span></h3>
								<div class="show-hover">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

			<?php endwhile; ?>

			



				<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="box  portfolio-box-hover">
						<div class="overlay overlay-projects">
							<div class="text">
								<span class="fade-in-out" >Project Name2</span>
								<p class="show-hover"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
							</div>
						</div>
					</div>
				</div> -->
				<!-- repeat block end -->
			</div>
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="box  portfolio-box-hover">
						<div class="overlay overlay-projects">
							<div class="text">
								<span class="fade-in-out" >Project Name3</span>
								<p class="show-hover"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="box  portfolio-box-hover">
						<div class="overlay overlay-projects">
							<div class="text">
								<span class="fade-in-out" >Project Name4</span>
								<p class="show-hover"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->

		</div>
	</div>
</div>

<?php get_footer(); ?>