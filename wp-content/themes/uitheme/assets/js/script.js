
$(document).ready(function(){
	/*Masonry js start	*/	
	$('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: 350,
		isFitWidth: true
	});
	/*Masonry js end	*/


	// tabs arrows
 $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
 $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');


  	$( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
			e.preventDefault();
			$( this ).tab( 'show' );
		} );
  });


function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
function getRandomColor() {
	var colorarray = ["#1DE9B6", "#4FD5EE", "#FEFB7A", "#EA6747" ];

	var num = getRandomInt(0, colorarray.length-1);
			return colorarray[num];
		}

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


//color change home
    var colors = new Array('#00b3b3', '#218b8d', '#286476', '#26a2b0', '#3acead');
            function annoyingEffect(tic){
                tic %= colors.length;
                document.bgColor = colors[tic];
                setTimeout("annoyingEffect("+(tic+1)+")", 4000);
            }

            function annoyingEffectOnDiv(tic, divId){
                tic %= colors.length;
                divVar = document.getElementById(divId);
                divVar.style.background = colors[tic];
                setTimeout("annoyingEffectOnDiv("+(tic+1)+", '"+divId+"')", 4000);
            }

$(document).ready(function(){
$( "#home" ).ready(function() {
 annoyingEffect(0); annoyingEffectOnDiv(2, 'divtest');
});

});