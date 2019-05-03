<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("381787177422-rvm8efa65bm45lqfeocth2t36sqighek.apps.googleusercontent.com");
	$gClient->setClientSecret("F0MT6GVf17ZpAXtPTp1T266W");
	$gClient->setApplicationName("inclinedscorpio Login");
	$gClient->setRedirectUri("http://localhost/srmbook/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
