<?php
    $telegram_url = get_field('telegram_url', 'option');
    $facebook_url = get_field('facebook_url', 'option');
    $youtube_url = get_field('youtube_url', 'option');
    $instagram_url = get_field('instagram_url', 'option');
    $about_url = get_field('about_url', 'option');
    $privacy_url = get_field('privacy_url', 'option');
    $adv_url = get_field('adv_url', 'option');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.min.js?v=1.0" defer></script>
    <?php wp_head(); ?>
</head>
<body>
<div id="page">
    <header class="header" id="header">
        <div class="header__inner">
            <div class="header__row">
                <div class="logo-wrap"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="gre4ka logo" width="192" height="39"></a></div>
                <button class="burger-btn" id="burger-check-btn" onclick="this.classList.toggle('opened'); body.classList.toggle('mobile_menu_opened');initBodyScrollMenu();" aria-label="Main Menu"><span class="burger-btn__text">Menu</span><span class="icon-arrow_up"></span></button>
                <div class="menu-wrap scrollTarget">
                    <?php wp_nav_menu([
                        'theme_location' => 'menu',
                        'container' => 'nav',
                        'menu_class' => 'menu',
                        /*'menu_id' => 'nav',*/
                        'container_class' => 'primary-nav',
                        'container_aria_label' => 'primary',
                        'container_id' => null,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                    ])?>
                    <div class="search-wrap">
                        <div class="search-wrap__inner"><span class="toggle-search only-d-flex search-label" id="toggle-search-label" for="toggle-search-check"><span class="icon-search"></span><span class="toggle-search__text">Пошук</span></span>
                            <div class="form-wrap" id="form-wrap">
                                <div class="container">
                                    <form class="form">
                                        <div class="form-row">
                                            <div class="field-wrap">
                                                <div class="icon-wrap"><span class="icon-search"></span></div><input class="search-input" type="text" placeholder="Введіть слово для пошуку">
                                            </div>
                                            <button class="btn-search hide-m-t">Знайти</button>
                                            <button class="btn-search btn-search--arrow hide-d"></button>
                                            <div class="close-wrap toggle-search only-d-flex"><span class="icon-close"></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php wp_nav_menu([
                        'theme_location' => 'header-menu-about',
                        'container' => 'nav',
                        'menu_class' => 'menu menu-bottom',
                        /*'menu_id' => 'nav',*/
                        'container_class' => 'primary-nav',
                        'container_aria_label' => 'primary',
                        'container_id' => null,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                    ])?>
                    <div class="social-wrap">
                        <ul class="social">
                            <li><a href="<?=$facebook_url?>" target="_blank"><span class="icon icon-facebook"></span></a></li>
                            <li><a href="<?=$youtube_url?>" target="_blank"><span class="icon icon-youtube"></span></a></li>
                            <li><a href="<?=$telegram_url?>" target="_blank"><span class="icon icon-telegram"></span></a></li>
                            <li><a href="<?=$instagram_url?>" target="_blank"><span class="icon icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>