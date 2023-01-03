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

if (isset($_GET["compra"])) {
    $producto_n=$_GET['producto'];
    $img_producto=$_GET['ruta'];
    $cantidad_compra=$_GET['cantidad'];
} else {
    $producto_n=null;
    $img_producto=null;
    $cantidad_compra=null;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <TItle>Pedido</TItle>
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

    .uno{
        width: 100%;
        margin-top: 3%;
        background-color: black;
        height: 1px;
    }

    .dos{
        width: 100%;
        background-color: black;
        height: 1px;
        
    }

    /* ------------------- INICIO DE ESTILOS DEL LA INFORMACIÓN DEL CLIENTE ------------------- */

    .info_user{
        margin-left: 10%;
        /* background-color: #7a7a7a; */
        display: inline-block;
    }

    .info_user h5{
        margin: 5% 0% 10% 0%;
    }


    .email{
        border-bottom: 1px solid black;
        margin-right: 30px;
        background: none;
    }

    .telefono{
        border-bottom: 1px solid black;
        margin-right: 30px;
        background: none;
        margin-bottom: 5%;
    }

    .metodo2{
        margin: -20% 0% 0% 50%;
        display: block;
    }

    .metodo2 h5{
        margin-bottom: 20%;
    }

    .info_envio{
        margin: 15% 0% 10% 0%;
    }

    .info_envio .nombre{
        background: none;
        border-bottom: 1px solid black;
        margin: 0% 5% 5% 0%;
    }

    .info_envio .apellido{
        background: none;
        border-bottom: 1px solid black;
        margin: 0% 0% 5% 0%;
    }

    .info_envio .direccion{
        background: none;
        width: 71.5%;
        border-bottom: 1px solid black;
        margin: 0% 0% 5% 0%;
    }

    .info_envio .codigo{
        background: none;
        border-bottom: 1px solid black;
        margin: 0% 4% 7% 0%;
    }

    .info_envio .info_adicional{
        background: none;
        width: 71.5%;
        border-bottom: 1px solid black;
        margin: 0% 4% 5% 0%;
    }

    .comprar{
        width: 20%;
        height: 2em;
        background-color: black;
        color: #fff;
        border-radius: 20px;
        transition: all 0.4s;
    }

    .comprar:hover{
        color: #B8E468;
    }

    .info_producto{
        width: 50%;
        float: right;
        margin: 0% 0% 0% 0%;
        /* background-color: #7a7a7a; */
        /* display: inline-block; */
        top: 0;
    }

    .info_producto h5{
        margin: 4% 0% 8.5% 0%;
    }

    .linea_uno{
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        margin: 0% 0% 1% 0%;
        width: 90%;
        padding: 2% 2% 2% 0%;
    }

    .info_producto .img_producto img{
        width: 200px;
        height: 200px;
        margin-right: 5%;
    }

    .nombre_producto{
        height: 1.5em;
        color: black;
        margin: 0% 40% 0% 0%;
        border: none;
        background: none;
    }

    .cantidad_producto{
        height: 1.5em;
        color: black;
        text-align: center;
        width: 5%;
        font-weight: bold;
        border: none;
    }

    .cantidad_compra{
        font-weight: bold;
        width: 76.5%;
        text-align: right;
    }

    .total{
        font-weight: bold;
        width: 81.5%;
        text-align: right;
    }

    /* ------------------- INICIO DE ESTILOS DEL LA INFORMACIÓN DEL CLIENTE ------------------- */

    /* ------------------- INICIO DE ESTILOS DEL FOOTER ------------------- */

    footer{
        width: 100%;
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
</head>
<body>
    <div class="uno"></div>
    <div class="info_user">
        <h5>Información de cliente</h5>

        <?php
        $sql = "SELECT * FROM usuarios WHERE id_user = :id ";
        $query = $conexiondb -> prepare($sql);
        $query -> execute(array(":id"=>$_SESSION['id_global']));
        if ($registro = $query -> fetch(PDO::FETCH_ASSOC)) {
        
        ?>

        <input class="email" type="text" name="email" value="<?php echo $registro['email'] ?>">
        <input class="telefono" type="number" name="telefono" value="<?php echo $registro['telefono'] ?>">

        <div class="metodo1">
            <h5 class="metodo">Método de envío</h5>
            <input type="checkbox" required id="direccion" name="direccion">
            <label for="direccion">Dirección </label><br>
            <!-- <input type="checkbox" id="recoger" name="recoger">
            <label for="recoger">Recoger en tienda </label> -->
        </div>
        
        <div class="metodo2">
            <h5 class="metodo">Método de pago</h5>
            <input type="checkbox" id="tarjeta" name="direccion">
            <label for="direccion">Tarjeta </label><br>
            <input type="checkbox" id="efectivo" name="recoger">
            <label for="recoger">Efectivo</label>
        </div>
        

        <div class="info_envio">
            <h5>Información del envío</h5>
            <form action="inserta_compra.php" method="GET">
                <input class="nombre" type="text" name="nombre" value="<?php echo $registro['nombre_usuario'] ?>">
                <input class="apellido" type="text" name="apellido" value="<?php echo $registro['apellido_usuario'] ?>">
                <input class="direccion" type="text" name="direccion" value="<?php echo $registro['direccion'] ?>"><br>
                <input class="codigo" type="number" name="codigo" value="<?php echo $registro['codigo_postal'] ?>"> 
                <input hidden type="number" name="telefono" value="<?php echo $registro['telefono'] ?>">
                <input hidden type="varchar" name="email" value="<?php echo $registro['email'] ?>">
                <input type="text" hidden name="estado" value="1">
                <select name="departamento" id="departamento">
                    <option value="<?php echo $registro['departamento'] ?>"><?php echo $registro['departamento'] ?></option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Antioquia">Antioquia</option>
                    <option value="Arauca">Arauca</option>
                    <option value="Atlántico">Atlántico</option>
                    <option value="Bolívar">Bolívar</option>
                    <option value="Boyacá">Boyacá</option>
                    <option value="Caldas">Caldas</option>
                    <option value="Caquetá">Caquetá</option>
                    <option value="Casanare">Casanare</option>
                    <option value="Huila">Huila</option>
                    <option value="Tolima">Tolima</option>
                </select>
                <select name="ciudad" id="ciudad">
                    <option value="<?php echo $registro['ciudad']?>"><?php echo $registro['ciudad'] ?></option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Antioquia">Antioquia</option>
                    <option value="Arauca">Arauca</option>
                    <option value="Atlántico">Atlántico</option>
                    <option value="Bolívar">Bolívar</option>
                    <option value="Boyacá">Boyacá</option>
                    <option value="Caldas">Caldas</option>
                    <option value="Caquetá">Caquetá</option>
                    <option value="Casanare">Casanare</option>
                    <option value="Neiva">Neiva</option>
                    <option value="Tolima">Tolima</option>
                </select>

                <input type="text" class="info_adicional" name="info_adicional" placeholder="Información adicional... (Casa, manzana, calle )"><br>
                <input type="submit" class="comprar" name="confirmar" value="Confirmar">

                <?php
                    $sql = "SELECT * FROM inventario WHERE cod_producto = :cod ";
                    $query = $conexiondb -> prepare($sql);
                    $query -> execute(array(":cod"=>$producto_n));
                    if ($registro1 = $query -> fetch(PDO::FETCH_ASSOC)) {
                
                
                    $canti= intval($cantidad_compra);
                    $total = $registro1['precio'] * $canti; 
                
                ?>

                <input hidden type="text" name="codigo" value="<?php echo $producto_n ?>">
                <input hidden type="text" name="nombre_producto" value="<?php echo $registro1['nombre'] ?>">
                <input hidden type="text" name="cantidad_producto" value="<?php echo $cantidad_compra?>">
                <input hidden type="text" name="producto_n" value="<?php echo $producto_n?>">
                <input hidden type="text" name="img_produ" value="<?php echo $img_producto?>">
                <input hidden readonly type="number" id="total" name="total" value="<?php echo $total?>">
                <input hidden type="text" name="fecha" value="<?php include("../fecha.php"); echo fechas() ?>">

                <?php 
                    }
                ?>

            </form>
                </div>
                </div>
                <?php 
                    }
                ?>

                <?php
                    $sql = "SELECT * FROM inventario WHERE cod_producto = :cod ";
                    $query = $conexiondb -> prepare($sql);
                    $query -> execute(array(":cod"=>$producto_n));
                    if ($registro1 = $query -> fetch(PDO::FETCH_ASSOC)) {
                
                ?>
                
                    <div class="info_producto">
                            <h5>Productos</h5>
                            <div class="linea_uno">
                                <div class="img_producto">
                                    <img src="<?php echo $img_producto ?>" alt="">
                                    <input type="text" hidden name="codigo" value="<?php echo $producto_n ?>">
                                    <input class="nombre_producto" type="text" name="nombre_prodcuto" value="<?php echo $registro1['nombre'] ?>">
                                    <input class="cantidad_producto" type="text" name="cantidad" value="X <?php echo $cantidad_compra?>">
                                </div>
                            </div>
                            
                                <label for="cantidad_compra">Cantidad: </label>
                                <input class="cantidad_compra" type="text" id="cantidad_compra" name="cantidad_compra" value="<?php echo $cantidad_compra ?>"><br>
                                <?php 
                                    $canti= intval($cantidad_compra);
                                    $total = $registro1['precio'] * $canti; 
                                ?>
                                <label for="total">Total: </label>
                                <input class="total" readonly type="number" id="total" name="total" value="<?php echo $total?>">
                    </div>
                
            
                <?php
                    }
                ?>
    <div class="dos"></div>





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

<!-- <div class="box__copyright">
    <hr>
    <p>Todos los derechos reservados © 2021 <b>MagtimusPro</b></p>
</div> -->
</footer>
</body>
</html>