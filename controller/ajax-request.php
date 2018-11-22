<?php

/**
 * 
 */

class AjaxRequests
{	
	protected static $postData;
	protected static $operation;
	protected static $allOperations = [

		'getAppSettings',
	];

	function __construct($post)
	{	
		self::$operation = $post['action'];	

		if (!in_array(self::$operation, self::$allOperations)) :
			die;
		endif;

		self::$postData = $post;
		eval('AjaxRequests::'. self::$operation. '();');
	}

	static function getAppSettings()
	{	
		require_once 'settings.php';

		print json_encode([

			'name'  => APP_NAME,
			'color' => COLOR,
			'bg'	=> BG,
		]);
	}
}

new AjaxRequests($_POST);
