<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="containter">
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
		<div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-2 main">