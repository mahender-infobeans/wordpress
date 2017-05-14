 
<?php get_header(); ?>



	<div class="container">
<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
	<!-- <div class="entry-content-page"> -->
		<!-- <?php //the_content(); ?> <!-- Page Content --> 
	<!-- </div>.entry-content-page -->

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 blog-wrapper">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img class="blog-img" src="<?php the_post_thumbnail_url(); ?>" alt="blog-image" />
			</div>
			<?php } ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date-col font16">
				<p class="text-center"> <?php the_date(); ?></p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<strong><h2 class="text-center"> <?php the_title(); ?></h2></strong>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margintop10 font16">
				<p class="text-center"> <?php the_author(); ?></p>
			</div>
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<strong><h3 class="text-left"> Pretty Heading </h3></strong>
			</div> -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<?php the_content(); ?>
			<!-- 	<p>Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor, sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
					Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor, sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<strong><h3 class="text-left"> Pretty Heading 2 </h3></strong>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<p>Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla.</p>
					<ul>
						<li>Some content 1</li>
						<li>Some content 2</li>
						<li>Some content 3</li>
						<li>Some content 4</li>
					</ul>
				</div>

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center col-lg-offset-2 col-md-offset-2">
					<button type="button" class="btn btn-lg btn-block continue-button">Continue Reading</button>
				</div> -->
			</div>


				<?php
    				endwhile; //resetting the page loop
    				wp_reset_query(); //resetting the page query
    			?>


		</div>



















<!-- <h1>
//	<?php
		// Start the loop.
//	while ( have_posts() ) : the_post();

			// Include the single post content template.
//	get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
//	if ( comments_open() || get_comments_number() ) {
//		comments_template();
//	}

//	if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
//		the_post_navigation( array(
//			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
//			) );
//	} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
//		the_post_navigation( array(
//			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
//			'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
//			'<span class="post-title">%title</span>',
//			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
//			'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
//			'<span class="post-title">%title</span>',
//			) );
//	}

			// End of the loop.
//	endwhile;
//	?>
</h1> -->