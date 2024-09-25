<?php

require_once './Modelo//Metodos/Conexion.php';
require_once './Modelo/Entidades/Usuario.php';
require_once './Modelo/Metodos/UsuarioM.php';

class IndexControlador {
    function Index()
    {
        $validar= new Rutas();
        if($validar->ValidarSesion())
        {
            $uM = new UsuarioM();   
            $u= $uM->BuscarCorreo(strtolower($_SESSION["sesion"]));
            $vista = './Vista/Perfil/Perfil.php';
            require_once './Vista/Templates/Plantilla.php';
        }
    }
    function Dashboard()
    {
        $validar= new Rutas();
        if($validar->ValidarSesion())
        {
            $uM = new UsuarioM();   
            $u= $uM->BuscarCorreo(strtolower($_SESSION["sesion"]));
            $vista = './Vista/TICS/Dashboard.php';
            require_once './Vista/Templates/Plantilla.php';
        }
    }
    function Login()
    {
        require_once './Vista/Index/Login.php';
    }
    
    function Registro()
    {
        require_once './Vista/Index/Registro.php';
    }
    function CerrarSesion()
    {
        session_start();
        $ruta= new Rutas();
        $_SESSION["sesion"]=null;
        $controlador=$ruta->CargarControlador(CONTROLADOR_PRINCIPAL);
        $ruta->CargarMetodo($controlador, ACCION_SIN_SESION);
    }
}
