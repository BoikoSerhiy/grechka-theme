<?php
    $main_category = (int)get_field('main_category', 'option');
    $category = get_term($main_category);
    $posts = get_posts([
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'cat' => $category->term_id,
        ''
    ]);
    $main_news_data = [];
    foreach ($posts as $idx => $post){
        $index = $idx + 1;
        if($index == 1 || $index % 4 == 0) {
            $main_news_data[] = $post;
            continue;
        }
        $last_index = count($main_news_data) - 1;
        if(!is_array($main_news_data[$last_index])){
            $main_news_data[] = [];
        }
        $last_index = count($main_news_data) - 1;
        $main_news_data[$last_index][] = $post;
    }
?>
<section class="section main-section main-section--home">
    <div class="section__title">
        <h1><?=$category->name?></h1>
    </div>
    <?php if( $posts): global $data, $item;?>

        <div class="main-cards-wrap">
            <?php foreach ($main_news_data as $data):?>
                <?php if(is_array($data)): ?>
                    <div class="col">
                        <?php
                        foreach ($data as $item){
                            get_template_part('template-sections/main_page/parts/main_news_min');
                        }
                        ?>
                    </div>
                <?php else: ?>
                    <div class="col">
                        <?php get_template_part('template-sections/main_page/parts/main_news_wide') ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
</section>
<section class="section section--aside hide-d">
    <div class="section__title">
        <h3>Найпопулярнішe за день</h3>
    </div>
    <?php get_template_part('inc/widgets/popular_news');?>
</section>