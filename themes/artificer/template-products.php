<?php
/**
 * Template Name: products
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
	<article class="post-26 page type-page status-publish hentry">

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
		
        
	
		

	
       <div class="menu-categs-box">	
			<?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC', 'include'=>'46', 'parent' =>0)); //, 'exclude' => '17,77'
				foreach($wcatTerms as $wcatTerm) :
				
					$wthumbnail_id = get_woocommerce_term_meta( $wcatTerm->term_id, 'thumbnail_id', true );
					$wimage = wp_get_attachment_url( $wthumbnail_id );
					
				?>
				
						
						<?php
						$wsubargs = array(
						   'hierarchical' => 1,
						   'show_option_none' => '',
						   'hide_empty' => 0,
						   'parent' => $wcatTerm->term_id,
						   'taxonomy' => 'product_cat'
						);
						$wsubcats = get_categories($wsubargs);
						foreach ($wsubcats as $wsc):
						?>
							 
         				<?php //echo "<pre>";print_r($wsc) ;?>
                        
                        <?php  //global $post; $post_slug=$post->post_name; echo $post_slug; 
						//$category = get_the_category();
						//$cat_id = $wsc->cat_ID;
						//echo $cat_id;
						//print_r(get_category_children($cat_id));?>
                
                            <?php $wthumbnail_id = get_woocommerce_term_meta( $wsc->term_id, 'thumbnail_id', true );
								$wimage = wp_get_attachment_url( $wthumbnail_id );
							 
                             echo '<div class="catbox">';
                			 echo '<div class="catgories"><a href="'. get_term_link($wsc->slug, 'product_cat') .'"><img src="'.$wimage.'" class="mm_categoy_images"  /></a></div>';
							 echo '<div class="catgories"<a href="'. get_term_link($wsc->slug, 'product_cat') .'" class="mm_category_names">'. $wsc->name .'</a></div>';
echo '</div>';
                            
                            ?>
                            
						<?php
						endforeach;
						?>  
						</ul>
					</li>
				</ul>
			<?php 
				endforeach; 
			?>
            
		</div>
       
         <?php wp_reset_query(); ?>
	</article>
		
</section><!-- /#main -->





<?php woo_main_after(); ?>
<?php get_sidebar(); ?>


</div><!-- /#content -->



<?php get_footer(); ?>