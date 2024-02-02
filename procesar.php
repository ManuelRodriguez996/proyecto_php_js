<?php
include("Conexion.php");

if ($_POST['actualizar'] == '1') {

    $id = $_POST["id_Peticion"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $pais = $_POST["pais"];
    $motivo_del_contacto = $_POST["motivo_del_contacto"];


    $stmt = $base_de_datos->prepare("UPDATE CVManuel SET nombre=?, apellido=?, email=?, pais=?, motivo_del_contacto=? WHERE id=?");
    $stmt->execute([$nombre, $apellido, $email, $pais, $motivo_del_contacto, $id]);
    
}
if ($_POST['borrar'] == '2') {
    $id = $_POST['id_Peticion'];

    $query = "UPDATE CVManuel SET estado = '2' WHERE id=?";

    try {
        $resultado = $base_de_datos->prepare($query);
        $resultado->execute([$id]);
        if ($resultado) {
            echo "1";
        } else {
            throw new PDOException();
        }
    } catch (PDOException $error) {
        echo "2";
    }
}
?>