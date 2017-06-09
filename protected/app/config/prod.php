<?php

// DATABASE, API TOKENS, ETC

$secret_path = __DIR__ . '/secret.php';
if(file_exists($secret_path)){
	require_once $secret_path;	
}

// Twig configuration:

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => false); // cache is temporary disabled