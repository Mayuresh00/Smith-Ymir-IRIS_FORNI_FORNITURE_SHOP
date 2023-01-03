<?php
include("../conexion.php");

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
    <title>Actualizar invenatrio</title>
</head>
<body>
    <?php 
    require ("../conexion.php");
    $cod_producto=$_GET["produ_cod"];
    $nombre=$_GET["produ_name"];
    $materiales_producto=$_GET["produ_materials"];
    $precio_producto=$_GET["produ_price"];
    $garantia_producto=$_GET["produ_garantee"];
    $categoria_producto=$_GET["produ_categori"];
    $cantidad=$_GET['produ_canti'];
	$dimensiones=$_GET['produ_dimensiones'];
	$tapizado=$_GET['produ_tapizado'];
	$relleno=$_GET['produ_relleno'];
    $descripcion=$_GET['produ_descri'];


    try{
        $sql="UPDATE inventario SET cod_producto=:cod_produ, nombre=:nombre_produ, materiales=:materiales_produ, precio=:precio_produ, garantia=:garantia_produ, categoria=:categoria_produ, cantidad=:canti_produ, dimensiones=:dimen_produ, tapizado=:tapi_produ, relleno=:relle_produ, descripcion=:descri_produ WHERE cod_producto=:cod_produ";
		$resultado=$conexiondb->prepare($sql);//$conexiondb es el nombre de la conexión
		$resultado->execute(array(":cod_produ"=>$cod_producto, ":nombre_produ"=>$nombre, ":materiales_produ"=>$materiales_producto, ":precio_produ"=>$precio_producto, ":garantia_produ"=>$garantia_producto, ":categoria_produ"=>$categoria_producto, ":canti_produ"=>$cantidad, ":dimen_produ"=>$dimensiones, ":tapi_produ"=>$tapizado, ":relle_produ"=>$relleno, ":descri_produ"=>$descripcion));
        ?>
				<script> alert ("Producto actualizado correctamente!") </script>
		<?php
        require("crud_inventario.php");

        $resultado->closeCursor();
        }catch(Exception $e){
            die("Error: ". $e->GetMessage());
        }finally{
            $conexiondb=null;
        }

    ?>
</body>
</html>