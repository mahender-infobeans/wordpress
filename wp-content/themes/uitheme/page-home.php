<?php get_header(); ?>


<section>
	<canvas id="canvas"></canvas>
</section>

<script type="text/javascript">

</script>
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

    ! function () {

    	"use strict"; 

    	function chromaKey(source, id) {
		// create new image
		var imgSource = new Image();
		imgSource.crossOrigin = "Anonymous";
		imgSource.src = source;
		imgSource.onload = function () {
			// render image in canvas
			var jpg    = document.createElement('canvas');
			var w = jpg.width  = this.width;
			var h = jpg.height = this.height;
			var ctx = jpg.getContext('2d');
			ctx.drawImage(this, 0, 0, w, h);
			// chroma Key
			var img = ctx.getImageData(0, 0, w, h),
			data = img.data;
			for (var i =0, n = data.length; i < n; i += 4) {
				var r = data [i + 0];
				var g = data [i + 1];
				var b = data [i + 2];
				// make white transparent (rgb > 240, 240, 240)
				if (r > 240 && g > 240 && b > 240) {  
					data[i + 3] = 0; 
				} 
			}
			// create new transparent image
			var transparent = document.createElement('canvas');
			transparent.width = w;
			transparent.height = h;
			var ctx = transparent.getContext('2d');
			ctx.putImageData(img, 0, 0);
			images[id] = transparent;
		}
	}

	// draw parallax image
	function parallax (id, x, y) {
		var image = images[id];
		if (image) {
			ctx.drawImage(image, x, y);
		}
	}

	// main loop
	function run() {
		// request next frame
		requestAnimationFrame(run);
		// clear screen
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		// ease pointer
		pointer.cx += (pointer.x - pointer.cx) / 10;
		pointer.cy += (pointer.y - pointer.cy) / 10;
		var rx = -((canvas.width  / 2) - Math.max(15, Math.min(pointer.cx, canvas.width - 15))) / 7;
		var ry = -((canvas.height / 2) - Math.max(0, Math.min(pointer.cy, canvas.height - 5))) / 4.75;
		// parallax
		parallax(0, -20 + (rx / 2), -80 + (ry * 2)); 
		parallax(1, -40 + (rx / 2),  20 + (ry / 2)); 
		parallax(2, -20 + (rx / 3),  90 + (ry / 3)); 
		parallax(3, -20 - (rx / 2), 130 - (ry / 2)); 
		parallax(4,   0 - (rx / 1), 160 - (ry / 1));
		parallax(5, 240 - (rx * 2), 220 - (ry * 2));
	}

	// canvas
	var canvas  = ge1doot.canvas("canvas");
	var ctx     = canvas.ctx;
	// pointer
	var pointer = canvas.pointer;
	pointer.cx  = pointer.x = canvas.width / 2;
	pointer.cy  = 0;
	pointer.y = canvas.height;
	// images
	var images = [];
	// make jpg images transparent images
	<?php 
	$num = query_posts(array( 
		'post_type' => 'Images',
		'showposts' => 5
		) );
	if( count($num) == 0) :
		?>
	chromaKey("<?php bloginfo('template_directory'); ?>/assets/images/homebg1.png", 0);
	chromaKey("<?php bloginfo('template_directory'); ?>/assets/images/homebg2.png", 1);
	chromaKey("<?php bloginfo('template_directory'); ?>/assets/images/homebg3.png", 2);
	chromaKey("<?php bloginfo('template_directory'); ?>/assets/images/homebg4.png", 3);
	chromaKey("<?php bloginfo('template_directory'); ?>/assets/images/homebg5.png", 4);
	<?php 
	endif;
	if(count($num) > 0):
		$countx =0;
	while (have_posts()) : 
		the_post();
	echo "chromaKey('". get_the_post_thumbnail_url() ."', $countx);\n";
	$countx++;
	endwhile;
	endif;
	?>
	// zyva!
	run();

}();


	function btnClick(btn){
		$(btn).click();
	}
</script>

<?php get_footer(); ?>