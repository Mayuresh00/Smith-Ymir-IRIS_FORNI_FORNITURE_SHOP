<?php

require("../conexion.php");
ini_set("default_charset", "utf-8");

if(!isset($_SESSION["email"]) and !isset($_POST["send"])){
	header("Location:login.php");
	
}
else if(isset($_POST["send"])){


try{

$login=htmlentities(addslashes($_POST["email"]));
$password=htmlentities(addslashes($_POST["password_user"]));
$contador=0;


$sql="SELECT * FROM usuarios WHERE email= :email_user";
	$resultado=$conexiondb->prepare($sql);
	$resultado->execute(array(":email_user"=>$login));//marcador login se corresponde con lo que el usuario introdujo en el cuadro de texto login
	if ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
		
		if(password_verify($password, $registro['contrasena'])){
		
		$_SESSION['cod_global']=$registro['cod_rol'];
		$_SESSION['nombre_global']=$registro['nombre_usuario'];
		$_SESSION['id_global']=$registro['id_user'];
				$contador++;
			}
		}
		
		if ($contador>0){
			
				if($_SESSION['cod_global']==1){
					session_start();
				require("../usuarios/admin.php");
			
			}else if($_SESSION['cod_global']==2){
					session_start();
				require("../usuarios/cliente.php");
			}
		}else{
			?>
				<script> alert ("Usuario no registrado") </script>
			<?php
			require("login.php");
		}
		$resultado->closecursor();
	$conexiondb->exec("set character set utf8");
}catch(Exception $e){
	die("error" . $e->getMessage());

}
}

?>