<?php
class controllerAdmin {
	public static function formLoginSite() {
		include_once('viewAdmin/formLogin.php');
	}

	//форма авторизации админа
	public static function loginAction() {
		$logIn = modelAdmin::userAuth();
		if (isset($logIn) and $logIn == true) {
			include_once('viewAdmin/startAdmin.php');
		}
		else {
			$_SESSION['errorString'] = 'Направильные имя пользователя или пароль.';
			include_once('viewAdmin/formLogin.php');
		}
	}

	//вход из админки
	public static function logoutAction() {
		modelAdmin::userLogout();
		include_once('viewAdmin/formLogin.php');
	}

	//error
	public static function error404() {
		include_once('viewAdmin/error404.php');
	}
}
?>