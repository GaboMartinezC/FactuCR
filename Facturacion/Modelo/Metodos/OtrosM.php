<?php

class OtrosM
{
    //nuevo
    function Nuevo(Otros $otro)
    {
        //variable de retorno
        $retVal=false;
        //instancia de conexion
        $conexion= new Conexion();
        //query
        $sql = "INSERT INTO `OTROS` (`IDCOMPROBANTE`, `OTROTEXTO`, `OTROCONTENIDO`, `ESTADO`) VALUES ({$otro -> getIdComprobante()}, '{$otro -> getOtroTexto()}', '{$otro -> getOtroContenido()}', 1)";
        //ejecucion del query
        if($conexion->Ejecutar($sql))
            $retVal=true;
        //cierre de la conexion con la bd
        $conexion->Cerrar();
        return $retVal;
    }

    //actualizar
    function Actualizar(Otros $otroET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script
        $sql = "UPDATE OTROS SET IDCOMPROBANTE = {$otrosET -> getIdComprobante()}, OTROTEXTO = '{$otrosET -> getOtroTexto()}', OTROCONTENIDO = '{$otrosET -> getOtroContenido()}'";
        //ejecuto el query
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        return $retVal;
    }

    //modificar estado
    function ModificarEstado($id){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //query
        $sql = "UPDATE OTROS SET ESTADO = 0 WHERE ID = {$id}";
        //ejecuto el query
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        return $retVal;
    }

    //buscar todos
    function BuscarTodos(){
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script bd
        $sql = "SELECT * FROM `OTROS` WHERE ESTADO = 1";
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

    //buscar todos X comprobante
    function BuscarTodosComprobante($id){
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //query
        $sql = "SELECT * FROM `OTROS` WHERE IDCOMPROBANTE = {$id}";
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
        $e = new Otros();
        $e->setId($fila['ID']);
        $e->setIdComprobante($fila['IDCOMPROBANTE']);
        $e->setOtroTexto($fila['OTROTEXTO']);
        $e->setOtroContenido($fila['OTROCONTENIDO']);
        $e->setEstado($fila['ESTADO']);
        return $e;
    }
    function BuscarID($id)
    {
        $o=new Otros();
        $conexion=new Conexion();

        $sql="SELECT * FROM OTROS WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $o= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $o;
    }
    function BuscarIdComprobante($id)
    {
        $o=new Otros();
        $conexion=new Conexion();

        $sql="SELECT * FROM OTROS WHERE IDCOMPROBANTE=$id";
        $resultado=$conexion->Ejecutar($sql);

        $o= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $o;
    }
}