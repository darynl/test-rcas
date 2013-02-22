<?php

add_action('wp_ajax_loadMore', 'loadMore');
add_action('wp_ajax_nopriv_loadMore', 'loadMore'); // not really needed

function loadMore() {

    $category = $_GET['category'];
    // get your $_GET variables sorted out

    // setup your query to get what you want

    query_posts( array ( 'category_name' => $category));

    // initialsise your output
    $output = '';

    // the Loop
    if ( have_posts() ){
            $post_count = 0;

            while ( have_posts() ){ 
                the_post();

                if ($post_count % 3 == 0 && $post_count != 0) {
                    echo '</div>';
                    echo '<div class="row-fluid">';
                }

                get_template_part( 'content', get_post_format() );
                $post_count++;

            }
    }

    // Reset Query
    wp_reset_query();

    die($output);

}
?>