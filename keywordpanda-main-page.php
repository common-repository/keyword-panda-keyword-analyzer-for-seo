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
	wp_enqueue_script( 'jquery');
	wp_register_style( 'keywordpandastyle', plugin_dir_url( __FILE__ ) .'assets/css/style.css' );
	wp_enqueue_style('keywordpandastyle');
	wp_register_style( 'keywordpandaicons', plugin_dir_url( __FILE__ ) .'assets/css/icons.css' );
	wp_enqueue_style('keywordpandaicons');
?>
<script>
$j=jQuery.noConflict();
$j(document).ready(function(){
    $j("#getKeywordReport").click(function(){
		
     
	  var url = '<?PHP echo get_site_url();?>';
	  
	  $j('.loadingimg').show();
		 $j.ajax({
      url:'http://seorankanalyser.com/Keywordanalyzer/deepAnalysisPlugin/',
      data: "url=" + url,
	  
      type: "GET",
      success: function(data){
		 $j(".loadingimg").hide();
           $j("#keywordpandaresult").html(data);
		  
		   
		   $j(".loadingimg").hide();
      }
});
    });
});

</script>


</head>

<body class="keywordpandabody">
<div style="clear:both;"></div>
<div class="keywordpandacontents" >
<div class="keywordpandainfo">KeyWord Panda is AI (Artificial Intelligence) based free keyword analyzer. It analyzes your website, curent keyword trends, Google ranking of keywords and suggest you the suitable keywords for your website. You can use these keywords for Meta Keyword, Meta Description, Taglines or Title.  <br /> <a href="http://seorankanalyser.com/" target="_blank">Signup for Detail Analysis</a> <br />For Support:  support@seorankanalyser.com <br />A product of <a href="http://seorankanalyser.com/" target="_blank">SEO Rank Analyser</a>
</div>
<?php

	
	echo '<img src ="' . plugin_dir_url( __FILE__ ) .'assets/images/keywordpanda.png" id="keywordpandalogo"/><h1 id="keywordpandatitle"> KeyWord <span id="panda">Panda</span></h1>';
	
	echo '<h2 id="keywordanalyzersiteinfo">Your Website: ' . get_site_url() .' <br /> <span id="getKeywordReport"> Get Keyword Status</span></h2> <br />';


	
?>
<img src="<?php echo plugin_dir_url( __FILE__ ) ;?>assets/images/loading.gif" class="loadingimg" />
<div id="keywordpandaresult"></div>


