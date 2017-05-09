<?php get_header(); ?>
<style type="text/css">
	<?php $page_background = get_post_custom_values("page-background")[0] == ""? '#ff9999': get_post_custom_values("page-background")[0]; ?>
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
	var colorx = shadeColor1("<?php echo $page_background; ?>",30);
	console.log(colorx);
	var element ="<style>.menu-horizontal li a:hover{"+
	"background-color: "+ colorx +";"+
	"box-shadow: 0px 0px 13px 0px "+ colorx +" inset;" +
	"}</style>";
	$("head").append(element);
</script>

<body>
	<div class="container">
		
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 blog-wrapper">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img class="blog-img" src="/wp-content/themes/uitheme/assets/images/blog-1.jpg" alt="blog-image" />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date-col font16">
					<p class="text-center"> 12-12-2012</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<strong><h2 class="text-center"> BEST MATCH DETECTED: WOOD & WHITE</h2></strong>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margintop10 font16">
					<p class="text-center"> By Username</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<strong><h3 class="text-left"> Pretty Heading </h3></strong>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<p>Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor, sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
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
				</div>
			</div>

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 blog-wrapper">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img class="blog-img" src="/wp-content/themes/uitheme/assets/images/blog-1.jpg" alt="blog-image" />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date-col font16">
					<p class="text-center"> 12-12-2012</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<strong><h2 class="text-center"> BEST MATCH DETECTED: WOOD & WHITE</h2></strong>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margintop10 font16">
					<p class="text-center"> By Username</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<strong><h3 class="text-left"> Pretty Heading </h3></strong>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<p>Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor, sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
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
				</div>
			</div>

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 blog-wrapper">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img class="blog-img" src="/wp-content/themes/uitheme/assets/images/blog-1.jpg" alt="blog-image" />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date-col font16">
					<p class="text-center"> 12-12-2012</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<strong><h2 class="text-center"> BEST MATCH DETECTED: WOOD & WHITE</h2></strong>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margintop10 font16">
					<p class="text-center"> By Username</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<strong><h3 class="text-left"> Pretty Heading </h3></strong>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<p>Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor, sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
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
				</div>
			</div>
		
	</div>
</body>

<?php get_footer(); ?>