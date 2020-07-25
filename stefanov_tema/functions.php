    <?php

    function stefanovtema_scripts() {
    	wp_enqueue_style( 'stefanovtema-style', get_stylesheet_uri() );
    	wp_enqueue_style( 'stefanovtema-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap&subset=latin-ext' );
    }    

    add_action( 'wp_enqueue_scripts', 'stefanovtema_scripts' );
	
    function stefanovtema_menus() {
      register_nav_menu( 'main-menu', 'Main Menu' );
    }
    add_action( 'after_setup_theme', 'stefanovtema_menus' );
	  function stefanovtema_widgets_init() {
    register_sidebar( array (
    	'name' => __( 'Primary Widget Area'),
    	'id' => 'widget-sidebar',
    	'description' => __( 'The primary widget area'),
    	'before_widget' => '<div id=”%1$s" class="widget-container %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
    ) );

    }
     
    add_action( 'widgets_init', 'stefanovtema_widgets_init' );
  
?>