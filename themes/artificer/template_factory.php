<?php
/**
 * Template Name: Factory Page
 *
 * The contact form page template displays the a
 * simple contact form in your website's content area.
 *
 * @package WooFramework
 * @subpackage Template
 */
 global $woo_options;
 get_header();?> 
<div id="content" class="col-full">

<?php woo_main_before(); ?>

<section id="main" class="fullwidth">
	 <article id="factory-page" class="page type-page con-main-page" >
	
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

				<div class="info"><?php /* ----addeddddddddddddddddddd----*/?>
                            <h1>ISHA EXPORTS</h1>
                            (Quarry Owners &amp; Exporters)
                            
                            <h4>Unit-1</h4>
                            <div class="fact-boxbg">
                            Mandi Ateli<br>
                            Distt. -Mohindergarh<br>
                            Haryana--India</div>
                            
                            <h4>Unit-2</h4>
                            <div class="fact-boxbg">
                          	Kishan Nagar<br>
                            On Delhi-Khetri Highway<br>
                            5 Miles Stone,<br>
                            Mandi Ateli<br>
                            Distt.--Mohindergarh<br>
                            Haryana-India</div>
                            
                            <h4>Unit-3</h4>
                            <div class="fact-boxbg">
                            Silora<br>
                            On Jaipur-Ajmer National Highway<br>
                            Kishan Garh<br>
                            Rajasthan-India</div>
                     </div>  
			

   </article> 
</section><!-- /#main -->





<?php woo_main_after(); ?>
<?php get_sidebar(); ?>


</div><!-- /#content -->



<?php get_footer(); ?>