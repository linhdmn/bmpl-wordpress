<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!--wordpress head-->
        <?php wp_head(); ?> 
        <!--end wordpress head-->
    </head>
    <body <?php body_class(); ?>>
        <div class="container page-container">
            <header class="page-header page-header-sitebrand-topbar">
                <div class="card row row-with-vspace site-branding bg-transparent">
                    <img class="card-img" src="<?= get_template_directory_uri(); ?>/assets/img/banner_01.png" alt="Card image cap">
                    <div class="card-img-overlay col-md-6 site-title">
                        <h1 class="site-title-heading">
                            <a class="tittle" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                        <div class="site-description">
                            <small class="text-white">
                                <?php bloginfo('description'); ?> 
                            </small>
                        </div>
                    </div>
                    <div class="col-md-6 page-header-top-right">
                        <div class="sr-only">
                            <a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic4'); ?>"><?php _e('Skip to content', 'bootstrap-basic4'); ?></a>
                        </div>
                        <?php if (is_active_sidebar('header-right')) { ?> 
                        <div class="float-right">
                            <?php dynamic_sidebar('header-right'); ?> 
                        </div>
                        <div class="clearfix"></div>
                        <?php } // endif; ?> 
                    </div>
                </div><!--.site-branding-->
                <div class="row main-navigation">
                    <div class="col-md-12">

                            <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                                <?php 
                                wp_nav_menu(
                                    array(
                                        'depth' => '2',
                                        'theme_location' => 'primary', 
                                        'container' => false, 
                                        'menu_class' => 'navbar-nav mr-auto', 
                                        'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                    )
                                ); 
                                ?> 
                                <div class="float-md-right">
                                    <?php dynamic_sidebar('navbar-right'); ?> 
                                </div>
                                <div class="clearfix"></div>
                            </div><!--.navbar-collapse-->
                            <div class="clearfix"></div>
                            
                        </nav>
                    </div>
                </div><!--.main-navigation-->
                
            </header><!--.page-header-->
            <div id="content" class="site-content row row-with-vspace">