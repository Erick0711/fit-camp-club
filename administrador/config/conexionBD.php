<?php
    
$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$password = "";

try{

    $conexion = new PDO("mysql:host = $servidor;dbname=fitcamp_club", $usuario, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "CONEXION CON EXITO";

}catch(PDOException $error){
    return "CONEXION SIN EXITO".$error;

}

    // class conexionBD{
    //         private $servidor = "localhost";
    //         private $usuario = "root";
    //         private $contrasenia = "";
    //         private $conexionBD;

    //         public function __construct(){
    //             try {
    //                  $this->conexionBD = new PDO("mysql:host=$this->servidor;dbname=fitcamp_club",$this->usuario,$this->contrasenia);

    //                  $this->conexionBD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //             } 
    //             catch (PDOException $error) {
    //                 return "NO SE PUDO CONECTAR A LA BASE DE DATOS". $error;
    //             }
    //         }

    //         public function ejecutar($sql){ // RETORNA
    //             $this->conexionBD->exec($sql);
    //             return $this->conexionBD->lastInsertId();
    //         }

    //         public function consultar($sql){
    //             $sentencia = $this->conexionBD->prepare($sql);
    //             $sentencia->execute();
    //             return $sentencia->fetchAll(); // Retorna todos los registros que se pueda consultar
    //         }
    
    // }

?>