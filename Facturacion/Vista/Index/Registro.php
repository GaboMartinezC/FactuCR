<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="Recursos/CSS/componentes.css">
        <link rel="stylesheet" href="Recursos/CSS/custom-login.css">
        <script src="Recursos/JS/Index/Registro.js" charset="utf-8"></script>
    </head>
    <body class="overflow-hidden" style="width: 100vw; height: 100vh;">
        <!--Fondo-->
        <div class="fondo">
            <div class="cuadros-fondo cuadro-fondo-1"></div>
            <div class="cuadros-fondo cuadro-fondo-2"></div>
            <div class="cuadros-fondo cuadro-fondo-3"></div>
            <div class="cuadros-fondo cuadro-fondo-4"></div>
        </div>

        <div class="container-fluid ">
            <!--Flecha Login-->
            <div class="row pt-3 p-3 p-md-none position-absolute" style="width: 100vw">
                <div class="col-3 offset-md-10 col-md-2" >
                    <a href="<?php echo DIRECCION_SITIO?>/index.php?metodo=Login&controlador=Index">
                        <span class="fTexto d-flex justify-content-center align-items-center">
                        <svg class="m-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.9132 9.50001C15.9132 9.64919 15.8539 9.79227 15.7484 9.89776C15.6429 10.0032 15.4998 10.0625 15.3507 10.0625H4.3334L8.43613 14.1645C8.48839 14.2168 8.52985 14.2788 8.55813 14.3471C8.58642 14.4154 8.60098 14.4886 8.60098 14.5625C8.60098 14.6364 8.58642 14.7096 8.55813 14.7779C8.52985 14.8462 8.48839 14.9082 8.43613 14.9605C8.38387 15.0127 8.32183 15.0542 8.25354 15.0825C8.18526 15.1108 8.11207 15.1253 8.03816 15.1253C7.96425 15.1253 7.89107 15.1108 7.82278 15.0825C7.7545 15.0542 7.69246 15.0127 7.64019 14.9605L2.57769 9.89798C2.52539 9.84574 2.4839 9.7837 2.4556 9.71541C2.42729 9.64713 2.41272 9.57393 2.41272 9.50001C2.41272 9.42609 2.42729 9.35289 2.4556 9.2846C2.4839 9.21632 2.52539 9.15428 2.57769 9.10204L7.64019 4.03954C7.74574 3.93399 7.8889 3.87469 8.03816 3.87469C8.18743 3.87469 8.33058 3.93399 8.43613 4.03954C8.54168 4.14509 8.60098 4.28824 8.60098 4.43751C8.60098 4.58677 8.54168 4.72993 8.43613 4.83548L4.3334 8.93751H15.3507C15.4998 8.93751 15.6429 8.99677 15.7484 9.10226C15.8539 9.20775 15.9132 9.35082 15.9132 9.50001Z" fill="black"/></svg>
                        Volver al login
                    </span>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center cont-form " style="margin-left:-30vmin;">
                <div class="w-25 bg-light border rounded login-contenedor rounded-4">
                    <form class="m-4" action="index.php?controlador=Usuario&metodo=Nuevo" method="post">
                        <div class="mb-3 pt-1">
                            <h4 class="fw-bolder">Registro de Usuario</h4>
                        </div>
                        <div class="d-flex gap-1 flex-column">
                            <!--TipooIdentificación-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <select class="form-select" aria-label="Default select example" name="tipoIdentificacion">
                                    <option value="01">Cédula Física</option>
                                    <option value="02">Cédula Jurídica</option>
                                    <option value="03">DIMEX</option>
                                    <option value="04">NITE</option>
                                </select>
                            </div>
                            <!--Identificación-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="identificacion" type="text" class="form-control input fTexto" placeholder="Identificación">
                                <span class="icono-input ms-2">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2256 8.375C14.2256 8.52418 14.1664 8.66726 14.0609 8.77275C13.9554 8.87824 13.8123 8.9375 13.6631 8.9375H10.8506C10.7015 8.9375 10.5584 8.87824 10.4529 8.77275C10.3474 8.66726 10.2881 8.52418 10.2881 8.375C10.2881 8.22582 10.3474 8.08274 10.4529 7.97725C10.5584 7.87176 10.7015 7.8125 10.8506 7.8125H13.6631C13.8123 7.8125 13.9554 7.87176 14.0609 7.97725C14.1664 8.08274 14.2256 8.22582 14.2256 8.375ZM13.6631 10.0625H10.8506C10.7015 10.0625 10.5584 10.1218 10.4529 10.2273C10.3474 10.3327 10.2881 10.4758 10.2881 10.625C10.2881 10.7742 10.3474 10.9173 10.4529 11.0227C10.5584 11.1282 10.7015 11.1875 10.8506 11.1875H13.6631C13.8123 11.1875 13.9554 11.1282 14.0609 11.0227C14.1664 10.9173 14.2256 10.7742 14.2256 10.625C14.2256 10.4758 14.1664 10.3327 14.0609 10.2273C13.9554 10.1218 13.8123 10.0625 13.6631 10.0625ZM16.4756 4.4375V14.5625C16.4756 14.8609 16.3571 15.147 16.1461 15.358C15.9352 15.569 15.649 15.6875 15.3506 15.6875H2.97565C2.67728 15.6875 2.39113 15.569 2.18015 15.358C1.96917 15.147 1.85065 14.8609 1.85065 14.5625V4.4375C1.85065 4.13913 1.96917 3.85298 2.18015 3.642C2.39113 3.43103 2.67728 3.3125 2.97565 3.3125H15.3506C15.649 3.3125 15.9352 3.43103 16.1461 3.642C16.3571 3.85298 16.4756 4.13913 16.4756 4.4375ZM15.3506 14.5625V4.4375H2.97565V14.5625H15.3506ZM9.70737 12.1719C9.74466 12.3164 9.72302 12.4698 9.6472 12.5984C9.57138 12.7269 9.44759 12.8201 9.30307 12.8574C9.15855 12.8947 9.00513 12.8731 8.87656 12.7973C8.748 12.7214 8.65482 12.5976 8.61752 12.4531C8.4326 11.7317 7.69924 11.1875 6.91244 11.1875C6.12565 11.1875 5.39299 11.7317 5.20737 12.4531C5.17007 12.5976 5.07689 12.7214 4.94832 12.7973C4.81976 12.8731 4.66634 12.8947 4.52182 12.8574C4.3773 12.8201 4.25351 12.7269 4.17769 12.5984C4.10187 12.4698 4.08023 12.3164 4.11752 12.1719C4.30005 11.4925 4.73153 10.9066 5.32619 10.5308C5.01019 10.2166 4.79456 9.81576 4.70666 9.37894C4.61876 8.94212 4.66253 8.48903 4.83244 8.07712C5.00234 7.66521 5.29072 7.31301 5.66102 7.06519C6.03132 6.81736 6.46687 6.68506 6.91244 6.68506C7.35802 6.68506 7.79357 6.81736 8.16387 7.06519C8.53417 7.31301 8.82255 7.66521 8.99245 8.07712C9.16235 8.48903 9.20613 8.94212 9.11823 9.37894C9.03032 9.81576 8.8147 10.2166 8.49869 10.5308C9.09401 10.9061 9.52587 11.4921 9.70807 12.1719H9.70737ZM6.91315 10.0625C7.13565 10.0625 7.35316 9.99652 7.53816 9.8729C7.72317 9.74929 7.86736 9.57359 7.95251 9.36802C8.03766 9.16245 8.05994 8.93625 8.01653 8.71802C7.97312 8.49979 7.86598 8.29934 7.70864 8.142C7.55131 7.98467 7.35085 7.87752 7.13262 7.83412C6.91439 7.79071 6.6882 7.81299 6.48263 7.89814C6.27706 7.98328 6.10136 8.12748 5.97774 8.31248C5.85413 8.49749 5.78815 8.715 5.78815 8.9375C5.78815 9.23587 5.90667 9.52202 6.11765 9.733C6.32863 9.94397 6.61478 10.0625 6.91315 10.0625Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <!--Correo-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="correoElectronico" type="text" class="form-control input " id="floatCorreo" placeholder="Correo">
                                <span class="icono-input ms-2">

                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5478 3.34613H1.77853C1.61532 3.34613 1.4588 3.41097 1.34339 3.52637C1.22798 3.64178 1.16315 3.7983 1.16315 3.96151V14.4231C1.16315 14.7495 1.29282 15.0625 1.52363 15.2933C1.75444 15.5242 2.0675 15.6538 2.39392 15.6538H15.9324C16.2588 15.6538 16.5718 15.5242 16.8027 15.2933C17.0335 15.0625 17.1631 14.7495 17.1631 14.4231V3.96151C17.1631 3.7983 17.0983 3.64178 16.9829 3.52637C16.8675 3.41097 16.711 3.34613 16.5478 3.34613ZM9.16315 9.89613L3.36084 4.5769H14.9655L9.16315 9.89613ZM6.91007 9.49998L2.39392 13.6392V5.36075L6.91007 9.49998ZM7.82084 10.3346L8.74392 11.1846C8.85745 11.2888 9.00595 11.3466 9.16007 11.3466C9.31419 11.3466 9.46269 11.2888 9.57622 11.1846L10.4993 10.3346L14.9608 14.4231H3.36084L7.82084 10.3346ZM11.4162 9.49998L15.9324 5.35998V13.64L11.4162 9.49998Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <!--Nombre Completo-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="nombre" type="text" class="form-control input" id="floatNombre" placeholder="Nombre Completo">
                                <span class="icono-input ms-2">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_177_95)"><path d="M10.8506 6.12499C10.8506 5.9758 10.9099 5.83273 11.0154 5.72724C11.1209 5.62175 11.264 5.56249 11.4131 5.56249H17.6007C17.7498 5.56249 17.8929 5.62175 17.9984 5.72724C18.1039 5.83273 18.1632 5.9758 18.1632 6.12499C18.1632 6.27417 18.1039 6.41724 17.9984 6.52273C17.8929 6.62822 17.7498 6.68749 17.6007 6.68749H11.4131C11.264 6.68749 11.1209 6.62822 11.0154 6.52273C10.9099 6.41724 10.8506 6.27417 10.8506 6.12499ZM17.6007 8.93749H11.4131C11.264 8.93749 11.1209 8.99675 11.0154 9.10224C10.9099 9.20773 10.8506 9.3508 10.8506 9.49999C10.8506 9.64917 10.9099 9.79224 11.0154 9.89773C11.1209 10.0032 11.264 10.0625 11.4131 10.0625H17.6007C17.7498 10.0625 17.8929 10.0032 17.9984 9.89773C18.1039 9.79224 18.1632 9.64917 18.1632 9.49999C18.1632 9.3508 18.1039 9.20773 17.9984 9.10224C17.8929 8.99675 17.7498 8.93749 17.6007 8.93749ZM17.6007 12.3125H13.1006C12.9515 12.3125 12.8084 12.3717 12.7029 12.4772C12.5974 12.5827 12.5381 12.7258 12.5381 12.875C12.5381 13.0242 12.5974 13.1672 12.7029 13.2727C12.8084 13.3782 12.9515 13.4375 13.1006 13.4375H17.6007C17.7498 13.4375 17.8929 13.3782 17.9984 13.2727C18.1039 13.1672 18.1632 13.0242 18.1632 12.875C18.1632 12.7258 18.1039 12.5827 17.9984 12.4772C17.8929 12.3717 17.7498 12.3125 17.6007 12.3125ZM10.8331 13.8594C10.8515 13.9309 10.8556 14.0054 10.8452 14.0786C10.8348 14.1517 10.8101 14.2221 10.7724 14.2857C10.7348 14.3493 10.6851 14.4048 10.626 14.4492C10.5669 14.4936 10.4996 14.5258 10.4281 14.5442C10.3822 14.5566 10.3349 14.5627 10.2874 14.5625C10.1627 14.5625 10.0415 14.5211 9.94282 14.4448C9.84417 14.3684 9.77371 14.2614 9.74253 14.1406C9.3094 12.4573 7.60924 11.1875 5.78745 11.1875C3.96565 11.1875 2.26549 12.4566 1.83237 14.1406C1.79507 14.2851 1.70189 14.4089 1.57333 14.4847C1.44476 14.5606 1.29134 14.5822 1.14682 14.5449C1.0023 14.5076 0.878512 14.4144 0.802692 14.2859C0.726871 14.1573 0.705229 14.0039 0.742525 13.8594C1.13557 12.3329 2.27815 11.0968 3.72799 10.4844C3.16973 10.0544 2.76006 9.46043 2.55643 8.78584C2.35281 8.11124 2.36543 7.38983 2.59255 6.72277C2.81966 6.05572 3.24987 5.47648 3.82284 5.06629C4.3958 4.65611 5.08279 4.43555 5.78745 4.43555C6.49211 4.43555 7.17909 4.65611 7.75206 5.06629C8.32502 5.47648 8.75523 6.05572 8.98234 6.72277C9.20946 7.38983 9.22209 8.11124 9.01846 8.78584C8.81483 9.46043 8.40516 10.0544 7.8469 10.4844C9.29745 11.0968 10.44 12.3329 10.8331 13.8594ZM5.78815 10.0625C6.23316 10.0625 6.66817 9.93053 7.03818 9.68329C7.40819 9.43606 7.69658 9.08466 7.86688 8.67352C8.03718 8.26239 8.08173 7.80999 7.99492 7.37353C7.9081 6.93707 7.69381 6.53616 7.37914 6.22149C7.06447 5.90683 6.66356 5.69253 6.2271 5.60572C5.79065 5.5189 5.33825 5.56346 4.92711 5.73376C4.51598 5.90405 4.16458 6.19244 3.91734 6.56245C3.67011 6.93246 3.53815 7.36748 3.53815 7.81249C3.53815 8.40922 3.7752 8.98152 4.19716 9.40348C4.61912 9.82543 5.19141 10.0625 5.78815 10.0625Z" fill="currentColor"/></g><defs><clipPath id="clip0_177_95"><rect width="18" height="18" fill="currentColor" transform="translate(0.163147 0.5)"/></clipPath></defs></svg>
                                </span>
                            </div>
                            <!--Número de Teléfono-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="telefono" type="text" class="form-control input" id="floatNumero" placeholder="Número de Teléfono">
                                <span class="icono-input ms-2">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.7985 11.6417L12.4861 10.1574L12.477 10.1532C12.305 10.0796 12.1174 10.0501 11.9312 10.0673C11.7449 10.0845 11.5659 10.1478 11.4103 10.2516C11.392 10.2637 11.3744 10.2769 11.3576 10.291L9.64619 11.75C8.56197 11.2233 7.4426 10.1124 6.91596 9.04225L8.37705 7.30482C8.39111 7.28725 8.40447 7.26967 8.41713 7.25068C8.51868 7.0955 8.58029 6.91763 8.59649 6.73288C8.61268 6.54814 8.58295 6.36225 8.50994 6.19178V6.18334L7.02143 2.86529C6.92492 2.64259 6.75897 2.45707 6.54836 2.33643C6.33774 2.21579 6.09376 2.1665 5.85283 2.19592C4.90008 2.32129 4.02554 2.78919 3.39255 3.51223C2.75957 4.23528 2.41142 5.16401 2.41315 6.12498C2.41315 11.7078 6.95533 16.25 12.5381 16.25C13.4991 16.2517 14.4278 15.9036 15.1509 15.2706C15.8739 14.6376 16.3418 13.763 16.4672 12.8103C16.4967 12.5694 16.4475 12.3255 16.327 12.1149C16.2065 11.9043 16.0211 11.7383 15.7985 11.6417ZM12.5381 15.125C10.152 15.1224 7.86433 14.1733 6.17706 12.4861C4.4898 10.7988 3.54075 8.51113 3.53815 6.12498C3.5355 5.43837 3.78287 4.77427 4.23405 4.25671C4.68524 3.73915 5.30939 3.40351 5.98994 3.31248C5.98967 3.31529 5.98967 3.31811 5.98994 3.32092L7.46651 6.6256L6.01315 8.36514C5.99839 8.38211 5.98499 8.40021 5.97307 8.41928C5.86726 8.58164 5.80519 8.76859 5.79287 8.96199C5.78055 9.1554 5.8184 9.34871 5.90276 9.52318C6.53979 10.8261 7.85252 12.129 9.16947 12.7653C9.34523 12.8489 9.53966 12.8854 9.73376 12.8714C9.92787 12.8573 10.115 12.7931 10.2769 12.6851C10.2949 12.673 10.3123 12.6598 10.3289 12.6458L12.0382 11.1875L15.3429 12.6676C15.3429 12.6676 15.3485 12.6676 15.3506 12.6676C15.2607 13.3491 14.9256 13.9745 14.4079 14.4268C13.8903 14.8791 13.2256 15.1273 12.5381 15.125Z" fill="black"/></svg>
                                </span>
                            </div>
                            <!--Fax-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="fax" type="text" class="form-control input" id="ubicacion" placeholder="Fax">
                                <span class="icono-input ms-2">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2571 5.5625H14.2256V3.3125C14.2256 3.16332 14.1664 3.02024 14.0609 2.91475C13.9554 2.80926 13.8123 2.75 13.6631 2.75H4.66315C4.51396 2.75 4.37089 2.80926 4.2654 2.91475C4.15991 3.02024 4.10065 3.16332 4.10065 3.3125V5.5625H3.06916C2.0869 5.5625 1.28815 6.31977 1.28815 7.25V12.875C1.28815 13.0242 1.34741 13.1673 1.4529 13.2727C1.55839 13.3782 1.70146 13.4375 1.85065 13.4375H4.10065V15.6875C4.10065 15.8367 4.15991 15.9798 4.2654 16.0852C4.37089 16.1907 4.51396 16.25 4.66315 16.25H13.6631C13.8123 16.25 13.9554 16.1907 14.0609 16.0852C14.1664 15.9798 14.2256 15.8367 14.2256 15.6875V13.4375H16.4756C16.6248 13.4375 16.7679 13.3782 16.8734 13.2727C16.9789 13.1673 17.0381 13.0242 17.0381 12.875V7.25C17.0381 6.31977 16.2394 5.5625 15.2571 5.5625ZM5.22565 3.875H13.1006V5.5625H5.22565V3.875ZM13.1006 15.125H5.22565V11.75H13.1006V15.125ZM15.9131 12.3125H14.2256V11.1875C14.2256 11.0383 14.1664 10.8952 14.0609 10.7898C13.9554 10.6843 13.8123 10.625 13.6631 10.625H4.66315C4.51396 10.625 4.37089 10.6843 4.2654 10.7898C4.15991 10.8952 4.10065 11.0383 4.10065 11.1875V12.3125H2.41315V7.25C2.41315 6.93992 2.70776 6.6875 3.06916 6.6875H15.2571C15.6185 6.6875 15.9131 6.93992 15.9131 7.25V12.3125ZM14.2256 8.65625C14.2256 8.82313 14.1762 8.98626 14.0834 9.12501C13.9907 9.26377 13.859 9.37191 13.7048 9.43577C13.5506 9.49963 13.381 9.51634 13.2173 9.48379C13.0536 9.45123 12.9033 9.37087 12.7853 9.25287C12.6673 9.13487 12.5869 8.98453 12.5544 8.82086C12.5218 8.65719 12.5385 8.48754 12.6024 8.33336C12.6662 8.17919 12.7744 8.04741 12.9131 7.9547C13.0519 7.86198 13.215 7.8125 13.3819 7.8125C13.6057 7.8125 13.8203 7.90139 13.9785 8.05963C14.1368 8.21786 14.2256 8.43247 14.2256 8.65625Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <!--Ubicación 1-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="ubicacion" id="inputUbicacion" hidden>
                                <span class="icono-input d-none ms-2">
                                   <svg width="19" height="19" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 4.5C8.44374 4.5 7.89997 4.66495 7.43746 4.97399C6.97495 5.28303 6.61446 5.72229 6.40159 6.2362C6.18872 6.75012 6.13302 7.31562 6.24154 7.86119C6.35006 8.40676 6.61793 8.9079 7.01126 9.30124C7.4046 9.69457 7.90574 9.96244 8.45131 10.071C8.99688 10.1795 9.56238 10.1238 10.0763 9.91091C10.5902 9.69804 11.0295 9.33755 11.3385 8.87504C11.6476 8.41253 11.8125 7.86876 11.8125 7.3125C11.8125 6.56658 11.5162 5.85121 10.9887 5.32376C10.4613 4.79632 9.74592 4.5 9 4.5ZM9 9C8.66624 9 8.33998 8.90103 8.06248 8.7156C7.78497 8.53018 7.56868 8.26663 7.44095 7.95828C7.31323 7.64993 7.27981 7.31063 7.34492 6.98329C7.41004 6.65594 7.57076 6.35526 7.80676 6.11926C8.04276 5.88326 8.34344 5.72254 8.67079 5.65742C8.99813 5.59231 9.33743 5.62573 9.64578 5.75345C9.95413 5.88118 10.2177 6.09747 10.4031 6.37498C10.5885 6.65248 10.6875 6.97874 10.6875 7.3125C10.6875 7.76005 10.5097 8.18928 10.1932 8.50574C9.87678 8.82221 9.44755 9 9 9ZM9 1.125C7.35954 1.12686 5.78681 1.77935 4.62683 2.93933C3.46685 4.09931 2.81436 5.67204 2.8125 7.3125C2.8125 9.52031 3.83273 11.8603 5.76562 14.0801C6.63414 15.0831 7.61165 15.9864 8.68008 16.773C8.77466 16.8393 8.88734 16.8748 9.00281 16.8748C9.11829 16.8748 9.23097 16.8393 9.32555 16.773C10.392 15.986 11.3676 15.0828 12.2344 14.0801C14.1645 11.8603 15.1875 9.52031 15.1875 7.3125C15.1856 5.67204 14.5331 4.09931 13.3732 2.93933C12.2132 1.77935 10.6405 1.12686 9 1.125ZM9 15.6094C7.83773 14.6953 3.9375 11.3379 3.9375 7.3125C3.9375 5.96984 4.47087 4.68217 5.42027 3.73277C6.36967 2.78337 7.65734 2.25 9 2.25C10.3427 2.25 11.6303 2.78337 12.5797 3.73277C13.5291 4.68217 14.0625 5.96984 14.0625 7.3125C14.0625 11.3365 10.1623 14.6953 9 15.6094Z" fill="black"/>
                                    </svg>
                                </span>
                                <select class="form-select" id="selectProvincia" ></select>
                                <select class="form-select" id="selectCanton" placeholder="Canton"></select>
                              </div>
                            <!--Ubicación 2-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <select class="form-select" id="selectDistrito" placeholder="Distrito"></select>
                                <select class="form-select" id="selectBarrio" placeholder="Barrio"></select>
                              </div>
                            <!--Contraseña-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input name="pass" type="password" class="form-control input" id="floatContraseña" placeholder="Contraseña">
                                <span class="icono-input ms-2">
                                    <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.0891 6.83333H11.7187V5.05556C11.7187 4.11256 11.3441 3.20819 10.6773 2.5414C10.0105 1.8746 9.10614 1.5 8.16314 1.5C7.22015 1.5 6.31578 1.8746 5.64899 2.5414C4.98219 3.20819 4.60759 4.11256 4.60759 5.05556V6.83333H2.23722C1.92289 6.83333 1.62143 6.9582 1.39917 7.18047C1.1769 7.40273 1.05203 7.70419 1.05203 8.01852V16.3148C1.05203 16.6291 1.1769 16.9306 1.39917 17.1529C1.62143 17.3751 1.92289 17.5 2.23722 17.5H14.0891C14.4034 17.5 14.7049 17.3751 14.9271 17.1529C15.1494 16.9306 15.2743 16.6291 15.2743 16.3148V8.01852C15.2743 7.70419 15.1494 7.40273 14.9271 7.18047C14.7049 6.9582 14.4034 6.83333 14.0891 6.83333ZM5.79277 5.05556C5.79277 4.42689 6.04251 3.82398 6.48704 3.37945C6.93157 2.93492 7.53448 2.68519 8.16314 2.68519C8.7918 2.68519 9.39472 2.93492 9.83925 3.37945C10.2838 3.82398 10.5335 4.42689 10.5335 5.05556V6.83333H5.79277V5.05556ZM14.0891 16.3148H2.23722V8.01852H14.0891V16.3148ZM9.05203 12.1667C9.05203 12.3425 8.9999 12.5143 8.90223 12.6605C8.80456 12.8067 8.66573 12.9206 8.50331 12.9879C8.34088 13.0552 8.16216 13.0728 7.98973 13.0385C7.8173 13.0042 7.65892 12.9195 7.5346 12.7952C7.41029 12.6709 7.32563 12.5125 7.29133 12.3401C7.25704 12.1677 7.27464 11.9889 7.34192 11.8265C7.4092 11.6641 7.52313 11.5253 7.6693 11.4276C7.81548 11.3299 7.98734 11.2778 8.16314 11.2778C8.39889 11.2778 8.62498 11.3714 8.79168 11.5381C8.95838 11.7048 9.05203 11.9309 9.05203 12.1667Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <!--Confirmar-->
                            <div class="mb-1 d-flex flex-nowrap align-items-center input-con-icono justify-content-start">
                                <input type="password" class="form-control input" id="floatConfirmar" placeholder="Confirmar Contraseña">
                                <span class="icono-input ms-2">
                                    <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.0891 6.83333H11.7187V5.05556C11.7187 4.11256 11.3441 3.20819 10.6773 2.5414C10.0105 1.8746 9.10614 1.5 8.16314 1.5C7.22015 1.5 6.31578 1.8746 5.64899 2.5414C4.98219 3.20819 4.60759 4.11256 4.60759 5.05556V6.83333H2.23722C1.92289 6.83333 1.62143 6.9582 1.39917 7.18047C1.1769 7.40273 1.05203 7.70419 1.05203 8.01852V16.3148C1.05203 16.6291 1.1769 16.9306 1.39917 17.1529C1.62143 17.3751 1.92289 17.5 2.23722 17.5H14.0891C14.4034 17.5 14.7049 17.3751 14.9271 17.1529C15.1494 16.9306 15.2743 16.6291 15.2743 16.3148V8.01852C15.2743 7.70419 15.1494 7.40273 14.9271 7.18047C14.7049 6.9582 14.4034 6.83333 14.0891 6.83333ZM5.79277 5.05556C5.79277 4.42689 6.04251 3.82398 6.48704 3.37945C6.93157 2.93492 7.53448 2.68519 8.16314 2.68519C8.7918 2.68519 9.39472 2.93492 9.83925 3.37945C10.2838 3.82398 10.5335 4.42689 10.5335 5.05556V6.83333H5.79277V5.05556ZM14.0891 16.3148H2.23722V8.01852H14.0891V16.3148ZM9.05203 12.1667C9.05203 12.3425 8.9999 12.5143 8.90223 12.6605C8.80456 12.8067 8.66573 12.9206 8.50331 12.9879C8.34088 13.0552 8.16216 13.0728 7.98973 13.0385C7.8173 13.0042 7.65892 12.9195 7.5346 12.7952C7.41029 12.6709 7.32563 12.5125 7.29133 12.3401C7.25704 12.1677 7.27464 11.9889 7.34192 11.8265C7.4092 11.6641 7.52313 11.5253 7.6693 11.4276C7.81548 11.3299 7.98734 11.2778 8.16314 11.2778C8.39889 11.2778 8.62498 11.3714 8.79168 11.5381C8.95838 11.7048 9.05203 11.9309 9.05203 12.1667Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>

                            <div class="w-100 mt-3">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="Recursos/JS/Index/Registro.js"></script>
    </body>
</html>
