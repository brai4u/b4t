<?php 
include("lib/EpiCurl.php"); 
include('lib/EpiOAuth.php'); 
include('lib/EpiTwitter.php'); 
include('keyTwitter.php'); 
$twitterObj = new EpiTwitter($consumer_key, $consumer_secret); 
$authenticateUrl = $twitterObj->getAuthenticateUrl();
$token_secreto = $token->oauth_token_secret;

?> 