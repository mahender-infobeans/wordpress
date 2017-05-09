<?php get_header(); ?>
<style type="text/css">
<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#74c454': get_post_custom_values("page-background")[0]; ?>
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
	var colorx = shadeColor1("<?php echo $page_background; ?>",91);
	console.log(colorx);
	var element ="<style>.menu-horizontal li a:hover{"+
		"background-color: "+ colorx +";"+
		"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}</style>";
	$("head").append(element);
</script>
<!-- 2nd page header -->
<div class="aboutus-header bgcolor-green">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="about-text text-trans color-darkgray">Contact Us</h2>
				<h1 class="we-text color-darkgray"> <?php echo get_post_custom_values("title_page")[0] == ""? 'Stay Connected...': get_post_custom_values("title_page")[0]; ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row color-darkgray">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center">We would love to talk to you about any new projects</h3>
			<h3 class="text-center">You may have or any of the services that we offer.</h3>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="box contact-box">
				
					<iframe src="<?php echo get_option("map")!="" ? get_option("map") : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.248168428114!2d73.91743125093821!3d18.5628471373225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c143eae1572d%3A0x6cdaaacaf2751c45!2sGiga+Space%2C+Giga+Space+IT+Park+Internal+Rd%2C+Sakore+Nagar%2C+Viman+Nagar%2C+Pune%2C+Maharashtra+411014!5e0!3m2!1sen!2sin!4v1493877201906' ; ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="box contact-box padding-1">
					<div class="center-vertical-box">
						<h3><strong>E-mail:</strong></h3><p> <?php echo get_option("emailid"); ?></p>
						<h3><strong>Contact:</strong></h3><p> <?php echo get_option("mobile"); ?></p>
						<h2 class="text-center">
							<a href="JavaScript:void(0);"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href="JavaScript:void(0);"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							<a href="JavaScript:void(0);"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
						</h2>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>
<?php get_footer(); ?>