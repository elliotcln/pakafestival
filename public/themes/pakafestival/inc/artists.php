<?php

// register artists custom type
add_action('init', function () {

    register_post_type('artists', array(
        'labels' => [
            'name' => __('Artistes'),
            'singular_name' => __('Artiste'),
            'all_items' => __('Tous les artistes'),
            'add_new' => __('Ajouter un artiste')
        ],
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-groups',
        'public' => true,
        'has_archives' => true,
        'rewrite' => array('slug' => 'artistes'),
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'supports' => ['title', 'thumbnail', 'custom-fields', 'page-attributes']
    ));
});

// get artists shortcode
function shortcode_get_artists($attrs)
{
    $attrs = shortcode_atts(
        [
            'year' => date('Y'),
            'category' => null
        ],
        $attrs
    );

    $args = array(
        'post_type' => 'artists',
        'category_name' => $attrs['category'],
        'meta_query' => [
            [
                'key' => 'day',
                'value' => $attrs['year'],
                'compare' => 'LIKE'
            ]
        ]
    );
    $artists = new WP_Query($args);
    $output = '';
    $index = 0;

    if ($artists->have_posts()) {
        echo $output .= '<ul class="artists-list">';
        while ($artists->have_posts()) {
            $artists->the_post();
            $index++;
            get_template_part('partials/artists/artist', 'item', [
                'index' => $index
            ]);
        }
        $output .= '</ul>';
    }
}
add_shortcode('get_artists', 'shortcode_get_artists');
