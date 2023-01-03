<?php
$conexion = null;
$servidor = 'localhost';
$bd = 'proyecto';
$user = 'root';
$pass = '';
try{
	$conexiondb = new PDO('mysql:host='.$servidor.';dbname='.$bd, $user, $pass);
} catch (PDOException $e){
	echo "Error de conexion";
	exit;
}
return $conexion
?>