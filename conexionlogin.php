<?php


class Conection{

	public $driver;
	public $host;
	public $user;
	public $password;
	public $database;
	public $conn;

	public function __construct(){

		$this->driver = "mysql";
		$this->host = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = "basedatos";

		$this->get_conection();
	}

	public function get_conection(){
		$this->conn = new PDO($this-> driver.":"."host=".$this-> host.";"."dbname=".$this-> database, $this-> user, $this-> password);

		if (!$this->conn){

			echo "Error al conectar";
		}
	}

	public function login($Email,$Password){

		$sql = "CALL basedatos.sp_Login(?,?)";
		$statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$Email);
    $statement->bindParam(2,$Password);

    if($statement->execute()){
        $count=$statement->rowCount();
        $datos = $statement->fetchAll(PDO::FETCH_ASSOC);

			if($count){
            $cookie_name = "sesion";
          
            $datos=json_encode($datos);
            setcookie($cookie_name,$datos, time() + (86400*30), "/");
            return true;
        }else{
            return false;
        }

    }
}

}

?>
