<?php
include("../conexion.php");
session_start();

if (!isset($_SESSION['nombre_global'])) {
    $_SESSION['cod_global']= null;
    $_SESSION['nombre_global']= null;
    $_SESSION['id_global']= null;
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
    <title>IRIS FORNITURE l CAMAS</title>
<style>
    @import url("./node_modules/bootstrap/scss/bootstrap.scss");/*# sourceMappingURL=Styles.css.map */

    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');


    *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        border: none;
        font-family: 'Montserrat';
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
        color: #fff;
        font-size:1.7em;
        text-decoration: none;
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
        text-decoration: none;
        color: #fff;
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

    /* ------------------- INICIO DE ESTILOS DE LAS CARTAS ------------- */

    .row{
        margin: 0 auto;
        margin-top: 5%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        width: 90%;
        /* background-color: red; */
    }

    .column{
        margin: 10% 10% 10% 10%;
    }


    .row img{
        width: 290px;
        height: 390px;
        margin: 40px 10px 10px 10px;
        cursor: pointer;
        transition: all 0.3s;
        object-fit: cover;
    }

    .row img:hover{
        transform: scale(1.1);
        /* box-shadow: #7a7a7a; */
    }

    /* ------------------- FIN DE ESTILOS DE LAS CARTAS ---------------- */

    /* ------------------- INICIO DE ESTILOS DEL FOOTER ---------------- */

    footer{
        padding: 10px 0px;
        background-color: black;
        margin-top: 10%;

        /*background-color: #d0f0f8;
        -webkit-mask-image: url("../Images/background-footer.svg");
        mask-image: url("../Images/background-footer.svg");
        -webkit-mask-size: cover;
        mask-size: cover;*/
    }

    .container__footer{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1500px;
        margin: auto;
    }

    .box__footer{
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .box__footer .logo img{
        width: 180px;
    }

    .box__footer .terms{
        max-width: 350px;
        margin-top: 10px;
        font-weight: 300;
        color: #fff;
        font-size: 18px;
    }

    .box__footer h2{
        margin-bottom: 30px;
        color: #fff;
        font-weight: 500;
    }

    .box__footer a{
        margin-top: 10px;
        color: #fff;
        font-weight: 400;
        text-decoration: none;
    }

    .box__footer a:hover{
        opacity: 0.8;
    }

    .box__footer a .fab{
        font-size: 20px;
    }

    /* .box__copyright{
        max-width: 1200px;
        margin: auto;
        text-align: center;
        padding: 0px 40px;
    } */

    .box__copyright p{
        margin-top: 2px;
        color: #242424;
    }

    .box__copyright hr{
        border: none;
        height: 1px;
        background-color: #7a7a7a;
    }

    .line_right{
        margin: 20px 0px 20px 0;
        border-right: 2px solid #fff;
        max-height: 165px;
    }

    .line_left{
        margin: 25px 0px 20px 0px ;
        max-height: 165px;
        border-left: 2px solid #fff;
    }

    .logo_footer{
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        color: #fff;
        font-size: 1.5em;
    }

    .bold_footer{
        font-weight: bold;
    }

    .logo_footer:hover{
        transform: scale(1.1);
    }

    .logo_line1_footer{
        display:absolute;
        border: 1px solid #fff;
        height: 40px;
        margin-right: 5px;
    }

    .logo_line2_footer{
        display:absolute;
        border: 1px solid #fff;
        height: 40px;
        margin-left: 5px;
    }
    /* ------------------- FIN DE ESTILOS DEL FOOTER ------------------- */
    </style>
    <title>Camas</title>
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
                <li><a href="sillas.php">Sillas</a></li>
                <li><a href="mesas.php">Mesas</a></li>
                <li><a href="escritorios.php">Escritorios</a></li>
                <li><a href="camas.php">Camas</a></li>
                <li><a href="salas.php">Salas</a></li>
            </ul>
        </nav>
        <?php 
            if (!isset($_SESSION['nombre_global'])) {
                ?>
                    <a class="boton" href="../Login/login.php">Ingresar<button></button></a>
                <?php
            }else{
                ?>
                    <a class="boton" href="../usuarios/perfil.php"> <?php echo $_SESSION['nombre_global']?><button></button></a>
                    <a class="boton_cerrar" href="../Login/cerrar_sesion.php">Cerrar sesion<button></button></a>
                <?php
            }
        ?>
    </header>


<!-- ------------------- SECCIÓN DE PRODUCTOS ------------------- -->

<div class="row" id="container_card">
        <div class="column">
            <a href="../compras/pedido.php ?producto=<?php echo "1" ?> & img_ruta1=<?php echo "../pictures/section/camas/foto1.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/foto2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/foto3.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/foto1.jpg" ?>"><img src="../pictures/section/camas/foto1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "2" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama8.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama9.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama10.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama7.jpg" ?>"><img src="../pictures/section/camas/cama7.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "3" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama12.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama13.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama11.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama11.jpg" ?>"><img src="../pictures/section/camas/cama11.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "4" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama16.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama17.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama15.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama15.jpg" ?>"><img src="../pictures/section/camas/cama15.jpg" alt=""></a>
        </div>

        <div class="column">
            <a href="../compras/pedido.php ?producto=<?php echo "5" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama_azul.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama_azul_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama_azul_3.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama_azul.jpg" ?>"><img src="../pictures/section/camas/cama_azul.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "6" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama6_1.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama6_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama6_4.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama6_1.jpg" ?>"><img src="../pictures/section/camas/cama6_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "7" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama7_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama7_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama7_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama7_1.jpg" ?>"><img src="../pictures/section/camas/cama7_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "8" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama8_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama8_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama8_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama8_1.jpg" ?>"><img src="../pictures/section/camas/cama8_1.jpg" alt=""></a>
        </div>
        
        <div class="column">
            <a href="../compras/pedido.php ?producto=<?php echo "9" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama9_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama9_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama9_1.jpg"?> & img_producto=<?php echo "../pictures/section/camas/cama9_1.jpg" ?>"><img src="../pictures/section/camas/cama9_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "10" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama10_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama10_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama10_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama9_1.jpg" ?>"><img src="../pictures/section/camas/cama10_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "11" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama11_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama11_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama11_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama11_1.jpg" ?>"><img src="../pictures/section/camas/cama11_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "12" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama12_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama12_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama12_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama12_1.jpg" ?>"><img src="../pictures/section/camas/cama12_1.jpg" alt=""></a>
        </div>

        <div class="column">
            <a href="../compras/pedido.php ?producto=<?php echo "13" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama13_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama13_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama13_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama13_1.jpg" ?>"><img src="../pictures/section/camas/cama13_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "14" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama14_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama14_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama14_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama14_1.jpg" ?>"><img src="../pictures/section/camas/cama14_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "15" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama15_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama15_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama15_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama15_1.jpg" ?>"><img src="../pictures/section/camas/cama15_1.jpg" alt=""></a>
            <a href="../compras/pedido.php ?producto=<?php echo "16" ?> & img_ruta1=<?php echo "../pictures/section/camas/cama16_3.jpg" ?> & img_ruta2=<?php echo "../pictures/section/camas/cama16_2.jpg" ?> & img_ruta3=<?php echo "../pictures/section/camas/cama16_1.jpg" ?> & img_producto=<?php echo "../pictures/section/camas/cama16_1.jpg" ?>"><img src="../pictures/section/camas/cama16_1.jpg" alt=""></a>
        </div>
</div>

<!-- ------------------- FIN SECCIÓN DE PRODUCTOS ------------------- -->

<footer>

    <div class="container__footer">
        <div class="box__footer">
            <div class="logo_footer">
                <div class="logo_line1_footer"></div>
                <p>IRIS</p><p class="bold_footer" >FORNITURE</p><br>
                <div class="logo_line2_footer"></div>
            </div>
            <div class="terms">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae.</p>
            </div>
        </div>

        <div class="line_left">

        </div>

        <div class="box__footer">
            <h2>Proveedores</h2>
            <a href="#">Aglomaderas sas</a>
            <a href="#">Maderas Profoca</a>
            <a href="#">Madecentro</a>
        </div>

        <div class="box__footer">
            <h2>Compañia</h2>
            <a href="#">Acerca de</a>
            <a href="#">Trabajos</a>
            <a href="#">Servicios</a>              
        </div>

        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>

        <div class="line_right">

        </div>

    </div>
</footer>



</body>
</html>