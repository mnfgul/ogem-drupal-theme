<?php
	$timestamp = $content['field_event_date'][0]['#markup'];
	$ev_month = date('F', strtotime($timestamp));
	$ev_day = date('d', strtotime($timestamp));
	$ev_day_long = date('l', strtotime($timestamp));
	$ev_time = date('H:i', strtotime($timestamp));

?>
<?php if($teaser){?>
<div id="n-teaser-<?php print $node->nid; ?>" class="<?php print $classes; ?> article-list-row row clearfix b-b b-grey p-t-10 p-b-10">

</div>

<?php } else{?>
<div id="n-full-<?php print $node->nid; ?>" class="<?php print $classes; ?> event-page">
	<h2 class="pageTitle all-caps center-text m-b-20 p-b-20" <?php print $title_attributes; ?>><?php print $title; ?></h2>
	<div class="row">
		<div class="col-md-5 event-photo">
			<div class="thumbnail img-fill z-depth-1">
				<?php print render($content['field_photo'][0]); ?>
			</div>
		</div>
		<div class="col-md-7">
			<p class="">
				<?php print $title; ?>
			</p>
			<div class="event-details p-t-10 p-b-10">
				<?php
		          // We hide the comments and links now so that we can render them later.
		          hide($content['comments']);
		          hide($content['links']);
		          print render($content['body'][0]);
        		?>
			</div>
			<p class="event-date p-t-10 p-b-10">
				<i class="fa fa-calendar"></i> Tarih: <b><?php print $ev_day; ?> <?php print $ev_month; ?>, <?php print $ev_day_long; ?></b>
			</p>
			<p class="event-time p-t-10 p-b-10">
				<i class="fa fa-clock-o"></i> Saat: <b><?php print $ev_time; ?></b>
			</p>
			<p class="event-place p-t-10 p-b-10">
				<i class="fa fa-map-marker"></i> Yer: <b><?php print render($content['field_event_place'][0]); ?></b>
			</p>
		</div>
	</div>
</div>
<?php } ?>