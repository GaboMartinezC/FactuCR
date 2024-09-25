<?php

class CodigoCabysM
{
    //nuevo
    function Nuevo(CodigoCabys $codigoCabysET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql = "INSERT INTO `CODIGOCABYS` (`IDUSUARIO`, `CODIGO`, `DESCRIPCION`, `IVA`, `PRECIOUNITARIO`, `ESTADO`) VALUES ({$codigoCabysET -> getIdUsuario()}, '{$codigoCabysET -> getCodigo()}', '{$codigoCabysET -> getDescripcion()}', {$codigoCabysET -> getIva()}, {$codigoCabysET -> getPrecioUnitario()}, 1)";
        //ejecuto el script
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $retVal;
    }

    //actualizar
    function Actualizar(CodigoCabys $codigoCabysET){
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script
        $sql = "UPDATE CODIGOCABYS SET IDUSUARIO = '{$codigoCabysET -> getIdUsuario()}', CODIGO = '{$codigoCabysET -> getCodigo()}', DESCRIPCION = '{$codigoCabysET -> getDescripcion()}', IVA = {$codigoCabysET -> getIva()}, PRECIOUNITARIO = {$codigoCabysET -> getPrecioUnitario()}";
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
        $sql = "UPDATE CODIGOCABYS SET ESTADO = 0 WHERE ID = {$id}";
        //ejecuto el script
        if($conexion -> Ejecutar($sql))
            $retVal = true;
        return $retVal;
    }

    //buscar todos X usuario
    function BuscarTodosUsuario($id){
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script bd
        $sql = "SELECT * FROM `CODIGOCABYS` WHERE IDUSUARIO = {$id}";
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

    //buscar todos
    function BuscarTodos(){
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();
        //script bd
        $sql = "SELECT * FROM `CODIGOCABYS` WHERE ESTADO = 1";
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

    //buscar x texto
    function BuscarTodosTexto($texto){
        //lista retorno
        $listaRetorno = array();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        //realizo una busqueda donde descripcion contenga el contenido de textos
        $sql = "SELECT * FROM `CODIGOCABYS` WHERE DESCRIPCION LIKE '%{$texto}%'";
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
        $codigoCabysET = new CodigoCabys();
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script bd
        //realizo una busqueda donde descripcion contenga el contenido de textos
        $sql = "SELECT * FROM `CODIGOCABYS` WHERE CODIGO = {'$codigo}'}";
        $retVal = $conexion -> Ejecutar($sql);

        //valido el retorno de la bd
        if(mysqli_num_rows($retVal) > 0)
        {
            while($fila = mysqli_fetch_assoc($retVal))
                $codigoCabysET = $this->CargarObjeto($fila);
        }else
            $codigoCabysET = null;

        //cierro la conexion con la bd
        $conexion->Cerrar();
        return $codigoCabysET;
    }

    //cargar objeto
    function CargarObjeto($fila){
        $e = new CodigoCabys();
        $e->setId($fila['ID']);
        $e->setIdUsuario($fila['IDUSUARIO']);
        $e->setCodigo($fila['CODIGO']);
        $e->setDescripcion($fila['DESCRIPCION']);
        $e->setIva($fila['IVA']);
        $e->setPrecioUnitario($fila['PRECIOUNITARIO']);
        $e->setEstado($fila['ESTADO']);
        return $e;
    }
}