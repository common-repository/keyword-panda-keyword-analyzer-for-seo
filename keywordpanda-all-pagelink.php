<?PHP
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Keyword Panda Main Page</title>
<?PHP
	wp_register_style( 'keywordpandastyle', plugin_dir_url( __FILE__ ) .'assets/css/style.css' );
	wp_enqueue_style('keywordpandastyle');
	wp_register_style( 'keywordpandaicons', plugin_dir_url( __FILE__ ) .'assets/css/icons.css' );
	wp_enqueue_style('keywordpandaicons');
			
?>


</head>

<body class="keywordpandabody" >
<div style="clear:both;"></div>
<div class="keywordpandacontents" >
<div class="keywordpandainfo">KeyWord Panda is AI (Artificial Intelligence) based free keyword analyzer. It analyzes your website, curent keyword trends, Google ranking of keywords and suggest you the suitable keywords for your website. You can use these keywords for Meta Keyword, Meta Description, Taglines or Title.  <br /> <a href="http://seorankanalyser.com/" target="_blank">Signup for Detail Analysis</a><br />For Support:  support@seorankanalyser.com <br />A product of <a href="http://seorankanalyser.com/" target="_blank">SEO Rank Analyser</a>
</div>
<?php

	
	echo '<img src ="' . plugin_dir_url( __FILE__ ) .'assets/images/keywordpanda.png" id="keywordpandalogo"/><h1 id="keywordpandatitle"> KeyWord <span id="panda">Panda</span></h1>';
	
	echo '<h2 id="keywordanalyzersiteinfo">Your Website: ' . get_site_url() .' <br /> Analyze your domain <a href="http://seorankanalyser.com/Keywordanalyzer/deepanalysis?search="' . keywordpanda_get_domain(get_site_url()) . ' target="_blank"> ' .keywordpanda_get_domain(get_site_url()) . ' </a></h2> ';
	
	
?>
<div id="keywordpandapagelist">
<h3 id="posttitle">Click on individual title below to get Keyword Analysis report</h3>
<div id="keywordpandapages">
<h3 id="h3subtitle">Pages</h3>
<?PHP
$arr = get_pages();
foreach($arr as $arr1){
	if(isset($arr1->post_title)){
echo "<div class='keywordpandasitelist'><i class='icon-arrow-right'></i> <a href='http://seorankanalyser.com/Keywordanalyzer/deepanalysis?search=" . get_page_link( $arr1->ID )  . "' target='_blank'>" .  $arr1->post_title . "</a></div>";
	}
}


?>
</div>
<div id="keywodpandaposts">
<h3 id="h3subtitle">Posts</h3>

<?PHP
$arr = get_posts();
foreach($arr as $arr1){
	if(isset($arr1->post_title)){
echo "<div class='keywordpandasitelist'><i class='icon-arrow-right'></i> <a href='http://seorankanalyser.com/Keywordanalyzer/deepanalysis?search=" . get_page_link( $arr1->ID )  . "' target='_blank'>" .  $arr1->post_title . "</a></div>";
	}
}


?>
</div>
</div>


