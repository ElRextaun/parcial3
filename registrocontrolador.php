<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

	$n = $_POST['n'];
	$l = $_POST['l'];
	$e = $_POST['e'];
	$p = $_POST['p'];


	require_once("connection.php");
	$obj = new Connection();
	$resultado = $obj->registro($n,$l,$e,$p);
	echo json_encode(["estado"=>$resultado]);
}