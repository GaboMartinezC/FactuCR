<?php
class Conexion 
{
    private $mysqli;
    function Ejecutar($query)
    {
        $name="facturacionferia2024";
        $user="facturacionferia2024";
        $pass="qc78&a17F";
        
        $this->mysqli = new mysqli('localhost',$user,$pass,$name);
        if(!($this->mysqli ) ) 
        {
            die("Error");
        }
        
        $this->mysqli->autocommit(true);
        $resultado=$this->mysqli->query($query);
        return $resultado;
    }
    
    function Cerrar()
    {
        $this->mysqli->close();
    }
}
