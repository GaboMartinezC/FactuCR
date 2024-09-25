<?php

class InformacionReferenciaM
{
    //nuevo
    function Nuevo(InformacionReferencia $informacionReferenciaET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql ="INSERT INTO `INFORMACIONREFERENCIA`(
                  `IDCOMPROBANTE`,
                  `TIPODOC`,
                  `NUMERO`,
                  `FECHAEMISION`,
                  `CODIGO`,
                  `RAZON`,                  
                  `ESTADO`
        ) VALUES (
                  '{$informacionReferenciaET-> getIdComprobante()}',
                  '{$informacionReferenciaET-> getTipoDoc()}',
                  '{$informacionReferenciaET-> getNumero()}',
                  '{$informacionReferenciaET-> getFechaEmision()}',
                  '{$informacionReferenciaET-> getCodigo()}',
                  '{$informacionReferenciaET-> getRazon()}',
                  '{$informacionReferenciaET-> getEstado()}',
                  1)";

        if($conexion->Ejecutar($sql))
            $retVal=true;
        //cierra la conexion con la bd
        conexion->Cerrar();
        return $retVal;
    }

    function Actualizar(InformacionReferencia $informacionReferenciaET)
    {
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql ="UPDATE `INFORMACIONREFERENCIA` SET 
                IDCOMPROBANTE ='{$informacionReferenciaET->getIdComprobante()}',
                TIPODOC ='{$informacionReferenciaET-> getTipoDoc()}',
                NUMERO='{$informacionReferenciaET->getNumero()}',
                FECHAEMISION='{$informacionReferenciaET->getFechaEmision()}',
                CODIGO='{$informacionReferenciaET->getCodigo()}',                
                ESTADO='{$informacionReferenciaET->getEstado()}'
                WHERE ID= {$u->getId()}";
        //ejecuta el script
        if ($conexion->Ejecutar($sql))
            $retVal=true;
        return $retVal;
    }

    function ModificarEstado($id){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script
        $sql="UPDATE `INFORMACIONREFERENCIA` SET ESTADO=0 WHERE ID ={$id}";
        //ejecuta el script
        if ($conexion->Ejecutar($sql))
            $retVal=true;
        return $retVal;
    }

    function buscarTodos()
    {
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script bd
        $sql = "SELECT * FROM `INFORMACIONREFERENCIA` WHERE ESTADO = 1";
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

    function CargarObjeto($fila){
        $infoRef = new InformacionReferenciaET();
        $infoRef->setId($fila['ID']);
        $infoRef->setIdComprobante($fila['IDCOMPROBANTE']);
        $infoRef->setTipoDoc($fila['TIPODOC']);
        $infoRef->setNumero($fila['NUMERO']);
        $infoRef->setFechaEmision($fila['FECHAEMISION']);
        $infoRef->setCodigo($fila['CODIGO']);
        $infoRef->setEstado($fila['ESTADO']);
        return $infoRef;
    }
    function BuscarID($id)
    {
        $iR=new InformacionReferencia();
        $conexion=new Conexion();

        $sql="SELECT * FROM INFORMACIONREFERENCIA WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $iR= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $iR;
    }
    function BuscarIdComprobante($id)
    {
        $iR=new InformacionReferencia();
        $conexion=new Conexion();

        $sql="SELECT * FROM INFORMACIONREFERENCIA WHERE IDCOMPROBANTE=$id";
        $resultado=$conexion->Ejecutar($sql);

        $iR= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $iR;
    }
}
