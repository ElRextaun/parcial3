<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('627387370817-5v5th6fehpeg0erqio7n7cfqukqdma2q.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/dashboard/APIClima/Weather.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 