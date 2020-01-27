<?php 

/* Theme Setup */
if(! function_exists("launcher_setup")):
    function launcher_setup(){
        load_theme_textdomain("launcher", get_template_directory() . '/languages');

        add_theme_support("title-tag");
        add_theme_support("post-thumbnails");
    }
endif;
add_action("after_setup_theme", "launcher_setup");

if(site_url() == "http://localhost/theme"){
    define("VERSION", time());
}else {
    define("VERSION", wp_get_theme()->get("Version"));
}

/* Assets Management */
if(! function_exists("launcher_assets")):
    function launcher_assets(){
        wp_enqueue_style("gfonts", "//fonts.googleapis.com/css?family=Open+Sans:400,700,800", array(), "1.0", "all");

        wp_enqueue_style("launcher_animate_css", get_theme_file_uri("/assets/css/animate.css"), array(), "1.0", "all");
        wp_enqueue_style("launcher_icomoon_css", get_theme_file_uri("/assets/css/icomoon.css"), array(), "1.0", "all");
        wp_enqueue_style("launcher_bootstrap_css", get_theme_file_uri("/assets/css/bootstrap.css"), array(), "1.0", "all");
        wp_enqueue_style("launcher_style_css", get_theme_file_uri("/assets/css/style.css"), array(), "1.0", "all");
        wp_enqueue_style("launcher_main_style", get_stylesheet_uri(), array(), VERSION, "all");

        wp_enqueue_script("launcher_easing", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array("jquery"), "1.0", true);
        wp_enqueue_script("launcher_bootstrap_js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), "1.0", true);
        wp_enqueue_script("launcher_waypoints_js", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array("jquery"), "1.0", true);
        wp_enqueue_script("launcher_Countdown_js", get_theme_file_uri("/assets/js/simplyCountdown.js"), array("jquery"), "1.0", true);
        wp_enqueue_script("launcher_main_js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), VERSION, true);

        $launcher_day = get_post_meta(get_the_ID(), "day", true);
        $launcher_month = get_post_meta(get_the_ID(), "month", true);
        $launcher_year = get_post_meta(get_the_ID(), "year", true);

        wp_localize_script("launcher_main_js", "data", array( 
            "day"   =>  $launcher_day,
            "month" =>  $launcher_month,
            "year"   =>  $launcher_year
        ));

    }
endif;
add_action("wp_enqueue_scripts", "launcher_assets");



function launcher_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Left', 'launcher' ),
        'id'            => 'footer_left',
        'description'   => esc_html__( 'Add widgets here.', 'launcher' ),
        'before_widget' => '<div id="%1s" class="footer-left %2s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Right', 'launcher' ),
        'id'            => 'footer_right',
        'description'   => esc_html__( 'Add widgets here.', 'launcher' ),
        'before_widget' => '<div id="%1s" class="footer-right %2s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'launcher_widgets_init' );


function launcher_head_style(){
    if(is_page()){
        $featured_img = get_the_post_thumbnail_url( null, "large" );
        ?>
        <style>
            .home-img {
                background-image: url(<?php echo $featured_img; ?>);
            }
        </style>
        <?php 
    }
}
add_action("wp_head", "launcher_head_style");