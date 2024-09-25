<?php

class ClienteGuardadoM 
{
    function Nuevo(ClienteGuardado $c)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `CLIENTEGUARDADO`("
            ." `IDUSUARIO`,"
            ." `IDRECEPTOR`,"
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$c->getIdUsuario()."',"
            ."'".$c->getIdReceptor()."',"
            ."'".$c->getEstado()."')";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
        
    }
    
    private function Llenar( $resultado)
    {
        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $c= new ClienteGuardado();
                $c->setId($fila["ID"]);
                $c->setIdUsuario($fila["IDUSUARIO"]);
                $c->setIdReceptor($fila["IDRECEPTOR"]);
                $c->setEstado($fila["ESTADO"]);
                $todos[]=$c;
            }
        }
        else
            $todos=null;
        return $todos;
        
    }
    
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM CLIENTEGUARDADO";
        $resultado=$conexion->Ejecutar($sql);

        $todos= $this->Llenar($resultado);

        $conexion->Cerrar();

        return $todos;
    }
    
}
