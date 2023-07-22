<?php
global $data;
$category = get_term($data['posts_section'][0] ?? 0);
$posts = get_posts([
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => $data['posts_amount'] ?? 2,
    'cat' => $category->term_id
]);
?>
<section class="section">
    <div class="section__title">
        <h2><?=$category->name?></h2>
    </div>
    <div class="cards-wrap">
        <?php foreach ($posts as $post): ?>
        <div class="card">
            <div class="img-wrap"><a href="<?=get_the_permalink($post)?>"><?=get_the_post_thumbnail($post)?></a></div>
            <div class="text-wrap">
                <div class="title">
                    <h3><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post)?></a></h3>
                </div>
                <div class="descr">
                    <p><?=get_the_excerpt($post)?></p>
                </div>
                <div class="date"><span><?=get_the_date("H:i, d F, Y", $post)?></span></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
