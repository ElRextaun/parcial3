<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

	$email = $_POST['corre'];
	$password = $_POST['passwor'];

	require_once("conexionlogin.php");
	$obj = new Conection();
	$obj = $obj->login($email,$password);

	echo json_encode(["estado"=>$obj]);


}