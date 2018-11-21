<?php

$connection = [

	'hostname' => 'localhost',
	'database' => 'authdb2018',
	'username' => 'root',
	'password' => ''
];

require_once 'database-config.php';


class DatabaseQuery
{	
	protected static $userToken;
	
	function __construct()
	{
		# code...
	}

	public static function registerNewUser ($user) {

		global $DB;

		$fullname = $user['fullname'];
		$email	  = $user['email'];
		$username = $user['username'];
		$password = DatabaseQuery::hashPassword($user['password']);
		$date 	  = time();

		$accountExists = $DB->select('users', '*' ,[
			'email'	=> $email
		]);

		$usernameExists = $DB->select('users', '*', [
			'username' => $username
		]);

		if (count($accountExists) > 0) {
			return ['success' => false, 'error' => 'An account with the email <u>'.$email.'</u> already exists. <br> Try resetting your password instead by clicking "Forgot password" '];
		}
		else if (count($usernameExists) > 0) {
			return ['success' => false, 'error' => 'Sorry, the username <u>'. $username .'</u> is already taken.'];
		}
		else {

			DatabaseQuery::$userToken = sha1($email) . sha1($password) /*this part was added*/ . sha1(time()) .'-'. md5(time());

			$register = $DB->insert('users',[
				'fullname' 	  => $fullname,
				'email'	   	  => $email,
				'username' 	  => $username,
				'password' 	  => $password,
				'register_on' => $date,
				'token'		  => DatabaseQuery::$userToken
			]);

			if ($register) {
 
				return ['success' => true, 'msg' => 'Your+account+was+created+successfully.' , 'error' => 0 , 'token' => DatabaseQuery::$userToken];
			}
			else {
				return ['success' => false, 'error' => 'ERR_DB_UNKNOWN'];
			}
		}
	}

	public static function loginUser($user) {

		global $DB;

		$identity = $user['usernameoremail'];
		$password = DatabaseQuery::hashPassword($user['password']);

		$accountExists = $DB->select('users', '*' ,[
			'password' => $password,
			'OR' => [
				'username' => $identity,
				'email'	   => $identity
			]
		]);

		if (count($accountExists) < 1 ) {
			return ['success' => false, 'error' => 'Your email, username or password is incorrect'];
		}
		else {

			foreach ($accountExists as $user ) {
				DatabaseQuery::$userToken = $user['token'];
			}

		    return ['success' => true, 'msg' => 'Login+successful.' , 'error' => 0 , 'token' => DatabaseQuery::$userToken];
		}
	}

	public static function getResetToken($email) {

		global $DB;

		$email = @implode('', explode(' ', $email));  # remove extra spaces from email
		$accountExists = $DB->select('users', '*' ,[
			'email'	=> $email
		]);

		if (count($accountExists) > 0 ) {
			foreach ($accountExists as $user) {

				$reset = sha1($email) . sha1(random_int(1, 100)). password_hash( rand() , PASSWORD_BCRYPT );

				$DB->update('users',[
					'reset' => $reset
				],[
					'email' => $email
				]);

				$result = [
					'token' => $reset,
					'fullname' => $user['fullname']
				]; 

				return $result;	
			}
		}

		return ['token' => false];
	}

	public static function resetPassword ($data) {

		global $DB;

		$password = DatabaseQuery::hashPassword($data['password1']);

		$response = $DB->update('users', [
			'password' => $password
		],[
			'reset' => $data['reset'],
			'email' => $data['email']
		]);

		$DB->update('users', [
			'reset' => ''
		],[
			'email' => $data['email']
		]);

		return [
			'response' => $response,
			'msg' => 'Your password was changed successfully, login now.'
		];
	}

	public static function getUserInfo ($token) {

		global $DB;

		$userInfo = $DB->select('users','*',[
			'token' => $token
		]);

		foreach($userInfo as $user ) {
			return $user;
		}
	}

	public static function hashPassword ($password) {

		return md5('pass-'). sha1($password) . sha1('pass-'.md5($password)) . md5($password);
	}
}