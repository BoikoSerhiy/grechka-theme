<div class="widget">
    <div class="popular-news">
        <?php
        $posts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => '5',
            'post_status' => 'publish',
            'orderby' => 'meta_value',
            'meta_key' => '_cdp_counter',
            'order' => 'desc'
        ]);
        if ( $posts ) :
            foreach ($posts as $post):
                $badges = get_field('badges');
                $bold = empty($badges['bold']) ? 0 : 1;
                $updated = empty($badges['update']) ? 0 : 1;
                $photo = empty($badges['photo']) ? 0 : 1;
                ?>
                <div class="item">
                    <div class="title">
                        <a href="<?=get_the_permalink($post);?>">
                            <?= get_the_title($post);?>
                            <?php if($photo): ?>
                                <span class="icon icon-photo"></span>
                            <?php endif; ?>
                            <?php if($updated): ?>
                                <span class="update">оновлено</span>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; endif; ?>
    </div>
</div>