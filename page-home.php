<?php
/*
 Template name: Home page
*/
$news_sections = get_field('news_sections');
?>
<?php get_header(); ?>

    <main id="main" class="main-page">
        <div class="container">
            <div class="page-wrap">
                <div class="page-wrap__col page-wrap__col--main">
                    <?php
                        get_template_part('template-sections/main_page/main_news');
                        foreach ($news_sections as $news_section):
                    ?>

                    <?php
                        global $data;
                        $data = $news_section;
                        get_template_part("template-sections/main_page/{$data['section_type']}")
                    ?>
                    <?php  endforeach; ?>
                </div>
                <?php get_template_part('template-sections/aside');?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>