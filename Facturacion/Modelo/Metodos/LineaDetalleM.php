<?php

class LineaDetalleM 
{
    function Nuevo(LineaDetalle $ld)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `LINEADETALLE`("
            ." `IDENCABEZADO`,"
            ." `NUMEROLINEA`,"
            ." `PARTIDAARANCELARIA`,"
            ." `CODIGO`,"
            ." `CANTIDAD`,"
            ." `UNIDADMEDIDA`,"
            ." `UNIDADMEDIDACOMERCIAL`,"
            ." `DETALLE`,"
            ." `PRECIOUNITARIO`,"
            ." `MONTOTOTAL`,"
            ." `SUBTOTAL`,"
            ." `BASEIMPONIBLE`,"
            ." `IMPUESTONETO`,"
            ." `MONTOTOTALLINEA`,"
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$ld->getIdEncabezado()."',"
            ."'".$ld->getNumeroLinea()."',"
            ."'".$ld->getPartidaArancelaria()."',"
            ."'".$ld->getCodigo()."',"
            ."'".$ld->getCantidad()."',"
            ."'".$ld->getUnidadMedida()."',"
            ."'".$ld->getUnidadMedidaComercial()."',"
            ."'".$ld->getDetalle()."',"
            ."'".$ld->getPrecioUnitario()."',"
            ."'".$ld->getMontoTotal()."',"
            ."'".$ld->getSubTotal()."',"
            ."'".$ld->getBaseImponible()."',"
            ."'".$ld->getImpuestoNeto()."',"
            ."'".$ld->getMontoTotalLinea()."',"
            ."'".$ld->getEstado()."')";
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
                $ld= new LineaDetalle();
                $ld->setId($fila["ID"]);
                $ld->setIdEncabezado($fila["IDENCABEZADO"]);
                $ld->setNumeroLinea($fila["NUMEROLINEA"]);
                $ld->setPartidaArancelaria($fila["PARTIDAARANCELARIA"]);
                $ld->setCodigo($fila["CODIGO"]);
                $ld->setCantidad($fila["CANTIDAD"]);
                $ld->setUnidadMedida($fila["UNIDADMEDIDA"]);
                $ld->setUnidadMedidaComercial($fila["UNIDADMEDIDACOMERCIAL"]);
                $ld->setDetalle($fila["DETALLE"]);
                $ld->setPrecioUnitario($fila["PRECIOUNITARIO"]);
                $ld->setMontoTotal($fila["MONTOTOTAL"]);
                $ld->setSubTotal($fila["SUBTOTAL"]);
                $ld->setBaseImponible($fila["BASEIMPONIBLE"]);
                $ld->setImpuestoNeto($fila["IMPUESTONETO"]);
                $ld->setMontoTotalLinea($fila["MONTOTOTALLINEA"]);
                $ld->setEstado($fila["ESTADO"]);
                $todos[]=$ld;
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

        $sql="SELECT * FROM LINEADETALLE";
        $resultado=$conexion->Ejecutar($sql);

        $todos= $this->Llenar($resultado);

        $conexion->Cerrar();

        return $todos;
    }
    
    function BuscarID($id)
    {
        $ld=new LineaDetalle();
        $conexion=new Conexion();

        $sql="SELECT * FROM LINEADETALLE WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $ld= $this->Llenar($resultado);
        
        $conexion->Cerrar();
        
        
        return $ld;
    }
    function BuscarIdEncabezado($id)
    {
        $ld=new LineaDetalle();
        $conexion=new Conexion();

        $sql="SELECT * FROM LINEADETALLE WHERE IDENCABEZADO=$id";
        $resultado=$conexion->Ejecutar($sql);

        $ld= $this->Llenar($resultado);
        
        $conexion->Cerrar();
        
        
        return $ld;
    }
    
}
