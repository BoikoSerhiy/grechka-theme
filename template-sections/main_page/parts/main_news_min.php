<?php
    global $item;
?>
<div class="card card-min">
    <div class="img-wrap">
        <a href="<?=get_the_permalink($item)?>">
            <?=get_the_post_thumbnail($item)?>
        </a>
    </div>
    <div class="text-wrap">
        <div class="title">
            <h3><a href="<?=get_the_permalink($item)?>"><?=get_the_title($item)?></a></h3>
        </div>
        <div class="date"><span><?=get_the_date('H:i, d F, Y', $item)?></span></div>
    </div>
</div>