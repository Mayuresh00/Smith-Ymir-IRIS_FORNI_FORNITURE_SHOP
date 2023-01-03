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



    if (isset($_GET['actualiza'])) {
        $id=$_SESSION['id_global'];
        $nombre=$_GET["name"];
        $apellido=$_GET["last_name"];
        $address=$_GET["address"];
        $tele=$_GET["phone"];
        $departamento=$_GET["town"];
        $city=$_GET["city"];
        $codigo_postal=$_GET["postal"];
        $email=$_GET["email"];
        $contra_usuar=$_GET["password"];
        $pass_cifrado=password_hash($contra_usuar,PASSWORD_DEFAULT,array("cost"=>12));

        $sql1="UPDATE usuarios SET id_user=:id_usua, nombre_usuario=:nomb_usua, apellido_usuario=:last_name_usua, direccion=:address_usua, telefono=:tele_usua, departamento=:depart ,ciudad=:city_usua, codigo_postal=:postal_cod, email=:email_usua, contrasena=:password_usua WHERE id_user=:id_usua";
		$resultado1=$conexiondb->prepare($sql1);//$conexiondb es el nombre de la conexión
		$resultado1->execute(array(":id_usua"=>$id, "nomb_usua"=>$nombre, ":last_name_usua"=>$apellido, ":address_usua"=>$address, ":tele_usua"=>$tele, ":depart"=>$departamento, ":city_usua"=>$city, ":postal_cod"=>$codigo_postal, ":email_usua"=>$email, ":password_usua"=>$pass_cifrado));
        ?>
				<script> alert ("Usuario actualizado correctamente!") </script>
		<?php
        require("editar_info.php");
    } else {

    }





?>