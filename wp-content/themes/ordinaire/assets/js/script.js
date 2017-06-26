
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


		function addAnimation(){
			$(".scroll, .header-background").css("transition", "background-color 0.5s, color 0.5s");
			$("#menu-primary, #menu-header-horizontal").css("transition", "background-color 0.5s, color 0.5s");
			$("#menu-primary *, #menu-header-horizontal *").css("transition", "background-color 0.5s, color 0.5s");
		}


//color change home
    var colors = new Array('#00b3b3', '#218b8d', '#286476', '#26a2b0', '#3acead');
            function colorChange(tic){
                tic %= colors.length;
                document.bgColor = colors[tic];
                setTimeout("colorChange("+(tic+1)+")", 4000);
            }

            function colorChangeOnDiv(tic, divId){
                tic %= colors.length;
                divVar = document.getElementById(divId);
                divVar.style.background = colors[tic];
                setTimeout("colorChangeOnDiv("+(tic+1)+", '"+divId+"')", 4000);
            }

$(document).ready(function(){
$( "#home" ).ready(function() {
    if($("#divtest").length == 1){
        colorChange(0); colorChangeOnDiv(2, 'divtest');
    }
 
});

});

