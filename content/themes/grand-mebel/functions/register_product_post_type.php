<?php

add_action('init', 'register_product_post_type');

function register_product_post_type()
{
    register_post_type('product', [
        'label' => null,
        'labels' => [            'name' => 'Товары', // основное название для типа записи
            'singular_name' => 'Товар', // название для одной записи этого типа
            'add_new' => 'Добавить товар', // для добавления новой записи
            'add_new_item' => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование товара', // для редактирования типа записи
            'new_item' => 'Новый товар', // текст новой записи
            'view_item' => 'Смотреть товар', // для просмотра записи этого типа.
            'search_items' => 'Искать товар', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Товары', // название меню
        ],
        'description' => '',
        'public' => true,
        'publicly_queryable' => null, // зависит от public
        'exclude_from_search' => null,
        'hierarchical' => false,

        'show_ui' => null, // зависит от public
        'show_in_menu' => true, // показывать ли в меню адмнки
        'show_in_nav_menus' => true, // зависит от public

        'capabilities' => [],// массив дополнительных прав для этого типа записи

        'rewrite' => [
            'slug' => 'products',
            'with_front' => false,
            'feeds' => true,
            'pages' => true
        ],
        'taxonomies' => ['product_category'],
        'has_archive' => true,
        'query_var' => true,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        //'map_meta_cap' => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        //'capability_type' => 'post',
        'menu_icon' => 'dashicons-cart',
        //'menu_position' => null,
        //'rest_base' => null, // $post_type. C WP 4.7
        //'show_in_rest' => null, // добавить в REST API. C WP 4.7
        //'show_in_admin_bar' => null, // зависит от show_in_menu
        //'exclude_from_search' => null, // зависит от public

    ]);
}
