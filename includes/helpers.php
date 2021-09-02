<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Disable new Redactor WordPress
 */
if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
    add_action( 'admin_init', function(){
        remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
add_action( 'carbon_fields_register_fields', 'sp_attach_product_post_meta' );


add_action( 'wp_ajax_send_product_form', 'send_product_ajax' );
add_action( 'wp_ajax_nopriv_send_product_form', 'send_product_ajax' );

add_action( 'wp_ajax_get_call', 'send_get_call_ajax' );
add_action( 'wp_ajax_nopriv_get_call', 'send_get_call_ajax' );

function send_product_ajax(){
    $post = (!empty($_POST)) ? true : false;
    if($post) {
        $email = htmlspecialchars(trim($_POST['email']));
        $name = htmlspecialchars(trim($_POST['name']));
        $phone = htmlspecialchars(trim($_POST["phone"]));
        $message = htmlspecialchars('Страница продукта: ' . trim($_POST['page_url']) . '\n'
            . 'Продукт: ' . trim($_POST['page_title']));
        $error = '';
        if(!$name) {$error .= 'Укажите свое имя. ';}
        if(!$email) {$error .= 'Укажите электронную почту. ';}
        if(!$phone) {$error .= 'Укажите телефон. ';}
        if(!$error) {
            $address = get_bloginfo('admin_email');
            $mes = "Почта: ".$email."\n\nИмя: ".$name."\n\nТема: " .$phone."\n\nСообщение: ".$message."\n\n";
            $send = mail ($address,$phone,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
            if($send) {echo 'OK';}
        }
        else {echo '<div class="err">'.$error.'</div>';}
    }
    wp_die();
}

function send_get_call_ajax(){
    $post = (!empty($_POST)) ? true : false;
    if($post) {
        $name = htmlspecialchars(trim($_POST['name']));
        $phone = htmlspecialchars(trim($_POST["phone"]));
        $message = htmlspecialchars('Страница продукта: ' . trim($_POST['page_url']) . '\n'
            . 'Продукт: ' . trim($_POST['page_title']));
        $error = '';
        if(!$name) {$error .= 'Укажите свое имя. ';}
        if(!$phone) {$error .= 'Укажите телефон. ';}
        if(!$error) {
            $address = get_bloginfo('admin_email');
            $mes = "Имя: ".$name."\n\nТема: " .$phone."\n\nСообщение: ".$message."\n\n";
            $send = mail ($address,$phone,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$name <contact>");
            if($send) {echo 'OK';}
        }
        else {echo '<div class="err">'.$error.'</div>';}
    }
    wp_die();
}

function true_breadcrumbs(){

    // получаем номер текущей страницы
    $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $separator = ''; //  разделяем обычным слэшем, но можете чем угодно другим

    // если главная страница сайта
    if( is_front_page() ){

        if( $page_num > 1 ) {
            echo '<li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="' . site_url() . '">Главная</a></li>' . $separator . $page_num . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else { // не главная

        echo '<li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="' . site_url() . '">Главная</a></li>' . $separator;


        if( is_single() ){ // записи

            echo the_category( ', ' ); echo $separator; echo the_title('<li class="breadcrumbs__item"><a class="breadcrumbs__item-link">', '</a></li>');

        } elseif ( is_page() ){ // страницы WordPress

            echo the_title('<li class="breadcrumbs__item"><a class="breadcrumbs__item-link">', '</a></li>');

        } elseif ( is_category() ) {

            echo single_cat_title('<li class="breadcrumbs__item"><a class="breadcrumbs__item-link">') . '</a></li>';

        } elseif( is_tag() ) {

            echo '<li class="breadcrumbs__item"><a class="breadcrumbs__item-link">' . single_tag_title() . '</a></li>';

        } elseif ( is_day() ) { // архивы (по дням)

            echo '<li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a></li>' . $separator;
            echo '<li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a></li>' . $separator;
            echo get_the_time('d');

        } elseif ( is_month() ) { // архивы (по месяцам)

            echo '<li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a></li>' . $separator;
            echo get_the_time('F');

        } elseif ( is_year() ) { // архивы (по годам)

            echo get_the_time( 'Y' );

        } elseif ( is_author() ) { // архивы по авторам

            global $author;
            $userdata = get_userdata( $author );
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ( $page_num > 1 ) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }

    }

}