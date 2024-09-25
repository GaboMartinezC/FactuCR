<?php

require_once './Modelo//Metodos/Conexion.php';
require_once './Modelo/Entidades/Usuario.php';
require_once './Modelo/Metodos/UsuarioM.php';
class UsuarioControlador 
{
    function Index()
    {
        session_start();
        $_SESSION["sesion"]=$_POST['correoElectronico'];
        $nuevoLink=DIRECCION_SITIO;
        require_once './Vista/Redireccionar.php';
    }
    
    function Nuevo()
    {
        $u = new Usuario();
        $u->setNombre($_POST['nombre']);
        $u->setTipoIdentificacion($_POST['tipoIdentificacion']);
        $u->setIdentificacion($_POST['identificacion']);
        $u->setNombreComercial($_POST['nombreComercial']);
        $u->setUbicacion($_POST['ubicacion']);
        $u->setOtrasSenas($_POST['otrasSenas']);
        $u->setTelefono($_POST['telefono']);
        $u->setCodigoTelefono($_POST['codigoTelefono']);
        $u->setFax($_POST['fax']);
        $u->setCodigoFax($_POST['codigoFax']);
        $u->setCorreoElectronico(strtolower($_POST['correoElectronico']));
        $u->setPass(password_hash($_POST['pass'], PASSWORD_DEFAULT));
        $u->setEstado(1);
        $uM = new UsuarioM();   
        $uM->Nuevo($u);
        $this->Index();
    }
    function Actualizar()
    {
        $u = new Usuario();
        $u->setNombre($_POST['nombre']);
        $u->setTipoIdentificacion($_POST['tipoIdentificacion']);
        $u->setIdentificacion($_POST['identificacion']);
        $u->setNombreComercial($_POST['nombreComercial']);
        $u->setUbicacion($_POST['ubicacion']);
        $u->setOtrasSenas($_POST['otrasSenas']);
        $u->setTelefono($_POST['telefono']);
        $u->setCodigoTelefono($_POST['codigoTelefono']);
        $u->setFax($_POST['fax']);
        $u->setCodigoFax($_POST['codigoFax']);
        $u->setEstado(1);
        $uM = new UsuarioM();   
        $uM->Actualizar($u);
        $this->Index();
    }
    
    function ValidarUsuario()
    {
        $uM = new UsuarioM();   
        $u= $uM->BuscarCorreo(strtolower($_POST['correoElectronico']));
        if (password_verify($_POST['pass'], $u[0]->getPass()))
        {
            $this->Index();
        }
        else
            echo 'Invalid password.';
    }
    
}
