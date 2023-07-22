<?php
global $wp_query;
$total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
$current = get_query_var('paged');
$current = $current ? $current : 1;
$first_link = get_pagenum_link(1);
$last_link = get_pagenum_link($total);
$links_before = 8;
$show_hold = false;
$hide = false;
if(wp_is_mobile()){
	$links_before = $total;
}
if($total < $links_before){
	$links_before = $total;
}
if($total > $links_before+1){
    $show_hold = true;
}
/*if($total = 1){
	$hide = true;
}*/
$start_index = $current - $links_before + 1;
if($start_index < 1){
	$start_index = 1;
}
?>
<div class="paginations <?php /*if($hide): */?><!--hide--><?php /*endif; */?>">
    <?php
    echo '<pre>';
    print_r($total);
    echo '</pre>';
    ?>
	<?php if($current == 1): ?>
        <span class="btn start"><span>Початок</span></span>
	<?php else: ?>
        <a class="btn start" href="<?=$first_link?>"><span>Початок</span></a>
	<?php endif; ?>
    <?php if(($current - 1) < 1): ?>
        <span class="btn prev"><span>Попередня</span></span>
    <?php else: ?>
        <a class="btn prev" href="<?=get_pagenum_link($current - 1)?>"><span>Попередня</span></a>
    <?php endif; ?>
	<?php for($i = $start_index; $i < ($start_index+$links_before); $i++): ;?>
		<?php if($i == $current): ?>
			<span class="page-link active"><?=$i?></span>
		<?php else: ?>
			<a class="page-link" href="<?=get_pagenum_link($i)?>"><?=$i?></a>
		<?php endif; ?>
	<?php endfor; ?>
	<?php if($show_hold): ?>
        <span class="page-link hold">...</span>
        <a class="page-link" href="<?=$last_link?>"><?=$total?></a>
    <?php endif; ?>
	<?php if(($current + 1) > $total): ?>
        <span class="btn next"><span>Наступна</span></span>
	<?php else: ?>
        <a class="btn next" href="<?=get_pagenum_link($current + 1)?>"><span>Наступна</span></a>
	<?php endif; ?>
	<?php if($current >= $total): ?>
        <span class="btn end"><span>Кінець</span></span>
	<?php else: ?>
        <a class="btn end" href="<?=$last_link?>"><span>Кінець</span></a>
	<?php endif; ?>
</div>