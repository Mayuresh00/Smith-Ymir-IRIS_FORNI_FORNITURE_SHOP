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
			header("Location:crud_usuario.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina=1;
	}
	
	$empieza=($pagina-1)*$registros;
	$sql_total="SELECT * FROM usuarios";

	$resultado=$conexiondb->prepare($sql_total);

	$resultado->execute(array());
	$numfilas=$resultado->rowCount();
	$totalpagina=ceil($numfilas/$registros);

	$registros=$conexiondb->query("SELECT * from usuarios LIMIT $empieza, $registros")->fetchALL(PDO::FETCH_OBJ);
	
	if(isset($_POST['add'])){
		$id=$_POST['user_id'];
		$nombre=$_POST['user_name'];
		$apellido=$_POST['user_last_name'];
		$address=$_POST['user_address'];
		$tele=$_POST['user_tele'];
		$email=$_POST['user_email'];
		$departamento=$_POST['user_depart'];
		$city=$_POST['user_city'];
		$codigo_postal=$_POST['user_postal'];
		$password=$_POST['user_password'];
		$pass_cifrado=password_hash($password,PASSWORD_DEFAULT,array("cost"=>12));
		$rol=$_POST['user_role'];
		?>
		<input type="number" name="idd" value="<?php echo $id?>">
		<?php 
		$sql="INSERT INTO usuarios (id_user, nombre_usuario, apellido_usuario, direccion, telefono, cod_rol, departamento, ciudad, codigo_postal, email, contrasena) values (:id_usua, :name_usua, :last_name_usua , :address_usua, :tele_usua, :role_usua, :depart , :city_usua, :postal_cod ,:email_usua, :pass_usua)";
		$resultado=$conexiondb->prepare($sql);//$conexiondb es el nombre de la conexión
		$resultado->execute(array(":id_usua"=>$id,  "nomb_usua"=>$nombre, ":last_name_usua"=>$apellido, ":address_usua"=>$address, ":tele_usua"=>$tele, ":role_usua"=>$rol, ":depart"=>$departamento, ":city_usua"=>$city, ":postal_cod"=>$codigo_postal, ":email_usua"=>$email, ":password_usua"=>$pass_cifrado));

		header("Location:crud_usuario.php");
	}
	?>
	
<div class="container">
    <h3 class="Title_Con">TABLA DE USUARIOS</h3>
		<div class="row">
			<div class="col">
					<form action="" method="POST" autocomplete="off">
						<table align="center" class="table table-hover" border="2px">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Dirección</th>
									<th>Teléfono</th>
									<th>Departamento</th>
									<th>Ciudad</th>
									<th>Postal</th>
									<th>Email</th>
									<th>Contraseña</th>
									<th>Rol</th>
									<th>Acciones</th>
								</tr>
							</thead>
								<?php
								foreach ($registros as $persona) :
								?> 
							<tbody>
								<tr>
									<td><?php echo $persona->id_user?></td>
									<td><?php echo $persona->nombre_usuario?></td>
									<td><?php echo $persona->apellido_usuario?></td>
									<td><?php echo $persona->direccion?></td>
									<td><?php echo $persona->telefono?></td>
									<td><?php echo $persona->departamento?></td>
									<td><?php echo $persona->ciudad?></td>
									<td><?php echo $persona->codigo_postal?></td>
									<td><?php echo $persona->email?></td>
									<td><?php echo "*******"?></td>
									<?php
									if($persona->cod_rol==1){
									$aux="Administrador"
									?>
									<td><?php echo $aux;?></td>
									<?php
									}else if($persona->cod_rol==2){
									$aux="Cliente"
									?>
									<td><?php echo $aux;?></td>
									<?php
									}
									?>
									<td><a href="eliminar_usuario.php ?id=<?php echo $persona->id_user?> & nomb=<?php echo $persona->nombre_usuario?> &ape=<?php echo $persona->apellido_usuario?> & direc=<?php echo $persona->direccion?> & tel=<?php echo $persona->telefono?> & depart=<?php echo $persona->departamento ?> & city=<?php echo $persona->ciudad?> &postal=<?php echo $persona->codigo_postal ?> & email=<?php echo $persona->email?>"><input class="btn btn-danger btn-sm" type="button" name="elimina" id="elimina" value="Eliminar"></a></td>
									<td><a href="editar_usuario.php ?id=<?php echo $persona->id_user?> & nomb=<?php echo $persona->nombre_usuario?> &ape=<?php echo $persona->apellido_usuario?> & direc=<?php echo $persona->direccion?> & tel=<?php echo $persona->telefono?> & depart=<?php echo $persona->departamento ?> & city=<?php echo $persona->ciudad?> &postal=<?php echo $persona->codigo_postal ?> & email=<?php echo $persona->email?>"><input class="btn btn-primary btn-sm" type="button" name="Editar" value="Editar"></a></td>
								</tr>
									<?php
									endforeach;
									?>
								<tr>
									<td><input class="form-control form-control-sm" type="number" name="user_id"></td>
									<td><input class="form-control form-control-sm" type="text" name="user_name"></td>
									<td><input class="form-control form-control-sm" type="text" name="user_last_name"></td>
									<td><input class="form-control form-control-sm" type="text" name="user_address"></td>
									<td><input class="form-control form-control-sm" type="number" name="user_tele"></td>
									<td><input class="form-control form-control-sm" type="text" name="user_depart"></td>
									<td><input class="form-control form-control-sm" type="text" name="user_city"></td>
									<td><input class="form-control form-control-sm" type="number" name="user_postal"></td>
									<td><input class="form-control form-control-sm" type="text" name="user_email"></td>
									<td><input class="form-control form-control-sm" type="password" name="user_password"></td>
									<td>
										<select class="form-select form-select-sm" name="user_role">
												<?php
												$sql= "SELECT * FROM rol"; 
												$resultado=$conexiondb->prepare($sql);
												$resultado->execute(array());
												while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
												?>
												<option value="<?php echo $registro['cod_rol'];?>"><?php echo $registro['nombre']?></option>
												<?php
												}
												?>
										</select>
									</td>
									<td align="center"><input class="btn btn-success btn-sm" type="submit" name="add" value="Añadir"></td>
									<td><a href="../usuarios/admin.php"><input class="btn btn-warning btn-sm" type="button" name="admin" value="Volver" onmouseup="window.close()"></a></td>
								</tr>
							</tbody>
						</table>
					</form>
			</div>
		</div>
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