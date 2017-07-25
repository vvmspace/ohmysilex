<?php
$app->get('/', function () use ($app) {
    return $app['twig']->render('template.twig', array(
        'twig_test' => 'Twig test',
    ));
});
$app->get('/redis', function() use ($app){
    if($app->redis->set('redis-test', time())){
        return 'redis-test: ' . $app->redis->get('redis-test');
    }else{
        return 'redis-test: failure';
    }
});