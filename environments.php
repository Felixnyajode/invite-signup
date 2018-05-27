<?php

if(! defined('ENVIRONMENT') )
{
	$domain = strtolower($_SERVER['HTTP_HOST']);

	switch($domain) {
		case 'thefickle500.in' :
		define('ENVIRONMENT', 'production');
		break;

		case 'fickle500.palashnandi.com' :
		//our staging server
		
		define('ENVIRONMENT', 'staging');
		
		break;

		case 'localhost' :
		//our staging server
		define('ENVIRONMENT', 'development');
		break;

		default :
		define('ENVIRONMENT', 'development');
		break;
	}
}