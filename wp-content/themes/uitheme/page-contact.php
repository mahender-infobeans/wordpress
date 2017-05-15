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
		<style type="text/css">
			.contact-form{
				font-size: 16px;
			}
			.contact-form input,
			.contact-form select{
				padding: 5px;
			}

			.contact-form [type="text"] + span,
			.contact-form [type="email"] + span,
			.contact-form textarea + span
			{
				margin-left: 10px;
				color: #ff4d4d;
			}
			.contact-form label  {
				position: relative;
				padding-left: 30px;
				margin-bottom: 15px;
				cursor: pointer;
				font-size: 18px;
			}
			.contact-form label input[type="checkbox"] {
				position: absolute;
				z-index: -1;
				opacity: 0;
			}
			.contact-form label input[type="checkbox"] + span {
				position: absolute;
				top: 2px;
				left: 0;
				height: 20px;
				width: 20px;
				background: #e6e6e6;
			}
			/*.contact-form label [type="checkbox"] + span {
				border-radius: 50%;
			}*/
			.contact-form label:hover input[type="checkbox"] ~ span,
			.contact-form label input[type="checkbox"]:focus ~ span {
				background: #ccc;
			}
			.contact-form label input[type="checkbox"]:checked ~ span {
				background: #2aa1c0;
				 content     : '✓';
			}
			.contact-form label input[type="checkbox"]:checked ~ span:after {
				display: block;
				 content     : '✓';
				 margin-top: -2px;
				 margin-left: 2px;
			}

		</style>
		
		<div class="row color-darkgray">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="contact-form">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
<!-- contact form  -->

<div class="container">
  <div class="control-group">
    <h1>Checkboxes</h1>
    <label class="control control--checkbox">First checkbox
      <input type="checkbox" checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">Second checkbox
      <input type="checkbox"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">Disabled
      <input type="checkbox" disabled="disabled"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox">Disabled & checked
      <input type="checkbox" disabled="disabled" checked="checked"/>
      <div class="control__indicator"></div>
    </label>
  </div>
  <div class="control-group">
    <h1>Radio buttons</h1>
    <label class="control control--radio">First radio
      <input type="radio" name="radio" checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Second radio
      <input type="radio" name="radio"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Disabled
      <input type="radio" name="radio2" disabled="disabled"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Disabled & checked
      <input type="radio" name="radio2" disabled="disabled" checked="checked"/>
      <div class="control__indicator"></div>
    </label>
  </div>
  <div class="control-group">
    <h1>Select boxes</h1>
    <div class="select">
      <select>
        <option>First select</option>
        <option>Option</option>
        <option>Option</option>
      </select>
      <div class="select__arrow"></div>
    </div>
    <div class="select">
      <select>
        <option>Second select</option>
        <option>Option</option>
        <option>Option</option>
      </select>
      <div class="select__arrow"></div>
    </div>
    <div class="select">
      <select disabled="disabled">
        <option>Disabled</option>
        <option>Option</option>
        <option>Option</option>
      </select>
      <div class="select__arrow"></div>
    </div>
  </div>
</div>

<style type="text/css">
	.control-group {
  display: inline-block;
  vertical-align: top;
  background: #fff;
  text-align: left;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  padding: 30px;
  /*width: 200px;
  height: 210px;*/
  margin: 10px;
}
.control {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 15px;
  cursor: pointer;
  font-size: 18px;
}
.control input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.control__indicator {
  position: absolute;
  top: 2px;
  left: 0;
  height: 20px;
  width: 20px;
  background: #e6e6e6;
}
.control--radio .control__indicator {
  border-radius: 50%;
}
.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
  background: #ccc;
}
.control input:checked ~ .control__indicator {
  background: #2aa1c0;
}
.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
  background: #0e647d;
}
.control input:disabled ~ .control__indicator {
  background: #e6e6e6;
  opacity: 0.6;
  pointer-events: none;
}
.control__indicator:after {
  content: '';
  position: absolute;
  display: none;
}
.control input:checked ~ .control__indicator:after {
  display: block;
}
.control--checkbox .control__indicator:after {
  left: 8px;
  top: 4px;
  width: 3px;
  height: 8px;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
.control--checkbox input:disabled ~ .control__indicator:after {
  border-color: #7b7b7b;
}
.control--radio .control__indicator:after {
  left: 7px;
  top: 7px;
  height: 6px;
  width: 6px;
  border-radius: 50%;
  background: #fff;
}
.control--radio input:disabled ~ .control__indicator:after {
  background: #7b7b7b;
}
.select {
  position: relative;
  display: inline-block;
  margin-bottom: 15px;
  width: 100%;
}
.select select {
  display: inline-block;
  width: 100%;
  cursor: pointer;
  padding: 10px 15px;
  outline: 0;
  border: 0;
  border-radius: 0;
  background: #e6e6e6;
  color: #7b7b7b;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.select select::-ms-expand {
  display: none;
}
.select select:hover,
.select select:focus {
  color: #000;
  background: #ccc;
}
.select select:disabled {
  opacity: 0.5;
  pointer-events: none;
}
.select__arrow {
  position: absolute;
  top: 16px;
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none;
  border-style: solid;
  border-width: 8px 5px 0 5px;
  border-color: #7b7b7b transparent transparent transparent;
}
.select select:hover ~ .select__arrow,
.select select:focus ~ .select__arrow {
  border-top-color: #000;
}
.select select:disabled ~ .select__arrow {
  border-top-color: #ccc;
}
</style>


</div>
<?php get_footer(); ?>