<?php

class ExoneracionM {
    function Nuevo(Exoneracion $e)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `EXONERACION`("
            ." `IDIMPUESTO`,"
            ." `TIPODOCUMENTO`,"
            ." `NUMERODOCUMENTO`,"
            ." `NOMBREINSTITUCION`,"
            ." `FECHAEMISION`,"
            ." `PORCENTAJEEXONERACION`,"
            ." `MONTOEXONERACION`,"
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$e->getIdImpuesto()."',"
            ."'".$e->getTipodocumento()."',"
            ."'".$e->getNumeroDocumento()."',"
            ."'".$e->getNombreInstitucion()."',"
            ."'".$e->getFechaEmision()."',"
            ."'".$e->getPorcentajeExoneracion()."',"
            ."'".$e->getMontoExoneracion()."',"
            ."'".$e->getEstado()."')";
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
                $e= new Exoneracion();
                $e->setId($fila["ID"]);
                $e->setIdImpuesto($fila["IDIMPUESTO"]);
                $e->setTipodocumento($fila["TIPODOCUMENTO"]);
                $e->setNumeroDocumento($fila["NUMERODOCUMENTO"]);
                $e->setNombreInstitucion($fila["NOMBREINSTITUCION"]);
                $e->setFechaEmision($fila["FECHAEMISION"]);
                $e->setPorcentajeExoneracion($fila["PORCENTAJEEXONERACION"]);
                $e->setMontoExoneracion($fila["MONTOEXONERACION"]);
                $e->setEstado($fila["ESTADO"]);
                $todos[]=$e;
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

        $sql="SELECT * FROM EXONERACION";
        $resultado=$conexion->Ejecutar($sql);

        $todos= $this->Llenar($resultado);

        $conexion->Cerrar();

        return $todos;
    }
    
    function BuscarID($id)
    {
        $e=new Exoneracion();
        $conexion=new Conexion();
        $sql="SELECT * FROM EXONERACION WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);
        $e= $this->Llenar($resultado);
        $conexion->Cerrar();
        return $e;
    }
    function BuscarIdImpuesto($id)
    {
        $e=new Exoneracion();
        $conexion=new Conexion();
        $sql="SELECT * FROM EXONERACION WHERE IDIMPUESTO=$id";
        $resultado=$conexion->Ejecutar($sql);
        $e= $this->Llenar($resultado);
        $conexion->Cerrar();
        return $e;
    }
    
}
