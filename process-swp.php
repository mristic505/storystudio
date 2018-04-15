<?php

ini_set("log_errors", 1);
ini_set("error_log", "wp-content/themes/html5blank-stable/php-error.log");
error_log( "Hello, errors!" );

require_once( "../../../wp-load.php" );

global $post;

$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data

$query = $_POST['swpquery'];
$category = $_POST['category'];
$tag = $_POST['tag'];
$result ='';


// return a response ===========================================================

// if there are any errors in our errors array, return a success boolean of false
if (!empty($errors)) {
    
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
    
    
} else {
    
    if (class_exists('SWP_Query')) {
        
        $engine    = 'default'; // taken from the SearchWP settings screen
        $post_type = array(
            'attachment'
        );
        
        // Taxonomy ========
        if($category == 'all')
            $category = array('self-portrait', 'collage', 'storytelling', 'additional', 'additional');
        $tax_query = array( 
            'relation' => 'AND',
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $category,
            )
        );

        // If tags are selected =======
        if (!empty($tag)) {
            $tags = array();
            foreach ($tag as $t) {
                $tag_to_query = array(
                    'taxonomy' => 'post_tag',
                    'field'    => 'slug',
                    'terms'    => $t
                );
                array_push($tax_query, $tag_to_query);
            }
        }
        
        // If Search Term Exists ========
        if(!empty($query)){

            // Main Search Query
            $main_query = array(
                's' => $query,
                'engine' => $engine,
                'page' => $swppg,
                'posts_per_page' => -1,
                'post_type' => $post_type,
                'tax_query' => $tax_query
            );

        // Loop Output ==========    

            $swp_query = new SWP_Query($main_query);

            if (isset($swp_query) && !empty($swp_query->posts)) {
                foreach ($swp_query->posts as $post) {
                    setup_postdata($post); 

                    // output the result            
                    $result .= '<div class="search_item vinquiry">';
                        $result .= '<a target="_blank" href="'.wp_get_attachment_url().'">';
                            $result .=  '<div style="background-image: url('.get_the_post_thumbnail_url().')" class="thumb_holder"></div>';
                            if(get_field('artis_name'))
                                $result .=  '<div class="artist_name">'.get_field('artis_name').'</div>';
                            $result .=  '<div class="artwork_title">'.get_the_title().'</div>';
                            $result .=  '<div class="year_made">'.get_field('year_made').'</div>';
                        $result .= '</a>';
                    $result .=  '</div>';
                    
                }
                wp_reset_postdata();
            } else {
                $result = '<h3>No results were found for you search criteria.</h3>';
            }
        
        // If Search Term Does Not Exist ========
        } else {

            // Main Search Query
            $main_query = array(                
                'post_status' => 'any',                
                'posts_per_page' => -1,
                'post_type' => $post_type,
                'tax_query' => $tax_query
            );

            $regular_query = new WP_Query($main_query);

            // The Loop
            if ( $regular_query->have_posts() ) {                
                while ( $regular_query->have_posts() ) {
                    $regular_query->the_post();
                    
                    // output the result            
                    $result .= '<div class="search_item vinquiry">';
                        $result .= '<a target="_blank" href="'.wp_get_attachment_url().'">';
                            $result .=  '<div style="background-image: url('.get_the_post_thumbnail_url().')" class="thumb_holder"></div>';
                            if(get_field('artis_name'))
                                $result .=  '<div class="artist_name">'.get_field('artis_name').'</div>';
                            $result .=  '<div class="artwork_title">'.get_the_title().'</div>';
                            $result .=  '<div class="year_made">'.get_field('year_made').'</div>';
                        $result .= '</a>';
                    $result .=  '</div>';

                }                
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                $result = '<h3>No results were found for you search criteria.</h3>';
            }
        }       
    }
    

    // $result = $array1;
    
    $data['success'] = true;
    $data['message'] = $result;
    
}

echo json_encode($data);

?>