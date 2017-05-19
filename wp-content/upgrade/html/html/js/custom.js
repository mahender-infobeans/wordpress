/*function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}*/



/*$('.calender-position').click(function() {
  $( "#mySidenav" ).addClass('hello');
});*/
//$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		//$('.input-group #search_param').val(param);
	});
//})

// Without JQuery
//var slider = new Slider("#ex23", {
    //ticks: [0, 1, 2, 3, 4],
	//ticks_positions: [0, 30, 70, 90, 100],
    //ticks_snap_bounds: 200,
	//formatter: function(value) {
		//return 'Current value: ' + value;
	//},
	//ticks_tooltip: true,
	//step: 0.01
//});
// filter pop up javascript function
/*$(document).ready(function() {
    $(".filter-position").click(function(e) {
        $(".filter-popup").toggle();
        e.stopPropagation();
    });

    $(document).click(function(e) {
        if (!$(e.target).is('.filter-popup, .filter-popup *')) {
            $(".filter-popup").hide();
        }
    });
});*/

// filter pop up javascript function
	
$('.filter-position').click(function(){
	$('.filter-popup').toggle();	
	$('.overlay-main').show();	
	
})
$('.overlay-main').click(function(){
	$('.filter-popup').hide();	
	$(this).hide();
	
})
// share popover box
$("[data-toggle=popover]").popover({
    html: true, 
	content: function() {
          return $('#popover-content').html();
        }
});
// arrow drop down block top right
/*$('.arrow-down').click(function(){
	$(this).find('.tl-tooltip').toggle();
})*/
// 5 other javascript function
$('#others-popup').mouseover(function(){
	$(this).find('.others-popup').show();
});
$('#others-popup').mouseout(function(){
	$(this).find('.others-popup').hide();
});
// like button javascript function
$('.fa-thumbs-up').click(function(){
	$(this).toggleClass('icon-active-color');
})
// user drop down javascript function
$('#user-drop-down').mouseover(function(){
	$(this).find('.user-drop-down').show();
});
$('#user-drop-down').mouseout(function(){
	$(this).find('.user-drop-down').hide();
});
// mobile view top menu display javascript function

$('.mobile-view-submenu').click(function(){
	$('ul.username-submenu').toggle();
})
// open modal box for user artical with images javascript function 
$('.open-modal-box').click(function(){
	$('.modal-box').show();
	$('.modal-overlay').show();
});
$('.modal-box-close').click(function(){
	$('.modal-box').hide();
	$('.modal-overlay').hide();
})
// memory page js function for edit, publish and preview
/*$('.memory-btn').click(function(){
	$(this).toggleClass('memory-btn-active');
});*/
// memory modal box jquery function
$('.open-memory-modal').click(function(){
	$('.memory-modal').show();
	$('.memory-overlay').show();
});
$('.memory-modal .modal-box-close').click(function(){
	$('.memory-modal').hide();
	$('.memory-overlay').hide();
});


// open modal box for user artical with images javascript function
	/*alert('1s');
   $("#myCarousel").swiperight(function() {
		  $(this).carousel('prev');
	});
	alert('second');
   $("#myCarousel").swipeleft(function() {
		  $(this).carousel('next');
   });
   alert('done')*/
	   