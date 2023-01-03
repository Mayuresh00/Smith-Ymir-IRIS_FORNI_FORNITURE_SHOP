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

	$busca=$_GET["id"];


try{
$conexion=new PDO("mysql:host=localhost;dbname=proyecto", "root", "");//pdo es la clase
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//muestra el tipo de error
$conexion->exec("set character set utf8");
//echo "Conexión exitosa";

$sql="SELECT  * from usuarios where id_user=:co";//consulta con marcador, el marcador es :codigo
$resultado=$conexion->prepare($sql);//el objeto $conexion llama al metodo prepare que recibe por parametro la instrucción sql, el metodo prepare devuelve un objeto de tipo PDO que se almacena en la variable resultado
$resultado->execute(array(":co"=>$busca));
	if($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		
		?>
    <div class="container">
    <h3 class="Title_Con">EDITAR INFORMACIÓN USUARIOS</h3>
    <div class="row">
        <div class="col"></div>
				<form action="actualizar_usuarios.php" method="get" autocomplete="off">
					<table class="table table-hover" border="2px">
						<thead>
							<tr>
								<th>Identificación</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Departamento</th>
								<th>Ciudad</th>
								<th>C.Postal</th>
								<th>Email</th>
								<th>Contraseña</th>
								<th>Rol</th>
								<th>Acciones</th>
							</tr>
						</thead>
							
						<tbody>
								<td><input class="form-control form-control-sm" type="number" readonly name="user_id" value="<?php echo $registro['id_user']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="user_name" value="<?php echo $registro['nombre_usuario']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="user_ape" value="<?php echo $registro['apellido_usuario']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="user_address" value="<?php echo $registro['direccion']?>"></td>
								<td><input class="form-control form-control-sm" type="number" name="user_tele" value="<?php echo $registro['telefono']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="user_depart" value="<?php echo $registro['departamento']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="user_city" value="<?php echo $registro['ciudad']?>"></td>
								<td><input class="form-control form-control-sm" type="number" name="user_postal" value="<?php echo $registro['codigo_postal']?>"></td>
								<td><input class="form-control form-control-sm" type="text" name="user_email" value="<?php echo $registro['email']?>"></td>
								<td><input class="form-control form-control-sm" type="password" name="user_password" placeholder="ingrese una contraseña"></td>
							
								<td><select class="form-select form-select-sm" name="user_role">
											<?php
											$sql= "SELECT * FROM rol"; 
											$resultado=$conexion->prepare($sql);
											$resultado->execute(array());
											while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
											?>
											<option value="<?php echo $registro['cod_rol'];?>"><?php echo $registro['nombre']?></option>
											<?php
											}
											?>
										</select>
							</td>

								<td colspan="5" align="center"><input class="btn btn-success btn-sm" type="submit" name="edita" id="ingresa" value="Guardar"></td>
								<td><a href="crud_usuario.php"><input class="btn btn-warning btn-sm" type="button" name="admin" value="Volver"></a></td>
							</tr>
						</tbody>
					</table>
				</form>
				<?php
					}else{
						echo "No existe usuario con cédula $busca";
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