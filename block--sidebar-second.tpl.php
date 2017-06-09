<?php
$blockid = $block->module.'-'.$block->delta;
$notitle = array('block-1');
?>
<?php if(in_array($blockid, $notitle)){?>
	<div id="block-<?php print $blockid?>" class="block-box m-b-20 no-padding block-plain">
		<?php print $content ?>
	</div>
<?php }else{?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block-box block-<?php print $block->module ?> m-b-20">
    <?php if ($block->subject): ?>
    <div class="block-header">
		<h2 class="block-title"><i class="fa fa-calendar"></i> <?php print $block->subject ?></h2>
    </div>
    <?php endif;?>

    <div class="block-content">
        <?php print $content ?>
    </div>
</div>
<?php }?>