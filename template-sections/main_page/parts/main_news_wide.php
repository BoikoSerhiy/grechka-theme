<?php
    global $data;
?>
<div class="card card-wide">
    <div class="img-wrap"><a href="<?=get_the_permalink($data)?>">
            <?=get_the_post_thumbnail($data)?>
        </a></div>
    <div class="text-wrap">
        <div class="title">
            <h3><a href="<?=get_the_permalink($data)?>"><?=get_the_title($data)?></a></h3>
        </div>
        <div class="descr">
            <p><?=get_the_excerpt($data)?></p>
        </div>
        <div class="date"><span><?=get_the_date('H:i, d F, Y', $data)?></span></div>
    </div>
</div>