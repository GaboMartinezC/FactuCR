<?php

class CodigoComercialM{
    
    //nuevo
    function Nuevo(CodigoComercial $codigoComercialsET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql = "INSERT INTO `CODIGOCOMERCIAL` "
                . "(`IDLINEADETALLE`, "
                . "`TIPO`, "
                . "`CODIGO`, "
                . "`ESTADO`) "
                . "VALUES ("
                . "{$codigoComercialET -> getIdLineaDetalle()},"
                . " '{$codigoComercialET -> getTipo()}', "
                . "'{$codigoComercialsET -> getCodigo()}', "
                . "{$codigoComercialET -> getEstado()}, ";
        //ejecuto el script
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $retVal;
    }
    
    //actualizar
    function Actualizar(CodigoComercial $codigoComercialET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script
        $sql = "UPDATE CODIGOCOMERCIAL SET IDUSUARIO = "
                . "'{$codigoComercialET -> getIdUsuario()}', "
                . "IDLINEADETALLE = '{$codigoComercialET -> getIdLineaDetalle()}', "
                . "TIPO = '{$codigoComercialET -> getTipo()}', "
                . "CODIGO = '{$codigoComercialET -> getCodigo()}', "
                . "ESTADO = '{$codigoComercialET -> getEstado()}'";
        //ejecuto el script
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        return $retVal;
    }
    
    function BuscarTodos(){
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script bd
        $sql = "SELECT * FROM `CODIGOCOMERCIAL` WHERE ESTADO = 1";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $listaRetorno[] = $this->CargarObjeto($fila);
        }else
            $listaRetorno = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $listaRetorno;
    }
    
    //cargar objeto
    function CargarObjeto($fila){
        $e = new CodigoComercial();
        $e->setId($fila['ID']);
        $e->setIdLineaDetalle($fila['IDLINEADETALLE']);
        $e->setTipo($fila['TIPO']);
        $e->setCodigo($fila['CODIGO']);
        $e->setEstado($fila['ESTADO']);
        return $e;
    }
    function BuscarID($id)
    {
        $cm=new CodigoComercial();
        $conexion=new Conexion();

        $sql="SELECT * FROM CODIGOCOMERCIAL WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $cm= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $cm;
    }
    function BuscarIdLineaDetalle($id)
    {
        $cm=new CodigoComercial();
        $conexion=new Conexion();

        $sql="SELECT * FROM CODIGOCOMERCIAL WHERE IDLINEADETALLE=$id";
        $resultado=$conexion->Ejecutar($sql);

        $cm= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $cm;
    }
}
