	<footer>
		<!-- <?php // var_dump(is_page()); ?> -->
		<!-- <?php //if( is_front_page() ) : ?> -->

		<div class="footer-home">
			<div class="pull-left">&copy; <?php echo date("Y");?> Designed By InfoBeans.</div>
			<div class="pull-left">All Rights are Reserved.</div>
		</div>
		<!-- <?php // endif; ?> -->
	</footer>
	<style type="text/css">
		.footer-home{
			padding: 10px;
			width: 100%;
			color:#fff;
			position: absolute;
			bottom: 0px;
			left: 0px;
			z-index: 10;
		}
		.footer-home div{
			width: 100%;
		}
	</style>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/222599/canvas-pointer.js?v=20150516"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
	</body>
	</html>