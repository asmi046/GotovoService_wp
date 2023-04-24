<?php

use PHPMailer\PHPMailer\PHPMailer;

include "carbon.php";

define("COMPANY_NAME", "");
define("MAIL_RESEND", "");

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300);
add_post_type_support('page', 'excerpt');

include "seed.php";

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$all_version = "1.0.11".rand(1,100);

	wp_enqueue_style("null-css", get_template_directory_uri() . "/css/null.css", array(), $all_version, 'all'); 
	wp_enqueue_style("swiper-css", get_template_directory_uri() . "/css/swiper-bundle.min.css", array(), null, 'all'); 
	wp_enqueue_style("fonts-css", get_template_directory_uri() . "/css/fonts.css", array(), $all_version, 'all'); 
	wp_enqueue_style("modal-win-css", get_template_directory_uri() . "/css/modal-win.css", array(), $all_version, 'all'); 
	wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css", array(), $all_version, 'all'); 
	wp_enqueue_style("site-header-css", get_template_directory_uri() . "/css/site-header.css", array(), $all_version, 'all'); 
	wp_enqueue_style("main-banner-css", get_template_directory_uri() . "/css/main-banner.css", array(), $all_version, 'all');
	wp_enqueue_style("master-main-css", get_template_directory_uri() . "/css/master-main.css", array(), $all_version, 'all');
	wp_enqueue_style("breakdowns-css", get_template_directory_uri() . "/css/breakdowns.css", array(), $all_version, 'all');
	wp_enqueue_style("services-css", get_template_directory_uri() . "/css/services.css", array(), $all_version, 'all'); 
	wp_enqueue_style("footer-css", get_template_directory_uri() . "/css/footer.css", array(), $all_version, 'all');
	wp_enqueue_style("areas-css", get_template_directory_uri() . "/css/areas.css", array(), $all_version, 'all');
	wp_enqueue_style("whyar-css", get_template_directory_uri() . "/css/whyare.css", array(), $all_version, 'all');
	wp_enqueue_style("review-video-css", get_template_directory_uri() . "/css/review-video.css", array(), $all_version, 'all');
	wp_enqueue_style("education-css", get_template_directory_uri() . "/css/education.css", array(), $all_version, 'all');
	wp_enqueue_style("cooperation-css", get_template_directory_uri() . "/css/cooperation.css", array(), $all_version, 'all');
	wp_enqueue_style("questions-css", get_template_directory_uri() . "/css/questions.css", array(), $all_version, 'all');
	wp_enqueue_style("vue-modules-style", get_template_directory_uri() . "/css/vue-modules-style.css", array(), $all_version, 'all');
	wp_enqueue_style("popular-questions", get_template_directory_uri() . "/css/popular-questions.css", array(), $all_version, 'all');
	wp_enqueue_style("portfolio-css", get_template_directory_uri() . "/css/portfolio.css", array(), $all_version, 'all');
	wp_enqueue_style("prices", get_template_directory_uri() . "/css/prices.css", array(), $all_version, 'all');
	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $all_version, 'all');

	// Подключение скриптов

	wp_enqueue_script('fslightbox-js', get_template_directory_uri() . '/js/fslightbox.js', array(), $all_version, true);
	wp_enqueue_script('imask-js', get_template_directory_uri() . '/js/imask.js', array(), $all_version, true);
	wp_enqueue_script('sender-js', get_template_directory_uri() . '/js/sender.js', array(), $all_version, true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), $all_version, true);
	wp_enqueue_script('sliders-js', get_template_directory_uri() . '/js/sliders.js', array(), $all_version, true);
	wp_enqueue_script('axios-js', get_template_directory_uri() . '/js/axios.min.js', array(), $all_version, true);
	wp_enqueue_script('vue-js', get_template_directory_uri() . '/js/vue.global.js', array(), $all_version, true);
	wp_enqueue_script('map-vz-js', get_template_directory_uri() . '/js/map-vz.js', array(), $all_version, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), $all_version, true);
	
	

	wp_localize_script('imask-js', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}

// Заготовка для вызова ajax
add_action('wp_ajax_get_cat_geo', 'get_cat_geo');
add_action('wp_ajax_nopriv_get_cat_geo', 'get_cat_geo');

