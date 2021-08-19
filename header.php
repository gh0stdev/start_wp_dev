<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SegaPrototype
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css"
          rel="stylesheet"/>

    <script type="text/javascript">
        if (!window.BX) window.BX = {};
        if (!window.BX.message) window.BX.message = function (mess) {
            if (typeof mess == 'object') for (var i in mess) BX.message[i] = mess[i];
            return true;
        };
    </script>
    <script type="text/javascript">
        (window.BX || top.BX).message({
            'JS_CORE_LOADING': 'Загрузка...',
            'JS_CORE_NO_DATA': '- Нет данных -',
            'JS_CORE_WINDOW_CLOSE': 'Закрыть',
            'JS_CORE_WINDOW_EXPAND': 'Развернуть',
            'JS_CORE_WINDOW_NARROW': 'Свернуть в окно',
            'JS_CORE_WINDOW_SAVE': 'Сохранить',
            'JS_CORE_WINDOW_CANCEL': 'Отменить',
            'JS_CORE_WINDOW_CONTINUE': 'Продолжить',
            'JS_CORE_H': 'ч',
            'JS_CORE_M': 'м',
            'JS_CORE_S': 'с',
            'JSADM_AI_HIDE_EXTRA': 'Скрыть лишние',
            'JSADM_AI_ALL_NOTIF': 'Показать все',
            'JSADM_AUTH_REQ': 'Требуется авторизация!',
            'JS_CORE_WINDOW_AUTH': 'Войти',
            'JS_CORE_IMAGE_FULL': 'Полный размер'
        });
    </script>
    <script type="text/javascript">
        (window.BX || top.BX).message({
            'LANGUAGE_ID': 'ru',
            'FORMAT_DATE': 'DD.MM.YYYY',
            'FORMAT_DATETIME': 'DD.MM.YYYY HH:MI:SS',
            'COOKIE_PREFIX': 'BITRIX_SM',
            'SERVER_TZ_OFFSET': '10800',
            'SITE_ID': 's1',
            'SITE_DIR': '/',
            'USER_ID': '',
            'SERVER_TIME': '1629208729',
            'USER_TZ_OFFSET': '0',
            'USER_TZ_AUTO': 'Y',
            'bitrix_sessid': '50faac584632b7777f2783efbc53c863'
        });
    </script>

    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

    <?php wp_head(); ?>

    <script type="text/javascript">
        BX.setJSList([
            '/bitrix/js/main/core/core.js',
            '/bitrix/js/main/core/core_ajax.js',
            '/bitrix/js/main/core/core_popup.js',
            '/bitrix/js/main/core/core_fx.js',
            '/bitrix/js/main/core/core_window.js',
            '/bitrix/js/main/core/core_date.js',
            '/bitrix/js/main/json/json2.min.js',
            '/bitrix/js/main/core/core_ls.js',
            '/bitrix/js/main/session.js',
            '/bitrix/js/main/utils.js',
            '/bitrix/js/socialservices/ss.js',
            '/html-markup/build/scripts/app.min.js',
            '/local/templates/dmi/js/jquery.cookie.js',
            '/local/templates/dmi/js/script.js',
            '/local/templates/dmi/js/jquery.form.min.js',
            '/local/templates/dmi/js/chosen-custom.jquery.js',
            '/local/templates/dmi/js/form_functions.js',
            '/local/components/custom/sticky.banner/templates/.default/script.js',
            '/local/components/custom/uform.form/templates/design-request/script.js',
            '/local/components/custom/uform.form/templates/design-request-kitchen/script.js',
            '/local/components/custom/uform.form/templates/design-request-kitchen-map/script.js',
            '/local/components/custom/uform.form/templates/.default/script.js',
            '/local/templates/.default/components/bitrix/catalog.section.list/cities/script.js',
            '/local/templates/.default/components/bitrix/system.auth.form/popup/script.js',
            '/local/templates/.default/components/bitrix/main.register/.default/script.js',
            '/local/components/custom/uform.form/templates/matress_size/script.js',
            '/local/components/custom/uform.form/templates/testimonial-popup-completed/script.js'
        ]);
    </script>

    <script>
        var hoverTime = 0;
        var hoverInterval;
    </script>
    <script>
        var hoverTimer;

        $(document).ready(
            function () {
                $('.fixed-header__menu .fixed-header__menu-item.fixed-header__menu-item_pr.js-menu-dropdown').hover(
                    function () {
                    },
                    function () {
                        $(this).removeClass('_opened');
                        $('.menu-dropdown__overlay.js-overlay').removeClass('_active');
                    }
                );


                $('.fixed-header__menu .fixed-header__menu-item-link.js-menu-dropdown-link').hover(
                    function () {
                        hoverTimer = setInterval(
                            function () {
                                hoverTime++;
                            },
                            100
                        );
                    },
                    function () {
                        clearInterval(hoverTimer);
                        hoverTime = 0;
                        clearInterval(hoverInterval);
                    }
                );
            }
        );
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; width: 0; height: 0; clip: rect(0 0 0 0);">
    <defs>
        <symbol id="action-free-delivery" viewBox="0 0 202.67 143.32" x="0px" y="0px">
            <path d="M193.71,80.24l-20.16-30.97h-42.55v69.42h13.95c2.04-8.97,10.05-15.68,19.64-15.68c9.59,0,17.6,6.7,19.64,15.68h9.47V80.24z
                 M164.6,134.37c6.18,0,11.2-5.01,11.2-11.2c0-6.18-5.01-11.2-11.2-11.2c-6.18,0-11.2,5.01-11.2,11.2
                C153.4,129.35,158.41,134.37,164.6,134.37 M122.05,11.2c0-1.24-1-2.24-2.24-2.24H11.2c-1.24,0-2.24,1-2.24,2.24v105.25
                c0,1.24,1,2.24,2.24,2.24h21.79c2.04-8.97,10.05-15.68,19.64-15.68c9.59,0,17.6,6.7,19.64,15.68h49.78V11.2z M52.63,134.37
                c6.18,0,11.2-5.01,11.2-11.2c0-6.18-5.01-11.2-11.2-11.2c-6.18,0-11.2,5.01-11.2,11.2C41.43,129.35,46.44,134.37,52.63,134.37
                 M198.19,127.65h-13.95c-2.04,8.97-10.05,15.68-19.64,15.68c-9.59,0-17.6-6.7-19.64-15.68h-13.95h-4.48H72.26
                c-2.04,8.97-10.05,15.68-19.64,15.68c-9.59,0-17.6-6.7-19.64-15.68H4.48c-2.47,0-4.48-2-4.48-4.48V4.48C0,2.01,2,0,4.48,0h122.05
                c2.47,0,4.48,2.01,4.48,4.48v35.83h44.79c1.27,0,2.41,0.53,3.22,1.38c0.02,0.02,0.04,0.03,0.05,0.04l22.17,33.37
                c0.02,0.02,0.03,0.04,0.05,0.05c0.85,0.82,1.38,1.96,1.38,3.22v44.79C202.67,125.64,200.66,127.65,198.19,127.65"/>
        </symbol>
        <symbol id="action-free-construct" viewBox="0 0 131.5 131.5" x="0px" y="0px">
            <g>
                <path d="M108.9,33.9c0,1.14-0.92,2.05-2.05,2.05h-8.22V19.52h8.22c1.14,0,2.05,0.92,2.05,2.05V33.9z M90.41,15.41v24.66v5.14
		c0,1.13-0.92,2.05-2.05,2.05H58.56H17.47h-1.03c-4.54,0-8.22-3.68-8.22-8.22v-22.6c0-4.54,3.68-8.22,8.22-8.22h71.91
		c1.13,0,2.05,0.92,2.05,2.05V15.41z M62.4,70.11l-3.85,1.03V55.48h2.05l3.25,12.12C64.15,68.69,63.5,69.82,62.4,70.11
		 M64.72,107.87c1.13,0,2.05,0.92,2.05,2.05v11.3c0,1.13-0.92,2.05-2.05,2.05H50.34H33.9c-2.9,0-5.44-1.5-6.9-3.77h19.23
		c2.27,0,4.11-1.84,4.11-4.11c0-2.27-1.84-4.11-4.11-4.11H25.68V55.48h24.66v39.04v3.08c0,4.54,3.68,8.22,8.22,8.22L64.72,107.87z
		 M127.39,23.63h-10.27v-8.22c0-2.27-1.84-4.11-4.11-4.11H98.62V8.22c0-4.54-3.68-8.22-8.22-8.22H16.44C7.36,0,0,7.36,0,16.44v22.6
		c0,9.08,7.36,16.44,16.44,16.44h1.03v59.59c0,9.08,7.36,16.44,16.44,16.44h16.44h8.22h8.22c4.54,0,8.22-3.68,8.22-8.22v-15.41
		c0-4.54-3.68-8.22-8.22-8.22l-6.16-2.05c-1.14,0-2.06-0.92-2.06-2.05v-1.03V79.65l11.93-3.2c2.19-0.59,3.49-2.84,2.91-5.03
		l-4.27-15.94h21.29c4.54,0,8.22-3.68,8.22-8.22v-3.08h14.38c2.27,0,4.11-1.84,4.11-4.11v-8.22h10.27c2.27,0,4.11-1.84,4.11-4.11
		C131.5,25.47,129.66,23.63,127.39,23.63"/>
                <path d="M46.23,16.97h-23.8c-2.27,0-4.11,1.84-4.11,4.11c0,2.27,1.84,4.11,4.11,4.11l23.8,0c2.27,0,4.11-1.84,4.11-4.11
		C50.34,18.81,48.5,16.97,46.23,16.97"/>
            </g>
        </symbol>
    </defs>
