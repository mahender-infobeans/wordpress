<?php get_header(); ?>



<div onload="particals()"></div>
<!-- <div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div> -->

<!-- particles.js container -->
<div id="particles-js"></div>

<!-- scripts -->
<!-- <script src="js/app.js"></script> -->

<!-- stats.js -->
<!-- <script src="js/lib/stats.js"></script> -->



<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/canva-home.css">
<script src="<?php bloginfo('template_directory'); ?>/assets/js/particles.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>



<div class="pos-r">
	<h1 class="btm-text">
		<a href="" class="typewrite" data-period="2000" data-type='["We Create WOW :)" ]'>
			<span class="wrap"></span>
		</a>
	</h1>
</div>

<script type="text/javascript">
	var TxtType = function(el, toRotate, period) {
		this.toRotate = toRotate;
		this.el = el;
		this.loopNum = 0;
		this.period = parseInt(period, 10) || 2000;
		this.txt = '';
		this.tick();
		this.isDeleting = false;
	};

	TxtType.prototype.tick = function() {
		var i = this.loopNum % this.toRotate.length;
		var fullTxt = this.toRotate[i];

		if (this.isDeleting) {
			this.txt = fullTxt.substring(0, this.txt.length - 1);
		} else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
		}

		this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

		var that = this;
		var delta = 200 - Math.random() * 100;

		if (this.isDeleting) { delta /= 2; }

		if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
		} else if (this.isDeleting && this.txt === '') {
			this.isDeleting = false;
			this.loopNum++;
			delta = 500;
		}

		setTimeout(function() {
			that.tick();
		}, delta);
	};

	window.onload = function() {
		var elements = document.getElementsByClassName('typewrite');
		for (var i=0; i<elements.length; i++) {
			var toRotate = elements[i].getAttribute('data-type');
			var period = elements[i].getAttribute('data-period');
			if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    // function particals(){
    // 	var count_particles, stats, update;
    // 	stats = new Stats;
    // 	stats.setMode(0);
    // 	stats.domElement.style.position = 'absolute';
    // 	stats.domElement.style.left = '0px';
    // 	stats.domElement.style.top = '0px';
    // 	document.body.appendChild(stats.domElement);
    // 	count_particles = document.querySelector('.js-count-particles');
    // 	update = function() {
    // 		stats.begin();
    // 		stats.end();
    // 		if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    // 			count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    // 		}
    // 		requestAnimationFrame(update);
    // 	};
    // 	requestAnimationFrame(update);
    // }

</script>

<?php get_footer(); ?>