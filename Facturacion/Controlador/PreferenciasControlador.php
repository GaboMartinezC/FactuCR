<?php

require_once './Modelo//Metodos/Conexion.php';
require_once './Modelo/Entidades/Usuario.php';
require_once './Modelo/Metodos/UsuarioM.php';
require_once './Modelo/Entidades/CodigoCabys.php';
require_once './Modelo/Metodos/CodigoCabysM.php';
require_once './Modelo/Entidades/ClienteGuardado.php';
require_once './Modelo/Metodos/ClienteGuardadoM.php';
require_once './Modelo/Entidades/Receptor.php';
require_once './Modelo/Metodos/ReceptorM.php';
class PreferenciasControlador 
{
    //indexes
    function Cabys()
    {
        $validar= new Rutas();
        if($validar->ValidarSesion())
        {
            $uM = new UsuarioM();   
            $u= $uM->BuscarCorreo(strtolower($_SESSION["sesion"]));
            $vista = './Vista/Preferencias/Cabys.php';
            require_once './Vista/Templates/Plantilla.php';
        }
    }
    
    function Receptor()
    {
        $validar= new Rutas();
        if($validar->ValidarSesion())
        {
            $uM = new UsuarioM();   
            $u= $uM->BuscarCorreo(strtolower($_SESSION["sesion"]));
            $vista = './Vista/Preferencias/Receptor.php';
            require_once './Vista/Templates/Plantilla.php';
        }
    }

    
    
    
    //Codigos CaByS
    function CabysNuevo()
    {
        
    }
    
    function CabysBuscarTodos()
    {
        
    }
    
    function CabysActualizar()
    {
        $c = new CodigoCabys();
        $c->setIdUsuario($_POST['idUsuario']);
        $c->setCodigo($_POST['codigo']);
        $c->setDescripcion($_POST['descripcion']);
        $c->setIva($_POST['iva']);
        $c->setPrecioUnitario($_POST['precioUnitario']);
        $c->setEstado(1);
        $cM = new CodigoCabysM();   
        $cM->Actualizar($c);
        $this->Index();
    }
    
    function CabysInactivar()
    {
        
    }
    
    
    //Receptores
    
    
    function ReceptorNuevo()
    {
        $r = new Receptor();
        $r->setNombre($_POST['nombre']);
        $r->setTipoIdentificacion($_POST['tipoIdentificacion']);
        $r->setIdentificacion($_POST['identificacion']);
        $r->setNombreComercial($_POST['nombreComercial']);
        $r->setUbicacion($_POST['ubicacion']);
        $r->setOtrasSenas($_POST['otrasSenas']);
        $r->setTelefono($_POST['telefono']);
        $r->setCodigoTelefono($_POST['codigoTelefono']);
        $r->setFax($_POST['fax']);
        $r->setCodigoFax($_POST['codigoFax']);
        $r->setCorreoElectronico(strtolower($_POST['correoElectronico']));
        $r->setEstado(1);
        $rM = new ReceptorM();   
        $rM->Nuevo($r);
        $this->Index();
    }
    
    function ReceptorBuscar()
    {
        $rM = new ReceptorM();
        $r = new Receptor();
        $r = $rM->Buscar($_POST['id']);
        $this->Index();
    }
    
    function ReceptorBuscarTodos()
    {   
        $cgM = new ClienteGuardadoM();   
        $cgM->BuscarTodos($_POST['idUsuario']);
        $this->Index();
    }
    
    function ReceptorActualizar()
    {
        $r = new Receptor();
        $r->setNombre($_POST['nombre']);
        $r->setTipoIdentificacion($_POST['tipoIdentificacion']);
        $r->setIdentificacion($_POST['identificacion']);
        $r->setNombreComercial($_POST['nombreComercial']);
        $r->setUbicacion($_POST['ubicacion']);
        $r->setOtrasSenas($_POST['otrasSenas']);
        $r->setTelefono($_POST['telefono']);
        $r->setCodigoTelefono($_POST['codigoTelefono']);
        $r->setFax($_POST['fax']);
        $r->setCodigoFax($_POST['codigoFax']);
        $r->setCorreoElectronico(strtolower($_POST['correoElectronico']));
        $r->setEstado(1);
        $rM = new ReceptorM();
        $rM->Actualizar($r);
        $this->Index();
    }
    
    function ReceptorInactivar()
    {
        $r = new Receptor();
        $r->setNombre($_POST['nombre']);
        $r->setTipoIdentificacion($_POST['tipoIdentificacion']);
        $r->setIdentificacion($_POST['identificacion']);
        $r->setNombreComercial($_POST['nombreComercial']);
        $r->setUbicacion($_POST['ubicacion']);
        $r->setOtrasSenas($_POST['otrasSenas']);
        $r->setTelefono($_POST['telefono']);
        $r->setCodigoTelefono($_POST['codigoTelefono']);
        $r->setFax($_POST['fax']);
        $r->setCodigoFax($_POST['codigoFax']);
        $r->setCorreoElectronico(strtolower($_POST['correoElectronico']));
        $r->setEstado(0);
        $rM = new ReceptorM();
        $rM->Actualizar($r);
        $this->Index();
    }
}
