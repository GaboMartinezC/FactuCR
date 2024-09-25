<html lang="en" class="h-100 w-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Recursos/CSS/componentes.css">
    <link rel="stylesheet" href="./Recursos/CSS/custom-login.css">
</head>
<body class="h-100 w-100">
<div class="fondo">
    <div class="cuadros-fondo cuadro-fondo-1"></div>
    <div class="cuadros-fondo cuadro-fondo-2"></div>
    <div class="cuadros-fondo cuadro-fondo-3"></div>
    <div class="cuadros-fondo cuadro-fondo-4"></div>
</div>
<section class="container-fluid">
    <div class="d-flex justify-content-center align-items-center cont-form" style="margin-left:-30vw;">
        <div class="w-25 bg-light border rounded login-contenedor">
            <form class="m-4" action="index.php?controlador=Usuario&metodo=ValidarUsuario" method="post">
                <div class="">
                    <h4>Inicio de sesión</h4>
                </div>
                <hr>
                <div>
                    <span class="form-label fTexto">Ingrese los siguientes datos</span>

                    <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-end">
                        <input name="correoElectronico" placeholder="Correo" type="text" class="form-control fTexto" style="font-size: .9em" id="input-correo">
                        <span class="icono-input me-2"> <i class="fa-regular fa-envelope"></i></span>
                    </div>

                    <div class="mb-1 mb-3 d-flex flex-nowrap align-items-center input-con-icono justify-content-end">
                        <input name="pass" placeholder="Contraseña" type="password" class="form-control fTexto" style="font-size: .9em" id="input-contra" >
                        <span class="icono-input me-2"><img class="svg" src="./Recursos/SVG/Iconos/IconoContraseña.svg" alt="UwU"></span>
                    </div>
                    <a class="" href=""><span class="form-label" style="font-family: var(--fuente) ;color:rgba(0,0,0,.5) ">
                            ¿Olvidó su contraseña?
                        </span></a>
                    <div class="w-100 mt-3">
                        <button class="btn btn-primary w-100" id="btn-login" onclick="console.log('boton presionado');">
                            Iniciar sesión
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="toast-registro mt-2 me-2 p-4 bg-light border rounded d-flex flex-column">
    <div class="fs-5 d-flex flex-row align-items-center">
        <div class="h-100 d-flex justify-content-center align-items-center p-1 me-1 mb-2" style="width: 1.5em; height: 1.25rem; border: .1rem solid black; border-radius: 50%">
            <i class="fa-solid fa-info"></i>
        </div>
        <strong>¿No tiene una cuenta?</strong>
    </div>
    <span>Registrese ahora para poder ingresar al sistema</span>
    <div class="w-100 mt-2">
        <a href="<?php echo DIRECCION_SITIO?>/index.php?metodo=Registro&controlador=Index">
            <div class="btn btn-primary w-100">
            Registrarse
        </div>
        </a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2dd8dc06b6.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="./Recursos/JS/Index/Login.js"></script>
</body>
</html>