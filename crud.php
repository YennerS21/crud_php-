<?php 
require "conexion.php";
/**
 *
 * 
 */
class Crud extends Conexion
{
	private $miConexion;
	private $retorno;


	function __construct()
	{
		$this->miConexion = new Conexion();
        $this->miConexion = $this->miConexion->conectarme();
		$this->retorno = new stdClass();
	}

	

	public function createPerson($id, $name, $email)
	{
		$id = $id;
		$name = $name;
		$email = $email;
		$dateCreate=getdate();
		$dateUpdate=getdate();
        try {
			$sentenciaSql = "INSERT INTO person(id_per, per_name, per_email, per_date_create, per_date_update, status) VALUES (?, ?, ?, ?, ?, ?)";
			$resultado = $this->miConexion->prepare($sentenciaSql);
            $datosIns = array($id,$name,$email,"2021-06-12", "2021-06-12", true);
            $resultado->execute($datosIns);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "OK";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
}
$ejemplo = new Crud();
$ejemplo->createPerson(19,"Usuario19","Usuario19@gmail.com");
//READ
            foreach($ejemplo as $fila) {
                print_r($fila);
            }
?>