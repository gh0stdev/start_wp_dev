<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon( 'dashicons-carrot' )
    ->add_tab( 'Шапка', array(
        Field::make( 'select', 'sp_header_logic', 'Будет использоваться логотип?' )
            ->add_options(array(
                'yes' => 'Да, буду использовать логотип',
                'no' => 'Нет, буду использовать текст',
            )),
        Field::make( 'image', 'sp_header_logo', 'Логотип' )
            ->set_conditional_logic(array(
                'relation' => 'AND',
                array(
                    'field' => 'sp_header_logic',
                    'value' => 'yes',
                    'compare' => '=',
                )
            )),
        Field::make( 'text', 'sp_header_site_name', 'Название сайта' )

            ->set_default_value('Сайт')
            ->set_conditional_logic(array(
                'relation' => 'AND',
                array(
                    'field' => 'sp_header_logic',
                    'value' => 'no',
                    'compare' => '=',
                )
            )),
        Field::make( 'text', 'sp_header_site_desc', 'Описание сайта' )
            ->set_conditional_logic(array(
                'relation' => 'AND',
                array(
                    'field' => 'sp_header_logic',
                    'value' => 'no',
                    'compare' => '=',
                )
            ))
            ->set_default_value(get_bloginfo('description')),
        Field::make( 'textarea', 'sp_header_scripts', 'Скрипты в Header' )
            ->set_width( 100 )
    ) )
    ->add_tab( 'Подвал', array(
        Field::make( 'text', 'sp_footer_office', 'Офис' )
            ->set_width( 30 ),
        Field::make( 'text', 'sp_footer_address', 'Адрес' )
            ->set_width( 30 ),
        Field::make( 'text', 'sp_footer_soc_in', 'Instagram' )
            ->set_width( 50 ),
        Field::make( 'text', 'sp_footer_soc_fa', 'Facebook' )
            ->set_width( 50 ),
        Field::make( 'text', 'sp_footer_soc_yo', 'Yotube' )
            ->set_width( 50 ),
        Field::make( 'text', 'sp_footer_soc_vk', 'VK' )
            ->set_width( 50 ),
        Field::make( 'text', 'sp_footer_copy', 'Копирайта' )
            ->set_width( 50 ),
        Field::make( 'textarea', 'sp_footer_desc', 'Описание сайта' )
            ->set_width( 100 ),
        Field::make( 'textarea', 'sp_footer_scripts', 'Скрипты в Footer' )
            ->set_width( 100 ),
    ) )
    ->add_tab( 'Опции', array(
        Field::make( 'text', 'sp_phone', 'Телефон' )
            ->set_width( 30 ),
        Field::make( 'text', 'sp_work_time', 'Время работы' )
            ->set_width( 30 ),
        Field::make( 'text', 'sp_email', 'E-mail' )
            ->set_width( 30 )
    ) );