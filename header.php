<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real_s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header-wrapper section">
	    <div class="header-top bg-theme-two section border-bm-1">
	        <div class="container">
	            <div class="row align-items-center">
	                <div class="col-lg-9 col-md-9">
	                    <div class="header-top-info">
	                        <p class="text-white">
	                        	<?php 
	                        		for($i=1;$i<=3;$i++): 
	                        		  if($texto = get_theme_mod("texto_icono_$i")):
	                        	?>
		                        	<i class="<?php echo get_theme_mod("topbar_icon_$i") ?> ml-4"></i>
		                        	<?php echo $texto; ?>
		                        	
	                        	<?php endif;endfor; ?>
	                        </p>
	                    </div>
	                </div>
	                
	                <div class="col-lg-3 col-md-3">
	                    <div class="header-buttons">
	                        <a class="header-btn btn" href="add-property.html">Agregar Propiedad</a>
	                        <?php if(is_user_logged_in()): ?>
	                       		 <a class="header-btn text-white" href="<?php echo wp_logout_url(get_permalink()) ?>">Salir</a>
	                       	<?php else: ?>
	                       		 <a class="header-btn text-white" href="<?php echo wp_login_url(get_permalink()) ?>">Ingresar</a>
	                       	<?php endif; ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>


	    <div class="header-section section ">
	        <div class="container">
	            <div class="row align-items-center">

	                <div class="col-lg-2 col-6">
	                    <div class="header-logo">
	                        <?php
	                        if(has_custom_logo() ):
	                            the_custom_logo();
	                        else:
	                            if ( is_front_page() && is_home() ) :
	                                ?>
	                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	                                <?php
	                            else :
	                                ?>
	                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                                <?php
	                            endif;
	                        endif;
	                        ?>
	                    </div>
	                </div>

	                <div class="col-lg-10 col-6">
	                    <div class="header-mid_right-bar">
	                        <nav class="main-menu  d-lg-block d-none py-4">
	                            <?php
		                            wp_nav_menu( array(
		                                'theme_location' => 'menu-1',
		                                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
		                                // 'container'       => 'div',
		                                // 'container_class' => 'collapse navbar-collapse',
		                                // 'container_id'    => 'bs-example-navbar-collapse-1',
		                                'menu_class'      => 'd-flex',
		                                'menu_id'      => ' ',
		                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		                                'walker'          => new WP_Bootstrap_Navwalker(),
		                            ) );
	                            ?>
	                        </nav>
	                        <!-- <div id="search-overlay-trigger" class="search-icon">
	                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
	                        </div> -->
	                    </div>
	                </div>

	                <!-- Mobile Menu -->
	                <div class="mobile-menu white-m-bar order-12 d-block d-lg-none col"></div>

	            </div>
	        </div>
	    </div><!-- Header Section End -->
	</header>

	<div id="content" class="site-content">
