<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Общие настройки', array(
            Field::make( 'text', 'company', 'Компания' )->set_width(100),
            Field::make( 'text', 'inn', 'ИНН' )->set_width(100),
            Field::make( 'text', 'ogrn', 'ОГРН' )->set_width(100),
            Field::make( 'text', 'email', 'e-mail' )->set_width(100),
            Field::make( 'text', 'adress', 'Адрес' )->set_width(100),
            Field::make( 'text', 'adress_ur', 'Адрес юридический' )->set_width(100),
            Field::make( 'text', 'worck_day', 'Дни работы' )->set_width(100),
            Field::make( 'text', 'worck_time', 'Время работы' )->set_width(100),
            Field::make( 'text', 'phone', 'Телефон для связи' )->set_width(100),
            Field::make( 'text', 'email_send', 'Почта для отправки' )->set_width(100),
            Field::make( 'text', 'tg_token', 'Токен Телеграм' )->set_width(100),
            Field::make( 'text', 'tg_chats', 'Чат Телеграмм' )->set_width(100),
        ) )
        ->add_tab('Слайдер на главной', array( 
            Field::make('complex', 'main_slider', 'Настройки слайдера на главной')
			->add_fields(array(
				Field::make('image', 'img', 'Фото')
					->set_width(25),
				Field::make('text', 'title', 'Заголовок')
					->set_width(25),
				Field::make('rich_text', 'subtext', 'Подзаголовок')
					->set_width(25),
				Field::make('text', 'link', 'Ссылка на кропку')
					->set_width(25),

			))
        ))   
        ->add_tab('Часто задаваемые вопросы', array( 
            Field::make('complex', 'faq', 'Часто задаваемые вопросы')
			->add_fields(array(
				Field::make('text', 'q', 'Вопрос')
					->set_width(50),
				Field::make('rich_text', 'r', 'Ответ')
					->set_width(50),

			))
        ))
        ->add_tab('Видеоотзывы', array( 
            Field::make('complex', 'video_reviews', 'Видеоотзывы')
			->add_fields(array(
                Field::make('image', 'img', 'Фото')->set_width(20),
				Field::make('text', 'name', 'Имя')->set_width(20),
				Field::make('text', 'subtitle', 'Подзаголовок')->set_width(20),
				Field::make('text', 'znumber', 'Номер заявки')->set_width(20),
				Field::make('text', 'lnk', 'Ссылка')->set_width(20),
			))
        ))
        ->add_tab('Мастера', array( 
            Field::make('complex', 'comp_masters', 'Мастера по ремонту компютерной техники')
			->add_fields(array(
                Field::make('image', 'img', 'Фото')->set_width(20),
				Field::make('text', 'name', 'Имя')->set_width(20),
				Field::make('text', 'dolgnost', 'Должность')->set_width(20),
				Field::make('text', 'rem_count', 'Количество ремонтов')->set_width(20),
				Field::make('text', 'lnk', 'Ссылка на видео')->set_width(20),
            )),

            Field::make('complex', 'bit_masters', 'Мастера по ремонту бытовой техники')
			->add_fields(array(
                Field::make('image', 'img', 'Фото')->set_width(20),
				Field::make('text', 'name', 'Имя')->set_width(20),
				Field::make('text', 'dolgnost', 'Должность')->set_width(20),
				Field::make('text', 'rem_count', 'Количество ремонтов')->set_width(20),
				Field::make('text', 'lnk', 'Ссылка на видео')->set_width(20),
            ))
        ));

    Container::make( 'term_meta', __( 'Дополнительные поля для категорий', 'crb' ) )
    ->where( 'term_taxonomy', '=', 'category' ) // only show our new field for categories
    ->add_fields( array(
        Field::make('image', 'page_head_img', 'Фото в баннере страницы'),
        Field::make('text', 'cat_price_ot', 'Цена от:'),
        Field::make('text', 'cat_subtitle', 'Подзаголовок'),
        Field::make('text', 'cat_btn_lnk', 'Ссылка для кнопки'),
        Field::make('rich_text', 'cat_list', 'Список'),
        Field::make('text', 'prices_category', 'Категория цен'),
        Field::make('text', 'prices_polom', 'Поломка (для вывода цен)'),
    ) );

    
    Container::make('post_meta', 'reviews_fild', 'Отзывы - поля для страницы')
    ->where('post_template', '=', 'page-review.php')
    ->add_fields(array(
        Field::make('text', 'reviews_name', 'Имя оставившего отзыв')->set_width(30),
        Field::make('text', 'reviews_reiting', 'Оценка')->set_width(30),
        Field::make('text', 'reviews_z_number', 'Номер заявки')->set_width(30),


        
    ));



    Container::make('post_meta', 'contacts_fild', 'Для контактов')
    ->where('post_template', '=', 'page-contacts.php')
    ->add_fields(array(
        Field::make('complex', 'reviews_service_centers', 'Сервисные центры')
        ->add_fields(array(
            Field::make('text', 'adres', 'Адрес сервиса')
                ->set_width(50),
            Field::make('textarea', 'map', 'Фрейм карты')
                ->set_width(50),

        ))
        
    ));

    Container::make('post_meta', 'polomka_fild', 'Для страницы с поломками')
    ->where('post_template', '=', 'page-polomka.php')
    ->add_fields(array(
        Field::make('text', 'polomka_priznak', 'Признак')->set_width(30),
        Field::make('text', 'polomka_pr', 'Причина')->set_width(30),
        Field::make('text', 'polomka_price', 'Цена от:')->set_width(30),
        
    ));

    Container::make('post_meta', 'portfolio_fild', 'Для страницы с поломками')
    ->where('post_template', '=', 'page-portfolio.php')
    ->add_fields(array(
        Field::make('image', 'portfolio_img', 'Фото блока'),
        Field::make('text', 'portfolio_znumber', 'Номер заявки')->set_width(100),
        Field::make('text', 'portfolio_pr', 'Причина')->set_width(100),
        Field::make('text', 'portfolio_work', 'Что было сделано')->set_width(100),
        Field::make('text', 'portfolio_time', 'Время выполнения')->set_width(100),
        Field::make('text', 'portfolio_price', 'цена')->set_width(100),
        
    ));

    Container::make('post_meta', 'teach_fild', 'Для страницы обучение мастеров')
    ->where('post_template', '=', 'page-teach.php')
    ->add_fields(array(
        Field::make('text', 'teach_number_b1', 'Номер (Блок 1)')->set_width(30),
        Field::make('text', 'teach_title_b1', 'Заголовок (Блок 1)')->set_width(30),
        Field::make('rich_text', 'teach_puncts_b1', 'Пункты (Блок 1)')->set_width(30),
        
        Field::make('text', 'teach_number_b2', 'Номер (Блок 2)')->set_width(30),
        Field::make('text', 'teach_title_b2', 'Заголовок (Блок 2)')->set_width(30),
        Field::make('rich_text', 'teach_puncts_b2', 'Пункты (Блок 2)')->set_width(30),
        
        Field::make('text', 'teach_number_b3', 'Номер (Блок 3)')->set_width(30),
        Field::make('text', 'teach_title_b3', 'Заголовок (Блок 3)')->set_width(30),
        Field::make('rich_text', 'teach_puncts_b3', 'Пункты (Блок 3)')->set_width(30),
        
        Field::make('rich_text', 'teach_all_docs', 'Документы, которые вы получите')->set_width(100),

        Field::make('image', 'teach_sert_1', 'Сертификат №1'),

        Field::make('image', 'teach_sert_2', 'Сертификат №2'),
    ));
    
    Container::make('post_meta', 'all_page_filds', 'Дополнительные поля для страниц и постов')
    ->add_fields(array(
        Field::make('image', 'page_head_img', 'Фото в баннере страницы')->set_width(50),
        Field::make( 'select', 'page_type', __( 'Тип страницы' ) )
            ->set_options( array(
                'Без типа' => 'Без типа',
                'Отзыв' => 'Отзыв',
                'GEO' => 'GEO',
                'Станция метро' => 'Станция метро',
                'Поломки' => 'Поломки',
                'Портфолио' => 'Портфолио',
                'Бренды' => 'Бренды',
                
            ) )->set_width(50),
    ));

    
    Container::make('post_meta', 'geo_and_metro_fild', 'Шапка станций метро и районов')
    ->where('post_template', '=', 'page-geo.php')
    ->or_where('post_template', '=', 'page-metro.php')
    ->add_fields(array(
        Field::make('text', 'bnr_price_ot', 'Цена от:'),
        Field::make('text', 'bnr_btn_lnk', 'Ссылка для кнопки'),
    ));

    Container::make('post_meta', 'geo_fild', 'Для района города')
    ->where('post_template', '=', 'page-geo.php')
    ->add_fields(array(
        Field::make('text', 'geo_raion', 'Название района')->set_width(50),
        Field::make( 'select', 'geo_ao', __( 'Административный округ' ) )
        ->set_options( array(
            "ЮАО" => "ЮАО",
            "ВАО" => "ВАО",
            "ЮЗАО" => "ЮЗАО",
            "СВАО" => "СВАО",
            "Московская область" => "Московская область",
            "ЮВАО" => "ЮВАО",
            "ЗАО" => "ЗАО",
            "САО" => "САО",
            "ЦАО" => "ЦАО",
            "НАО" => "НАО",
            "ЗЕЛАО" => "ЗЕЛАО",
            "ТАО" => "ТАО",
            "СЗАО" => "СЗАО",
            
        ) )->set_width(50),
        
    ));

        
    Container::make('post_meta', 'metro_fild', 'Для района города')
    ->where('post_template', '=', 'page-metro.php')
    ->add_fields(array(
        Field::make('text', 'metro_name', 'Название станции')->set_width(50),
        Field::make( 'select', 'geo_vetka', __( 'Ветка  метро' ) )
        ->set_options( array(
            "Арбатско-Покровская линия" => "Арбатско-Покровская линия",
            "Большая кольцевая линия" => "Большая кольцевая линия",
            "Бутовская линия" => "Бутовская линия",
            "Калининско-Солнцевская линия" => "Калининско-Солнцевская линия",
            "Замоскворецкая линия" => "Замоскворецкая линия",
            "Калужско-Рижская линия" => "Калужско-Рижская линия",
            "Каховская линия" => "Каховская линия",
            "Кольцевая линия" => "Кольцевая линия",
            "Люблинско-Дмитровская линия" => "Люблинско-Дмитровская линия",
            "Московская монорельсовая транспортная система" => "Московская монорельсовая транспортная система",
            "Московское центральное кольцо" => "Московское центральное кольцо",
            "МЦД-1 Лобня — Одинцово" => "МЦД-1 Лобня — Одинцово",
            "МЦД-2 Нахабино — Подольск" => "МЦД-2 Нахабино — Подольск",
            "Некрасовская линия" => "Некрасовская линия",
            "Серпуховско-Тимирязевская линия" => "Серпуховско-Тимирязевская линия",
            "Сокольническая линия" => "Сокольническая линия",
            "Таганско-Краснопресненская линия" => "Таганско-Краснопресненская линия",
            "Филёвская линия" => "Филёвская линия",
            
        ) )->set_width(50),
        
    ));
    
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}