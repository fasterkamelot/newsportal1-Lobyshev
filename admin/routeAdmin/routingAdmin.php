<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php') {
	//главная
	$response = ControllerAdmin::formLoginSite();
} elseif ($path == 'login') {
	//вход
	$response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
	//выход
	$response = ControllerAdmin::logoutAction();
} else {
	//
	//error404
	$response = ControllerAdmin::error404();
}
?>