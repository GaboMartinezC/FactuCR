<?php

class UtilidadesControlador 
{
    private function TraerJSON($jsonURL)
    {
        $ar=fopen($jsonURL,"r") or die("Problemas para abrir o crear archivo");
        $retVal="";
        //require_once("prueba.php");
        while(!feof($ar))
        {
            $retVal= $retVal.fgets($ar);
        }
        fclose($ar);
        return $retVal;
    }
    
    public function DevolverJSON()
    {
        $diccionario =(json_decode( file_get_contents('php://input') )) -> {"metodo"};
        if (is_file("../Recursos/JSON/".$diccionario.".json"))
            echo  ($this->TraerJSON("../Recursos/JSON/".$diccionario.".json"));
        else
            echo json_encode("No se ha encontrado el diccionario");
    }
}
$u= new UtilidadesControlador();
$u->DevolverJSON();
