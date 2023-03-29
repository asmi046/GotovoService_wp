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
        ));

    
    Container::make('post_meta', 'reviews_fild', 'Отзывы - поля для страницы')
    ->show_on_template(array('page-review.php'))
    ->add_fields(array(
        Field::make('text', 'reviews_lnk', 'Ссылка на источник отзыва'),
        
    ));
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}