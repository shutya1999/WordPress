<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
        wp_head();
    ?>
    <meta name="viewport" content="width=device-width">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="main-header">
            <div class="woman">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/header/woman.png'?>" alt="">
        </div>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/header/logo2.png'?>" alt="">
            </div>
            <div class="slogan">
                <h1>ВАШ НАДЕЖНЫЙ<br>
                    БУХГАЛТЕР</h1>
            </div>
        </div>
    </div>
<div class="main-menu">
        <div class="header-burger">
            <span></span>
        </div>
        <?php
        if (has_nav_menu('header-menu')){
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'container_class' => 'desktop-menu'
            ]);
        }

        if (has_nav_menu('mobile-menu')){
            wp_nav_menu([
                'theme_location' => 'mobile-menu',
                'container_class' => 'mobile-menu'
            ]);
        }
        ?>
</div>
</header>
<?php
if ($menu){
    echo $menu;
}
?>