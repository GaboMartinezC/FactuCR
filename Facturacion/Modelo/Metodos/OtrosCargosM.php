<?php

class OtrosCargosM
{
    //nuevo
    function Nuevo(OtrosCargosET $otrosCargosET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql ="INSERT INTO `OTROSCARGOS`(
                  `IDENCABEZADO`,
                  `TIPODOCUMENTO`,
                  `NUMEROIDENTIDADTERCERO`,
                  `NOMBRETERCERO`,
                  `DETALLE`,
                  `PORCENTAJE`,
                  `MONTOCARGO`,
                  `ESTADO`
        ) VALUES (
                  '{$otrosCargosET-> getIdEncabezado()}',
                  '{$otrosCargosET-> getTipoDocumento()}',
                  '{$otrosCargosET-> getNumeroIdentidadTercero()}',
                  '{$otrosCargosET-> getnombretercero()}',
                  '{$otrosCargosET-> getDetalle()}',
                  '{$otrosCargosET-> getPorcentaje()}',
                  '{$otrosCargosET-> getMontoCargo()}',
                  1)";

        if($conexion->Ejecutar($sql))
            $retVal=true;
        //cierra la conexion con la bd
        conexion->Cerrar();
        return $retVal;
    }

    function Actualizar(OtrosCargosET $otrosCargosET)
    {
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql ="UPDATE `OTROSCARGOS` SET 
                IDENCABEZADO ='{$otrosCargosET-> getIdEncabezado()}',
                TIPODOCUMENTO ='{$otrosCargosET-> getTipoDocumento()}',
                NUMEROIDENTIDADTERCERO='{$otrosCargosET->getNumeroIdentidadTercero()}',
                NOMBRETERCERO='{$otrosCargosET->getNombreTercero()}',
                DETALLE='{$otrosCargosET->getDetalle()}',
                PORCENTAJE='{$otrosCargosET->getPorcentaje()}',
                MONTOCARGO='{$otrosCargosET->getMontoCargo()}'";
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
        $sql="UPDATE `OTROSCARGOS` SET ESTADO=0 WHERE ID ={$id}";
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
        $sql = "SELECT * FROM `OTROSCARGOS` WHERE ESTADO = 1";
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
        $otC = new OtrosCargosET();
        $otC->setId($fila['ID']);
        $otC->setIdEncabezado($fila['IDENCABEZADO']);
        $otC->setTipoDocumento($fila['TIPODOCUMENTO']);
        $otC->setNumeroIdentidadTercero($fila['NUMEROIDENTIDADTERCERO']);
        $otC->setNombreTercero($fila['NOMBRETERCERO']);
        $otC->setDetalle($fila['DETALLE']);
        $otC->setPorcentaje($fila['PORCENTAJE']);
        $otC->setMontoCargo($fila['MONTOCARGO']);
        $otC->setEstado($fila['ESTADO']);
        return $otC;
    }
}
