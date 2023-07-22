<div class="widget">
    <div class="last-news">
        <?php
        $posts = get_posts(
            [
                'post_type' => 'post',
                'posts_per_page' => '10',
                'post_status' => 'publish'
            ]
        );
        if ( $posts ) :
            foreach ($posts as $post):
                $badges = get_field('badges');
                $bold = empty($badges['bold']) ? 0 : 1;
                $updated = empty($badges['update']) ? 0 : 1;
                $photo = empty($badges['photo']) ? 0 : 1;
                ?>
                <div class="last-news__news-item">
                    <div class="time"><span><?=get_the_date("H:i", $post)?></span></div>
                    <div class="title <?=$bold ? 'bold' : ''?>">
                        <a href="<?=get_the_permalink($post);?>"><?= get_the_title($post);?>
                            <?php if($updated): ?>
                                <span class="update">оновлено</span>
                            <?php endif; ?>
                            <?php if($photo): ?>
                                <span class="icon icon-photo"></span>
                            <?php endif; ?>

                        </a>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        <div class="btn-wrap"><a class="btn-link" href="#"><span>Всі новини</span><span class="icon-arrow_select"></span></a></div>
    </div>
</div>