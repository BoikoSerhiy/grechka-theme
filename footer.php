<?php
    $telegram_url = get_field('telegram_url', 'option');
    $facebook_url = get_field('facebook_url', 'option');
    $youtube_url = get_field('youtube_url', 'option');
    $instagram_url = get_field('instagram_url', 'option');
    $policy_url = get_field('policy_url', 'option');
    $privacy_url = get_field('privacy_url', 'option');
    $about_url = get_field('about_url', 'option');
    $privacy_url = get_field('privacy_url', 'option');
    $adv_url = get_field('adv_url', 'option');
?>
<footer class="footer">
    <div class="footer__wrap">
        <div class="container">
            <div class="footer__nav-row">
                <div class="footer__col">
                    <div class="img-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/grechka-logo.svg" alt="gre4ka logo" width="90" height="64"></div><span class="img-descr">© 2020, Гречка.<br>Інформаційний портал Кіровоградщини - Гречка - Новини Кропивницький.</span>
                </div>
                <div class="footer__col">
                    <?php wp_nav_menu([
                        'theme_location' => 'footer-menu',
                        'container' => 'nav',
                        'menu_class' => 'footer-menu',
                        /*'menu_id' => 'nav',*/
                        'container_class' => 'primary-nav',
                        'container_aria_label' => 'primary',
                        'container_id' => null,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                    ])?>
                </div>
                <div class="footer__col">
                    <div class="col-title"><span>Про нас</span></div>
                    <?php wp_nav_menu([
                        'theme_location' => 'footer-menu-about',
                        'container' => 'nav',
                        'menu_class' => 'menu-about',
                        /*'menu_id' => 'nav',*/
                        'container_class' => 'primary-nav',
                        'container_aria_label' => 'primary',
                        'container_id' => null,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                    ])?>
                </div>
                <div class="footer__col">
                    <div class="col-title"><span>Слідкуйте за нами</span></div>
                    <ul class="footer-social">
                        <li><a href="<?=$telegram_url?>" target="_blank"><span class="icon icon-telegram"></span><span class="descr">Telegram</span></a></li>
                        <li><a href="<?=$facebook_url?>" target="_blank"><span class="icon icon-facebook"></span><span class="descr">Facebook</span></a></li>
                        <li><a href="<?=$youtube_url?>" target="_blank"><span class="icon icon-instagram"></span><span class="descr">Instagram</span></a></li>
                        <li><a href="<?=$instagram_url?>" target="_blank"><span class="icon icon-youtube"></span><span class="descr">YouTube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="rights"><span class="rights__text">Усі права захищені. Передрук матеріалів тільки за наявності гіперпосилання на <a href='gre4ka.info' target='_blank'>gre4ka.info</a>. В матеріалах використовуються зображенння надані сервісом <a href='depositphotos.com' target='_blank'>Depositphotos</a>.</span></div>
                <ul class="menu-privacy">
                    <li><a href="<?=$policy_url?>">Політика конфіденційності</a></li>
                    <li><a href="<?=$privacy_url?>">Правова інформація</a></li>
                </ul>
                <div class="footer__dev"><a class="developing" href="https://solardigital.com.ua" target="_blank" rel="noopener nofollow external noreferrer" data-wpel-link="external"><span class="developing__text">Розробник:</span><img class="developing__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/solar_digital_logo.svg" width="120" height="17" title="Розробка сайту - креативне Діджитал агентство Solar Digital:" alt="Розробка сайту - креативне Діджитал агентство Solar Digital:"></a></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>