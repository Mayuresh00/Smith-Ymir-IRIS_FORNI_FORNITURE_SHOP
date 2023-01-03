<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuarios</title>
</head>
<body>
    <?php 
    require ("../conexion.php");
    $id=$_GET["user_id"];
    $nombre=$_GET["user_name"];
    $apellido=$_GET["user_ape"];
    $address=$_GET["user_address"];
    $tele=$_GET["user_tele"];
    $departamento=$_GET["user_depart"];
    $city=$_GET["user_city"];
    $codigo_postal=$_GET["user_postal"];
    $email=$_GET["user_email"];
    $contra_usuar=$_GET["user_password"];
    $pass_cifrado=password_hash($contra_usuar,PASSWORD_DEFAULT,array("cost"=>12));
    $rol_usuar=$_GET["user_role"];
    try{
        $sql="UPDATE usuarios SET id_user=:id_usua, nombre_usuario=:nomb_usua, apellido_usuario=:last_name_usua, direccion=:address_usua, telefono=:tele_usua, cod_rol=:role_usua, departamento=:depart ,ciudad=:city_usua, codigo_postal=:postal_cod, email=:email_usua, contrasena=:password_usua WHERE id_user=:id_usua";
		$resultado=$conexiondb->prepare($sql);//$conexiondb es el nombre de la conexión
		$resultado->execute(array(":id_usua"=>$id, "nomb_usua"=>$nombre, ":last_name_usua"=>$apellido, ":address_usua"=>$address, ":tele_usua"=>$tele, ":role_usua"=>$rol_usuar, ":depart"=>$departamento, ":city_usua"=>$city, ":postal_cod"=>$codigo_postal, ":email_usua"=>$email, ":password_usua"=>$pass_cifrado));
        ?>
				<script> alert ("Usuario actualizado correctamente!") </script>
		<?php
        require("crud_usuario.php");

        $resultado->closeCursor();
        }catch(Exception $e){
            die("Error: ". $e->GetMessage());
        }finally{
            $conexiondb=null;
        }

    ?>
</body>
</html>