<?php

// DATABASE, API TOKENS, ETC

$secret_path = __DIR__ . '/secret.php';
if(file_exists($secret_path)){
	require_once $secret_path;	
}

// Redis configuration:
// If not created in secret.php with secret configs

if(empty($app->redis)){
    $app->redis = new Predis\Client();
}

// Twig configuration:

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => false); // cache is temporary disabled