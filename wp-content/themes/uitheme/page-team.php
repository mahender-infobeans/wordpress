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
			<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person2.png" alt="image-person" />
				</div>
				<div class="box-image blue-background">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8"> Niklaus Michealson</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Senior Designer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/mypic.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Shivangi verma</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">UI Developer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person3.jpg" alt="image-person" />
				</div>
				<div class="box-image blue-background">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Ian Somelhalder</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Senior UI/UX Developer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person4.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8"> Neil Patrick Harris</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">UX Designer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person2.png" alt="image-person" />
				</div>
				<div class="box-image blue-background">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Cobbie Smulders</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">Developer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person1.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8"> Davina Claire</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">UX Designer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/person2.png" alt="image-person" />
				</div>
				<div class="box-image blue-background">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8"> Niklaus Michealson</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">UX Designer</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center team-border">
				<div class="image-overlay">
					<img class="team-image" src="/wp-content/themes/uitheme/assets/images/mypic.jpg" alt="image-person" />
				</div>
				<div class="box-image">
				</div>
				<div class="text-center team-name">
					<p class="paddingtop8">Shivangi verma</p>
				</div>
				<div class="overlay-team">
					<div class="text-designation">UX Designer</div>
				</div>
			</div>
		</div> -->
	</div>
</div>

<?php get_footer(); ?>