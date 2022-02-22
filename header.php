<?php
/**
 * The theme header.
 * 
 * @package bootstrap-affiliate
 */
$full_width_header = get_field('full_width_header');
$header_image_height = get_field('header_image_height');
$header_image_hieght_units = get_field('header_image_max_hieght_units');

$full_width_content = get_field('full_width_content');

$container_class = apply_filters('bootstrap_basic4_container_class', 'container');
if (!is_scalar($container_class) || empty($container_class)) {
      $container_class = 'container';        
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!--WordPress head-->
        <?php wp_head(); ?> 
        <!--end WordPress head-->
    </head>
    <body <?php body_class(); ?>>
        <?php
        if (function_exists('wp_body_open')) {
           wp_body_open();
        }
        ?> 
        <div class="<?php if( !$full_width_header  ) {echo $container_class;} ?> page-container">
            <header class="m-0 sticky-top page-header page-header-sitebrand-topbar">
                
            <div class="m-0 row row-with-vspace site-branding">
                    <div class=" m-0 col-md-6 page-header-top-right">
                        <div class="sr-only">
                            <a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-affiliate'); ?>"><?php _e('Skip to content', 'bootstrap-affiliate'); ?></a>
                        </div>
                        <?php if (is_active_sidebar('header-right')) { ?> 
                        <div class="float-right">
                            <?php dynamic_sidebar('header-right'); ?> 
                        </div>
                        <div class="clearfix"></div>
                        <?php } // endif; ?> 
                    </div>
                </div> <!--.site-branding-->
                <?php if (has_nav_menu('primary') || is_active_sidebar('navbar-right')) { ?> 
                <div class="row main-navigation">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bootstrap-affiliate-topnavbar" aria-controls="bootstrap-affiliate-topnavbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'bootstrap-affiliate'); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                                <?php 
                                wp_nav_menu(
                                    [
                                        'depth' => '2',
                                        'theme_location' => 'primary', 
                                        'container' => false, 
                                        'menu_id' => 'bb4-primary-menu',
                                        'menu_class' => 'navbar-nav ml-auto', 
                                        'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                    ]
                                ); 
                                ?> 
                                <div class="float-lg-right">
                                    <?php dynamic_sidebar('navbar-right'); ?> 
                                </div>
                                <div class="clearfix"></div>
                            </div><!--.navbar-collapse-->
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                </div><!--.main-navigation-->
                <?php } else { ?> 
                <!-- the navigation is skipped due to there is no menu or active widgets on navbar-right. -->
                <?php }// endif; ?> 
            </header><!--.page-header-->

            <?php 

$header_image = get_field('header_image'); // assigns the image field to the variable of $image

if( !empty($header_image) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
    <img style="height:<?php echo $header_image_height . $header_image_hieght_units; ?>" class="d-block d-md-none img-fluid w-100" src="<?php echo $header_image['url']; ?>" alt="<?php echo $header_image['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
    <div style="height:<?php echo $header_image_height . $header_image_hieght_units; ?>; background: url(<?php echo $header_image['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;" class="d-none d-md-block"></div>
<?php }; ?> <!--ends the if statement -->
            <div id="content" class="<?php if( !$full_width_content  ) {echo $container_class;} ?> site-content pt-4">