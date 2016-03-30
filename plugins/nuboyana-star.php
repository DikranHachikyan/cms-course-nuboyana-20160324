<?php
/*
Plugin Name: Nu Boyana Star
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Add s star in post title
Version: 0.1
Author URI: http://ma.tt/
*/

function nb_add_star_in_post_title($title,$id){
    $icon = '<span class="glyphicon glyphicon-star"></span>';
    $ret=$title;
    if( !is_admin()){
        $ret .= $icon;
    }
    return $ret;
}

add_filter('the_title','nb_add_star_in_post_title',10,2);