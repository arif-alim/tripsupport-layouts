<?php

function str_word_count_utf8(string $str = ""): string
{
    return count(preg_split('~[^\p{L}\p{N}\']+~u', $str));
}
/**
 * @param string $content
 * @param bool $echo
 * @return string
 */
function reading_time_article(string $content = "", bool $echo = true): string
{
    $word = str_word_count_utf8(strip_tags($content));
    $m = floor($word / 200);
    $s = floor($word % 200 / (200 / 60));
    $phrase = ($m >= 1 ? $m .' min' : $s .' s');

    if($echo) echo $phrase;

    return $phrase;
}
function get_post_view($post_id){

    if(intval($post_id)){

        $post_view = get_post_meta($post_id,'views',true);
        return intval($post_view);

    }

    return 0;

}
function set_post_view($post_id){

    if( intval( $post_id ) ){

        $views = get_post_view($post_id);
        $views++;
        update_post_meta($post_id,'views',$views);
    }

}

