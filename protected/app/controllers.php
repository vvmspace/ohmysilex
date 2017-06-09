<?php
$app->get('/', function () use ($app) {
    return $app['twig']->render('template.twig', array(
        'twig_test' => 'Twig test',
    ));
});