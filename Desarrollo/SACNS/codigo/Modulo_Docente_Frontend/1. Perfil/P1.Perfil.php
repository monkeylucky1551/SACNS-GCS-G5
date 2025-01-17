<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="shortcut icon" href="../Imagenes/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../0. SideBar/sidebar.css">
    <link href="P1.Perfil.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div id="logoprin" class='bx bxs-graduation icon' color="blue"></div>
            <div class="logo_name">E. SAN MARCOS</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list d-none" id="nav-list">
            <li>
                <a href="#" onclick="">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">Principal</span>
                </a>
                <span class="tooltip">Principal</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-notepad'></i>
                    <span class="links_name">Ingreso de Notas</span>
                </a>
                <span class="tooltip">Notas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-x-square'></i>
                    <span class="links_name">Registro de Faltas</span>
                </a>
                <span class="tooltip">Faltas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-file-find'></i>
                    <span class="links_name">Generar Observaciones</span>
                </a>
                <span class="tooltip">Observaciones</span>
            </li>
            <div id="hogar">
                <p>Tu cuenta</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bxs-wrench'></i>
                    <span class="links_name">Editar</span>
                </a>
                <span class="tooltip">Editar</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-exit'></i>
                    <span class="links_name">Salir</span>
                </a>
                <span class="tooltip">Salir</span>
            </li>
            <div id="hogar2">
                <p>Documentación</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Ayuda</span>
                </a>
                <span class="tooltip">Ayuda</span>
            </li>
        </ul>
    </div>
    <div>
        <div class="contenedor">
            <div class="main-body">
                <button class="btn1"><i class='bx bxs-user-pin'></i></button>
                <button class="btn1"><i class='bx bxs-wrench'></i> </button>
                <div class="perfil">
                    <img src="..\Imagenes\profile.jpg" alt="" id="perfil">
                    <div class="texto">
                        <h2>Esthera Thompson</h2>
                        <h3>ejemplo@hotmail.com</h3>
                    </div>
                    <button class="btn"><i class='bx bxs-user-pin'></i> General</button>
                    <button class="btn"><i class='bx bxs-wrench'></i> Editar</button>
                </div>
            </div>
        </div>
        <div class="datosper">
            <div class="row">
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="red">Información Personal</h4>
                        <p>Nombre Completo:</p>
                        <p>Edad:</p>
                        <p>Teléfono:</p>
                        <p>Correo electronico:</p>
                        <p>Dirección:</p>
                        <p>DNI:</p>
                        <p>Tipo de Usuario:</p>
                    </div>
                </div>
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="terques">Datos Academicos </h4>
                        <p>Código: </p>
                        <p>Correo Institucional:</p>
                        <p>Especialidad:</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../0. SideBar/sidebar.js"></script>

</body>
