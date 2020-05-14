<?php
$user = $_SESSION["usuarioactual"];
$con = Conect();
$qry = "SELECT * FROM usuarios where usuario ='$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
// $imagen_inicio = $usuario[7];
$page = "Inicio SantaFe DC";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
    <script src="tinymce/tinymce.min.js"></script>
    <script src="../../js/iconos.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor colorpicker'
            ],
            language: 'es_MX',
            toolbar: 'undo redo cut copy paste selectall |  fontsizeselect | bold italic underline forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | print link',
            fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 42pt'
        });
    </script>
    <style type="text/css">
        #register_form fieldset:not(:first-of-type) {
            display: none;
        }

        #color {
            color: #FF212D !important;
        }

        .fondo_imagen {
            background-image: url("../../images/background_admin_noticias.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: absolute;
            width: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top border border-light">

        <a class="navbar-brand mr-1" href="index.php">
            <img src="images/logo.png" class="img-fluid">
        </a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" style="margin-left: -26%;" id="sidebarToggle" href="#">
            <i id="color" class="fas fa-bars"></i>
        </button>

        <!-- Navbar -->
        <!-- Agregar icono de logout en este espacio -->
    </nav>

    <div id="wrapper" class="border">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav bg-dark menu_degrade">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i id="color" class="fas fa-fw fa-tachometer-alt"></i>
                    <span id="color_secciones">Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./agregar-publicacion.php">
                    <i id="color" class="fas fa-plus-square"></i>
                    <span id="color_secciones"> Agregar Publicación</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista-publicaciones.php">
                    <i id="color" class="fas fa-list-ol"></i>
                    <span id="color_secciones">Lista de Publicaciones</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./asesor.php">
                    <i id="color" class="fas fa-plus-square"></i>
                    <span id="color_secciones"> Agregar Asesor</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista_asesores.php">
                    <i id="color" class="fas fa-list-ol"></i>
                    <span id="color_secciones">Lista de Asesores</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="perfil.php">
                    <i id="color" class="fas fa-tools"></i>
                    <span id="color_secciones">Configuración</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../salir.php">
                    <i id="color" class="fas fa-sign-out-alt"></i>
                    <span id="color_secciones">Cerrar sesión</span></a>
            </li>
        </ul>

        <div id="content-wrapper" style="background: #c8cfda21;position: relative;">