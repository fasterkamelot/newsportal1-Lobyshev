<?php
session_start();
	require_once '../inc/database.php';
	require_once ("modelAdmin/modelAdmin.php");
	require_once ("controllerAdmin/controllerAdmin.php");

	include('routeAdmin/routingAdmin.php');

	echo $response;
?>