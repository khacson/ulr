<?php
session_start();

//Include Google client library 
include_once 'Google_Client.php';
include_once 'contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
//$clientId = '577698388672-u4nadr23kec753t10kp4neej548av9ir.apps.googleusercontent.com'; //Google client ID
$clientId = '901769501998-s61de1k5e890g3ftkt1qpbmuicmqmjc0.apps.googleusercontent.com'; //Google client ID
//$clientSecret = 'Fe9XLxZ745Eh5v0NmXMBl0QV'; //Google client secret
$clientSecret = 'QeKBs1r4jz0NeDtZAckyF2CM'; //Google client secret
$redirectURL = 'http://localhost/login_with_google_using_php-master/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('login_with_google_using_php');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