</svg>

<script>
    var siteType = 'd';
    if (window.innerWidth < 1024) {
        siteType = 't';
    }
    if (window.innerWidth < 768) {
        siteType = 'm';
    }
    var userEmail = "";
    var accountId = 49830;
</script>

<script type="text/javascript">
    var _tmr = _tmr || [];
    _tmr.push({
        type: 'itemView',
        productid: '',
        pagetype: 'home',
        list: '1',
        list: '2',
        list: '3',
        list: '4',
        totalvalue: ''
    });
</script>
<script type="text/javascript">
    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        {event: "setAccount", account: accountId},
        {event: "setEmail", email: userEmail},
        {event: "setSiteType", type: siteType},
        {event: "viewHome"}
    );
</script>
<div id="panel" style="position:absolute; bottom:0px;"></div>

<div class="blocks-wrapper js-blocks-wrapper ">

    <!--    <div class="b-start-arrow-w">-->
    <!--        <a href="index.html#" class="b-start-arrow _green "></a>-->
    <!--    </div>-->

    <div class="header " id="main-header">

        <div class="header-wrapper-new" id="header-wrapper-new">
            <div class="pre-header" id="pre-header">
                <div class="pre-header__container container">
                    <nav class="pre-header__menu-block">
                        <?php
                            sp_pre_header_menu();
                        ?>
