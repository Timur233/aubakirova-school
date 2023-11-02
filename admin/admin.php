<?php 

////////////TEMPLATES
function display_self_esteem_metabox() {
	return "sdfdsfsdfsf";
}

function self_esteem_metabox() {
    add_meta_box('self_esteem_metabox', 'Самооценка', 'display_self_esteem_metabox', 'page', 'normal', 'high');
}

add_action('add_meta_boxes', 'self_esteem_metabox');

/**
 * Кастомные стили адми панели
 */
function admin_style() {
    $current_user = wp_get_current_user();

    if (current_user_can('edit_posts') && $current_user->id !== 1):
        wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
    endif;
}

add_action('admin_enqueue_scripts', 'admin_style');

/**
 * Добавление столбцов в админ панели
 */
add_filter( 'manage_edit-team_columns', 'true_add_post_columns', 25 ); 
 
function true_add_post_columns( $my_columns ){
	$my_columns[ 'position' ] = 'Должность';
	return $my_columns; 
}
 
add_action( 'manage_posts_custom_column', 'true_fill_post_columns', 25 );
 
function true_fill_post_columns( $column ) {
	switch ( $column ) {
		case 'position': {
			$position = get_field('teach_position', get_the_ID());
            echo $position ? $position : 'Нет'; 
			break;
		}
	}
}