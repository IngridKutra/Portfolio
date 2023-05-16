<?php


    function thumbnails(){
        add_theme_support('post-thumbnails');
    }
        add_action('init','thumbnails');
        
        function my_custom_scripts() {
  wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/custom.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
    }
        add_action('wp_enqueue_scripts', 'add_theme_scripts');

   function register_my_menu(){
            register_nav_menus(
                array(
                   'Main-menu' => __( 'main menu' ),  
                   'Hamburgare-menu' => __( 'hamburgare menu' ),
                    )
                );
            }

add_action( 'init', 'register_my_menu' );

        function register_custom_widget_area() {
            register_sidebar(
            array(
            'id' => 'new-widget-area',
            'name' => esc_html__( 'My new widget area', 'theme-domain' ),
            'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>'
            )
            );
			
			  register_sidebar(
            array(
            'id' => 'back_button',
            'name' => esc_html__( 'Back button', 'theme-domain' ),
            'description' => esc_html__( 'Widget for back buttons', 'theme-domain' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>'
            )
            );
			
			  register_sidebar(
                array(
                'id' => 'hamburgare_menu',
                'name' => esc_html__( 'Hamburgare menu', 'theme-domain' ),
                'description' => esc_html__( 'Widget for hamburgare menu list', 'theme-domain' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
                'after_title' => '</h3></div>'
                )
                );
            

            register_sidebar(
                array(
                'id' => 'github_icon',
                'name' => esc_html__( 'github icons widget', 'theme-domain' ),
                'description' => esc_html__( 'Widget for github icon', 'theme-domain' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
                'after_title' => '</h3></div>'
                )
                );
                register_sidebar(
                    array(
                    'id' => 'email_icon',
                    'name' => esc_html__( 'email icons widget', 'theme-domain' ),
                    'description' => esc_html__( 'Widget for email icon', 'theme-domain' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
                    'after_title' => '</h3></div>'
                    )
                    );    
                }
            add_action( 'widgets_init', 'register_custom_widget_area' );

          
?>
