<?php

ini_set('display_errors', 0);
require_once __DIR__.'/../protected/vendor/autoload.php';
$app = require __DIR__.'/../protected/app/app.php';
require __DIR__.'/../protected/app/config/prod.php';
require __DIR__.'/../protected/app/controllers.php';
$app->run();

