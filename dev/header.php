<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ceylon_blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! ceylon_blog_is_amp() ) : ?>
        <script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ceylon-blog' ); ?></a>
    <header id="masthead" class="site-header">
        <div class="top-bar row">
            <div class="col col-20">
		        <?php if ( has_header_image() ) : ?>
                    <figure class="header-image">
				        <?php the_header_image_tag(); ?>
                    </figure>
		        <?php endif; ?>
                <div class="site-branding">
			        <?php the_custom_logo(); ?>
			        <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                  rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			        <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                 rel="home"><?php bloginfo( 'name' ); ?></a></p>
			        <?php endif; ?>

			        <?php $ceylon_blog_description = get_bloginfo( 'description', 'display' ); ?>
			        <?php if ( $ceylon_blog_description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $ceylon_blog_description; /* WPCS: xss ok. */ ?></p>
			        <?php endif; ?>
                </div><!-- .site-branding -->
            </div>
            <div class="col">
                <nav id="site-navigation" class="main-navigation"
                     aria-label="<?php esc_attr_e( 'Main menu', 'ceylon-blog' ); ?>"
		            <?php if ( ceylon_blog_is_amp() ) : ?>
                        [class]=" siteNavigationMenu.expanded ? 'main-navigation toggled-on' : 'main-navigation' "
		            <?php endif; ?>
                >
		            <?php if ( ceylon_blog_is_amp() ) : ?>
                        <amp-state id="siteNavigationMenu">
                            <script type="application/json">
                                {
                                    "expanded": false
                                }
                            </script>
                        </amp-state>
		            <?php endif; ?>

                    <button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'ceylon-blog' ); ?>"
                            aria-controls="primary-menu" aria-expanded="false"
			            <?php if ( ceylon_blog_is_amp() ) : ?>
                            on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
                            [aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
			            <?php endif; ?>
                    >
			            <?php esc_html_e( 'Menu', 'ceylon-blog' ); ?>
                    </button>

                    <div class="primary-menu-container">
			            <?php

			            wp_nav_menu(
				            array(
					            'theme_location' => 'primary',
					            'menu_id'        => 'primary-menu',
					            'container'      => 'ul',
				            )
			            );

			            ?>
                    </div>
                </nav><!-- #site-navigation -->
            </div>
        </div>
    </header><!-- #masthead -->
