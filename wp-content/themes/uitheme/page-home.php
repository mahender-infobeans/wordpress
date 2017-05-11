<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#F778A1': get_post_custom_values("page-background")[0]; ?>
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
<!-- default slider if no slider block has been added by the admin -->
<div class="container-fluid">
<div class="row">
<div id="mycarousel" class="carousel slide" data-ride="carousel">
 <?php $args = array( 'post_type' => 'slider' ); $loop = new WP_Query( $args );?>
		<?php $ab = wp_count_posts( "slider" ); ?>
				<?php if ( $ab->publish == 0 ) :?>
    <div class="carousel-inner">

      <div class="item active img-back default-img">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item img-back default-img">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item img-back default-img">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>
	<?php endif; ?>

  <!--dynamic slider slides posted by admin -->
  <div class="carousel-inner" role="listbox">
    <?php $slider = get_posts(array('post_type' => 'slider','order'=> 'ASC')); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      	
      <div class="item  img-back <?php echo ($count == 0) ? 'active' : ''; ?>"
      style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?> )">
     
        <div class="carousel-caption">
          <h3><?php  echo $slider[$count]->post_title; ?></h3>
          <p><?php  echo $slider[$count]->post_content; ?></p>
        </div>
         </div>
      <?php $count++; ?>
    <?php endforeach; ?>
  </div>

  <!-- left and right arrows control -->
  <a class="left carousel-control arrows" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control arrows" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center work-div">
				How Do We Work?
			</div>
</div>
</div>


<div class="container">
<div class="row wrapper-box">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-box">
	<div class="box-img">
		<img src="/wp-content/themes/uitheme/assets/images/box1.jpg">
		<div class="home-overlay"></div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-box">
		<div class="box-img">
		<img src="/wp-content/themes/uitheme/assets/images/box2.jpg">
		<div class="home-overlay"></div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-box">
		<div class="box-img">
		<img src="/wp-content/themes/uitheme/assets/images/box3.jpg">
		<div class="home-overlay"></div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-box">
		<div class="box-img">
		<img src="/wp-content/themes/uitheme/assets/images/box2.jpg">
		<div class="home-overlay"></div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-box">
	<div class="box-img">
		<img src="/wp-content/themes/uitheme/assets/images/box1.jpg">
		<div class="home-overlay"></div>
	</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-box">
		<div class="box-img">
		<img src="/wp-content/themes/uitheme/assets/images/box3.jpg">
		<div class="home-overlay"></div>
	</div>
	</div>
</div>
	
</div>
<?php get_footer(); ?>