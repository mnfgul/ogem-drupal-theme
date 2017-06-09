<div id="n-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($page): ?>
    <h2 class="pageTitle all-caps center-text m-b-20 p-b-20" <?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php else: ?>
  	<h4 class="page-title"><span class="semi-bold all-caps"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span></h4>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    //print_r($content);
    ?>
  </div>

</div>


