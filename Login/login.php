<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Sing in</title>
</head>
<body>
    <div id="fondo">
        <div id="login">
        <p id="title">Iniciar Sesion</p>
        <div class="boton_volver">
            <a href="../index.php">Volver<button></button></a>
        </div>
        <form action="comprueba.php" method="POST">
            <input class="email" type="text" required name="email" placeholder="example@gmail.com"><br>
            <input class="pass" type="password" required name="password_user" placeholder="********"><br>
            <label for="ckeck"><input id="check" type="checkbox">Mantener sesion</label><br>
            <label for="">¿No está registrado?  <a href="Registrarse.php">Registrarse</a></label><br>
            <input class="send" name="send" type="submit" value="Ingresar">
        </form>
        </div>
    </div>



</body>
</html>