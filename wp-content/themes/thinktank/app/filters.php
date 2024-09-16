<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment', 'embed'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    collect(['get_header', 'wp_head'])->each(function ($tag) {
        ob_start();
        do_action($tag);
        $output = ob_get_clean();
        remove_all_actions($tag);
        add_action($tag, function () use ($output) {
            echo $output;
        });
    });
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);

add_filter( 'gform_pre_render_2', __NAMESPACE__ . '\\populate_posts' );
add_filter( 'gform_pre_validation_2', __NAMESPACE__ . '\\populate_posts' );
add_filter( 'gform_pre_submission_filter_2', __NAMESPACE__ . '\\populate_posts' );
add_filter( 'gform_admin_pre_render_2', __NAMESPACE__ . '\\populate_posts' );
function populate_posts( $form ) {

    foreach ( $form['fields'] as &$field ) {

        if ( $field->type != 'select') {
            continue;
        }

        // you can add additional parameters here to alter the posts that are retrieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $posts = get_posts( 'numberposts=-1&post_type=staff&orderby=title&order=ASC' );

        $choices = array();

        foreach ( $posts as $post ) {
            $choices[] = array( 'text' => $post->post_title, 'value' => $post->post_title );
        }

        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'Select Name';
        $field->choices = $choices;

    }

    return $form;
}

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', __NAMESPACE__ . '\\yoasttobottom');


// Add custom columns to staff post type admin
add_filter('manage_staff_posts_columns', function($columns) {
    // Remove the date column
    $date = $columns['date'];
    unset($columns['date']);
    
    // Add the staff_type column
    $columns['staff_type'] = __('Type', 'sage');
    
    // Add the featured column
    $columns['featured'] = __('Featured', 'sage');
    
    // Re-add the date column at the end
    $columns['date'] = $date;
    
    return $columns;
});

// Populate custom columns
add_action('manage_staff_posts_custom_column', function($column_name, $post_id) {
    if ($column_name == 'staff_type') {
        $terms = get_the_terms($post_id, 'staff-type');
        if (!empty($terms)) {
            $output = array();
            foreach ($terms as $term) {
                $output[] = esc_html($term->name);
            }
            echo implode(', ', $output);
        } else {
            echo '—';
        }
    }
    if ($column_name == 'featured') {
        $featured = get_post_meta($post_id, 'featured', true);
        echo '<input type="checkbox" class="featured-toggle" data-post-id="' . $post_id . '" ' . checked($featured, '1', false) . '>';
    }
}, 10, 2);

// Handle AJAX request to update featured status
add_action('wp_ajax_toggle_featured_staff', function() {
    $post_id = $_POST['post_id'];
    $featured = get_post_meta($post_id, 'featured', true);
    $new_featured = $featured ? '0' : '1';
    update_post_meta($post_id, 'featured', $new_featured);
    wp_die($new_featured);
});

// Enqueue JavaScript for AJAX functionality
add_action('admin_footer', function() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.featured-toggle').on('change', function() {
            var postId = $(this).data('post-id');
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'toggle_featured_staff',
                    post_id: postId
                },
                success: function(response) {

                }
            });
        });
    });
    </script>
    <?php
});