<?php
/**
 * Intentionally Blank Theme functions
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

if ( ! function_exists( 'blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme allows users to set a custom background.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'f5f5f5',
			)
		);

		add_theme_support( 'custom-logo' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 44,
				'width'       => 170,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		add_filter( 'get_custom_logo', 'render_logo' );

		function render_logo() {
			$custom_logo = get_theme_mod( 'site_logo' );
			$html = sprintf( 
					'<a href="%1$s" rel="home" itemprop="url">%2$s</a>',
					esc_url( home_url( '/' ) ),
					'<img src="' . $custom_logo . '" class="navigation__logo">'
			);

			return $html;   
		}
	}
endif; // end function_exists blank_setup.
add_action( 'after_setup_theme', 'blank_setup' );

/**
 * Sets up theme defaults and registers the various WordPress features that
 * this theme supports.

 * @param class $wp_customize Customizer object.
 */
function blank_customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->add_section(
		'blank_footer',
		array(
			'title'      => __( 'Footer', 'intentionally-blank' ),
			'priority'   => 120,
			'capability' => 'edit_theme_options',
			'panel'      => '',
		)
	);
	$wp_customize->add_setting(
		'blank_copyright',
		array(
			'type'              => 'theme_mod',
			'default'           => __( 'Intentionally Blank - Proudly powered by WordPress', 'intentionally-blank' ),
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	/**
	 * Checkbox sanitization function

	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function blank_sanitize_checkbox( $checked ) {
		// Returns true if checkbox is checked.
		return ( ( isset( $checked ) && true === $checked ) ? true : false );
	}
	$wp_customize->add_setting(
		'blank_show_copyright',
		array(
			'default'           => true,
			'sanitize_callback' => 'blank_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'blank_copyright',
		array(
			'type'     => 'textarea',
			'label'    => __( 'Copyright Text', 'intentionally-blank' ),
			'section'  => 'blank_footer',
			'settings' => 'blank_copyright',
			'priority' => '10',
		)
	);
	$wp_customize->add_control(
		'blank_footer_copyright_hide',
		array(
			'type'     => 'checkbox',
			'label'    => __( 'Show Copyright Text', 'intentionally-blank' ),
			'section'  => 'blank_footer',
			'settings' => 'blank_show_copyright',
			'priority' => '20',
		)
	);
}


add_action( 'customize_register', 'blank_customize_register', 100 );

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>
	';
}

add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a class="breadcrumbs-list__item" href="'. home_url() .'" rel="nofollow">'. pll__('Главная') .'</a>';


	if (is_archive()){
        echo '<span class="breadcrumbs-list__separator">/</span>';

		if (get_the_archive_title() === 'Наша команда'): 
				echo pll__('Наша команда');
		elseif (get_the_archive_title() === 'Новости'): 
			echo pll__('Новости');
		else:
			echo get_the_archive_title();
		endif;
	} elseif (is_category() || is_single()) {

		if (get_post_type() !== 'post' && get_post_type() !== 'page'):
  
			$post_type_obj = get_post_type_object( get_post_type() );
			$title = apply_filters('post_type_archive_title', $post_type_obj->labels->name );        
			$link = home_url() . '/' . $post_type_obj->rewrite['slug'];

			echo '<span class="breadcrumbs-list__separator">/</span>';
			echo '<a class="breadcrumbs-list__item" href="'.$link.'" rel="nofollow">'.$title.'</a>';
		endif; 

		the_category(' <span class="breadcrumbs-list__separator">/</span> ');

		if (is_single()) {
			echo '<span class="breadcrumbs-list__separator">/</span>';
			the_title();
		}
    } elseif (is_page()) {
        echo '<span class="breadcrumbs-list__separator">/</span>';
        echo the_title();
    } elseif (is_search()) {
        echo '<span class="breadcrumbs-list__separator">/</span>';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

function so_3261107_hash_filename( $filename ) {
    $info = pathinfo( $filename );
    $ext  = empty( $info['extension'] ) ? '' : '.' . $info['extension'];
    $name = basename( $filename, $ext );

    return md5( $name ) . $ext;
}

add_filter( 'sanitize_file_name', 'so_3261107_hash_filename', 10 );

////////////CUSTOMIZE
require( get_template_directory().'/includes/customizer.php');

////////////MAIN MENU
require( get_template_directory().'/includes/main_menu.php');

////////////ADMIN
require( get_template_directory().'/includes/admin.php');

////////////FORMS
require( get_template_directory().'/includes/forms.php');

////////////TRANSLATER
require( get_template_directory().'/includes/translater.php');
