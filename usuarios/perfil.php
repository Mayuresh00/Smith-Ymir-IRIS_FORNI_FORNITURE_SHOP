<?php 
include("../conexion.php");
session_start();

if (!isset($_SESSION['nombre_global'])) {
    $_SESSION['cod_global']= null;
    $_SESSION['nombre_global']= null;
    $_SESSION['id_global']= null;
    // header("Location:../Login/login.php");
} else {
    $_SESSION['cod_global'];
    $_SESSION['nombre_global'];
    $_SESSION['id_global'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="website icon" type="png" href="../pictures/icons/letra-mayuscula-i.png">
    <title>IRIS FORNITURE l PROFILE</title>
<style>
    *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            border: none;
            font-family: 'Montserrat';
        }

        body{
        background-image: url("../pictures/AdobeStock_514413625.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }

        .capa{
        width: 100%;
        height: 100vh;
        background: rgba(0,0,0,0.5);
        z-index: -1;
        top: 0;left: 0;
        }

        .header{
        width: 100%;
        height: 100px;
        position: fixed;
        top: 0;left: 0;
        }
        .container{
        width: 90%;
        max-width: 1200px;
        margin: auto;
        }
        .container .icon_menu, .logo{
        float: left;
        line-height:100px;
        }
        .container .icon_menu label{
        color: #fff;
        font-size: 25px;
        cursor: pointer;
        }

        .logo h1{
        color: #fff;
        font-weight: 400;
        font-size: 22px;
        margin: 36px 0px 0px 10px;
        transition: all 0.3s;
        }

        .logo a{
            text-decoration: none;
        }

        .logo h1:hover{
            transform: scale(1.1);
            cursor: pointer;
        }

        .container .menu{
        float: right;
        line-height: 100px;
        }

        .container .menu a{
        display: inline-block;
        padding: 15px;
        line-height: normal;
        text-decoration: none;
        color: #fff;
        transition: all 0.3s ease;
        border-bottom: 2px solid transparent;
        font-size: 15px;
        margin-right: 5px;
        font-weight: bolder;
        }

        .container .menu a:hover{
        border-bottom: 2px solid #c7c7c7;
        padding-bottom: 5px;
        }
        /* ------------FIN EDICIÓN MENÚ DEL HEADER--------------- */

        /*---------------EDICIÓN DE MENÚ LATERAL---------------*/


        #icon_menu{
        display: none;
        }

        .container_menu{
        position: absolute;
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        top: 0; left: 0;
        transition: all 500ms ease;
        opacity: 0;
        visibility:hidden;
        }

        #icon_menu:checked ~ .container_menu{
        opacity: 1;
        visibility: visible;
        }

        .conte_menu{
        width: 100%;
        max-width: 250px;
        background: #4D5940;
        height: 100vh;
        position: relative;
        transition: all 500ms ease;
        transform: translateX(-100%);
        }

        #icon_menu:checked ~ .container_menu .conte_menu{
        transform: translateX(0%);
        }

        .conte_menu nav{
        transform: translateY(30%);
        font-size: 20px;
        
        }

        .conte_menu nav a{
        display: block;
        text-decoration: none;
        padding: 20px;
        color: #c7c7c7;
        border-left: 5px solid transparent;
        transition: all 400ms ease;
        
        }

        .conte_menu nav a:hover{
        border-left: 5px solid #c7c7c7;
        background: #1f1f1f;
        
        }

        .conte_menu label{
        position: absolute;
        right: 5px;
        top: 10px;
        color: #fff;
        cursor: pointer;
        font-size: 15px;
        }
        /*------------FIN EDICIÓN DE MENÚ LATERAL-----------------*/
</style>
</head>
<body>
<header class="header"> 
    <div class="container">
        <div class="icon_menu">
            <label for="icon_menu">☰</label>
        </div>

        <div class="logo">
            <a href="../index.php"><h1>IrisForni</h1></a>
        </div>

        <nav class="menu">
            <a href="#">Bienvenido Sr.<?php echo $_SESSION['nombre_global']; ?>
            <a href="../Login/cerrar_sesion.php">Cerrar sesión</a>
        </nav>

    </div>
</header>

<div class="capa"></div>
<input type="checkbox" id="icon_menu">
<div class="container_menu">
    <div class="conte_menu">
        <nav>
            <?php 
                
                $admin = 1;
                $cliente = 2;

                if ($_SESSION['cod_global'] == $admin) {

                    ?>
                    <a href="../CRUDS/crud_usuario.php"target=_blank>Administrar Usuarios</a>
                    <a href="../CRUDS/crud_inventario.php"target=_blank>Administrar Inventario</a>
                    <a href="../index.php"target=_blank>Generar Pedido</a>
                    <a href="../compras/ver_pedidos.php"target=_blank>Consultar Pedidos</a>
                    <a href="mis_pedidos.php"target=_blank>Mis Pedidos</a>
                    <a href="editar_info.php"target=_blank>Editar información</a>
                    <?php
                } else if ($_SESSION['cod_global'] == $cliente){
                    
                    ?>
                    <a href="../index.php">Generar Pedido</a>
                    <a href="mis_pedidos.php"target=_blank>Mis Pedidos</a>
                    <a href="editar_info.php"target=_blank>Editar información</a>
                    <?php
                }

            ?>

        </nav>
        <label for="icon_menu">✖️</label>
    </div>
</div>

</body>
</html>