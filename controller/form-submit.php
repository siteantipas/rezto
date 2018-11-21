<?php

require_once 'settings.php';
require_once 'session.php';
require_once '../model/database-query.php';

 
class FormSubmit extends DatabaseQuery
{
	
	public function __construct($data)
	{
		switch ($data['action']) {
			case 'login':
				# login existing user...
				$response = DatabaseQuery::loginUser($data);
				if ($response['success']) {	

					AccountSession::createNew([
						'token' => $response['token']
					]);
				 	FormSubmit::redirect(ROOT.'home?msg='.$response['msg']);   
				}
				else {
					FormSubmit::redirect(ROOT.'login?err='.$response['error']);
				}

				break;
			case 'register':

				# register new user...
				$response = DatabaseQuery::registerNewUser($data);
				if ($response['success']) {	

					AccountSession::createNew([
						'token' => $response['token']
					]);
				 	FormSubmit::redirect(ROOT.'home?msg='.$response['msg']);   
				}
				else {
					FormSubmit::redirect(ROOT.'register?err='.$response['error']);
				}
				break;	
			case 'forgot-password':
				# send reset link...
				 $result = DatabaseQuery::getResetToken($data['email']);
				 if ($result['token'] !== false ) {

				 	$deviceInfo = FormSubmit::getDeviceInfo();

				 	$result['appname']   = APP_NAME;
				 	$result['appurl']	 = APP_URL;
				 	$result['appemail']  = APP_EMAIL;
				 	$result['approot']	 = ROOT;

				 	$result['os'] = $deviceInfo['os'];
				 	$result['browser'] = $deviceInfo['browser'];

				 	$result['subject'] = APP_NAME .' :: Password Reset';
				 	$result['to'] = $data['email'];
				 	$result['from'] = $result['appemail'];

				 	$result['message'] = FormSubmit::getEmailTemplate($result);

				 	FormSubmit::sendResetLink($result);
				 }

				 FormSubmit::redirect(ROOT.'forgot-password?msg=If an account with the email <u> '.$data['email'].' </u> exists, you will receive a reset link.Please check your mailbox.&disabled'); 

				break;	

			case 'reset-password' :
				  $result = DatabaseQuery::resetPassword($data);
				  FormSubmit::redirect(ROOT.'login?msg='.$result['msg']);  
			 	break;
				
			case 'update-account' :

			 	break;
			default:
				# code...
				break;
		}	
	}

	public static function sendResetLink($data) {
		
	    $url = 'https://www.antipas.site/apis/projects/auth/';

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($ch);

		// close the connection, release resources used
		curl_close($ch);

	}

	public static function redirect($page) {
		header('Location:'.$page);
		exit;
	}

	public static function getEmailTemplate($result) {

		 require_once '../view/email-reset-link.php';
		 return  $message;
	}

	public static function getDeviceInfo() {

		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$os_platform  = "Unknown OS Platform";
	    $os_array     = [
	          '/windows nt 10/i'      =>  'Windows 10',
	          '/windows nt 6.3/i'     =>  'Windows 8.1',
	          '/windows nt 6.2/i'     =>  'Windows 8',
	          '/windows nt 6.1/i'     =>  'Windows 7',
	          '/windows nt 6.0/i'     =>  'Windows Vista',
	          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
	          '/windows nt 5.1/i'     =>  'Windows XP',
	          '/windows xp/i'         =>  'Windows XP',
	          '/windows nt 5.0/i'     =>  'Windows 2000',
	          '/windows me/i'         =>  'Windows ME',
	          '/win98/i'              =>  'Windows 98',
	          '/win95/i'              =>  'Windows 95',
	          '/win16/i'              =>  'Windows 3.11',
	          '/macintosh|mac os x/i' =>  'Mac OS X',
	          '/mac_powerpc/i'        =>  'Mac OS 9',
	          '/linux/i'              =>  'Linux',
	          '/ubuntu/i'             =>  'Ubuntu',
	          '/iphone/i'             =>  'iPhone',
	          '/ipod/i'               =>  'iPod',
	          '/ipad/i'               =>  'iPad',
	          '/android/i'            =>  'Android',
	          '/blackberry/i'         =>  'BlackBerry',
	          '/webos/i'              =>  'Mobile'
	     ];

	     foreach ($os_array as $regex => $value) {
	        if (preg_match($regex, $user_agent)) {
	            $os_platform = $value;
	        }
	     }
		 $browser  = "Unknown Browser";
	     $browser_array = [
                '/msie/i'      => 'Internet Explorer',
                '/firefox/i'   => 'Firefox',
                '/safari/i'    => 'Safari',
                '/chrome/i'    => 'Chrome',
                '/edge/i'      => 'Edge',
                '/opera/i'     => 'Opera',
                '/netscape/i'  => 'Netscape',
                '/maxthon/i'   => 'Maxthon',
                '/konqueror/i' => 'Konqueror',
                '/mobile/i'    => 'Handheld Browser'
         ];

	     foreach ($browser_array as $regex => $value) {
	        if (preg_match($regex, $user_agent)) {
	            $browser = $value;
	        }
	     }

	     return [
	     	'os' => $os_platform,
	     	'browser' => $browser
	     ];
	}
}

new FormSubmit($_POST);