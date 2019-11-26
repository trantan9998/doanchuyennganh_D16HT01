<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('774056935688-83knuf7ufleol6qhlt3fmcda6ponthch.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('AO8a2wqcsQGIW5ShRGHJRQug');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/doanmonhoc/resources/views/Index/index.blade.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
