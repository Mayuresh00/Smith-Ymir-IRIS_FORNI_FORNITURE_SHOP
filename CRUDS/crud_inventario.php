<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="website icon" type="png" href="../pictures/icons/letra-mayuscula-i.png">
    <title>IRIS FORNITURE I INVENTARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');
			body{
				background-image:url('../pictures/Login/AdobeStock_527445015.jpeg');
				background-size: cover;
				font-family: 'Montserrat';
			}
			.container{
				margin-top: 150px;
				background-color:#fff;
				border:1px solid #fff;
				border-radius:3px;
			}
			.Title_Con{
				text-align: center;
				margin:20px 0px 30px 0px;
				
			}
		</style>
</head>
<body>

<?php
	session_start();
	include("../conexion.php");

	$registros=5;
	if(isset($_GET["pagina"])){
		if($_GET["pagina"]==1){
			header("Location:crud_inventario.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina=1;
	}
	
	$empieza=($pagina-1)*$registros;
	$sql_total="SELECT * FROM inventario";

	$resultado=$conexiondb->prepare($sql_total);

	$resultado->execute(array());
	$numfilas=$resultado->rowCount();
	$totalpagina=ceil($numfilas/$registros);

	$registros=$conexiondb->query("SELECT * from inventario LIMIT $empieza, $registros")->fetchALL(PDO::FETCH_OBJ);
	
	if(isset($_POST['add'])){
		$cod_producto=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$materiales=$_POST['materiales'];
		$precio=$_POST['precio'];
		$garantia=$_POST['garantia'];
		$categoria=$_POST['categ'];
		$cantidad=$_POST['cantidad'];
		$dimensiones=$_POST['dimensiones'];
		$tapizado=$_POST['tapizado'];
		$relleno=$_POST['relleno'];
		$descripcion=$_POST['descripcion']; 

		$sql = "SELECT * FROM inventario WHERE cod_producto = :produ ";
		$query = $conexiondb -> prepare($sql);
		$query -> execute(array(":produ"=>$cod_producto));
		if ($registro = $query -> fetch(PDO::FETCH_ASSOC)) {

			$actual=$registro['cod_producto'];

			if ($cod_producto == $actual) {
				
				?>
				<script>alert("El producto ya existe!")</script>
				<?php
			}
		}else{
			$sql="INSERT INTO inventario (cod_producto, nombre, materiales, precio, garantia, categoria, cantidad, dimensiones, tapizado, relleno, descripcion) values (:cod_produ, :nombre_produ, :materiales_produ, :precio_produ, :garantia_produ, :cate_produ,:canti_produ, :dimen_produ, :tapi_produ, :relle_produ, :descri_produ )";
			$resultado=$conexiondb->prepare($sql);//$conexiondb es el nombre de la conexión
			$resultado->execute(array(":cod_produ"=>$cod_producto,  ":nombre_produ"=>$nombre, ":materiales_produ"=>$materiales, ":precio_produ"=>$precio, ":garantia_produ"=>$garantia, ":cate_produ"=>$categoria, ":canti_produ"=>$cantidad, ":dimen_produ"=>$dimensiones, ":tapi_produ"=>$tapizado, ":relle_produ"=>$relleno, ":descri_produ"=>$descripcion));

			header("Location:crud_inventario.php");
		}
		
	}
	?>
	
<div class="container">
    <h3 class="Title_Con">INVENTARIO</h3>
    <div class="row">
        <div class="col"></div>
				<form action="" method="POST" autocomplete="off">
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
								<th>Descripción</th>
								<th>Acciones</th>
							</tr>
						</thead>
							<?php
							foreach ($registros as $persona) :
							?> 
						<tbody>
							<tr>
								<td><?php echo $persona->cod_producto?></td>
								<td><?php echo $persona->nombre?></td>
								<td><?php echo $persona->materiales?></td>
								<td><?php echo $persona->precio?></td>
								<td><?php echo $persona->garantia?></td>
								<td><?php echo $persona->categoria?></td>
								<td><?php echo $persona->cantidad?></td>
								<td><?php echo $persona->dimensiones?></td>
								<td><?php echo $persona->tapizado?></td>
								<td><?php echo $persona->relleno?></td>
								<td><?php echo "..."?></td>
								
								<td><a href="eliminar_inventario.php ?cod=<?php echo $persona->cod_producto?> & nomb=<?php echo $persona->nombre?> & materiales=<?php echo $persona->materiales?> & precio=<?php echo $persona->precio?> & garantia=<?php echo $persona->garantia?> & categoria=<?php echo $persona->categoria?>"><input class="btn btn-danger btn-sm" type="button" name="elimina" id="elimina" value="Eliminar"></a></td>
								<td><a href="editar_inventario.php ?cod=<?php echo $persona->cod_producto?> & nomb=<?php echo $persona->nombre?>"><input class="btn btn-primary btn-sm" type="button" name="Editar" value="Editar"></a></td>
							</tr>
								<?php
								endforeach;
								?>
						
								<td><input class="form-control form-control-sm" type="number" name="codigo"></td>
								<td><input class="form-control form-control-sm" type="text" name="nombre"></td>
								<td><input class="form-control form-control-sm" type="text" name="materiales"></td>
								<td><input class="form-control form-control-sm" type="number" name="precio"></td>
								<td><input class="form-control form-control-sm" type="text" name="garantia"></td>
								<td><input class="form-control form-control-sm" type="text" name="categ"></td>
								<td><input class="form-control form-control-sm" type="number" name="cantidad"></td>
								<td><input class="form-control form-control-sm" type="text" name="dimensiones"></td>
								<td><input class="form-control form-control-sm" type="text" name="tapizado"></td>
								<td><input class="form-control form-control-sm" type="text" name="relleno"></td>
								<td><input class="form-control form-control-sm" type="text" name="descripcion"></td>
								
								<td colspan="5" align="center"><input class="btn btn-success btn-sm" type="submit" name="add" value="Añadir" >
								<a href="../usuarios/admin.php"><input class="btn btn-warning btn-sm" type="button" name="admin" value="Volver" onmouseup="window.close()"></a></td>
							</tr>
						</tbody>
					</table>
				</form>
</div>

<table border="0" align="center">
	<tr><?php for($i=1; $i<=$totalpagina; $i++){?>
		<td><?php echo " <a href='?pagina=" . $i . "'>" . $i . "  </a>  ";?></td>
		<?php
		$conexiondb=null;//vaciar los datos de conexión 
		}
		?>
	</tr>
</table>
</body>
</html>