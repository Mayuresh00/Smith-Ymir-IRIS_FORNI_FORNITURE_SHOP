<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Styles_sing.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>IRIS FORNITURE l REGISTRO</title>
    <link rel="website icon" type="png" href="../pictures/icons/letra-mayuscula-i.png">
</head>
<body>
    <div id="fondo">
        <div id="login">
        <p id="title">Registrarse</p>
        <div class="boton_volver">
          <a href="./login.php">Volver<button></button></a>
        </div>
        <form action="" method="POST">
            <input class="input_form" type="text" required name="nombre" placeholder="Nombre"><br>
            <input class="input_form" type="text" required name="apellido" placeholder="Apellido"><br>
            <input class="input_form" type="number" required name="id" placeholder="Número de identificación"><br>
            <input class="input_form" type="text" required name="email" placeholder="Correo electrónico"><br>
            <input class="input_form" type="password" required name="password" placeholder="Contraseña"><br>
            <input class="input_form" type="number" required name="telefono" placeholder="Teléfono"><br>
            <select class="input_ubication" required name="departamento" id="">
              <option value="">Departamento...</option>
              <option value="Amazonas">Amazonas</option>
              <option value="Antioquia">Antioquia</option>
              <option value="Atlántico">Atlántico</option>
              <option value="Bolívar">Bolívar</option>
              <option value="Boyacá">Boyacá</option>
              <option value="Caldas">Caldas</option>
              <option value="Caquetá">Caquetá</option>
              <option value="Casanare">Casanare</option>
              <option value="Huila">Huila</option>
              <option value="Tolima">Tolima</option>
              <option value="Arauca">Arauca</option>
            </select>
            <select class="input_ubication" required name="ciudad" id="">
              <option value="">Ciudad...</option>
              <option value="Ibagué">Ibagué</option>
              <option value="Cali">Cali</option>
              <option value="Bogotá">Bogotá</option>
              <option value="Manizales">Manizales</option>
              <option value="Armenia">Armenia</option>
              <option value="Popayán">Popayán</option>
              <option value="Neiva">Neiva</option>
              <option value="Cartagena">Cartagena</option>
              <option value="Santander">Santander</option>
              <option value="Santa Marta">Santa Marta</option>
              <option value="Antioquia">Antioquia</option>
              <option value="Medellín">Medellín</option>
              <option value="Montería">Montería</option>
              <option value="Cauca">Cauca</option>
              <option value="Aráuca">Aráuca</option>
            </select><br>
            <input class="input_ubication" type="text" required name="direccion" placeholder="Dirección">
            <input class="input_ubication" type="number" required name="codigo_postal" placeholder="Código postal"><br>
            <input class="send" name="send" type="submit" value="Registrarse">
        </form>

        </div>
    </div>


<?php
      include("../conexion.php");

      if(isset($_POST['send'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $id=$_POST['id'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $pass_cifrado=password_hash($password,PASSWORD_DEFAULT,array("cost"=>12));
        $telefono=$_POST['telefono'];
        $departamento=$_POST['departamento'];
        $ciudad=$_POST['ciudad'];
        $codigo_postal=$_POST['codigo_postal'];
        $direccion=$_POST['direccion'];
        $rol="2";


        $sql = "SELECT * FROM usuarios WHERE id_user = :user ";
        $query = $conexiondb -> prepare($sql);
        $query -> execute(array(":user"=>$id));
        if ($registro = $query -> fetch(PDO::FETCH_ASSOC)) {

          $actual=$registro['id_user'];

          if ($id == $actual) {
            
            ?>
              <script>alert("El usuario ya existe! Por favor inicie sesion.")</script>
            <?php


          }else { $sql = "INSERT INTO usuarios (id_user, nombre_usuario, apellido_usuario, direccion, telefono, cod_rol, departamento, ciudad, codigo_postal, email, contrasena) VALUES (:id_usua, :name_usua, :last_name_usua , :address_usua, :tele_usua, :rol_usua, :depart , :city_usua, :postal_cod ,:email_usua, :pass_usua)";
                  $resultado=$conexiondb->prepare($sql);//$conexiondb es el nombre de la conexión
                  $resultado->execute(array(":id_usua"=>$id, ":name_usua"=>$nombre, ":last_name_usua"=>$apellido, ":address_usua"=>$direccion, ":tele_usua"=>$telefono, ":rol_usua"=>$rol, ":depart"=>$departamento, ":city_usua"=>$ciudad, ":postal_cod"=>$codigo_postal ,":email_usua"=>$email, ":pass_usua"=>$pass_cifrado));
          ?>
            <script>alert("Registrado correctamente!")</script>
          <?php
        }
      }
    }
?>


</body>
</html>