<!--                        <a href="https://dyatkovo.ru/stores/"-->
<!--                           class="pre-header__menu-item--show-mobile-only pre-header__menu-item">Магазины</a>-->
                    </nav>
                    <div class="pre-header__account">
                        <div class="fixed-header__right-part desktop-only">
                            <div class="fixed-header__search" id="header-search">
                                <i class="fixed-header__search-icon"></i>
                                <p class="fixed-header__search-text">Поиск</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-body header-body_open" id="header-body">
                <div class="header-body__container container">
                    <div class="header-body__list">

                        <a href="index.html#" class="header-body__burger js-header-burger">
                            <span class="header-body__burger-line"></span>
                            <span class="header-body__burger-line"></span>
                            <span class="header-body__burger-line"></span>
                        </a>

                        <?php
                        $logo_id = carbon_get_theme_option('sp_header_logo');
                        $logo = $logo_id ? wp_get_attachment_image_src($logo_id, 'full') : '';
                        $site_name = carbon_get_theme_option('sp_header_site_name') ?
                            carbon_get_theme_option('sp_header_site_name') : get_bloginfo('name');
                        $site_decs = carbon_get_theme_option('sp_header_site_desc') ?
                            carbon_get_theme_option('sp_header_site_desc') : get_bloginfo('description');
                        if (is_front_page() && is_home()) :
                            if ($logo_id) : ?>
                                <h1 class="logo-title">
                                    <img src="<?php echo $logo[0]; ?>" width="120" height="30" alt="">
                                </h1>
                            <?php else: ?>
                                <h1 class="logo-title">
                                    <?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
                                </h1>
                            <?php endif;
                        else:
                            if ($logo_id) : ?>
                                <div class="logo-title">
                                    <a href="<?php echo home_url('/'); ?>">
                                        <img src="<?php echo $logo[0]; ?>" width="120" height="30" alt="">
                                    </a>
                                </div>

                            <?php else: ?>
                                <div class="logo-title h1">
                                    <a href="<?php echo home_url('/'); ?>">
                                        <?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
                                    </a>
                                </div>

                            <?php endif;
                        endif; ?>

                        <div class="header-body__main-part">

