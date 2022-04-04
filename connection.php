<?php


class Connection{

	public $driver;
	public $host;
	public $user;
	public $password;
	public $database;
	public $conn;

	public function __construct(){

		$this -> driver = "mysql";
		$this -> host = "localhost";
		$this -> user = "root";
		$this -> password = "";
		$this -> database = "basedatos";

		$this -> get_connection();
	}

	public function get_connection(){

		$this -> conn = new PDO($this -> driver.":"."host=".$this -> host.";"."dbname=".$this -> database,$this -> user,$this -> password);

		if (!$this -> conn){

			echo "Error al conectar.";
		}
		else{
			//echo "Conexion establecida.";
		}
	}

	public function registro($n,$l,$e,$p){

		$sql = "CALL basedatos.sp_registro(?,?,?,?)";
		$statement = $this->conn->prepare($sql);

 	 	$statement->bindParam(1,$n);
 	 	$statement->bindParam(2,$l);
 	 	$statement->bindParam(3,$e);
 	 	$statement->bindParam(4,$p);




		if($statement->execute()){
			return "registrado";
		}
		else {
			return "no registrado";
		}
	}
}