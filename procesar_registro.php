<?php
include("Conexion.php");

if ($_POST) {
    $usuario = $_POST["usuario_peticion"];
    $contraseña = $_POST["contraseña_peticion"];
    $email = $_POST["email_peticion"];
    $contraseña_md5 = md5($contraseña);


    try {
        $registro = $base_de_datos->prepare("INSERT INTO usuarios (usuario, contraseña, email, estado, tipo_de_usuario) VALUES (?, ?, ?, 1, 1)");
        $registro->execute([$usuario, $contraseña_md5, $email]);
        echo "1";
    } catch (PDOException $error) {
        echo $error->getMessage();
    }

}
?>