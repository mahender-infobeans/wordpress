<?php get_header(); ?>
<style type="text/css">
	@font-face {
			font-family: centuryFont;
			src: url("font/07558_CenturyGothic.ttf");
		}
		body{
			font-family: centuryFont;
			background-color: #F7F7F7;
		}

		.bgcolor-yellow{
			background-color: #FFFA78;
		}
		.title1{
			color: #333;
		}
		.portfolio-box{
			height: 380px;
			background-color: #ddd;
			width: 550px;
			margin: 10px auto;
		}
		.portfolio-box-hover{
			position: relative;
			background-image: url("https://thumbs.dreamstime.com/z/asian-female-student-reading-written-board-class-background-32370531.jpg");
		}
		.portfolio-box-hover:hover .overlay{
			height: 100%;
		}
		.show-hover{
			animation-fill-mode: forwards;
			display: none;
		}
		.portfolio-box-hover:hover .show-hover{
			animation-fill-mode: forwards;
			animation: fadein 2s;
			display: block;
		}
		.fade-in-out{
			animation-fill-mode: forwards;
			animation: fadein 2s;

		}
		.portfolio-box-hover:hover .fade-in-out{
			animation-fill-mode: forwards;
			animation: fadein 2s;
		}
		@keyframes fadein{
			from{display: none;opacity: 0;}
			to{display: block;opacity: 1;}
		}
		.overlay {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: #FFFA78;
			overflow: hidden;
			width: 100%;
			height: 20%;
			-webkit-transition: .5s ease;
			-moz-transition: .5s ease;
			-ms-transition: .5s ease;
			transition: .5s ease;
		}
		.text {
			color: #333;
			font-size: 20px;
			position: absolute;
			overflow: hidden;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
</style>
<!-- 2nd page header -->
	<div class="aboutus-header bgcolor-yellow">	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="about-text text-trans title1">Portfolio</h2>
					<h1 class="we-text title1"> What we bring to the table </h1>
				</div>
			</div>
		</div>
	</div>

	<div class="aboutus-header">	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="portfolio-box portfolio-box-hover">
							<div class="overlay">
								<div class="text">
									<span class="fade-in-out" >Project Name</span>
									<p class="show-hover"  id="box"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="portfolio-box  portfolio-box-hover">
							<div class="overlay">
								<div class="text">
									<span class="fade-in-out" >Project Name</span>
									<p class="show-hover"  id="box"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="portfolio-box  portfolio-box-hover">
							<div class="overlay">
								<div class="text">
									<span class="fade-in-out" >Project Name</span>
									<p class="show-hover"  id="box"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="portfolio-box  portfolio-box-hover">
							<div class="overlay">
								<div class="text">
									<span class="fade-in-out" >Project Name</span>
									<p class="show-hover"  id="box"> abc def ghi jkl mno pqr stu vwx yza bcd def ghi jkl mno pqr stu vwx</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>