<?php
class UsuarioM {
    function Nuevo(Usuario $u)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `USUARIO`("
            ." `NOMBRE`,"
            ." `TIPOIDENTIFICACION`,"
            ." `IDENTIFICACION`,"
            ." `NOMBRECOMERCIAL`,"
            ." `UBICACION`,"
            ." `OTRASSENAS`,"
            ." `TELEFONO`,"
            ." `CODIGOTELEFONO`,"
            ." `FAX`,"
            ." `CODIGOFAX`,"
            ." `CORREOELECTRONICO`,"
            ." `PASS`,"
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$u->getNombre()."',"
            ."'".$u->getTipoIdentificacion()."',"
            ."'".$u->getIdentificacion()."',"
            ."'".$u->getNombreComercial()."',"
            ."'".$u->getUbicacion()."',"
            ."'".$u->getOtrasSenas()."',"
            ."'".$u->getTelefono()."',"
            ."'".$u->getCodigoTelefono()."',"
            ."'".$u->getFax()."',"
            ."'".$u->getCodigoFax()."',"
            ."'".$u->getCorreoElectronico()."',"
            ."'".$u->getPass()."',"
            ."'".$u->getEstado()."')";
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
                $u= new Usuario();
                $u->setId($fila["ID"]);
                $u->setNombre($fila["NOMBRE"]);
                $u->setTipoIdentificacion($fila["TIPOIDENTIFICACION"]);
                $u->setIdentificacion($fila["IDENTIFICACION"]);
                $u->setNombreComercial($fila["NOMBRECOMERCIAL"]);
                $u->setUbicacion($fila["UBICACION"]);
                $u->setOtrasSenas($fila["OTRASSENAS"]);
                $u->setTelefono($fila["TELEFONO"]);
                $u->setCodigoTelefono($fila["CODIGOTELEFONO"]);
                $u->setFax($fila["FAX"]);
                $u->setCodigoFax($fila['CODIGOFAX']);
                $u->setCorreoElectronico($fila["CORREOELECTRONICO"]);
                $u->setPass($fila["PASS"]);
                $u->setEstado($fila["ESTADO"]);
                $todos[]=$u;
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

        $sql="SELECT * FROM USUARIO";
        $resultado=$conexion->Ejecutar($sql);

        $todos= $this->Llenar($resultado);

        $conexion->Cerrar();

        return $todos;
    }
    
    function BuscarID($id)
    {
        $u=new Usuario();
        $conexion=new Conexion();

        $sql="SELECT * FROM USUARIO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $u= $this->Llenar($resultado);
        
        $conexion->Cerrar();
        
        
        return $u;
    }
    
    function BuscarCorreo($correo)
    {
        $u=new Usuario();
        $conexion=new Conexion();

        $sql=' SELECT * FROM USUARIO WHERE CORREOELECTRONICO = "'.$correo.'";';
        $resultado=$conexion->Ejecutar($sql);
        $u= $this->Llenar($resultado);
        
        $conexion->Cerrar();
        
        
        return $u;
    }
    
    function Actualizar(Usuario $u)
    {
        //variable de retorno
        $retVal = false;
        //instancia de conexion con la bd
        $conexion = new Conexion();

        //script
        $sql ="UPDATE `USUARIOS` SET 
                NOMBRE ='{$u->getNombre()}',
                TIPOIDENTIFICACION ='{$u->getTipoIdentificacion()}',
                IDENTIFICACION='{$u->getIdentificacion()}',
                NOMBRECOMERCIAL='{$u->getNombreComercial()}',
                UBICACION='{$u->getUbicacion()}',
                OTRASSENAS='{$u->getOtrasSenas()}',              
                TELEFONO='{$u->getTelefono()}',              
                CODIGOTELEFONO='{$u->getCodigoTelefono()}',              
                FAX='{$u->getFax()}',              
                CODIGOFAX='{$u->getCodigoFax()}',
                ESTADO='{$u->getEstado()}'
                WHERE ID= {$u->getId()}";
        //ejecuta el script
        if ($conexion->Ejecutar($sql))
            $retVal=true;
        return $retVal;
    }

}
