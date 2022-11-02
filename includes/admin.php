<?php 

function admin_style() {
    $current_user = wp_get_current_user();

    if (current_user_can('edit_posts') && $current_user->id !== 1):
        wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
    endif;
}

add_action('admin_enqueue_scripts', 'admin_style');