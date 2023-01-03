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

$producto=$_GET['producto'];
$img_produ=$_GET['img_producto'];
$ruta1 = $_GET['img_ruta1'];
$ruta2 = $_GET['img_ruta2'];
$ruta3 = $_GET['img_ruta3'];


$sql = "SELECT * FROM inventario WHERE cod_producto = :produ ";
$query = $conexiondb -> prepare($sql);
$query -> execute(array(":produ"=>$producto));
if ($registro = $query -> fetch(PDO::FETCH_ASSOC)) {

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <TItle>IRIS FORNITURE l PEDIDO</TItle>
    <link rel="website icon" type="png" href="../pictures/icons/letra-mayuscula-i.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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

    body{
        background-color: #3B3C40;
    }


    /* ------------------- INICIO DE ESTILOS DEL HEADER ------------------- */
    .header{
        background-color: #3B3C40;
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



    /* ------------------- INICIO DE ESTILOS DEL MÓDULO COMPRAS ------------------- */

    .fotos_producto{
        margin: 5% 5% 2% 5%;
        display: inline-block;
        padding: 15px;
    }

    .fotos_producto img:hover{
        transform: scale(1.02);
    }
    
    .img1{
        width: 300px;
        height: 350px;
        transition: all 0.3s;
        margin: 6% 5% 2% 0%;
    }

    .img2{
        width: 300px;
        height: 350px;
        transition: all 0.3s;
    }

    .img3{
        width: 550px;
        height: 713px;
        transition: all 0.3s;
        margin: -134% 2% 0% 57%;
    }


    .pedidos_descripcion{
        width: 40%;
        float: right;
        color: #fff;
        margin: 9% 5% 0% 0%;
    }

    .pedidos_descripcion h5{
        font-size: 35px;
        margin-bottom: 5%;
    }

    .descripcion{
        height: 200px;
        font-size: 25px;
        overflow-y: scroll;
    }
    
    .descripcion::-webkit-scrollbar {
    -webkit-appearance: none;
    }

    .descripcion::-webkit-scrollbar:vertical {
        width:10px;
    }

    /* .descripcion::-webkit-scrollbar-button:increment,.descripcion::-webkit-scrollbar-button {
        display: none;
    } */


    .descripcion::-webkit-scrollbar-thumb {
        background-color: #797979;
        border-radius: 10px;
        /* border: 1px solid #f1f2f3; */
    }

    .descripcion::-webkit-scrollbar-track {
        border-radius: 10px;  
    }



    .pedidos_descripcion label{
        font-size: 2em;
    }


    .precio{
        float: right;
        margin-top: -10.5%;
        font-size: 25px;
    }

    .pedidos_info{
        width: 30%;
        margin-bottom: 4%;
        font-size: 1.5em;
        color: #fff;
        cursor:default;
        background: none;
        margin-left: 3%;
    }

    .cantidad{
        width: 25%;
        border: 2px solid #727273;
        border-radius: 20px;
        color: black;
        height: 2.5em;
        font-size: medium;
        text-align: center;
        font-weight: 500;
        background-color: #fff;
        margin-top: 2%;
    }


    .comprar{
        width: 25%;
        border: 2px solid #727273;
        border-radius: 20px;
        color: #fff;
        height: 2.5em;
        font-size: medium;
        background-color: black;
        transition: all 0.5s;
        margin-top: 2%;
    }

    .comprar_disabled{
        width: 25%;
        border: 2px solid #727273;
        border-radius: 20px;
        color: #fff;
        height: 2.5em;
        font-size: medium;
        background-color: #737373;
        transition: all 0.5s;
        margin-top: 2%;
    }

    .comprar_disabled:hover{
        color: #D90404;
    }

    .comprar:hover{
        color: #B8E468;
    }

    .cantidad_compra{
        width: 25%;
        border: 2px solid #727273;
        border-radius: 20px;
        text-align: center;
        height: 2.5em;
        font-size: medium;
        font-weight: bold;
        transition: all 0.5s;
        margin-top: 2%;
        margin-right: 5%;
    }

    


    /* ------------------- FIN DE ESTILOS DEL MÓDULO COMPRAS ------------------- */




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
        background-color: black;
    }

    .box__footer{
        display: flex;
        flex-direction: column;
        padding: 20px;
        background-color: black;
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
        background-color: black;
    }

    .box__footer h2{
        margin-bottom: 30px;
        color: #fff;
        font-weight: 500;
        background-color: black;
    }

    .box__footer a{
        margin-top: 10px;
        color: #fff;
        font-weight: 400;
        text-decoration: none;
        background-color: black;
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

    /* .box__copyright p{
        margin-top: 2px;
        color: #242424;
    }

    .box__copyright hr{
        border: none;
        height: 1px;
        background-color: #7a7a7a;
    } */

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

<!-- --------------------- MÓDULO DE PEDIDOS --------------------- -->

<div class="fotos_producto">
    <div>
        <img class="img1" src="<?php echo $ruta1?>" alt="">
    </div>

    <div>
        <img class="img2" src="<?php echo $ruta2?>" alt="">
    </div>
    
    <div>
        <img class="img3" src="<?php echo $ruta3?>" alt="">
    </div>
</div>


<div class="pedidos_descripcion">
    
        <h5><?php echo $registro['nombre'] ?></h5>
        <p class="precio"><?php echo $registro['precio'] ?>$</p>
        <div class="descripcion">
            <p><?php echo $registro['descripcion'] ?></p><br>
        </div>
    <form action="confirma_pedido.php" method="GET">
        <label for="dimen">Dimenciones: </label>
        <input id="dimen" class="pedidos_info" type="text" name="dimenciones" readonly value="<?php echo $registro['dimensiones'] ?>"><br>
        <?php
            $categoria = $registro['categoria'];
            if ($categoria == "camas") {
                ?>
                    <label for="tapi">Tapizado: </label>
                    <input id="tapi" class="pedidos_info" type="text" name="tapizado" readonly value="<?php echo $registro['tapizado'] ?>"><br>
                    <label for="relleno">Relleno: </label>
                    <input id="relleno" class="pedidos_info" type="text" name="relleno" readonly value="<?php echo $registro['relleno'] ?>"><br>
                <?php
            } else if ($categoria == "escritorios") {
                ?>
                    <label for="tapi">Material: </label>
                    <input id="tapi" class="pedidos_info" type="text" name="tapizado" readonly value="<?php echo $registro['materiales'] ?>"><br>
                <?php
            } else if ($categoria == "sillas") {
                ?>
                    <label for="relleno">Relleno: </label>
                    <input id="relleno" class="pedidos_info" type="text" name="relleno" readonly value="<?php echo $registro['relleno'] ?>"><br>
                    <label for="tapi">Tapizado: </label>
                    <input id="tapi" class="pedidos_info" type="text" name="tapizado" readonly value="<?php echo $registro['tapizado'] ?>"><br>
                    <label for="tapi">Material: </label>
                    <input id="tapi" class="pedidos_info" type="text" name="tapizado" readonly value="<?php echo $registro['materiales'] ?>"><br>
                <?php
            }
        ?>
        <label for="garantia">Garantia: </label>
        <input id="garantia" class="pedidos_info" type="text" name="garantia" readonly value="<?php echo $registro['garantia'] ?>"><br>
        <input class="cantidad" type="number" name="cantidad" value="1">
        <input type="text" hidden name="producto"  value="<?php echo $producto?>">
        <input type="text" hidden name="ruta"  value="<?php echo $img_produ?>">
        
        <?php 
            if (!isset($_SESSION['nombre_global'])) {
                ?>
                <a href="confirma_pedido.php"><input disabled class="comprar_disabled" type="submit" name="compra" value="Comprar"></a>
                <?php
            } else {
                ?>
                <a href="confirma_pedido.php"><input class="comprar" type="submit" name="compra" value="Comprar"></a>
                <?php
            }
        ?>
    </form>
    </div>

    <?php
    } else {
        ?>
        <script>alert ("Error 204! No se encontró información del produto.")</script>
        <script type="text/javascript">
            window.location.href = "../Error.php";
        </script>
        <?php
    }
    ?>
<!-- --------------------- FIN MÓDULO DE PEDIDOS --------------------- -->

<!-- --------------------- FOOTER --------------------- -->
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
            <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>

        <div class="line_right">

        </div>

    </div>
</footer>
</body>
</html>
