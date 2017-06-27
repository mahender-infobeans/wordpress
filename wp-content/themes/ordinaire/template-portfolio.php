<?php /* Template Name: template-portfolio */ ?>
<?php get_header(); ?>
<style type="text/css">
    <?php $page_background = get_post_custom_values("page-background")[0] == "" ? '#FFFA78' : get_post_custom_values("page-background")[0]; ?>
    <?php $page_font = get_post_custom_values("header-font")[0] == "" ? '#333' : get_post_custom_values("header-font")[0]; ?>
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
    .footer,.footer a.infobeans-footer{
        background-color: <?php echo $page_background; ?>;
        color: <?php echo $page_font; ?>;
    }
</style>
<script type="text/javascript">
  (function($){
    var ordinaire_colorx = shadeColor1("<?php echo $page_background; ?>",85);
    var ordinaire_element ="<style>.menu-horizontal li a:hover{"+
    "background-color: "+ ordinaire_colorx +";"+
    "box-shadow: 0px 0px 13px 0px "+ ordinaire_colorx +" inset;" +
    "}"+
    ".current-menu-item{"+
    "background-color: "+ ordinaire_colorx+
    "}" +
    "</style>";
    $("head").append(ordinaire_element);
}(jQuery));
</script>
<!-- 2nd page header -->
<div class="aboutus-header ordinaire-bgcolor-yellow">	
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="about-text text-trans ordinaire-color-darkgray">Portfolio</h2>
                <h1 class="we-text ordinaire-color-darkgray"> <?php echo get_post_custom_values("title_page")[0] == "" ? 'Stay Connected...' : get_post_custom_values("title_page")[0]; ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center work-div">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->

            <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
    </div>
</div>
<div class="aboutus-header">	
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <?php $args = array('post_type' => 'projects');
                $loop = new WP_Query($args); ?>
                <?php $ab = wp_count_posts("projects"); ?> 
                <?php if ($ab->publish == 0) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="box-portfolio  portfolio-box-hover" style="background-image: url( /wp-content/themes/ordinaire/assets/images/port-img.png );">
                            <div class="overlay overlay-projects">
                                <div class="text">
                                    <h3 class="fade-in-out" >ADD PROJECTS...</h3>
                                    <p class="show-hover"> The added projects will be appear here!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="box-portfolio  portfolio-box-hover" style="background-image: url( /wp-content/themes/ordinaire/assets/images/port-img.png );">
                            <div class="overlay overlay-projects">
                                <div class="text">
                                    <h3 class="fade-in-out" >ADD PROJECTS...</h3>
                                    <p class="show-hover"> The added projects will be appear here!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt15">
                        <?php if (has_post_thumbnail()) { // check if the post has a Thumbnail assigned to it. ?>

                        <div class="box-portfolio portfolio-box-hover"
                        style="background-image: url( 
                            <?php esc_url(the_post_thumbnail_url()); ?>
                           );">
                           <div class="overlay overlay-projects">
                            <div class="text">
                                <h3><span class="fade-in-out" ><?php the_title(); ?></span></h3>
                                <div class="show-hover">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if (!has_post_thumbnail()) { // check if  the post has not Thumbnail assigned to it. ?>

                    <div class="box-portfolio portfolio-box-hover" 
                    style="background-image: url( /wp-content/themes/ordinaire/assets/images/port-img.png );">
                    <div class="overlay overlay-projects">
                        <div class="text">
                            <h3><span class="fade-in-out" ><?php the_title(); ?></span></h3>
                            <div class="show-hover">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        <?php endwhile; ?>

        <!-- repeat block end -->
    </div>


</div>
</div>
</div>

<?php get_footer(); ?>
