<style>
    .cont-dashboard
    {
        width: 95%;
        height: 90%;
        margin: 4.5%;
        padding: 5%;
    }
</style>
<div class="container-fluid">
    <div class="row ">
        <div class="col-10 offset-1">
            <div class="row ">
                <!-- datos personales -->
                <div class="col-12 col-md-6 p-6 d-flex align-items-center justify-content-center">
                    
                    <div class="card cont-dashboard text-center">
                        <h3><b>Datos personales</b></h3>
                        <div class="row">
                            <div class="col text-end">
                                <label for="identificacion">Identificación:</label><br>
                                <label for="nombre">Nombre:</label><br>
                                <label for="nombreComercial">Nombre Comercial:</label><br>
                                <label for="tipoEntidad">Tipo Entidad:</label><br>
                                <label for="ubicacion">Ubicación:</label><br>
                                <label for="telefono">Teléfono:</label><br>
                                <label for="fax">Fax:</label><br>
                                <label for="correo">Correo:</label><br>
                            </div>
                            <div class="col">
                                <label id="identificacion"><?php echo $u[0]->getIdentificacion()?></label><br>
                                <label id="nombre"><?php echo $u[0]->getNombre()?></label><br>
                                <label id="nombreComercial"><?php echo $u[0]->getNombreComercial()?></label><br>
                                <label id="tipoEntidad">Sociedad Anónima</label><br>
                                <label id="ubicacion"><?php echo $u[0]->getUbicacion()?></label><br>
                                <label id="telefono"><?php echo $u[0]->getTelefono()?></label><br>
                                <label id="fax"><?php echo $u[0]->getFax()?></label><br>
                                <label id="correo"><?php echo $u[0]->getCorreoElectronico()?></label><br>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!-- iva -->
                <div class="col-12 col-md-6 p-6 d-flex align-items-center justify-content-center">
                    <div class="card cont-dashboard">
                        <h3><b>IVA</b></h3>
                        <canvas id="graficoIVA"></canvas>
                    </div>
                </div>
                <!-- ganancias -->
                <div class="col-12 col-md-6 p-6 d-flex align-items-center justify-content-center">
                    <div class="card cont-dashboard">
                        <h3><b>Ganancias</b></h3>
                        <canvas id="graficoGanancias"></canvas>
                        <canvas id="graficoGananciaAnual"></canvas>
                    </div>
                </div>

                <!-- impuesto sobre la rente -->
                <div class=" col-12 col-md-6 p-6 d-flex align-items-center justify-content-center">
                    <div class="card cont-dashboard">
                        <h3><b>Impuesto Sobre Renta</b></h3>
                        <canvas id="graficoImpuestoRenta"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="Recursos/JS/Perfil/perfil.js"></script>