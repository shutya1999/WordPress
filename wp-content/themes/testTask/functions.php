<?php

function testTask_assets(){
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'mediacss', get_template_directory_uri() . '/assets/css/media.css');
    wp_enqueue_script('scriptjs', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'testTask_assets');
show_admin_bar(false);

//add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
//function my_scripts_method(){
//    wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/assets/js/script.js');
//}


add_action('after_setup_theme', function (){
    add_theme_support('menus');

    register_nav_menu('header-menu', 'Вверхней части сайта');
    register_nav_menu('mobile-menu', 'Мобильное меню');

});
