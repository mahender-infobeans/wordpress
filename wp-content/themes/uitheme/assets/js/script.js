
$(document).ready(function(){
	// addAnimation();
			// vertical-navigation hover effect
			// $("#menu-primary li").on('mouseover', function(){
			// 	var color1 = getRandomColor();
			// 	var color2 = shadeColor1(color1, 10);

			// 	$(".scroll").css("background-color", color1);
			// 	if(color1 == "#FEFB7A"){
			// 		$("#menu-primary *").css("color", "#000");
			// 	}

			// 	$("#menu-primary").css("background-color", color1);
			// 	$("#menu-primary *").css("background-color", color1);

			// 	$(this).css("background-color", color2);
			// 	$(this).children().css("background-color", color2);
			// });
			// $("#menu-primary li").on('mouseout', function(){
			// 	var color1 = "#6F43D6";

			// 	$(".scroll").css("background-color", color1);

			// 	$("#menu-primary *").css("color", "#FFF");
			// 	$(".header-background").css("background-color", color1);
				

			// 	$("#menu-primary *").css("background-color", color1);
			// 	$("#menu-primary").css("background-color", color1);

			// 	$(this).css("background-color", color1);
			// 	$(this).children().css("background-color", color1);


			// });
			// vertical-navigation hover effect end


			// // horizontal-navigation hover effect
			// $("#menu-header-horizontal li").on('mouseover', function(){
			// 	var color1 = getRandomColor();
			// 	if(color1 == "#FEFB7A"){
			// 		$("#menu-header-horizontal *").css("color", "#000");
			// 	}
			// 	var color2 = shadeColor1(color1, 10);

			// 	$(".header-background").css("background-color", color1);

			// 	$("#menu-header-horizontal").css("background-color", color1);
			// 	$("#menu-header-horizontal *").css("background-color", color1);

			// 	$(this).css("background-color", color2);
			// 	$(this).children().css("background-color", color2);


			// });
			// $("#menu-header-horizontal li").on('mouseout', function(){
			// 	var color1 = "#6F43D6";

			// 	$("#menu-header-horizontal *").css("color", "#FFF");
			// 	$(".header-background").css("background-color", color1);
				

			// 	$("#menu-header-horizontal *").css("background-color", color1);
			// 	$("#menu-header-horizontal").css("background-color", color1);

			// 	$(this).css("background-color", color1);
			// 	$(this).children().css("background-color", color1);


			// });
			// horizontal-navigation hover effect end

 // shivangi js 
  	$( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
			e.preventDefault();
			$( this ).tab( 'show' );
		} );

		// ( function( $ ) {
  //         // Test for making sure event are maintained
  //         $( '.js-alert-test' ).click( function () {
  //         	alert( 'Button Clicked: Event was maintained' );
  //         } );
  //         fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
  //     } )( jQuery );
		});


function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
function getRandomColor() {
	var colorarray = ["#1DE9B6", "#4FD5EE", "#FEFB7A", "#EA6747" ];

	var num = getRandomInt(0, colorarray.length-1);
//exerbia, redsquare, 
			// console.log(num);
			// console.log(colorarray[num]);
// color randomization
			// var letters = '0123456789ABCDEF';
			// var color = '#';
			// for (var i = 0; i < 6; i++ ) {
			// 	color += letters[Math.floor(Math.random() * 16)];
			// }
			return colorarray[num];
		}
		// function shadeColor1(color, percent) {  // deprecated. See below.
		// 	var num = parseInt(color.slice(1),16), 
		// 	amt = Math.round(2.55 * percent), 
		// 	R = (num >> 16) + amt, 
		// 	G = (num >> 8 & 0x00FF) + amt, 
		// 	B = (num & 0x0000FF) + amt;

		// 	return "#" + 
		// 	(0x1000000 + (R<255?R<1?0:R:255)*0x10000 + 
		// 		(G<255?G<1?0:G:255)*0x100 + 
		// 		(B<255?B<1?0:B:255)).toString(16).slice(1);
		// }


		function shadeColor1(hex, percent){
    // strip the leading # if it's there
    hex = hex.replace(/^\s*#|\s*$/g, '');

    // convert 3 char codes --> 6, e.g. `E0F` --> `EE00FF`
    if(hex.length == 3){
        hex = hex.replace(/(.)/g, '$1$1');
    }

    var r = parseInt(hex.substr(0, 2), 16),
        g = parseInt(hex.substr(2, 2), 16),
        b = parseInt(hex.substr(4, 2), 16);

    return '#' +
       ((0|(1>>8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
       ((0|(1>>8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
       ((0|(1>>8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
}

		function addAnimation(){
			$(".scroll, .header-background").css("transition", "background-color 0.5s, color 0.5s");
			$("#menu-primary, #menu-header-horizontal").css("transition", "background-color 0.5s, color 0.5s");
			$("#menu-primary *, #menu-header-horizontal *").css("transition", "background-color 0.5s, color 0.5s");
		}


