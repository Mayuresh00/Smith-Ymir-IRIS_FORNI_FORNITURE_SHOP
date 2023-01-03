<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        *{
            font-family: 'Montserrat';
        }

        body{
            background-image: url('../pictures/AdobeStock_514413625.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .delete_form{
            position: relative;
            width: 40%;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 10% 30% 0% 30%;
            padding-top: 3%;
        }

        .delete_form input{
            border: 0px solid #fff;
            border-radius: 10px;
            font-size: medium;
            background-color: rgba(255, 255, 255, 0.3);
            height: 1.5em;
            margin-bottom: 5%;
            transition: all 0.3s;
            margin: 0% 2% 5% 2%;
        }

        .delete_form input:hover{
            transform: scale(1.1);
        }

        .delete_form h4{
            margin-bottom: 5%;
        }

        #table_info{
            margin-bottom: 5%;
        }

    </style>
    <title>Eliminar Usuarios</title>
</head>
<body>
    <?php
    require("../conexion.php");

    $id_usu=$_GET["id"];
    $name_usu=$_GET["nomb"];
    $direc_usu=$_GET["direc"];
    $tele_usu=$_GET["tel"];
    $city_usu=$_GET["city"];
    $email_usu=$_GET["email"];

    if(isset($_POST['elimina'])){
        $conexiondb->query("DELETE FROM usuarios WHERE id_user='$id_usu'");
        ?>
            <script> alert ("Se eliminó correctamente!")</script>
        <?php
    }
    ?>
    <div class="delete_form">

    <h4>Información del usuario a eliminar</h4>

        <table id="table_info" class="table table_bordered">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><?php echo $id_usu?></td>
                <td><?php echo $name_usu?></td>
                <td><?php echo $direc_usu?></td>
                <td><?php echo $tele_usu?></td>
                <td><?php echo $city_usu?></td>
                <td><?php echo $email_usu?></td>
            </tr>
        </table>
            <form class="delete_form_son" method="post">
                <td><input class="opc_delete" type="submit" name="elimina" value="Eliminar"></td>
                <td><a href="crud_usuario.php"><input class="opc_back" type="button" name="volver" value="Volver"></a></td>
            </form>
    </div>
    


</body>
</html>
