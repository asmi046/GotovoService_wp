<?php

include "carbon.php";

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

	$style_version = "1.0.11".rand(1,100);
	$scrypt_version = "1.0.11".rand(1,100);

	wp_enqueue_style("null-css", get_template_directory_uri() . "/css/null.css", array(), $style_version, 'all'); 
	wp_enqueue_style("swiper-css", get_template_directory_uri() . "/css/swiper-bundle.min.css", array(), null, 'all'); 
	wp_enqueue_style("fonts-css", get_template_directory_uri() . "/css/fonts.css", array(), $style_version, 'all'); 
	wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css", array(), $style_version, 'all'); 
	wp_enqueue_style("site-header-css", get_template_directory_uri() . "/css/site-header.css", array(), $style_version, 'all'); 
	wp_enqueue_style("main-banner-css", get_template_directory_uri() . "/css/main-banner.css", array(), $style_version, 'all');
	wp_enqueue_style("master-main-css", get_template_directory_uri() . "/css/master-main.css", array(), $style_version, 'all');
	wp_enqueue_style("breakdowns-css", get_template_directory_uri() . "/css/breakdowns.css", array(), $style_version, 'all');
	wp_enqueue_style("services-css", get_template_directory_uri() . "/css/services.css", array(), $style_version, 'all'); 
	wp_enqueue_style("footer-css", get_template_directory_uri() . "/css/footer.css", array(), $style_version, 'all');
	wp_enqueue_style("areas-css", get_template_directory_uri() . "/css/areas.css", array(), $style_version, 'all');
	wp_enqueue_style("whyar-css", get_template_directory_uri() . "/css/whyare.css", array(), $style_version, 'all');
	wp_enqueue_style("review-video-css", get_template_directory_uri() . "/css/review-video.css", array(), $style_version, 'all');
	wp_enqueue_style("education-css", get_template_directory_uri() . "/css/education.css", array(), $style_version, 'all');
	wp_enqueue_style("cooperation-css", get_template_directory_uri() . "/css/cooperation.css", array(), $style_version, 'all');
	wp_enqueue_style("questions-css", get_template_directory_uri() . "/css/questions.css", array(), $style_version, 'all');
	wp_enqueue_style("vue-modules-style", get_template_directory_uri() . "/css/vue-modules-style.css", array(), $style_version, 'all');
	wp_enqueue_style("popular-questions", get_template_directory_uri() . "/css/popular-questions.css", array(), $style_version, 'all');
	wp_enqueue_style("portfolio-css", get_template_directory_uri() . "/css/portfolio.css", array(), $style_version, 'all');
	wp_enqueue_style("prices", get_template_directory_uri() . "/css/prices.css", array(), $style_version, 'all');
	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all');

	// Подключение скриптов

	wp_enqueue_script('imask-js', get_template_directory_uri() . '/js/imask.js', array(), null, true);
	wp_enqueue_script('sender-js', get_template_directory_uri() . '/js/sender.js', array(), null, true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('sliders-js', get_template_directory_uri() . '/js/sliders.js', array(), null, true);
	wp_enqueue_script('vue-js', get_template_directory_uri() . '/js/vue.global.js', array(), null, true);
	
	

	wp_localize_script('imask-js', 'allAjax', array(
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

/**
 * Настройка SMTP
 *
 * @param PHPMailer $phpmailer объект мэилера
 */
function mihdan_send_smtp_email( PHPMailer $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = SMTP_HOST;
	$phpmailer->SMTPAuth   = SMTP_AUTH;
	$phpmailer->Port       = SMTP_PORT;
	$phpmailer->Username   = SMTP_USER;
	$phpmailer->Password   = SMTP_PASS;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->From       = SMTP_FROM;
	$phpmailer->FromName   = SMTP_NAME;
  }
  add_action( 'phpmailer_init', 'mihdan_send_smtp_email' );

  function mihdan_debug_wp_mail( $wp_error ) {
    return error_log( print_r( $wp_error, true ) );
}
add_action( 'wp_mail_failed', 'mihdan_debug_wp_mail', 10, 1 );


function message_to_telegram($text)
{
	$t_token = carbon_get_theme_option('tg_token');

	$arr_chat = carbon_get_theme_option('tg_chats');


	if($arr_chat) {

		$arr_chat = explode(",",$arr_chat);
	    $ch = curl_init();
		
		for ($i = 0; $i<count($arr_chat); $i++) {
		    curl_setopt_array(
		        $ch,
		        array(
		            CURLOPT_URL => 'https://api.telegram.org/bot' . $t_token . '/sendMessage',
		            CURLOPT_POST => TRUE,
		            CURLOPT_RETURNTRANSFER => TRUE,
		            CURLOPT_TIMEOUT => 10,
		            CURLOPT_POSTFIELDS => array(
		                'chat_id' => trim($arr_chat[$i]),
		                'text' => $text,
		            ),
		        )
		    );

		    $output = curl_exec($ch);
		}
	}
	
}

// Универсальный отправщик
add_action('wp_ajax_newsendr', 'newsendr');
add_action('wp_ajax_nopriv_newsendr', 'newsendr');

function newsendr()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
       
		$send_adr = carbon_get_theme_option('email_send');
	
		

		$subj = "Сообщение с сайта";
		$content = "<h2>Новое сообщение с сайта</h2>";
		$content_tg = "Новое сообщение с сайта\n\r";

		// for ($i =0; $i < count($_REQUEST["fildname"]); $i++) {
		// 	$content .= $_REQUEST["fildval"][$i].": <strong>".$_REQUEST[$_REQUEST["fildname"][$i]]."</strong><br/>";
		// 	$content_tg .= $_REQUEST["fildval"][$i].": ".$_REQUEST[$_REQUEST["fildname"][$i]]."\n\r";
		// }

		message_to_telegram($content_tg);

		$headers = array(
			'From: Сайт ГотовоСервис <asmi-work046@yandex.ru>',
			'content-type: text/html',
		);

		//  add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail($send_adr, $subj, $content))
		{
			wp_die(true);
		} else {
			wp_die("NO ОК", '', 404 );
		}
		

	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}


//-----Блок описания вывода меню

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'menu-head' => 'Меню в шапке',
	] );
} ); 