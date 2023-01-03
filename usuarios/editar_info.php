<?php 
include("../conexion.php");
session_start();

if (!isset($_SESSION['nombre_global'])) {
    $_SESSION['cod_global']= null;
    $_SESSION['nombre_global']= null;
    $_SESSION['id_global']= null;
    header("Location:../Login/login.php");
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
        /* background-position: center; */
        }

        /* ------------------- INICIO DE ESTILOS DEL HEADER ------------------- */
    .header{
        background-color: #92A68D;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 70px;
        padding: 15px 10%;
        z-index: 2;
        flex-wrap: wrap;

        width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
        left: 0; /* Posicionamos la cabecera al lado izquierdo */
        top: 0; /* Posicionamos la cabecera pegada arriba */
        position: fixed; /* Hacemos que la cabecera tenga una posición fija */
    }

    .header .logo{
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
    }

    .logo a{
        text-decoration: none;
        color: #fff;
        font-size:1.7em;
    }

    .bold{
        font-weight: bold;
    }

    .header .logo:hover{
        transform: scale(1.2);
    }

    .logo_line1{
        display:absolute;
        border: 1px solid #fff;
        height: 40px;
        margin-right: 5px;
    }

    .logo_line2{
        display:absolute;
        border: 1px solid #fff;
        height: 40px;
        margin-left: 5px;
    }

    .header .nav_links li{
        display: inline-block;
        padding: 0 20px;
        font-size: 1.5em;
        color: #fff;
        transition: all 0.3s;
        cursor: pointer;
        margin-top: 5px;
    }

    .header .nav_links a{
        color: #fff;
        text-decoration: none;
    }

    .header .nav_links li:hover{
        transform: scale(1.1);
    }

    .header .boton{
    font-size: medium;
    cursor: pointer;
    width: 8%;
    background-color: rgba(255, 255, 255, 0.3);
    height: 1.5em;
    /* border: 1px solid rgb(90, 90, 90); */
    border-radius: 20px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    margin-top: -15px;
    margin-right: -7%;
    transition: all 0.3s;
    }

    .boton:hover{
        color: #fff;
        transform: scale(1.1);
    }

    .boton_cerrar{
        font-size: medium;
        cursor: pointer;
        width: 8%;
        background-color: rgba(255, 255, 255, 0.3);
        height: 1.5em;
        /* border: 1px solid rgb(90, 90, 90); */
        border-radius: 20px;
        color: #fff;
        text-align: center;
        text-decoration: none;
        margin-top: -15px;
        transition: all 0.3s
    }

    .boton_cerrar:hover{
        color: #fff;
        transform: scale(1.1);
    }

    /* ------------------- FIN DE ESTILOS DEL HEADER ------------------- */

    /* ------------------- INICIO DE TABLA ------------------- */

    .editar_info{
        margin: 10% 0% 1% 25%;
        font-size: 2em;
        color: #fff;
    }

    .info_container{
        margin: 0 auto;
        background-color:#fff;
        width: 60%;
        padding: 1%;
        border: 1px solid #fff;
        border-radius: 20px ;
        position: relative;
    }

    .info_container input:hover{
        transform: scale(1.1);
        font-weight: 500;
    }

    .title{
        font-size: 1em;
        font-weight: bold;
        margin: 0px 0px 40px 0px;
    }

    .id_user{
        position: absolute;
    }

    .id{
        border-bottom: 1px solid black;
        margin-right: 10px;
        transition: all 0.4s;
    }

    .name_user{
        margin-left: 25%;
        position: absolute;
    }

    .name{
        border-bottom: 1px solid black ;
        transition: all 0.4s;
    }

    .last_name_user{
        margin-left: 50%;
        margin-bottom: 5%;
    }

    .last_name{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .title_2{
        font-size: 1em;
        font-weight: bold;
        margin: 0px 0px 30px 0px;
    }

    .address_user{
        position: absolute;
    }

    .address{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .phone_user{
        margin-left: 25%;
        margin-bottom: 5%;
        position: absolute;
    }

    .phone{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .town_user{
        margin-left: 48%;
        position: absolute;
    }

    .town{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .city_user{
        margin-left: 75%;
    }

    .city{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .postal_user{
        margin-top: 5%;
        margin-bottom: 5%;
        position: absolute;
    }

    .postal{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .email_user{
        margin-left: 25%;
        margin-bottom: 5%;
        margin-top: 5%;
        position: absolute;
    }

    .email{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .password_user{
        margin-left: 49.5%;
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .password{
        border-bottom: 1px solid black;
        transition: all 0.4s;
    }

    .actualiza{
        background-color: #85A44B;
        border-radius: 20px ;
        width: 8%;
        height: 1.5em;
        color: #fff;
        font-weight: 500;
        transition: all 0.4s;
    }

    .volver{
        background-color: #E8A904;
        border-radius: 20px ;
        width: 8%;
        height: 1.5em;
        color: #fff;
        font-weight: 500;
        transition: all 0.4s;
        margin-left: 1%;
    }


    /* ------------------- FIN DE TABLA ------------------- */
</style>
</head>
<body>
<header class="header">
        <div class="logo">
            <div class="logo_line1"></div>
                <a href="../index.php"><p>IRIS</p></a><a href="../index.php"><p class="bold" >FORNITURE</p></a>
            <div class="logo_line2"></div>
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="../section/sillas.php">Sillas</a></li>
                <li><a href="../section/mesas.php">Mesas</a></li>
                <li><a href="../section/escritorios.php">Escritorios</a></li>
                <li><a href="../section/camas.php">Camas</a></li>
                <li><a href="../section/salas.php">Salas</a></li>
            </ul>
        </nav>
        <?php 
            if (!isset($_SESSION['nombre_global'])) {
                ?>
                    <a class="boton" href="../Login/login.php">Ingresar<button></button></a>
                <?php
            }else{
                ?>
                    <a class="boton" href="../usuarios/perfil.php"> <?php echo $_SESSION['nombre_global'];?><button></button></a>
                    <a class="boton_cerrar" href="../Login/cerrar_sesion.php">Cerrar sesion<button></button></a>
                <?php
            }
        ?>
    </header>
<!-- --------------------- FIN HEADER --------------------- -->
<?php
        $sql = "SELECT * FROM usuarios WHERE id_user = :id ";
        $query = $conexiondb -> prepare($sql);
        $query -> execute(array(":id"=>$_SESSION['id_global']));
        if ($registro = $query -> fetch(PDO::FETCH_ASSOC)) {}
?>


<p class="editar_info">Editar información</p>
<div class="info_container">
        <form action="actualiza_perfil.php" method="GET">
            <p class="title">Información actual, Sr.(a) <?php echo $_SESSION['nombre_global'] ?></p>
            <div class="id_user">
                <label for="id">Número de identificación:</label><br>
                <input disabled class="id" id="id" type="text" name="id" value="<?php echo $registro['id_user'] ?>">
            </div>
            
            <div class="name_user">
                <label for="name">Nombre:</label><br>
                <input class="name" id="name" type="text" name="name" value="<?php echo $registro['nombre_usuario'] ?>">
            </div>
            
            <div class="last_name_user">
                <label for="last_name">Apellido:</label><br>
                <input class="last_name" id="last_name" type="text" name="last_name" value="<?php echo $registro['apellido_usuario'] ?>">
            </div>

            <p class="title_2">Información adicional</p>
            
            <div class="address_user">
                <label for="address">Dirección:</label><br>
                <input class="address" id="address" type="text" name="address" value="<?php echo $registro['direccion'] ?>">
            </div>

            <div class="phone_user">
                <label for="phone">Telefono:</label><br>
                <input class="phone" id="phone" type="text" name="phone" value="<?php echo $registro['telefono'] ?>">
            </div>

            <div class="town_user">
                <label for="town">Departamento:</label><br>
                <input class="town" id="town" type="text" name="town" value="<?php echo $registro['departamento'] ?>">
            </div>

            <div class="city_user">
                <label for="city">Ciudad:</label><br>
                <input class="city" id="city" type="text" name="city" value="<?php echo $registro['ciudad'] ?>">
            </div>

            <div class="postal_user">
                <label for="postal">Código postal:</label><br>
                <input class="postal" id="postal" type="text" name="postal" value="<?php echo $registro['codigo_postal'] ?>">
            </div>

            <div class="email_user">
                <label for="email">Email:</label><br>
                <input class="email" id="email" type="text" name="email" value="<?php echo $registro['email'] ?>">
            </div>

            <div class="password_user">
                <label for="password">Contraseña:</label><br>
                <input class="password" id="password" type="password" name="password" value="<?php echo "*******"?>">
            </div>
            

            <input class="actualiza" type="submit" name="actualiza" value="Guardar">
            <input class="volver" type="button" name="volver" value="Volver" onmouseup="window.close()">
        </form>
</div>



</body>
</html>