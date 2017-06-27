/* 
 * Theme Javsacript Document
 */

 (function ($) {

    $(document).ready(function () {

        /* Masonry js start */
        $('.grid').masonry({
            itemSelector: '.grid-item',
            columnWidth: 350,
            isFitWidth: true
        });
        /*Masonry js end */

        // tabs arrows
        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');

        $('ul.nav.nav-tabs  a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });

        

    });

}(jQuery));