<!--                            <div class="header-body__item header-body__item_stores header-mobile-hidden">-->
<!--                                <a href="https://dyatkovo.ru/stores/"-->
<!--                                   class="header-body__item-link"><span>Магазины</span></a>-->
<!--                            </div>-->

                            <div class="header-body__item ws-phone">
                                <a href="tel:88005550085"
                                   class="header-body__item-link-phn header-body__item-link header-body__item-link_tdn">8
                                    800 555 00 85</a>
                                <div class="header-body__timetable-itself  header-mobile-hidden">с 8:00 до 21:00</div>
                                <a href="javascript:void(0)" data-href="#call-request-popup"
                                   class="header-body__timetable-call-request js-popup-link  header-mobile-hidden">Заказать
                                    звонок</a>
                            </div>

                            <!--noindex-->
<!--                            <a href="https://dyatkovo.ru/personal/cart/" class="header-body__cart">-->
<!--                                <span class="header-body__cart-icon"></span>-->
<!--                                <span class="header-body__cart-text header-mobile-hidden">0</span>-->
<!--                                <span class="rub header-mobile-hidden"></span>-->
<!--                            </a>-->
                            <!--/noindex-->
                            <a href="javascript:void(0)" data-href="#call-request-popup"
                               class="header-body__timetable-call-request js-popup-link  header-mobile-show">Заказать
                                звонок</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="fixed-header" id="header-hide-for-video">
            <div class="fixed-header__container container">

                <div class="fixed-header__wrapper">
                    <div class="fixed-header__main-part js-fixed-header__menu">

                        <a href="index.html#" class="fixed-header__burger js-header-burger">
                            <i class="fixed-header__burger-icon">
                                <span class="fixed-header__burger-icon-span"></span>
                                <span class="fixed-header__burger-icon-span"></span>
                                <span class="fixed-header__burger-icon-span"></span>
                            </i>
                            <p class="fixed-header__burger-text">меню</p>
                        </a>
                        <a href="https://dyatkovo.ru/catalogue/" class="fixed-header__all-goods"
                           style="font-weight:600">Каталог</a>

                        <?php
                        sp_primary_menu();
                        ?>

                        <div class="fixed-header__actions-wrap">
                            <a href="https://dyatkovo.ru/catalogue/special-offer/" class="fixed-header__actions"
                               style="font-weight:600">ЛИКВИДАЦИЯ</a>
                        </div>
                    </div>

                </div>
                <div class="fixed-header__search-open" id="open-search">
                    <div class="fixed-header__search-open-input-holder">
                        <form action="https://dyatkovo.ru/search/index.php">
                            <input id="open-search-input"
                                   type="text" name="q"
                                   value=""
                                   class="fixed-header__search-open-input js-search-input"
                                   placeholder="искать, например, ">
                            <a href="index.html#" class="fixed-header__search-open-link" id="search-open-link">шкаф</a>
                            <button type="submit" class="search__button" style="display: none;" name="s"
                                    value="Поиск"></button>
                        </form>
                    </div>
                    <a href="index.html#" class="fixed-header__search-open-close" id="open-search-close"></a>
                </div>
            </div>
        </div>

    </div>
