<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Clean Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3 col-md-2 sidebar">
                    <div id="navegation-menu">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="avatar-logo" src="<?php bloginfo('template_url'); ?>/img/avatar.png">
                            </div>
                            <div class="col-sm-9">
                                <h1>Alejandro Sanchez</h1>
                                <p class="twitter-contact"><a href="http://www.twitter.com/alesanchezr">@alesanchezr</a></p>
                                <p class="description">Entrepenurial and surviving thoughts from a passionate developer.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                        </div>
                        <?php wp_nav_menu( array(
                            'theme_location' => 'main_menu', 
                            'container'=>'div','container_class'=>'row horizontal-menu', 
                            'menu_class'=>'nav nav-pills nav-stacked')); 
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
	
	<?php cleanblog_header(); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
