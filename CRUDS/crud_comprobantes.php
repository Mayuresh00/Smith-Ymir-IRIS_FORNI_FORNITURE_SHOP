<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
			header("Location:crud_comprobantes.php");
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
    <h3 class="Title_Con">Comprobantes</h3>
    <div class="row">
        <div class="col"></div>
				<form action="" method="POST" autocomplete="off">
					<table class="table table-hover" border="2px">
						<thead>
							<tr>
								<th>N. Compra</th>
								<th>Fecha</th>
								<th>Cliente</th>
								<th>Valor</th>
								<th>Estado</th>
								<th>Acciones</th>
							</tr>
						</thead>
							<?php
							foreach ($registros as $persona) :
							?> 
						<tbody>
							<tr>
								<td><?php echo $persona->cod_comprobante?></td>
								<td><?php echo $persona->fecha?></td>
								<td><?php echo $persona->id_cliente?></td>
								<td><?php echo $persona->valor_total?></td>
								<?php
								if($persona->estado==1){
								$Bodega="Bodega"
								?>
								<td><?php echo $Bodega;?></td>
								<?php
								}else if($persona->estado==2){
								$Despachado="Cliente"
								?>
								<td><?php echo $Despachado;?></td>
								<?php
								}
								?>
								
								<td><a href="#?=<?php echo $persona->id_usuario?> & nomb=<?php echo $persona->nombre?>"><input class="btn btn-danger btn-sm" type="button" name="elimina" id="elimina" value="Cancelar"></a></td>
								<td><a href="#?id=<?php echo $persona->id_usuario?> & nomb=<?php echo $persona->nombre?> & rol=<?php echo $aux?>"><input class="btn btn-primary btn-sm" type="button" name="Editar" value="Editar"></a></td>
                                <td><a href="#?id=<?php echo $persona->id_usuario?> & nomb=<?php echo $persona->nombre?> & rol=<?php echo $aux?>"><input class="btn btn-success btn-sm" type="button" name="Ver" value="Ver"></a></td>
                                <td><a href="../usuarios/admin.php"><input class="btn btn-warning btn-sm" type="button" name="admin" value="Volver" onmouseup="window.close()"></a></td>
                            </tr>
								<?php
								endforeach;
								?>
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