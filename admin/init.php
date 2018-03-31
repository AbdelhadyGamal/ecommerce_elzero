<?php

	include 'connect.php';
	//routs
	$tpl = 'includes/templates/';
	$css_path = "layout/css/";
	$js_path = "layout/js/";
	$lang_path = "includes/languages/";
	include $lang_path . "english.php";
	include $tpl . "header.php";

	//include navbar on all pages except that with noNavbar Var

	if (!isset($noNavbar)){
	include $tpl . "navbar.php";
	}
	$dsn = "jkhjkhk";
	$user = 'root';
	$pass = 'root';


?>