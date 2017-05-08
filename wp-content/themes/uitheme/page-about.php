<?php get_header(); ?>


	<div class="aboutus-header about-back-color">	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="about-text text-trans">about us</h2>
					<h1 class="we-text"> We're a Creative Team </h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid pos-relative">
		<hr class="tab-border hidden-sm hidden-xs">	
		<div class="img1">
		</div>
		<div class="img2">
		</div>
		<div class="container">	
		<div class="row">
		<?php $args = array( 'post_type' => 'about' ); $loop = new WP_Query( $args );?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<ul class="nav nav-tabs responsive tab-button" id="myTab">
				<li class="head-class active"><a class="deco-none red-class" href="#resp-tab1"> <?php the_title(); ?></a></li>
				<!-- <li class="head-class"><a href="#resp-tab2">Vision</a></li>
				<li class="head-class"><a class="deco-none" href="#resp-tab3"> Mission</a></li> -->
			</ul>

			<div class="tab-content responsive col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 tab-box">
				<div class="tab-pane active" id="resp-tab1">
					<!-- <h3>Our Approach</h3> -->
					<p> <?php the_content(); ?></p>
				</div>
				<!-- <div class="tab-pane" id="resp-tab2">
					<h3>Vision</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div> -->
				<!-- <div class="tab-pane" id="resp-tab3">
					<h3>Mission</h3>
					<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div> -->
			</div>
			<?php endwhile; ?>
		</div>
		</div>
	</div>


<?php get_footer(); ?>