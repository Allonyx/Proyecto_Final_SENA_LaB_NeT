<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/gif" href="./css/img/icon_lab_net/logo_lab_net.jpg">
    <title>LaB-NeT I.E. Felipe de Restrepo</title>
</head>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style.css">
<body>
    <header>
        <div class="container__header">
            <div class="logo">
                <img src="./css/img/icon_lab_net/logo_IEFelipedeRestrepo.png" alt="">
            </div>
            <nav class="menu">
                <div class="container__titulos">
                    <h1>LaB - NeT</h1>
                    <h2>I.E. FELIPE DE RESTREPO</h2>
                    <h3>Formacion de Valores</h3>
                </div>
                <input type="checkbox" id="check-menu">
                <label for="check-menu" class = "icon"><i class='bx bx-category '></i></label>
                    <ul id="main-menu">
                        <li><a href="Index.php">INICIO</a>
                            <ul>
                                <li><a href="Index.php">Nosotros</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_login/Formulario_login_usuario.php">Login</a></li>
                            </ul>
                        </li>
                        <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_login/Formulario_login_usuario.php">ROLES</a>
                            <ul>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_login/Formulario_login_admin.php">Administrador</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_login/Formulario_login_auxiliar.php">Auxiliar</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_login/Formulario_login_usuario.php">Usuario</a></li>
                            </ul>
                        </li>
                        <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_registrar/Formulario_registrar_rol.php">REGISTRO</a>
                            <ul>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_registrar/Formulario_registrar_rol.php">Roles</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_registrar/Fomulario_registrar_reserva.php">Reservas</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_registrar/Formulario_resgistrar_ambientes.php">Amabientes</a></li>
                            </ul>
                        </li>
                        <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_buscar/Formulario_buscar_rol.php">BUSCAR</a>
                            <ul>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_buscar/Formulario_buscar_rol.php">Roles</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_buscar/Formulario_buscar_reserva.php">Reservas</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_buscar/Formulario_buscar_ambiente.php">Amabientes</a></li>
                            </ul>
                        </li>
                        <li><a href="#card-5">ACTUALIZAR</a>
                            <ul>
                            <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_actualizar">Roles</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_actualizar/">Reservas</a></li>
                                <li><a href="./Formularios_LaB-NeT/Formularios_LaB_NeT_actualizar/">Amabientes</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>
        </div>
    </header>
    <div class="container__all">
        <div class="buscar">
            <div class="container__buscar">
                <div class="cuadro_texto">
                    <input type="text" class="form-control" name="buscar" placeholder="  Buscar:">
                </div>
                <div class="lupa">
                    <img src="./css/img/icon_lab_net/lupa.png" alt="">
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="container__slider">
                <ul class="box_slider">
                    <li id="slide1">
                        <img src="./css/img/icon_lab_net/logo_lab_net.jpg"/>
                    </li>
                    <li id="slide2">
                        <img src="./css/img/icon_lab_net/intro_index2.png"/>
                    </li>
                    <li id="slide3">
                        <img src="./css/img/icon_lab_net/Membrete_pie_pagina_LaB_NeT.jpg" alt="">
                    </li>
                </ul>
                <ul class="correr__slider">
                    <li>
                        <a href="#slide1">1</a>
                    </li>
                    <li>
                        <a href="#slide2">2</a>
                    </li>
                    <li>
                        <a href="#slide3">3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <h4>DESARROLLADORES</h4>
                <p> Camilo ALejandro Silva Gomez</p>
                <p> Luis carlos Guerrero Castro</p>
            </div>
            <div class="box__footer">
                <h4>CONTACTO</h4>
                <p> Teléfono / 3137392733</p>
                <p>Correo / casilva@misena.edu.com</p>
                <p> Teléfono / 301 2585955</p>
                <p>Correo / lcguerrero28@hotmail.com</p>
            </div>
            <div class="box__footer">
                <h4>COMENTARIOS</h4>
                <input type="text" class="form-control" name="comentarios" placeholder="  Comentarios:">
            </div>
        </div>
    </footer>

</body>
</html>