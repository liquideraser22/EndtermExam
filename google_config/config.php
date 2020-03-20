<?php

//config.php for google

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('941506086670-gmfetn647o6pdr23e3pdqco07put2ic8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Y4LGoWXjPXjgH0844NA6Lr3Y');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://examx.herokuapp.com');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//to start session on web page
session_start();

?>
