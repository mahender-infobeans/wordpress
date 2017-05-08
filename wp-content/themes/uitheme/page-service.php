<?php get_header(); ?>
<style type="text/css">
<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#4FD5EE': get_post_custom_values("page-background")[0]; ?>
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

	<div class="serviceus-header">	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="about-text text-trans">services</h3>
					<h2 class="we-text"> We Focus on UI and UX</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid pos-relative">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center work-div">
				How Do We Work?
			</div>
		</div>
		<div class="service-left hidden-xs"></div>
		<div class="service-right hidden-xs"></div>
		<div class="container">
			<div class="row margintop40">
				<div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
					<p class="marginleft10 resp-text-center">Definition</p>
					<div class="image-box borderbox">
						<img src="/wp-content/themes/uitheme/assets/images/definition-icon.png" alt="definition-image">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="circle"></div>
					<img class="top-image" src="/wp-content/themes/uitheme/assets/images/bdr-right.png" alt="top-border">
				</div>
				<div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
					<p class="marginleft10 resp-text-center">Conception</p>
					<div class="image-box">
						<img src="/wp-content/themes/uitheme/assets/images/conception-icon.png" alt="conception-icon">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="circle3"></div>
					<img class="top-image" src="/wp-content/themes/uitheme/assets/images/bdr-right.png" alt="top-border">
				</div>
				<div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
					<p class="resp-text-center">Development</p>
					<div class="image-box">
						<img src="/wp-content/themes/uitheme/assets/images/development-icon.png" alt="development-icon">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="circle5"></div>
					<img class="top-image" src="/wp-content/themes/uitheme/assets/images/bdr-right.png" alt="top-border">
				</div>

				<div class="col-lg-1 col-lg-offset-2 col-md-offset-2 col-md-1 col-sm-6 col-xs-12 resp-bottom-30">
					<p class="block-title visible-xs visible-sm hidden-md hidden-lg resp-text-center">Research</p>
					<div class="image-box border-color">
						<img src="/wp-content/themes/uitheme/assets/images/research-icon.png" alt="research-icon">
					</div>
					<div class="visible-lg visible-md hidden-sm hidden-xs"><p class="block-title">Research</p></div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="circle2"></div>
					<img class="bottom-image" src="/wp-content/themes/uitheme/assets/images/bdr-right-bottom.png" alt="bottom-border">
				</div>
				<div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
					<p class="block-title visible-xs visible-sm hidden-md hidden-lg resp-text-center">Selection</p>
					<div class="image-box ">
						<img src="/wp-content/themes/uitheme/assets/images/selection-icon.png" alt="selection-icon">
					</div>
					<div class="visible-lg visible-md hidden-sm hidden-xs"><p class="block-title">Selection</p></div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="circle4"></div>
					<img class="bottom-image" src="/wp-content/themes/uitheme/assets/images/bdr-right-bottom.png" alt="bottom-border">
				</div>
				<div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
					<p class="block-title visible-xs visible-sm hidden-md hidden-lg resp-text-center">Delivery</p>
					<div class="image-box ">
						<img src="/wp-content/themes/uitheme/assets/images/delivery-icon.png" alt="delivery-icon">
					</div>
					<div class="visible-lg visible-md hidden-sm hidden-xs"><p class="block-title">Delivery</p></div>
				</div>
			</div>
		</div>
		<div class="row margin40 bottom-zero">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center work-div">
				Services We Offer
			</div>
		</div>
		<div class="container">	
			<ul class="nav nav-tabs responsive tab-button" id="myTab">
				<li class="head-class active"><a class="deco-none red-class" href="#resp-tab1"> Our Approach</a></li>
				<li class="head-class"><a href="#resp-tab2">Vision</a></li>
				<li class="head-class"><a class="deco-none" href="#resp-tab3"> Mission</a></li>
			</ul>

			<div class="tab-content responsive col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 tab-box">
				<div class="tab-pane active" id="resp-tab1">
					<h3>Our Approach</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="tab-pane" id="resp-tab2">
					<h3>Vision</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="tab-pane" id="resp-tab3">
					<h3>Mission</h3>
					<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>