<?php
	define("APPLICATION_PATH",  realpath(dirname(__FILE__) . '/..'));
	
	define( 'STATIC_CDN' , 'http://localhost:8100/');
	
	define( 'STATICS_CDN_JS' , STATIC_CDN . 'js/');
	
	define( 'STATICS_CDN_CSS' , STATIC_CDN . 'css/');
	
	define( 'STATICS_CDN_PLUGINS' , STATIC_CDN . 'plugins/');
	
	define( 'STATICS_CDN_IMG' , STATIC_CDN . 'images/');
	
	$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");
		
	$application
		->bootstrap()
		->run();
?>
