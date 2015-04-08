<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Ushi',
	'theme'=>"classic",
    'language'=>'es',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',        
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'admin',
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		/**/
	),
	'behaviors' => array(
		'ext.qtzpanel.QtzPanelBehavior',
		// ...
	),
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
/*				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
'<controller:\w+>/<action:(create|view|update|delete|admin|index)>'=>'<controller>/<action>', //limited for this action(create|view|update|delete|admin|index)
'<controller:(usuarios)>/<action:\w+>/<id:\w+>'=>'usuarios/<action>',
'<controller:(usuarios)>/<id:\w+>'=>'usuarios/view',*/
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/**/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ushi',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(				
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',					
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
        'messages' => array(
            'basePath'=>Yiibase::getPathOfAlias('application.messages')
        ), 
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
    
    //agregando mensajes
    
);