<?php
	$category = "2"; //1-academic, 3-student, 2-general
	if(isset($node->field_category['und'][0]['tid'])){
		$category = $node->field_category['und'][0]['tid'];
	}
?>

<!-- ODTU red line -->
<div class="odtu-top"></div>

<!-- Skip text -->
<?php if ($skip_link_text && $skip_link_anchor): ?>
<p id="skip-link">
	<a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
</p>
<?php endif; ?>

<!-- Language Switcher -->
<div id="language-switcher" class="container">
     <?php print render($page['lang_switcher']); ?>
</div>

<div id="mainDiv" class="container">
	<div id="page">

		<div class="container-top">
			<header id="header" role="banner">
				<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="logo-<?=$language->language;?>"></a>
				<?php endif; ?>


				<div class="arama">
					<form class="search_box" action="http://www.google.com/cse" method="get">
						<input  type="hidden" name="cx" value="<?=theme_get_setting('cse');?>" />
						<input  type="hidden" name="ie" value="utf-8" />
						<input type="text" name="q" placeholder="<?echo t('Search');?>"/>
						<button type="submit" class="btn btn-small">
							<i class="icon-search"></i>
						</button>
					</form>
				</div>

				<div class="clear" style="clear:both"></div>

				<?php print render($page['header']); ?>

				<div class="clear" style="clear:both"></div>

				<?php if ($site_name || $site_slogan): ?>
					<hgroup id="name-and-slogan">
					<?php if ($site_name): ?>
						<h1 id="site-name">
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
						</h1>
					<?php endif; ?>

					<?php if ($site_slogan): ?>
						<h2 id="site-slogan"><?php print $site_slogan; ?></h2>
					<?php endif; ?>
					</hgroup><!-- /#name-and-slogan -->
				<?php endif; ?>

				<div class="clear" style="clear:both"></div>


				<div id="navigation">
					<nav id="main-menu" role="navigation">
					<?php print render($page['navigation']); ?>
					</nav>
				</div><!-- /#navigation -->


      		</header>
 	 	</div><!--end container-top-->

 	 	<div class="clear" style="clear:both"></div>




 	 	<div id="main" class="cat-<?php print $category;?>">

 	 		<? if(!drupal_is_front_page()){?>
 	 		<div id="contentHeader">
				<div id="breadcrumbBox" class="container p-t-10 p-b-20">
					<?php print $breadcrumb; ?>
				</div>
				<div class="container p-t-0 p-b-20">
					<h3 class="contentHeaderTitle all-caps p-l-10"></h3>
				</div>
			</div>
			<?}?>

 	 		<div id="content" role="main">
 	 			<?php  if(drupal_is_front_page()): ?>
	            <div id="bannerDiv">
					 <? print views_embed_view('Slider_Main_Page', 'block'); ?> 
				</div>
				<? endif; ?>

				<?php if ($messages): ?>
				<div id="message-box" class="message-box m-b-15 m-t-15 p-t-10 p-b-10 animated bounce">
			    	<?php print $messages; ?>
				</div>
				<?php endif; ?>

				<div class="row">

					<!-- Page left section -->
					<div id="leftSec" class="col-lg-8 col-md-8">

						<?php print render($page['highlighted']); ?>

						<? if(drupal_is_front_page()){ // homepage only content?>

							<div class="block-box" id="latestNewsBox">
								<h2 class="block-title"><i class="fa fa-calendar"></i><?print t('Latest News') ?></h2>
								<?php  print views_embed_view('latest_events', 'block'); ?>
							</div>

						<?}else{?>



						<?}?>

						<?php if ($page['help']): ?>
						<div id="help">
		                	<?php print render($page['help']); ?>
		                </div>
		                <?php endif; ?>

						<?php if ($tabs): ?>
						<div class="tabs">
							<?php print render($tabs); ?>
						</div>
						<?php endif; ?>

						<?php print render($page['content']); ?>

					</div>

					<!-- Page right section -->
					<div id="rightSec" class="col-lg-4 col-md-4">
						<?
						print render($page['sidebar_second']);
						?>
					</div>

				</div><!-- end row -->

 	 		</div><!-- end content-->


			<!-- Footer -->
			<div id="footer" class="clearfix">
			<?
				print render($page['footer']);
			?>
			</div>

		</div><!-- /#main -->

	</div><!-- /#page -->

	<?php print render($page['bottom']); ?>
</div>


