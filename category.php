<?php

$cat = get_the_category();
$catName = $cat[0]->cat_name;
?>
<?php get_header(); ?>
    <main id="main" class="main-page">
        <div class="container">
            <div class="page-wrap">
                <div class="page-wrap__col page-wrap__col--main">
                    <section class="section main-section">
                        <div class="section__title">
                            <h1><?=$catName?></h1>
                        </div>
                        <div class="category-news">
                            <?php if ( have_posts() ) :
                                while (have_posts()) : the_post();
                                    $badges = get_field('badges');
                                    $updated = empty($badges['update']) ? 0 : 1;
                                    $photo = empty($badges['photo']) ? 0 : 1;
                                    ?>
                                    <div class="category-news__item">
                                        <div class="img-wrap"><a class="img-link" href="<?=get_the_permalink();?>"><?=get_the_post_thumbnail()?></a></div>
                                        <div class="text-wrap">
                                            <div class="title">
                                                <h3><a href="<?=get_the_permalink();?>"><?=get_the_title()?></a>
					                                <?php if($updated): ?>
                                                        <span class="update">оновлено</span>
					                                <?php endif; ?>
					                                <?php if($photo): ?>
                                                        <span class="icon icon-photo"></span>
					                                <?php endif; ?>
                                                </h3>
                                            </div>
                                            <div class="descr">
                                                <p><?=get_the_excerpt()?></p>
                                            </div>
                                            <div class="date"><span><?=get_the_date('H:i, d F, Y')?></span></div>
                                        </div>
                                    </div>
                            <?php endwhile; endif;?>
                        </div>
                        <?php get_template_part('template-sections/pagination') ?>
                    </section>
                </div>
                <?php get_template_part('template-sections/aside');?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
