<?php
	$category = "3"; //1-academic, 2-student, 3-general
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
<div id="language-switcher">
	<p>Language links</p>
     <?php print render($lang_switcher_items); ?>
</div>


<div id="topbox" class="">
	<div class="container">
		<div id="topbox-wrapper" class="row">
			<div class="col-xs-4 col-sm-4 col-md-4">
				<a id="metuLogo" class="v-align-center" href="http://www.metu.edu.tr" target="_blank" title="ODTU - METU websitesi">
					<img  src="<?php print $base_path.$directory?>/assets/images/metu-logo-tr.png" alt="ODTU - METU Logo"/>
				</a>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">

			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">
				<?php
				$block = module_invoke('locale', 'block_view', 'language');
				print $block['content'];
				?>
			</div>
		</div>
	</div>
</div>



<div id="logobox" class="p-t-25">
    <div class="container">
        <div id="logobox-wrapper" class="row">

			<div id="" class="col-xs-12 col-sm-5 col-md-5">
			    <a id="logo" href="<?php print $base_path?>" title="Anasayfa">
					<img class="animated bounce" src="<?php print $base_path.$directory?>/assets/images/ogem-logo.png" alt="OGEM Logo"/>
                </a>
			</div>

			<div id="homeButtons" class="col-xs-12 col-sm-7 col-md-7">
				<div id="headerBtns">
					<p>Select your section</p>
					<p>
						<a class="headerBtn" id="studentBtn" href="<?php print $base_path?>students-area">
							<i class="fa fa-users"></i><br/>
							Students
						</a>
						<a class="headerBtn" id="academicBtn" href="<?php print $base_path?>academic-area">
							<i class="fa fa-graduation-cap"></i><br/>
							Academics
						</a>
					</p>
				</div>
			</div>

        </div>
    </div>
</div>

<div id="navbox" class="nav-cat-<?php print $category;?> p-t-20 -p-b-20">
    <div class="container">
        <div id="navbox-wrapper">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-links">
					<span class="text-red hidden-xs m-r-10">MENU</span>
					<span class="fa fa-bars x-large-text m-r-5 m-l-5"></span>
				</button>
			</div>

			<nav id="main-menu-links" class="navbar-collapse collapse" role="navigation">
				<?php
				switch($category)
				{
					case "1":
					{
						$menu = menu_navigation_links('menu-academic-menu');
						print theme('links__menu_academic_menu', array(
						  'links' => $menu,
						  'attributes' => array(
							'id' => 'academic-menu',
							'class' => array('nav navbar-nav', 'clearfix'),
						  )
						));
					}break;
					case "2":
					{
						$menu = menu_navigation_links('menu-student-menu');
						print theme('links__menu_student_menu', array(
						  'links' => $menu,
						  'attributes' => array(
							'id' => 'student-menu',
							'class' => array('nav navbar-nav', 'clearfix'),
						  )
						));
					}break;
					default:{
						$menu = menu_navigation_links('main-menu');
						print theme('links__system_main-menu', array(
						  'links' => $menu,
						  'attributes' => array(
							'id' => 'main-menu',
							'class' => array('nav navbar-nav', 'clearfix'),
						  )
						));
					}
				}

				?>
			</nav>

        </div>
    </div>
</div>