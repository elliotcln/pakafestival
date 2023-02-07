<?php

/**
 * Get the breadcrumb
 *
 * @param string $theme
 * @return breadcrumb
 */
function the_breadcrumb($post_ID)
{

    $separator = "&rsaquo;";
    $bread = '';

    $bread .= '<nav class="breadcrumb" aria-label="Fil d\'ariane">';
    $bread .= '<ol>';
    $bread .= '<li><a href="' . get_bloginfo('url') . '"><span>' . get_bloginfo('name') . '</span></a></li>';
    $bread .= '<li aria-hidden="true"><span>' . $separator . '</span></li>';
    $attrs = '';
    if (get_permalink(get_the_ID()) === get_the_permalink()) {
        $attrs .= 'aria-current="page"';
    }
    if (is_single()) {
        $blog_id = get_option('page_for_posts');
        $bread .= '<li><a href="' . get_permalink($blog_id) . '"><span>' . get_the_title($blog_id) . '</span></a></li>';
        $bread .= '<li aria-hidden="true"><span>' . $separator . '</span></li>';
    }
    // if (is_home()) {
    //     $blog_id = get_option('page_for_posts');
    //     $bread .= '<li><a href="' . get_permalink($blog_id) . '"><span>' . get_the_title($blog_id) . '</span></a></li>';
    // }
    $bread .= '<li ' . $attrs . '><span>' . get_the_title($post_ID) . '</span></li>';
    $bread .= '</ol>';
    $bread .= '</nav>';

    echo $bread;
}
