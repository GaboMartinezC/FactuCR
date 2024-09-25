<?php

class EncabezadoM
{
    //nuevo
    function Nuevo(Encabezado $encabezadoET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql = "INSERT INTO `ENCABEZADO` (`IDEMISOR`, `IDRECEPTOR`, `CODIGOACTIVIDAD`, `CLAVE`, `NUMEROCONSECUTIVO`, `FECHAEMISION`, `CONDICIONVENTA`,`PLAZOCREDITO`,`MEDIOPAGO`, `TOTALNETO`, `TOTALIVA`, `ESTADO`) VALUES ({$encabezadoET -> getIdEmisor()}, {$encabezadoET -> getIdReceptor()}, '{$encabezadoET -> getCodigoActividad()}', '{$encabezadoET -> getClave()}', '{$encabezadoET -> getNumeroConsecutivo()}', '{$encabezadoET -> getFechaEmision()}','{$encabezadoET -> getCondicionVenta()}','{$encabezadoET -> getPlazoCredito()}','{$encabezadoET -> getMedioPago()}','{$encabezadoET ->getTotalNeto()}','{$encabezadoET ->getTotalIVA()}',1)";
        //ejecuto el script
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $retVal;
    }

    //actualizar
    function Actualizar(Encabezado $encabezadoET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script
        $sql = "UPDATE ENCABEZADO SET IDEMISOR = {$encabezadoET -> getIdEmisor()}, IDRECEPTOR = {$encabezadoET -> getIReceptor()}, CODIGOACTIVIDAD = '{$encabezadoET -> getCodigoActividad()}', CLAVE = '{$encabezadoET -> getClave()}', NUMEROCONSECUTIVO = '{$encabezadoET -> getNumeroConsecutivo()}', FECHAEMISION = '{$encabezadoET -> getFechaEmision()}', CONDICIONVENTA = '{$encabezadoET -> getCondicionVenta()}', PLAZOCREDITO = '{$encabezadoET -> getPlazoCredito()}', MEDIOPAGO = '{$encabezadoET -> getMedioPago()}', TOTALNETO = '{$encabezadoET ->getTotalNeto()}', TOTALIVA = '{$encabezadoET ->getTotalIVA()}', 1)";
        //ejecuto el script
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
        //script
        $sql = "UPDATE ENCABEZADO SET ESTADO = 0 WHERE ID = {$id}";
        //ejecuto el script
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
        $sql = "SELECT * FROM `ENCABEZADO` WHERE ESTADO = 1";
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

    //buscar x codigo
    function BuscarCodigo($codigo){
        //objeto retorno
        $encabezadoET = new Encabezado();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        $sql = "SELECT * FROM `ENCABEZADO` WHERE CODIGO = {'$codigo}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $encabezadoET = $this->CargarObjeto($fila);
        }else
            $encabezadoET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $encabezadoET;
    }

    //buscar x fecha
    function BuscarFecha($fecha){
        //objeto retorno
        $encabezadoET = new Encabezado();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        $sql = "SELECT * FROM `ENCABEZADO` WHERE FECHAEMISION = {'$fecha}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $encabezadoET = $this->CargarObjeto($fila);
        }else
            $encabezadoET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $encabezadoET;
    }
    //buscar x emisor
    function BuscarEmisor($emisor){
        //objeto retorno
        $encabezadoET = new Encabezado();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        $sql = "SELECT * FROM `ENCABEZADO` WHERE IDEMISOR = {'$emisor}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $encabezadoET = $this->CargarObjeto($fila);
        }else
            $encabezadoET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $encabezadoET;
    }

    //buscar x receptor
    function BuscarReceptor($receptor){
        //objeto retorno
        $encabezadoET = new Encabezado();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        $sql = "SELECT * FROM `ENCABEZADO` WHERE IDRECEPTOR = {'$receptor}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $encabezadoET = $this->CargarObjeto($fila);
        }else
            $encabezadoET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $encabezadoET;
    }

    //buscar x condicion
    function BuscarCondicion($condicion){
        //objeto retorno
        $encabezadoET = new Encabezado();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        $sql = "SELECT * FROM `ENCABEZADO` WHERE CONDICIONVENTA = {'$condicion}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $encabezadoET = $this->CargarObjeto($fila);
        }else
            $encabezadoET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $encabezadoET;
    }

    //buscar x medioPago
    function BuscarMedioPago($medio){
        //objeto retorno
        $encabezadoET = new Encabezado();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        $sql = "SELECT * FROM `ENCABEZADO` WHERE MEDIOPAGO = {'$medio}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $encabezadoET = $this->CargarObjeto($fila);
        }else
            $encabezadoET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $encabezadoET;
    }

    function BuscarID($id)
    {
        $e=new Encabezado();
        $conexion=new Conexion();

        $sql="SELECT * FROM IMPUESTO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $e= $this->CargarObjeto($resultado);
        
        $conexion->Cerrar();
        
        
        return $e;
    }
    //cargar objeto
    function CargarObjeto($fila){
        $e = new Encabezado();
        $e->setId($fila['ID']);
        $e->setIdEmisor($fila['IDEMISOR']);
        $e->setIdReceptor($fila['IDRECEPTOR']);
        $e->setCodigoActividad($fila['CODIGOACTIVIDAD']);
        $e->setClave($fila['CLAVE']);
        $e->setNumeroConsecutivo($fila['NUMEROCONSECUTIVO']);
        $e->setFechaEmision($fila['FECHAEMISION']);
        $e->setCondicionVenta($fila['CONDICIONVENTA']);
        $e->setPlazoCredito($fila['PLAZOCREDITO']);
        $e->setMedioPago($fila['MEDIOPAGO']);
        $e->setTotalNeto($fila['TOTALNETO']);
        $e->setTotalIVA($fila['TOTALIVA']);
        $e->setEstado($fila['ESTADO']);
        return $e;
    }
}