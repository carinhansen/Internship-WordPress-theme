<?php

// Category overview parent title
    function parent_title()
    {
        $post = get_post(); // If $post is already available, skip.
        $terms = get_the_terms($post->ID, 'category');
        foreach ($terms as $term) :
            if ($term->parent === 0) :
                echo $term->name;
            endif;
        endforeach;
    }
//    function add_theme_scripts() {
//        wp_enqueue_style( 'custom.css', get_template_directory_uri() . '/css/custom.css', array(), '1.1', 'all');
//    }
//    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


    // function to show all the categories
    function categoryList() {
        $categories = get_categories(array(
            'orderby' => 'name',
            'order' => 'ASC'
        ));
        foreach ($categories as $category) {
            $category_link = sprintf(
                '<a href="%1$s" alt="%2$s">%3$s</a>',
                esc_url(get_category_link($category->term_id)),
                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                esc_html($category->name)
            );

            echo '<button type="button">' . sprintf($category_link) . '</button> ';
        }
    }

    // makes it possible to add a thumbnail when you add a page or post
    add_theme_support( 'post-thumbnails' );

    // add navigation
    function wpb_custom_new_menu() {
        register_nav_menus(
            array(
                'main-nav' => __( 'Main navigation' ),
                'extra-menu' => __( 'Extra Menu' )
            )
        );
    }
    add_action( 'init', 'wpb_custom_new_menu' );

    // new line of code
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
