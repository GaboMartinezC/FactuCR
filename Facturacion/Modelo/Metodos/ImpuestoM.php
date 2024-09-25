<?php
class ImpuestoM {
    function Nuevo(Impuesto $i)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `IMPUESTO`("
            ." `IDLINEADETALLE`,"
            ." `CODIGO`,"
            ." `CODIGOTARIFA`,"
            ." `TARIFA`,"
            ." `FACTORIVA`,"
            ." `MONTO`,"
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$i->getIdLineaDetalle()."',"
            ."'".$i->getCodigo()."',"
            ."'".$i->getCodigoTarifa()."',"
            ."'".$i->getTarifa()."',"
            ."'".$i->getFactorIVA()."',"
            ."'".$i->getMonto()."',"
            ."'".$i->getEstado()."')";
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
                $i= new Impuesto();
                $i->setId($fila["ID"]);
                $i->setIdLineaDetalle($fila["IDLINEADETALLE"]);
                $i->setCodigo($fila["CODIGO"]);
                $i->setCodigoTarifa($fila["CODIGOTARIFA"]);
                $i->setTarifa($fila["TARIFA"]);
                $i->setFactorIVA($fila["FACTORIVA"]);
                $i->setMonto($fila["MONTO"]);
                $i->setEstado($fila["ESTADO"]);
                $todos[]=$i;
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

        $sql="SELECT * FROM IMPUESTO";
        $resultado=$conexion->Ejecutar($sql);

        $todos= $this->Llenar($resultado);

        $conexion->Cerrar();

        return $todos;
    }
    
    function BuscarID($id)
    {
        $i=new Impuesto();
        $conexion=new Conexion();
        $sql="SELECT * FROM IMPUESTO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);
        $i= $this->Llenar($resultado);
        $conexion->Cerrar();
        return $i;
    }
    
    function BuscarIdLineaDetalle($id)
    {
        $i=new CodigoComercial();
        $conexion=new Conexion();
        $sql="SELECT * FROM IMPUESTO WHERE IDLINEADETALLE=$id";
        $resultado=$conexion->Ejecutar($sql);
        $i= $this->Llenar($resultado);
        $conexion->Cerrar();
        return $i;
    }
}

