<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
if(!session_id()) {
    session_start();
}

$fb = new Facebook\Facebook([
'app_id' => '132933714048029', // Replace {app-id} with your app id
'app_secret' => 'db91dec3355c16432763b40d9a7b0c63',
'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://www.fbexample.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';