<?php 
if (! isset($_GET['controlador'])) $_GET['controlador']= "Index";
if (! isset($_GET['metodo'])) $_GET['metodo']= "Index";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentos</title>
    <!--Cambiar según dónde esté el css de componentes-->
    <link rel="stylesheet" href="./Recursos/CSS/componentes.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-md-2">
                <nav class="sidebar">
                    <!--Logo-->
                    <img style="max-width: 181px; width: 100%;" src="./Recursos/Imagenes/logoFactuCRCompleto.svg" alt="">
                    <a href="./?metodo=Index&controlador=Index">
                        <div class="sidebar-item" <?php if ($_GET['controlador'] == "Index") echo 'style="background-color: lightgray;"'; ?>>
                            <img src="./Recursos/SVG/Iconos/IconoInicio.svg" alt="">
                            <span>Inicio</span>
                        </div>
                    </a>
                    <a href="./?metodo=Index&controlador=Comprobante">
                        <div class="sidebar-item" <?php if ($_GET['controlador'] == "Comprobante") echo 'style="background-color: lightgray;"'; ?>>
                            <img src="./Recursos/SVG/Iconos/IconoFactura.svg" alt="">
                            <span>Documentos</span>
                        </div>
                    </a>
                    <a href="./?metodo=Receptor&controlador=Preferencias">
                        <div class="sidebar-item" <?php if ($_GET['metodo'] == "Receptor") echo 'style="background-color: lightgray;"'; ?>>
                            <img src="./Recursos/SVG/Iconos/IconoClientes.svg" alt="">
                            <span>Receptores</span>
                        </div>
                    </a>
                    <a href="./?metodo=Cabys&controlador=Preferencias">
                        <div class="sidebar-item" <?php if ($_GET['metodo'] == "Cabys") echo 'style="background-color: lightgray;"'; ?>>
                            <img src="./Recursos/SVG/Iconos/IconoByS.svg" alt="">
                            <span>Bienes y Servicios</span>
                        </div>
                    </a>
                    <a href="./?metodo=Dashboard&controlador=Index">
                        <div class="sidebar-item" <?php if ($_GET['metodo'] == "Dashboard") echo 'style="background-color: lightgray;"'; ?>>
                            <img src="./Recursos/SVG/Iconos/IconoByS.svg" alt="">
                            <span>Dashboard KPIS</span>
                        </div>
                    </a>
                    <a href="./?metodo=CerrarSesion&controlador=Index">
                        <div class="sidebar-item">
                            <span>Cerrar sesión</span>
                        </div>
                    </a>
                    
                    
                </nav>
            </div>
            <!--Opciones-->
            <div class="col-12 col-md-10" style="overflow-x: hidden; overflow-y: auto; height: 100vh;">
                <?php if(isset($vista)) require_once $vista;?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="Recursos/JS/Utilidades/Diccionario.js"></script>
    </body>
</html>