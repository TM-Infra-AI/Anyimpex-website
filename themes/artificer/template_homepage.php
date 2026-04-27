<?php
/**
 * Template Name: Home Page
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


			<?php /* -------code to show recently added products on home page---------   */ ?>

        <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                        

                        <a class="mm_prdct" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                        	   

                        </a>

                        <!--<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>-->
                    <!-- /span3 -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    
</section><!-- /#main -->





<?php woo_main_after(); ?>
<?php get_sidebar(); ?>


</div><!-- /#content -->



<?php get_footer(); ?>