<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200&family=Raleway:ital,wght@0,400;1,300&display=swap');
			body{
				background-image:url("../pictures/Login/AdobeStock_527445015.jpeg");
				background-size: cover;
				font-family: 'Montserrat Alternates', sans-serif;
				font-family: 'Raleway', sans-serif;
			}
			.container{
				margin-top: 150px;
				background-color:#E4F2E7;
				border:1px solid #fff;
				border-radius:3px;
				font-weight: bolder;
			}
			.Title_Con{
				text-align: center;
				margin:20px 0px 30px 0px;
				font-weight: bolder;
			}
		</style>
</head>
<body>
<?php

	$busca=$_GET["cod"];


try{
$conexion=new PDO("mysql:host=localhost;dbname=proyecto", "root", "");//pdo es la clase
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//muestra el tipo de error
$conexion->exec("set character set utf8");
//echo "Conexión exitosa";
$sql="SELECT  * from inventario where cod_producto=:co";//consulta con marcador, el marcador es :codigo

$resultado=$conexion->prepare($sql);//el objeto $conexion llama al metodo prepare que recibe por parametro la instrucción sql, el metodo prepare devuelve un objeto de tipo PDO que se almacena en la variable resultado
$resultado->execute(array(":co"=>$busca));
	if($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		
		?>
    <div class="container">
    <h3 class="Title_Con">EDITAR INFORMACIÓN USUARIOS</h3>
    <div class="row">
        <div class="col"></div>
				<form action="actualizar_inventario.php" method="get" autocomplete="off">
					<table class="table table-hover" border="2px">
						<thead>
							<tr>
								<th>N. Código</th>
								<th>Nombre</th>
								<th>Materiales</th>
								<th>Precio</th>
								<th>Garantia</th>
								<th>categoria</th>
								<th>Cantidad</th>
								<th>Dimensiones</th>
								<th>Tapizado</th>
								<th>Relleno</th>
								<th>Descripcion</th>
								<th>Acciones</th>
							</tr>
						</thead>
							
						<tbody>
								<td><input class="form-control form-control-sm" type="number" readonly name="produ_cod" value="<?php echo $registro['cod_producto']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_name" value="<?php echo $registro['nombre']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_materials" value="<?php echo $registro['materiales']?>"></td>
								<td><input class="form-control form-control-sm" type="number" name="produ_price" value="<?php echo $registro['precio']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_garantee" value="<?php echo $registro['garantia']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_categori" value="<?php echo $registro['categoria']?>"></td>
								<td><input class="form-control form-control-sm" type="number" name="produ_canti" value="<?php echo $registro['cantidad']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_dimensiones" value="<?php echo $registro['dimensiones']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_tapizado" value="<?php echo $registro['tapizado']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_relleno" value="<?php echo $registro['relleno']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="produ_descri" value="<?php echo $registro['descripcion']?>"></td>

								<td colspan="5" align="center"><input class="btn btn-success btn-sm" type="submit" name="edita" id="ingresa" value="Guardar"></td>
								<td><a href="crud_inventario.php"><input class="btn btn-warning btn-sm" type="button" name="admin" value="Volver"></a></td>
							</tr>
						</tbody>
					</table>
				</form>
				<?php
					}else{
						echo "No existe producto con código $busca";
					}

					$resultado->closeCursor();

					}catch(Exception $e){
						die("Error: ". $e->GetMessage());

					}finally{
						$conexion=null;//vaciar memoria
					}


?>

</div>



</body>
</html>