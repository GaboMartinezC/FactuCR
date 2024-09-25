<?php

class ReceptorM {
    function Nuevo(Receptor $r)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="INSERT INTO `RECEPTOR`("
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
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$r->getNombre()."',"
            ."'".$r->getTipoIdentificacion()."',"
            ."'".$r->getIdentificacion()."',"
            ."'".$r->getNombreComercial()."',"
            ."'".$r->getUbicacion()."',"
            ."'".$r->getOtrasSenas()."',"
            ."'".$r->getTelefono()."',"
            ."'".$r->getCodigoTelefono()."',"
            ."'".$r->getFax()."',"
            ."'".$r->getCodigoFax()."',"
            ."'".$r->getCorreoElectronico()."',"
            ."'".$r->getEstado()."')";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
        
    }
    
        function Actualizar(Receptor $r)
    {
        
        $retVal=false;
        $conexion= new Conexion();

        $sql="UPDATE `RECEPTOR` SET `ID`("
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
            ." `ESTADO`)"
            ." VALUES ("
            ."'".$r->getNombre()."',"
            ."'".$r->getTipoIdentificacion()."',"
            ."'".$r->getIdentificacion()."',"
            ."'".$r->getNombreComercial()."',"
            ."'".$r->getUbicacion()."',"
            ."'".$r->getOtrasSenas()."',"
            ."'".$r->getTelefono()."',"
            ."'".$r->getCodigoTelefono()."',"
            ."'".$r->getFax()."',"
            ."'".$r->getCodigoFax()."',"
            ."'".$r->getCorreoElectronico()."',"
            ."'".$r->getEstado()."')";
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
                $r= new Receptor();
                $r->setId($fila["ID"]);
                $r->setNombre($fila["NOMBRE"]);
                $r->setTipoIdentificacion($fila["TIPOIDENTIFICACION"]);
                $r->setIdentificacion($fila["IDENTIFICACION"]);
                $r->setNombreComercial($fila["NOMBRECOMERCIAL"]);
                $r->setUbicacion($fila["UBICACION"]);
                $r->setOtrasSenas($fila["OTRASSENAS"]);
                $r->setTelefono($fila["TELEFONO"]);
                $r->setCodigoTelefono($fila["CODIGOTELEFONO"]);
                $r->setFax($fila["FAX"]);
                $r->setCodigoFax($fila['CODIGOFAX']);
                $r->setCorreoElectronico($fila["CORREOELECTRONICO"]);
                $r->setEstado($fila["ESTADO"]);
                $todos[]=$r;
            }
        }
        else
            $todos=null;
        return $todos;
        
    }
    
    
    function BuscarID($id)
    {
        $r=new Receptor();
        $conexion=new Conexion();

        $sql="SELECT * FROM RECEPTOR WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        $r= $this->Llenar($resultado);
        
        $conexion->Cerrar();
        
        
        return $r;
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
}
