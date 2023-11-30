<?php
global $s, $wp_query;

if(isset($s)) {
	$wp_query->set('nopaging', 1);
	require_once("page-archief.php");
}
else{
	wp_redirect("/");
}