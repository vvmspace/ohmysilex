<?php
use Doctrine\Common\Cache\ArrayCache;

$app->register(new Silex\Provider\DoctrineServiceProvider(), $app['doctrine.config']);
$app->register(new Nutwerk\Provider\DoctrineORMServiceProvider(), array(
    'db.orm.proxies_dir'           => __DIR__.'/../cache/doctrine/proxy',
    'db.orm.proxies_namespace'     => 'DoctrineProxy',
    'db.orm.cache'                 => new ArrayCache(),
    'db.orm.auto_generate_proxies' => true,
    'db.orm.entities'              => array(array(
        'type'      => 'annotation',
        'path'      => __DIR__,
        'namespace' => 'TestApp\Entity',
    )),
));