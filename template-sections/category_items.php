<section class="section section-articles-slider">
    <?php get_template_part( 'template-parts/images/gradient-11' ); ?>
    <?php
    $category = get_the_category();
    $category_link = get_category_link($category[0]);
    $catName = $category[0]->cat_name;
    ?>
    <div class="container">
        <div class="section-title-wrap"><div class="section-title-wrap__title"><h2><span>Recent from</span> <?php echo $catName ?></h2></div></div>
        <div class="swiper-holder">
            <div class="swiper insights-slider">
                <div class="swiper-wrapper" id="insights-swiper-wrapper">
                    <?php
                    if ( have_posts() ) :
                        $currentID = get_the_ID();
                        $args = array(
                            'category_name' => $catName,
                            'posts_per_page' => '10',
                            'post__not_in' => array($currentID)
                        );
                        query_posts($args);
                        while (have_posts()) : the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="insights-card">
                                    <div class="insights-card__inner">
                                        <div class="insights-card__tag"><a class="insights-card__tag__link" href="<?= $category_link ?>"><?= $catName ?></a></div>
                                        <div class="insights-card__img-wrap"><div class="insights-card__img"><a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail(); ?></a></div></div>
                                        <div class="insights-card__text-wrap">
                                            <div class="insights-card__descr">
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <p><?php do_excerpt(get_the_excerpt(), 20); ?></p>
                                            </div>
                                            <div class="article-info">
                                                <div class="article-info__author">
                                                    <div class="article-info__author__avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 75 ); ?></div>
                                                    <div class="article-info__author__name"><span><?php the_author(); ?></span></div>
                                                </div>
                                                <div class="article-info__date"><span><?php the_date("M j, Y") ?></span></div>
                                            </div>
                                            <a class="insights-card__btn" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : echo '404:nothing' ?>
                    <?php endif; ?>
                </div>
                <div class="slider-control">
                    <div class="btn-arrow swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><span class="icon icon-arrow-wide"></span></div>
                    <div class="btn-arrow swiper-button-next" tabindex="0" role="button" aria-label="next-slide"><span class="icon icon-arrow-wide"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>