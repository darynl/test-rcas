<?php 
add_theme_support( 'post-thumbnails' );

function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Make excerpts show with html encoded.
 *
 * @since RCAS 0.1.0
 */
function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<p>');
                $excerpt_length = 30;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '[...]');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');

/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since RCAS 0.1.0
 */
function rcas_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'rcas' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'rcas' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'rcas_widgets_init' );

/*
 * Widget to display photos from gallery.
 *
 * @since RCAS 0.1.0
*/
class RCAS_Photo_Widget extends WP_Widget {
    
    public function __construct() {
        // widget actual processes
        parent::__construct(
            'rcas_photo_widget', // Base ID
            'RCAS Photo Widget', // Name
            array( 'description' => __( 'A RCAS Photo Widget', 'text_domain' ), ) // Args
        );
    }

    public function form( $instance ) {
        // outputs the options form on admin
    }

    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }

    public function widget( $args, $instance ) {
        // outputs the content of the widget
    }

}
register_widget('RCAS_Photo_Widget');
add_action( 'widgets_init', create_function( '', 'register_widget( "rcas_photo_widget" );' ) );
?>