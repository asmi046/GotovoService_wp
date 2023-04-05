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
        Field::make('image', 'page_head_img', 'Фото в баннере страницы')
    ) );

    
    Container::make('post_meta', 'reviews_fild', 'Отзывы - поля для страницы')
    // ->show_on_template(array('page-review.php'))
    ->where('post_template', '='. 'page-review.php')
    ->add_fields(array(
        Field::make('text', 'reviews_lnk', 'Ссылка на источник отзыва'),
        
    ));



    Container::make('post_meta', 'contacts_fild', 'Для контактов')
    ->where( 'post_id', 'IN', array(13, 15) )
    ->add_fields(array(
        Field::make('text', 'reviews_lnk_1', 'Ссылка на источник отзыва11'),
        
    ));
    
    Container::make('post_meta', 'all_page_filds', 'Дополнительные поля для страниц и постов')
    ->add_fields(array(
        Field::make('image', 'page_head_img', 'Фото в баннере страницы')
        
    ));

    
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}