<?php
include("../conexion.php");

if (!isset($_SESSION['nombre_global'])) {
    $_SESSION['cod_global']= null;
    $_SESSION['nombre_global']= null;
    $_SESSION['id_global']= null;
    header("Location:../Login/login.php");
} else {
    $_SESSION['cod_global'];
    $_SESSION['nombre_global'];
    $_SESSION['id_global'];
}

            if (isset($_GET['cancelar'])) {

                $cancelado= $_GET['nuevo_estado_cancelado'];
                $codigo_p=$_GET['codigo_p'];

                $sql3="UPDATE comprobante SET estado = :cancelado WHERE cod_comprobante=:codigo";
                $resultado3=$conexiondb->prepare($sql3);
                $resultado3->execute(array(":codigo"=>$codigo_p, ":cancelado"=>$cancelado));
                ?>
                    <script>alert("Cancelado correctamente!")</script>
                    <script type="text/javascript">
                        window.location.href = "../usuarios/perfil.php";
                    </script>
                <?php

            } elseif (isset($_GET['despachar'])){

                $despachado= $_GET['nuevo_estado_despachado'];
                $codigo_p=$_GET['codigo_p'];

                $sql4="UPDATE comprobante SET estado = :despachado WHERE cod_comprobante=:codigo";
                $resultado4=$conexiondb->prepare($sql4);
                $resultado4->execute(array(":codigo"=>$codigo_p, ":despachado"=>$despachado));
                ?>
                    <script>alert("El pedido se ha despachado!")</script>
                    <script type="text/javascript">
                        window.location.href = "../usuarios/perfil.php";
                    </script>
                <?php

            }
            
            
            ?>