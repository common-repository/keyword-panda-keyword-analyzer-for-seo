<?php
/*
Plugin Name: KeyWord Panda - Keyword Generator for SEO 
Plugin URI: http://seorankanalyser.com/
Description: KeyWord Panda is AI (Artificial Intelligence) based free keyword generator. This keyword research tool analyzes your website, current keyword trends, Google ranking of keywords and suggest you the suitable keywords for your website. You can use these keywords for Meta Keyword, Meta Description, Taglines or Title.
Version: 1.0
Author: SEORankAnalyser.com
Author URI: http://seorankanalyser.com
License:  GPL2 or later
. 
.
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



add_action( 'admin_menu', 'keywordpanda_plugin_menu' );

function keywordpanda_plugin_menu() {
	
    add_menu_page(__('KeyWord Panda','menu-keywordpanda'), __('KeyWord Panda','menu-keywordpanda'), 'manage_options', 'keywordpanda_plugin_options', 'keywordpanda_plugin_options' , plugin_dir_url( __FILE__ ) .'assets/images/logo.png');

    add_submenu_page('keywordpanda_plugin_options', __('Full Depth Analysis','menu-keywordpanda'), __('Full Depth Analysis','menu-keywordpanda'), 'manage_options', 'keywordpanda_plugin_pagelist', 'keywordpanda_plugin_pagelist');

}

function keywordpanda_plugin_options() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	require_once('keywordpanda-main-page.php');
}

function keywordpanda_plugin_pagelist() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	require_once('keywordpanda-all-pagelink.php');
}


function keywordpanda_get_domain($url)
{
  $chunk = parse_url($url);
  $domain = isset($pieces['host']) ? $chunk['host'] : '';
  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
    return $regs['domain'];
  }
  return false;
}


?>