function get_cat_geo()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$catid = $_REQUEST["catid"];

		if (empty($catid)) wp_die(json_encode([]));

		$c_post = new WP_Query( [
				'cat' => $catid,
				
                        'meta_query' => [
                            'relation' => 'OR',
                            [
                                'key' => 'page_type',
                                'value' => 'GEO'
                            ],
                        ]
        ]); 

		$ao = [];

		foreach($c_post->posts as $item)
		{
			$geo_ao = carbon_get_post_meta($item->ID, "geo_ao");
			$geo_raion = carbon_get_post_meta($item->ID, "geo_raion");

			$ao[$geo_ao][mb_substr($geo_raion, 0,1,)][] = [
				"title" => $item->post_title, 
				"lnk" => get_permalink($item->ID), 
				"ao" => $geo_ao, 
				"raion" => $geo_raion, 
			] ;
		}

		$css_metro = [
			"Арбатско-Покровская линия" => "arbatsko-pokrovskaya",
            "Большая кольцевая линия" =>  "bolshaya-koltsevaya" ,
            "Бутовская линия" => "butovskaya" ,
            "Калининско-Солнцевская линия" => "kalininsko-sontsevskaya",
            "Замоскворецкая линия" => "zamoskvorec",
            "Калужско-Рижская линия" => "kaluzhsko-rizhskaya",
            "Каховская линия" => "kahovskaya",
            "Кольцевая линия" =>  "koltsevaya",
            "Люблинско-Дмитровская линия" => "lublinsko-dmitrovskaya",
            "Московская монорельсовая транспортная система" => "monorels",
            "Московское центральное кольцо" => "mtsk",
            "МЦД-1 Лобня — Одинцово" => "d_1",
            "МЦД-2 Нахабино — Подольск" => "d_2",
            "Некрасовская линия" => "nekrasovskaya",
            "Серпуховско-Тимирязевская линия" => "serpuho-timiryazevskaya",
            "Сокольническая линия" => "sokolnicheskaya",
            "Таганско-Краснопресненская линия" => "tagansko-krasnopresnenskaya",
            "Филёвская линия" => "filevskaya"
		];

		$c_post = new WP_Query( [
			'cat' => $catid,
			
					'meta_query' => [
						'relation' => 'OR',
						[
							'key' => 'page_type',
							'value' => 'Станция метро'
						],
					]
		]); 

		$metro = [];

		foreach($c_post->posts as $item)
		{
			$geo_vetka = carbon_get_post_meta($item->ID, "geo_vetka");
			$metro_name = carbon_get_post_meta($item->ID, "metro_name");

			$metro[$geo_vetka][mb_substr($metro_name, 0,1,)][] = [
				"title" => $item->post_title, 
				"lnk" => get_permalink($item->ID), 
				"vetka" => $geo_vetka, 
				"stateion" => $metro_name,
				"cssclass" => $css_metro[$item->post_title] 
			] ;
		}



		wp_die(json_encode(["catid" => $catid, "ao"=> $ao, "metro" => $metro]));

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
						'parse_mode' => "HTML",
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
		$content_tg = "<b>Новое сообщение с сайта</b>\n\r";

		foreach ($_REQUEST as $key => $value)
		{
				$content .= $key.": <strong>".$value."</strong><br/>";
				$content_tg .= $key.": ".$value."\n\r";	
		}

		// for ($i =0; $i < count($_REQUEST["fildname"]); $i++) {
		// 	$content .= $_REQUEST["fildval"][$i].": <strong>".$_REQUEST[$_REQUEST["fildname"][$i]]."</strong><br/>";
		// 	$content_tg .= $_REQUEST["fildval"][$i].": ".$_REQUEST[$_REQUEST["fildname"][$i]]."\n\r";
		// }

		message_to_telegram($content_tg);

		$headers = array(
			'From: Сайт ГотовоСервис <asmi-work046@yandex.ru>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', function () {return "text/html";} );
		
		if (wp_mail($send_adr, $subj, $content, $headers))
		{
			wp_die(true);
		} else {
			wp_die("NO ОК", '', 403 );
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