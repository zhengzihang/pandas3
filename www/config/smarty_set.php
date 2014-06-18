<?php
	require './libs/Smarty.class.php';
	define('_SITE_ROOT','./pandas3');
	$smarty=new Smarty();
	$smarty->template_dir=_SITE_ROOT."/templates/";
	$smarty->compile_dir=_SITE_ROOT."/templates_c";
	$smarty->config_dir=_SITE_ROOT."/configs/";
	$smarty->cache_dir=_SITE_ROOT."/cache/";
	$smarty->left_delimiter='<{';
	$smarty->right_delimiter='}>';
	//$smarty->debugging = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 0;
	
?>
