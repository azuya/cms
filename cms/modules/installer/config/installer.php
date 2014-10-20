<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'cache_types' => array(
		'file' => __('File cache'), 
		'sqlite' => __('SQLite cache'), 
		'apc' => __('APC Cache'),
		'mongodb' => __('MongoDB'),
		'memcachetag' => __('Memcache'),
	),
	
	'session_types' => array(
		'native' => __('Native'), 
		'database' => __('Database'), 
		'cookie' => __('Cookie')
	),
	'database_drivers' => array(
		'mysql' => __('MySQL'),
		'mysqli' => __('MySQLi'),
		'pdo' => __('PDO')
	),
	'default_config' => array(
		'site' => array(
			'allow_html_title' => Config::NO,
			'breadcrumbs' => Config::YES,
			'debug' => Config::NO,
			'default_filter_id' => 'redactor',
			'default_status_id' => 100,
			'description' => '',
			'find_similar' => Config::YES,
			'profiling' => Config::NO,
		),
		'api' => array(
			'mode' => Config::NO
		),
	),
	'dashboard' => array(
		'left' => array(
			'Dashboard_Calendar' => array()
		),
		'center' => array(
			'Dashboard_Cache_Button' => array()
		)
	),
	'user_meta' => array(
		'admin_theme' => 'default'
	)
);