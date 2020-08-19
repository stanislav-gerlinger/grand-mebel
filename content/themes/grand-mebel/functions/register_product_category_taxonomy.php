<?php

add_action('init', 'create_taxonomy');

function create_taxonomy()
{

    // список параметров: wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy('product_category', ['product'], [
        'label' => '', // определяется параметром $labels->name
        'labels' => [
            'name' => 'Категории товаров',
            'singular_name' => 'Категория',
            'search_items' => 'Поиск категории',
            'all_items' => 'Все категории',
            'view_item ' => 'Смотреть категории',
            'parent_item' => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item' => 'Редактировать категорию',
            'update_item' => 'Обновить категорию',
            'add_new_item' => 'Добавить новую категорию',
            'new_item_name' => 'Новое имя категории',
            'menu_name' => 'Категория',
        ],
        'description' => '', // описание таксономии
        'public' => true,
        // 'publicly_queryable'    => null, // равен аргументу public
        // 'show_in_nav_menus'     => true, // равен аргументу public
        // 'show_ui'               => true, // равен аргументу public
        // 'show_in_menu'          => true, // равен аргументу show_ui
        // 'show_tagcloud'         => true, // равен аргументу show_ui
        // 'show_in_quick_edit'    => null, // равен аргументу show_ui
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'product-category',
        ],
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities' => array(),
        'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest' => null, // добавить в REST API
        'rest_base' => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ]);
}
