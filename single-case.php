<?php get_header(); ?>
    <main id="main" class="main-page">
        <?php
            get_template_part('template-sections/casesInner/section-hero');
            get_template_part('template-sections/casesInner/section-overview');
            get_template_part('template-sections/casesInner/section-background');
            get_template_part('template-sections/casesInner/section-solutions');
            get_template_part('template-sections/casesInner/section-functionality');
            get_template_part('template-sections/casesInner/section-expertise');
            get_template_part('template-sections/casesInner/section-more');
            get_template_part('template-sections/section-marque-client');
            get_template_part('template-sections/section-feedback');
            get_template_part('template-sections/section-marque-left-2');
        ?>
        <?php
            $test = get_field('test', 'option');
            echo $test;
        ?>
    </main>
<?php get_footer(); ?>


