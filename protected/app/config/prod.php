<?php

// DATABASE, API TOKENS, ETC

$secret_path = __DIR__ . '/secret.php';
if(file_exists($secret_path)){
	require_once $secret_path;	
}
