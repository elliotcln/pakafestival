<?php

// Register theme defaults.
add_action('after_setup_theme', function () {
    show_admin_bar(false);

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('page-template');
    add_theme_support('featured-content');

    register_nav_menus([
        'main' => __('Principal'),
        'footer' => __('Footer'),
        'social' => __('Social')
    ]);
});

// Register scripts and styles.
add_action('wp_enqueue_scripts', function () {
    $manifestPath = get_theme_file_path('assets/manifest.json');

    if (
        wp_get_environment_type() === 'local' &&
        is_array(wp_remote_get('http://localhost:5173/')) // is Vite.js running
    ) {
        wp_enqueue_script('vite', 'http://localhost:5173/@vite/client', [], null);
        wp_enqueue_script('wordplate', 'http://localhost:5173/resources/js/index.js', [], null);
    } elseif (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);
        wp_enqueue_script('wordplate', get_theme_file_uri('assets/' . $manifest['resources/js/index.js']['file']), [], null);
        wp_enqueue_style('wordplate', get_theme_file_uri('assets/' . $manifest['resources/js/index.css']['file']), [], null);
    }
});

// Load scripts as modules.
add_filter('script_loader_tag', function (string $tag, string $handle, string $src) {
    if (in_array($handle, ['vite', 'wordplate'])) {
        return '<script type="module" src="' . esc_url($src) . '" defer></script>';
    }

    return $tag;
}, 10, 3);

// Remove admin menu items.
add_action('admin_init', function () {
    remove_menu_page('edit-comments.php'); // Comments
    // remove_menu_page('edit.php?post_type=page'); // Pages
    // remove_menu_page('edit.php'); // Posts
    // remove_menu_page('index.php'); // Dashboard
    // remove_menu_page('upload.php'); // Media
});

// Remove admin toolbar menu items.
add_action('admin_bar_menu', function (WP_Admin_Bar $menu) {
    $menu->remove_node('comments'); // Comments
    $menu->remove_node('customize'); // Customize
    $menu->remove_node('dashboard'); // Dashboard
    $menu->remove_node('edit'); // Edit
    $menu->remove_node('menus'); // Menus
    $menu->remove_node('new-content'); // New Content
    $menu->remove_node('search'); // Search
    // $menu->remove_node('site-name'); // Site Name
    $menu->remove_node('themes'); // Themes
    $menu->remove_node('updates'); // Updates
    $menu->remove_node('view-site'); // Visit Site
    $menu->remove_node('view'); // View
    $menu->remove_node('widgets'); // Widgets
    $menu->remove_node('wp-logo'); // WordPress Logo
}, 999);

// Remove admin dashboard widgets.
add_action('wp_dashboard_setup', function () {
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // Activity
    // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // At a Glance
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']); // Site Health Status
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPress Events and News
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Quick Draft
});

// Add custom login form logo.
add_action('login_head', function () {
    $url = get_theme_file_uri('favicon.svg');
    $width = 200;

    $styles = [
        sprintf('background-image: url(%s);', $url),
        sprintf('width: %dpx;', $width),
        'background-position: center;',
        'background-size: contain;',
    ];

    echo sprintf(
        '<style> .login h1 a { %s } </style>',
        implode('', $styles)
    );
});

/* Autoriser les fichiers SVG */
function ttt_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'ttt_mime_types');

/**
 * Set skip links to the top of the page
 *
 * @param string $contentId
 * @param string $contentLabel
 * @param string $navId
 * @param string $navLabel
 * @return void
 */
function set_skip_links(
    $contentId = '#main-content',
    $contentLabel = 'Aller au contenu principal'
) {
    $skiplinks = '<nav aria-label="Liens d\'évitement" class="skip-links-navigation">';
    $skiplinks .= "<a href='" . $contentId . "'>" . $contentLabel . "</a>";
    $skiplinks .= "</nav>";

    echo $skiplinks;
}

// get breadcrumb function
include get_theme_file_path('inc/breadcrumb.php');
// ACF
include get_theme_file_path('inc/acf.php');
// nav wlaker
include get_theme_file_path('inc/nav-walker.php');
// artists functions
include get_theme_file_path('inc/artists.php');
