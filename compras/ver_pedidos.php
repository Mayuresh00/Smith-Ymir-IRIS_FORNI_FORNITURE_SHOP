<?php
include("../conexion.php");

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
    <link rel="website icon" type="png" href="../pictures/icons/letra-mayuscula-i.png">
    <title>IRIS FORNITURE I Pedidos</title>
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

			#volver{
				float: right;
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
			header("Location:ver_pedidos.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina=1;
	}
	
	$empieza=($pagina-1)*$registros;
	$sql_total="SELECT * FROM comprobante";

	$resultado=$conexiondb->prepare($sql_total);

	$resultado->execute(array());
	$numfilas=$resultado->rowCount();
	$totalpagina=ceil($numfilas/$registros);

	$registros=$conexiondb->query("SELECT * from comprobante LIMIT $empieza, $registros")->fetchALL(PDO::FETCH_OBJ);

	?>
	
<div class="container">
    <h3 class="Title_Con">PEDIDOS</h3>
    <div class="row">
        <div class="col"></div>
				<form action="" method="POST" autocomplete="off">
					<table class="table table-hover" border="2px">
						<thead>
							<tr>
								<th>N. Pedido</th>
								<th>Cod. Producto</th>
								<th>ID Cliente</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Dirección</th>
								<th>Ciudad</th>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Fecha</th>
								<th>Total</th>
								<th>Estado</th>
								<th>IMG</th>
								<th>Acciones</th>
							</tr>
						</thead>
							<?php
							foreach ($registros as $persona) :
							?> 
						<tbody>
							<tr>
								<td><?php echo $persona->cod_comprobante?></td>
								<td><?php echo $persona->cod_producto?></td>
								<td><?php echo $persona->id_user?></td>
								<td><?php echo $persona->nombre?></td>
								<td><?php echo $persona->apellido?></td>
								<td><?php echo $persona->direccion?></td>
								<td><?php echo $persona->ciudad?></td>
								<td><?php echo $persona->nombre_producto?></td>
								<td><?php echo $persona->cantidad_compra?></td>
								<td><?php echo $persona->fecha?></td>
								<td><?php echo $persona->total?></td>
								<?php
									if($persona->estado==1){
									$bodega="Bodega"
									?>
										<td><?php echo $bodega;?></td>
									<?php
									}else if($persona->estado==2){
									$despachado="Despachado"
									?>
										<td><?php echo $despachado;?></td>
									<?php
									} else if($persona->estado==3){
									$cancelado="Cancelado"
									?>
										<td><?php echo $cancelado;?></td>
									<?php
									}
									?>
								<td><input hidden type="text" name="ruta" value="<?php echo $persona->img_producto?>">...</td>
								
								<td><a href="ver_pedido_confirmado.php ?cod=<?php echo $persona->cod_comprobante?>"><input class="btn btn-success btn-sm" type="button" name="ver" value="Ver"></a></td>
							</tr>
								<?php
								endforeach;
								?>
							</tr>
						</tbody>
					</table>
					<td><a href="../usuarios/admin.php"><input id="volver" class="btn btn-warning btn-sm" type="button" name="admin" value="Volver" onmouseup="window.close()"></a></td>
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