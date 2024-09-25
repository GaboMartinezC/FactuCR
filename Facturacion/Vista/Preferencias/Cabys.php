<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FactuCR | Componentes</title>
    <link rel="icon" type="image/x-icon" href="Recursos/Imagenes/Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="Recursos/CSS/componentes.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="container-fluid">
        

    <div class="container-fluid m-2">
        <div class="row">
            <div class="col-md-6 rounded-3 border border-dark border-opacity-25">
                <h3 class="p-3">Búsqueda de Bienes y Servicios</h3>
                
                <div class="row ms-2 align-items-center">
                    <div class="input-group">
                        <input id="inputBuscar" type="text" class="input" placeholder="Ingrese el Cabys">
                        <div id="btnBuscar" class="btn btn-primary rounded-end" tabindex="0">
                            <img src="Recursos/SVG/Iconos/IconoBuscar.svg" alt="Icono de agregar"/>
                        </div>
                        
                    </div>
                </div>
                
                <div class="table-responsive m-3 rounded-4">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Impuesto</th>
                                <th scope="col">Favoritos</th>
                            </tr>
                        </thead>
                        <tbody id="tablaDatos" class="table-group-divider text-center cuerpoTabla">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 d-grid gap-2 rounded-3 " >
                <div class="col-md-12 p-1  rounded-3 favorito border border-dark border-opacity-25">
                    <h4 class="p-3">Marcados como favoritos</h4>
                    <div class="container">
                        <div id="listaFavs" class="row d-flex gap-2 justify-content-start ps-4">  
                            <!--Cajas Favoritos-->                                                                                   
                        </div>        
                    </div>                    
                </div>
                <div class="col-md-12 p-1 rounded-3 favorito border border-dark border-opacity-25">
                    <h4 class="p-3">Recientemente usados</h4>
                    <div class="container">
                        <div class="row d-flex justify-content-around">
        
                            <div class="col-lg-11 pb-1 bg-white rounded-4 border border-dark border-opacity-25 mb-1">
                                <div class="row px-2 py-2 pe-0">
                                    <div class="col-md-12">
                                        <span class="fTexto">Fungicida utilizado como preservante para madera
                                        </span><br/><span class="fTexto">3466200990100</span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 d-flex justify-content-end">
                                        <div class="d-flex justify-content-center align-items-center ">
                                            <div id="botonPlantilla2" class="d-flex gap-2 py-1 mt-2 btn btn-primary rounded-pill" tabindex="0">
                                                <img src="./Recursos/SVG/Iconos/IconoFacturaBlanco.svg" alt="Icono de cerrar">
                                                <span> Agregar Factura</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          

                            <div class="col-lg-11 pb-1 bg-white rounded-4 border border-dark border-opacity-25 mb-1">
                                <div class="row px-2 py-2 pe-0">
                                    <div class="col-md-12">
                                        <span class="fTexto">Insecticida peligroso usado como preservante para madera
                                        </span><br/><span class="fTexto">3466602990400</span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 d-flex justify-content-end">
                                        <div class="d-flex justify-content-center align-items-center ">
                                            <div id="botonPlantilla2" class="d-flex gap-2 py-1 mt-2 btn btn-primary rounded-pill" tabindex="0">
                                                <img src="Recursos/SVG/Iconos/IconoFacturaBlanco.svg" alt="Icono de cerrar">
                                                <span> Agregar Factura</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-lg-11 pb-1 bg-white rounded-4 border border-dark border-opacity-25 mb-1">
                                <div class="row px-2 py-2 pe-0">
                                    <div class="col-md-12">
                                        <span class="fTexto">Abonadoras para acoplar a la toma de fuerza del tractor y a los puntos de engranaje
                                        </span><br/><span class="fTexto">4416000000100</span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 d-flex justify-content-end">
                                        <div class="d-flex justify-content-center align-items-center ">
                                            <div id="botonPlantilla2" class="d-flex gap-2 py-1 mt-2 btn btn-primary rounded-pill" tabindex="0">
                                                <img src="Recursos/SVG/Iconos/IconoFacturaBlanco.svg" alt="Icono de cerrar">
                                                <span> Agregar Factura</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    <script src="./Recursos/JS/Preferencias/CabysAPI.js"></script>
</body>
</html>