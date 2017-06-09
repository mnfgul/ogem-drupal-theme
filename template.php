<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/*--------------------------------- HTML Head -------------------------------------*/
function ogem_preprocess_html(&$vars) {

	/*Meta tags*/
	$viewport = array('#tag' => 'meta',
	'#attributes' => array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable = no', ), );
	drupal_add_html_head($viewport, 'viewport');

	/*Chrome tag*/
	$xua = array('#tag' => 'meta', '#type' => 'html_tag',
		'#attributes' => array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1')
		);
	drupal_add_html_head($xua, 'html_tag');

	// Add conditional CSS for IE8 and below.
	drupal_add_css(path_to_theme() . '/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'weight' => 999, 'preprocess' => FALSE));
	// Add conditional CSS for IE7 and below.
	drupal_add_css(path_to_theme() . '/ie7.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'weight' => 999, 'preprocess' => FALSE));
	// Add conditional CSS for IE6.
	drupal_add_css(path_to_theme() . '/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 6', '!IE' => FALSE), 'weight' => 999, 'preprocess' => FALSE));

	/*add external csss*/
	drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));

	/* ODTU Theme Specific*/
	$variables['lang_switcher_items'] = block_get_blocks_by_region('lang_switcher');
}


/*--------------------------------- Breadcrumbs -------------------------------------*/
/* Put Breadcrumbs in a ul li structure */
function ogem_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    $crumbs = "";
    if (!empty($breadcrumb)) {
        $crumbs = '<ul class="breadcrumb no-margin">';

        foreach($breadcrumb as $value) {
           $crumbs .= '<li>'.$value.'</li>';
      }
      $crumbs .= '</ul>';
    }
    return $crumbs;
}

/*--------------------------------- ODTU Theme Specific -------------------------------------*/
function ogem_menu_tree__menu_language_switcher($variables){
	return '<ul id="nav">' . $variables['tree'] . '</ul>';
}

function ogem_more_link($array){
   if ($array['url']=='aggregator/sources/1'){
       return "<a href='http://announce.metu.edu.tr/' class='col-news-more-link'>all announcements &gt;&gt;</a>";
   }elseif($array['url']=='aggregator/sources/2'){
	  return "<a href='http://event.metu.edu.tr/' class='col-news-more-link'>all events &gt;&gt;</a>";
   }
}

?>
