<?php   

if(! function_exists('white_black_setup') ) :
    function white_black_setup(){

        load_theme_textdomain( 'white_black', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'audio',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'chat'
        ));
        add_theme_support( 'customize-selective-refresh-widgets' );

        register_nav_menus(array( 
            'primary'   =>  __('Primary Menu', 'white_black'),
            'footer'    =>  __('Footer Menu', 'white_black')
        ));

    }
endif;
add_action( 'after_setup_theme', 'white_black_setup' );


if(! function_exists('white_black_assets')) :
    function white_black_assets(){

        wp_enqueue_style( 'white_black_style', get_stylesheet_uri(), array(), 'all' );
        
    }
endif;
add_action('wp_enqueue_scripts', 'white_black_assets');


function white_black_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'white_black' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'white_black' ),
		'before_widget' => '<div id="%1$s" class="sidebar1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Another Sidebar', 'white_black' ),
		'id'            => 'sidebar2',
		'description'   => esc_html__( 'Add widgets here.', 'white_black' ),
		'before_widget' => '<div id="%1$s" class="sidebar2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'white_black_widgets_init' );


if( file_exists( dirname(__FILE__) . '/lib/tgm.php') ) {
    require_once dirname(__FILE__) . '/lib/tgm.php';
}