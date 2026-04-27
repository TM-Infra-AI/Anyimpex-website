<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
 
 global $woo_options;
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="icon" type="image/png" sizes="32x32" href="https://dev.marketingmindz.com/wpthemes/anyimpex/wp-content/themes/artificer/images/image/favicon-32x32.png">

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
	wp_head();
	woo_head();
?>

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">

	<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>

	<div id="top">
		<nav class="col-full" role="navigation">
			<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
		</nav>
       
	</div><!-- /#top -->
    

    <?php } ?>
    
    <?php woo_header_before(); ?>

	<header id="header" class="col-full" >
	  <div class="container">
		  <div class="new-logo">  
		    <hgroup>
		        
		        <?php
				    $logo = get_template_directory_uri() . '/images/image/logo_isha.png';
					if ( isset( $woo_options['woo_logo'] ) && $woo_options['woo_logo'] != '' ) { $logo = $woo_options['woo_logo']; }
					if ( isset( $woo_options['woo_logo'] ) && $woo_options['woo_logo'] != '' && is_ssl() ) { $logo = preg_replace("/^http:/", "https:", $woo_options['woo_logo']); }
				?>
	            
				<?php
				
				if ( ! isset( $woo_options['woo_texttitle'] ) || $woo_options['woo_texttitle'] != 'true' ) { ?>
				    <a id="logo" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?>">
				    	<img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
				    </a>
			    <?php } ?>
	            
		        
				<h1 class="site-title <?php if ( $woo_options['woo_texttitle'] == 'true' ) { echo 'visible'; } ?>">
	                <a href="<?php bloginfo( 'url' ); ?>">
	                	<?php if(bloginfo( 'name' )=='')
						{ ?>
	                    <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" class="mm_logo_img" /> 
	                    <?php }   else { bloginfo( 'name' ); } ?>
						
	                    
	                </a>
	                
	            </h1>
				<p class="site-description <?php if ( $woo_options['woo_tagline'] == 'true' ) { echo 'visible'; } ?>"><?php bloginfo( 'description' ); ?></p>
			      	
			</hgroup>

			<?php if ( isset( $woo_options['woo_ad_top'] ) && $woo_options['woo_ad_top'] == 'true' ) { ?>
	        <div id="topad">
				<?php
					if ( isset( $woo_options['woo_ad_top_adsense'] ) && $woo_options['woo_ad_top_adsense'] != '' ) {
						echo stripslashes( $woo_options['woo_ad_top_adsense'] );
					} else {
						if ( isset( $woo_options['woo_ad_top_url'] ) && isset( $woo_options['woo_ad_top_image'] ) )
				?>
					<a href="<?php echo $woo_options['woo_ad_top_url']; ?>"><img src="<?php echo $woo_options['woo_ad_top_image']; ?>" width="468" height="60" alt="advert" /></a>
				<?php } ?>
			</div><!-- /#topad -->
		</div>
        <?php } ?>
        
        <?php //woo_nav_before(); ?> <?php /* comment because this function is for cart show*/ ?></div>
     <!-- <div class="visitus"><h4>VISIT US AT</h4><p class="acd">BANGLORE--INDIA<br>
		STONA 2018<br>
		7th. -10th. Feb. 2018<br>
		HALL NO. 1 STALL NO. 21 (A)</p></div>    -->
     <div class="new-navig">   <h3 class="nav-toggle"><a href="#navigation"><?php _e('Main navigation', 'woothemes'); ?></a></h3>

		<nav id="navigation" class="col-full" role="navigation">
			
			<?php
			if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) );
			} else {
			?>
	        <ul id="main-nav" class="nav fl">
				<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
				<li class="<?php echo $highlight; ?>"><a href="<?php echo home_url( '/' ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
				<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
			</ul><!-- /#nav -->
	        <?php } ?>
	
		</nav><!-- /#navigation -->
		 <!----------------------<div class="main_line">
        	<h1 class="naturally-text">"Only The Best" Naturally</h1>
        </div>-->
		<?php woo_nav_after(); ?></div>
	
	</header><!-- /#header -->
		
	<?php woo_content_before(); ?>
