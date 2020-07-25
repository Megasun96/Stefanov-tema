       <?php
    /**
     * 
     * HEADER template file
     * 
     * @package Stefanov_tema  
     */
    ?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    	<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    	<header class="site-header">
    		<div class="site-logo"> 
    			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?>"> 
    				<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"> 
    			</a> 
    		</div><!-- end .logo -->
    		<h1 class="site-name"><?php bloginfo('name'); ?></h1>
    		<p class="site-description"><?php bloginfo('description'); ?></p>
    	</header>
    	
    	<nav class="site-nav">
    		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    	</nav>

    	<div class="central">
