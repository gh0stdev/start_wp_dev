<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

register_nav_menus(array(
    'primary' => 'Основное Меню',
    'secodary' => 'Верхнее Меню',
    'third' => 'Footer Меню',
));


function sp_primary_menu(){
    wp_nav_menu( array(
        'container' => '',
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'menu_class'        => 'fixed-header__menu',
        'walker' => new SP_Walker_Super_Menu(),
    ) );
}

function sp_pre_header_menu(){
    wp_nav_menu( array(
        'container' => '',
        'menu' => 'HeadStaticMenu',
        'walker' => new SP_Walker_Pre_Header_Menu(),
    ) );
}

class SP_Walker_Super_Menu extends Walker_Nav_Menu
{
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

    public $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    );

    public $pred_menu = array();

    public function walk($elements, $max_depth, ...$args)
    {
        $html = '';

        foreach ($elements as $element) {
            if ($element->menu_item_parent == 0) {
                $pred_menu[$element->ID] = (array)$element;
            }

            if (array_key_exists($element->menu_item_parent, $pred_menu)) {
                $pred_menu[$element->menu_item_parent]['childs'][] = (array)$element;
            }
        }

        foreach ($pred_menu as $menu_item) {
            foreach ($menu_item['childs'] as $child => $child_val) {
                foreach ($elements as $element) {
                    if ($element->menu_item_parent == $child_val['ID']) {
                        $pred_menu[$menu_item['ID']]['childs'][$child]['childs'][] = (array)$element;
                    }
                }
            }
        }

        $html = '<ul class="fixed-header__menu">';

        foreach ($pred_menu as $menu_item) {
            $html .= '<li class="fixed-header__menu-item fixed-header__menu-item_pr js-menu-dropdown">';

            $html .= '<a href="' . $menu_item['url'] . '" class="fixed-header__menu-item-link js-menu-dropdown-link">' .
                $menu_item['title'] . '</a>';

            if (isset($menu_item['childs'])) {
                $html .= '<div class="menu-dropdown menu-dropdown_horizontal _active">
                        <div class="menu-dropdown-hor__container">
                            <div class="menu-dropdown-hor">
                            <div class="menu-dropdown-hor__img">
                                <img src="" alt="">
                                <div class="menu-dropdown-hor__img-text"></div>
                            </div>
                            <div class="menu-dropdown-hor__row">';

                foreach ($menu_item['childs'] as $child_cat) {
                    $html .= '<div class="menu-dropdown-hor__col menu-dropdown-hor__col_1">
                                <div class="menu-dropdown-hor__title">' . $child_cat['title'] . '</div>';

                    if (isset($child_cat['childs'])) {
                        $html .= '<div class="menu-dropdown-hor__lists">
                                    <ul class="menu-dropdown-hor__list">';

                        foreach ($child_cat['childs'] as $child_prod) {
                            $html .= '<li class="menu-dropdown-hor__item">
                                <a href="' . $child_prod['url'] . '" class="menu-dropdown-hor__link" data-img="' . get_the_post_thumbnail_url( $child_prod['object_id'], [260, 412]) . '">
                                ' . $child_prod['title'] . '
                                </a>
                            </li>';
                        }

                        $html .= '</ul></div>';
                    }

                    $html .= '</div>';
                }
                $html .= '</div></div></div></div>';
            }

            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}


class SP_Walker_Pre_Header_Menu extends Walker_Nav_Menu
{
    public $pred_menu = array();

    public function walk($elements, $max_depth, ...$args)
    {
        $html = '';

        foreach ($elements as $element) {
            $pred_menu[$element->ID] = (array)$element;
        }


        $html = '<nav class="pre-header__menu-block">';

        foreach ($pred_menu as $menu_item) {
            $html .= '<a href="' . $menu_item['url'] . '" class=" pre-header__menu-item">' . $menu_item['title'] . '</a>';
        }

        $html .= '</nav>';

        return $html;
    }
}