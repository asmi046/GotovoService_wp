<?php

define("COMPANY_NAME", "");
define("MAIL_RESEND", "");

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300);
add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.11";
	$scrypt_version = "1.0.11";

	wp_enqueue_style("null-css", get_template_directory_uri() . "/css/null.css", array(), $style_version, 'all'); 
	wp_enqueue_style("swiper-css", get_template_directory_uri() . "/css/swiper-bundle.min.css", array(), null, 'all'); 
	wp_enqueue_style("fonts-css", get_template_directory_uri() . "/css/fonts.css", array(), $style_version, 'all'); 
	wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css", array(), $style_version, 'all'); 
	wp_enqueue_style("site-header-css", get_template_directory_uri() . "/css/site-header.css", array(), $style_version, 'all'); 
	wp_enqueue_style("main-banner-css", get_template_directory_uri() . "/css/main-banner.css", array(), $style_version, 'all'); 
	wp_enqueue_style("services-css", get_template_directory_uri() . "/css/services.css", array(), $style_version, 'all'); 
	wp_enqueue_style("footer-css", get_template_directory_uri() . "/css/footer.css", array(), $style_version, 'all');
	wp_enqueue_style("whyar-css", get_template_directory_uri() . "/css/whyare.css", array(), $style_version, 'all');
	wp_enqueue_style("cooperation-css", get_template_directory_uri() . "/css/cooperation.css", array(), $style_version, 'all');
	wp_enqueue_style("questions-css", get_template_directory_uri() . "/css/questions.css", array(), $style_version, 'all');
	wp_enqueue_style("vue-modules-style", get_template_directory_uri() . "/css/vue-modules-style.css", array(), $style_version, 'all');
	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all');

	// Подключение скриптов

	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('sliders-js', get_template_directory_uri() . '/js/sliders.js', array(), null, true);
	wp_enqueue_script('vue-js', get_template_directory_uri() . '/js/vue.global.js', array(), null, true);
	
	

	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}

// Заготовка для вызова ajax
add_action('wp_ajax_aj_fnc', 'aj_fnc');
add_action('wp_ajax_nopriv_aj_fnc', 'aj_fnc');

function aj_fnc()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}