<?php
$category = get_the_category();
$category_link = get_category_link($category[0]);
$catName = $category[0]->cat_name;
$post_id = $post->ID; // current post ID

$current_cat_id = $category[0]->cat_ID; // current category ID
$args = array(
	'cat' => $current_cat_id,
	'orderby'  => 'post_date',
	'order'    => 'DESC'
);
$posts = get_posts( $args );
// get IDs of posts retrieved from get_posts
$ids = array();
foreach ( $posts as $thepost ) {
	$ids[] = $thepost->ID;
}
// get and echo previous and next post in the same category
$thisindex = array_search( $post_id, $ids );
$previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
$nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;
?>
<article class="article">
    <span class="category-name-top"><?php echo $catName ?></span>
    <h1><?php the_title(); ?></h1>
    <div class="article__top-wrap">
        <div class="date"><span><?=get_the_date("H:i, d F, Y")?></span></div>
        <div class="social-wrap"><span class="social-wrap__descr">Поділитись:</span><?php echo do_shortcode( '[wpusb]' ); ?></div>
    </div>
    <div class="promo-img-wrap">
        <div class="promo-img">
            <span class="promo-img__label">Промо</span>
	        <?=get_the_post_thumbnail()?>
        </div>
    </div>
    <div class="excerpt-wrap">
	    <?php the_excerpt(); ?>
    </div>
	<?php the_content('', true); ?>
    <div class="article__bottom-row">
        <div class="social-wrap"><span class="social-wrap__descr">Поділитись:</span><?php echo do_shortcode( '[wpusb]' ); ?></div>
    </div>
</article>
<section class="section">
    <div class="tags article-tags">
        <div class="tags__row">
            <span class="tags__descr">Теми:</span>
	        <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
        </div>
    </div>
</section>
<section class="section">
    <div class="section__title mob-primary"><h2>Останні новини по темі</h2></div>
    <div class="article-last-news">
	    <?php if(false !== $previd): ?>
            <a class="item" href="<?php the_permalink($previd); ?>">
                <div class="text-wrap">
                    <div class="title">
                        <h3><span><?= get_the_title($previd); ?></span></h3>
                    </div>
                </div>
                <div class="img-wrap">
                    <div class="img"><?=get_the_post_thumbnail($previd);?></div>
                </div>
                <div class="arrow arrow-left icon-arrow_select"></div>
            </a>
	    <?php else: ?>
            <div class="item item-hold"></div>
	    <?php endif; ?>
	    <?php if(false !== $nextid): ?>
            <a class="item" href="<?php the_permalink($nextid); ?>">
                <div class="img-wrap">
                    <div class="img"><?=get_the_post_thumbnail($nextid);?></div>
                </div>
                <div class="text-wrap">
                    <div class="title">
                        <h3><span><?= get_the_title($nextid); ?></span></h3>
                    </div>
                </div>
                <div class="arrow arrow-right icon-arrow_select"></div>
            </a>
	    <?php endif; ?>
    </div>
</section>
<section class="section">
    <div class="section__title mob-primary">
        <h2>Читайте також</h2>
    </div>
    <?php similar_posts(); ?>
</section>
