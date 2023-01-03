<?php
include("../conexion.php");
$_SESSION['cod_global']=$registro['cod_rol'];
$_SESSION['nombre_global']=$registro['nombre_usuario'];
$_SESSION['id_global']=$registro['id_user'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="website icon" type="png" href="../pictures/icons/letra-mayuscula-i.png">
    <title>IRIS FORNITURE</title>
</head>
<body>
    <div class="principal">
    <header class="header">
        <div class="logo">
            <div class="logo_line1"></div>
            <p>IRIS</p><p class="bold" >FORNITURE</p><br>
            <div class="logo_line2"></div>
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="../section/mesas.php"></a>Sillas</li>
                <li><a href="../section/mesas.php"></a>Mesas</li>
                <li><a href="../section/escritorios.php"></a>Escritorios</li>
                <li><a href="../section/camas.php">Camas</a></li>
                <li><a href="../section/salas.php"></a>Salas</li>
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
    <p class="title">HAZ LA CASA DE TUS SUEÑOS</p>
            <p class="descrip">Compra muebles online parea cada parte de tu hogar, con buenos precios, el mejor diseño y la mejor calidad.¡La elegancia es nuestra prioridad!</p>

            <div class="circulo">
                <div class="texto">
                    <a href="#">Descubre</a>
                </div>
            </div>
    </div>

    <div class="carrusel_title">
        <p class="primero">Nuevos productos</p>
        <p class="segundo">Creados recientemente</p>
    </div>
    
<!-- ---------------------- CARRUSEL ---------------------- -->

    <div class="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../pictures/carrusel_1.jpeg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                <img src="../pictures/siete.jpeg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                <img src="../pictures/carrusel_dos.jpg" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

<!-- ---------------------- FIN CARRUSEL ---------------------- -->

    <div class="line_one">
        
    </div>

    <div class="texto2">
        Algunos de nuestros productos.
    </div>

<!-- ------------------- SECCIÓN DE PRODUCTOS ------------------- -->


    <div class="row">
        <div class="column">
            <img src="../pictures/uno-1.jpg" alt="">
            <img src="../pictures/dos-2.jpg" alt="">
            <img src="../pictures/tres-1.jpg" alt="">
            <img src="../pictures/cuatro.jpg" alt="">
        </div>

        <div class="column">
            <img src="../pictures/cinco.jpg" alt="">
            <img src="../pictures/seis-1.jpg" alt="">
            <img src="../pictures/siete.jpg" alt="">
            <img src="../pictures/ocho.jpg" alt="">
        </div>
        
        <div class="column">
            <img src="../pictures/nueve.jpg" alt="">
            <img src="../pictures/diez.jpg" alt="">
            <img src="../pictures/once.jpg" alt="">
            <img src="../pictures/doce.jpg" alt="">
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
            <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>

        <div class="line_right">

        </div>

    </div>

<!-- <div class="box__copyright">
    <hr>
    <p>Todos los derechos reservados © 2021 <b>MagtimusPro</b></p>
</div> -->
</footer>



</body>
</html>