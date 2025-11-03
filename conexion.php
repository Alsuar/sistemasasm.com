<?php
//  CONEXION   BD   CON   OO

class ControlBD { // clase para el manejo de la conexion a la base de datos  y ejecucion de sentencias
// atributos
private $host; // atributos con manejadores de accesos (public, private, proteted)
private $user;
private $password;
private $database;
private $idConexion;

// metodos
function __construct(){ // constructores inicializan los atributos de la clase 

	$this->host="localhost"; // this es una referencia al mismo objeto
	$this->user="sistem94_admin";
	$this->password="Panama123+";
	$this->database="asmweb";
	//$this->database="sgeferrosum";
	
}
//Este metodo establece la conexion con la base de datos
	function conectar(){
		$this->idConexion = new mysqli($this->host, $this->user,$this->password,$this->database);
		if (!$this->idConexion) {
			echo 'No se pudo establecer la conexion : '.mysqli_error();
		}
	}

//este metodo ejecuta las sentencias SQL
	function ejecutarQuery($query){
		$result = $this->idConexion->query($query);  
		return $result;
}
	function cerrarConec(){
		//@mysql_close($bd);
	}
} // fin de la clase ControlBD

?>