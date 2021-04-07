<?php
    
class Conexion extends PDO{
    //put your code here
    private  $instancia;
    private $driverPdo = "pgsql";
    private $host="localhost";
    private $userName="postgres";
    private $password="1234";
    private $dataBase = "db_crud_php";
    
    /**
     * Método constructor de la Conexión
     */
    public function __construct(){
        $conStr= $this->driverPdo.':host='.$this->host.';dbname='.$this->dataBase;
        try {
            $this->instancia = new PDO($conStr,$this->userName, $this->password);
            $this->instancia->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //$this->instancia=$mbd;
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function conectarme()
    {
        if($this->instancia==Null)
        {
            return "ERROR";
        }
        return $this->instancia;
    }
    /**
     * 
     * @return type
     */
    /*public static function singleton(){
        if (!isset(self::$instancia)){
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    } */   

}

?>