<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FactuCR | Componentes</title>
    <link rel="icon" type="image/x-icon" href="Recursos/Imagenes/Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="Recursos/CSS/componentes.css" rel="stylesheet">
</head>
<body class="container-fluid" style="background-color: #F9F9F9;">
    <div class="col-md-12 d-flex">
        <div class="col-md-7">
            <div class="col-md-12 p-5">
                <div class="col-md-12">
                    <h3>Lista de Receptores</h3>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="col-md-5 d-flex">
                        <div class="input-group p-2">
                            <input type="text" class="input" placeholder="Ingrese el nombre">
                            <div id="botonPlantilla2" class="btn btn-primary" tabindex="0">
                                <img src="Recursos/SVG/Iconos/IconoBuscar.svg" alt="Icono de buscar">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div id="botonPlantilla2" class="btn btn-primary m-2 p-2" tabindex="0">
                            <img src="Recursos/SVG/Iconos/IconoFiltros.svg" alt="icono de filtrar">
                            <span>Filtros</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 d-flex ">
                <div class="col-md-12 p-5">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Tipo Entidad</th>
                            <th scope="col">Identificación</th>
                            <th scope="col">Nombre Comercial</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">    </th>
                          </tr>
                        </thead>
                        <tbody id="tablaClientes" class="table-group-divider">
                        </tbody>
                      </table>
                </div>
                
               
            </div>
        </div>
        <div class="col-md-3 offset-md-1">
            <div class="col-md-12 border rounded-4 my-5" style="background-color: #FFFF;">
                <div class="row">
                    <div class="col-md-12 p-5">
                        <div class="col-md-12 aling-items-center text-center p-1">
                            <h4>Agregar Cliente</h4>
                        </div>
                        <div class="col-md-12 aling-items-center p-1 d-flex ">
                            <div class="col-md-6 p-1">
                                <select class="w-100" name="comboBox" id="tipoEntidad">
                                    <option>Tipo Entidad</option>
                                    <option>Cedula</option>
                                    <option>Pasaporte</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6 p-1">
                                <input id="identificacion"  class="w-100" type="text" placeholder="Identificación">
                            </div>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <div class="col-md-6 p-1">
                                <input id="nombreComercial"  class="w-100" type="text" placeholder="Nombre Comercial">
                            </div>
                            <div class="col-md-6 p-1">
                                <input id="nombre"  class="w-100" type="text" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <input id="ubicacion" class="w-100" type="text" placeholder="Ubicación">
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <div class="col-md-4 p-1">
                                <input id="telefono" class="w-100" type="text" placeholder="Telefono">
                            </div>
                            <div class="col-md-8 p-1">
                                <input id="fax" class="w-100" type="text" placeholder="Fax">
                            </div>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <input id="correo" class="w-100" type="text" placeholder="Correo">
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <div class="col-md-2 p-1">
                                
                            </div>
                            <div class="col-md-10 p-1 d-flex justify-content-end">
                                <div class="col-md-5 p-1">
                                    <div id="cancelar" class="btn m-2 w-100" tabindex="0">
                                        <span>Cancelar</span>
                                    </div>
                                </div>
                                <div class="col-md-5 p-1">
                                    <div id="btnGuardar" class="btn btn-primary m-2 w-100" tabindex="0">
                                        <span>Guardar</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Modal editar -->
    <div class="modal fade" id="modalEditar" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h1 class="col-md-12 aling-items-center text-start p-1 pb-0 fTexto  fs-4 fw-bold" id="exampleModalLabel">Editar Cliente</h1>
                </div>
                <form class="needs-validation" id="formEditar" novalidate>
                    <div class="modal-body">
                        <div class="col-md-12 aling-items-center p-1 d-flex ">
                            <div class="col-md-6 p-1">
                                <select class="w-100" name="comboBox" id="tipoEntidadA" required>
                                    <option>Cedula</option>
                                    <option>Pasaporte</option>

                                </select>
                            </div>
                            <div class="col-md-6 p-1">
                                <input id="identificacionA"  class="w-100" type="text" placeholder="Identificación" required>
                            </div>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <div class="col-md-6 p-1">
                                <input id="nombreComercialA"  class="w-100" type="text" placeholder="Nombre Comercial" required>
                            </div>
                            <div class="col-md-6 p-1">
                                <input id="nombreA"  class="w-100" type="text" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <input id="ubicacionA" class="w-100" type="text" placeholder="Ubicación" required>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <div class="col-md-4 p-1">
                                <input id="telefonoA" class="w-100" type="text" placeholder="Telefono" required>
                            </div>
                            <div class="col-md-8 p-1">
                                <input id="faxA" class="w-100" type="text" placeholder="Fax" required>
                            </div>
                        </div>
                        <div class="col-md-12 aling-items-center p-2 d-flex">
                            <input id="correoA" class="w-100" type="text" placeholder="Correo" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn m-2 w-25" data-bs-dismiss="modal" id="cancelar">Cancelar</button>
                        <button type="button" class="btn btn-primary m-2 w-40" id="guardarCambios" type="submit">Guardar Cambios</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="./Recursos/JS/clientes.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
        
    
    
    
    
</body>
</html>