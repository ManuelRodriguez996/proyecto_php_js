<?php
include("conexion.php");

if ($_POST) {

    $usuario = $_POST["usuario_peticion"];
    $contraseña = $_POST["contraseña_peticion"];
    $contraseña_md5 = md5($contraseña);

    $login = $base_de_datos->prepare("SELECT usuario FROM usuarios WHERE usuario=? AND contraseña=?");
    $login->execute([$usuario, $contraseña_md5]);

    $resultado = $login->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        session_start();
        $_SESSION["sesion_creada"] = session_create_id();


        echo '1';

    } else {

        echo '2';
    }
}
?>