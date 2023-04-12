<?php


function background_img(){
add_theme_support(
    'custom-background', apply_filters(
        'shapely_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )
    )
);}

add_action( 'after_setup_theme', 'background_img' );


    function thumbnails(){
        add_theme_support('post-thumbnails');
    }
        add_action('init','thumbnails');

    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
    }
        add_action('wp_enqueue_scripts', 'add_theme_scripts');

   function register_my_menu(){
            register_nav_menus(
                array(
                   'Main-menu' => __( 'main menu' ),  
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
