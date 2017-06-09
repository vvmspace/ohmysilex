<?php
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

class OhMySilexApplication extends Application{
	// Type your code here
	function __construct(){
		parent::__construct();
        $this->register(new TwigServiceProvider());
        $this['twig'] = $this->extend('twig', function ($twig, $app) {
        	// add custom globals, filters, tags, ...
            return $twig;
    	});
   	}
}

$app = new OhMySilexApplication();
return $app;