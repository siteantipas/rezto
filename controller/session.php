<?php

ini_set('session.gc_maxlifetime', 60*60*24*365);
ini_set('session.cookie_lifetime', 60*60*24*365);
ini_set('session.use_only_cookies', 'On');
ini_set('session.use_strict_mode', 'On');

session_name('authSessName');

session_start();


class AccountSession
{   

	public static function createNew($data) {
		foreach ($data as $key => $value) {
			$_SESSION[$key] = $value;
		}
		return true;
	}

	public static function destroy() {
		session_destroy();
		unset($_SESSION['token']);
		header('Location:/login');
	}

	public static function isActive() {

		return isset($_SESSION['token']);
	}

}

new AccountSession();