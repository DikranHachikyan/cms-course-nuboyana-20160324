<?php
/*
Plugin Name: Nu Boyana Visitors
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Update the number of visitors
Version: 0.1
Author URI: http://ma.tt/
*/

function nb_visitors_count(){
    global $post;
    $total = '';
    if( is_single() && !is_admin()){
        $total = get_post_meta( $post->ID,'visitors',true);
        if( $total == '')//няма такова поле
        {    
            $total=0;
        }
        $total++;
        update_post_meta($post->ID,'visitors',$total);
        echo '<p>Visitors:'.$total.'</p>';
    }
}

add_action('wp_head','nb_visitors_count');