<?php
class DescuentoM 
{
    function Nuevo(Descuento $d)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `DESCUENTO`("
            ." `IDLINEADETALLE`,"
            ." `MONTODESCUENTO`,"
            ." `NATURALEZADESCUENTO`,"
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$d->getIdLineaDetalle()."',"
            ."'".$d->getMontoDescuento()."',"
            ."'".$d->getNaturalezaDescuento()."',"
            ."'".$d->getEstado()."')";
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
                $d= new Descuento();
                $d->setId($fila["ID"]);
                $d->setIdLineaDetalle($fila["IDLINEADETALLE"]);
                $d->setMontoDescuento($fila["MONTODESCUENTO"]);
                $d->setNaturalezaDescuento($fila["NATURALEZADESCUENTO"]);
                $d->setEstado($fila["ESTADO"]);
                $todos[]=$d;
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

        $sql="SELECT * FROM DESCUENTO";
        $resultado=$conexion->Ejecutar($sql);

        $todos= $this->Llenar($resultado);

        $conexion->Cerrar();

        return $todos;
    }
    
    function BuscarID($id)
    {
        $d=new Descuento();
        $conexion=new Conexion();
        $sql="SELECT * FROM DESCUENTO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);
        $d= $this->Llenar($resultado);
        $conexion->Cerrar();
        return $d;
    }
    function BuscarIdLineaDetalle($id)
    {
        $d=new CodigoComercial();
        $conexion=new Conexion();
        $sql="SELECT * FROM DESCUENTO WHERE IDLINEADETALLE=$id";
        $resultado=$conexion->Ejecutar($sql);
        $d= $this->Llenar($resultado);
        $conexion->Cerrar();
        return $d;
    }
}
