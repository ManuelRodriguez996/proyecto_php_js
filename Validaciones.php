<?php
include("Conexion.php");

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Pais = $_POST['Pais'];
$Motivo_De_Contacto = isset($_POST['Motivo']) ? $_POST['Motivo'] : '';

validar_Campos_Vacios($Nombre, "Error. Debes ingresar un Nombre.");
validar_Campos_Vacios($Apellido, "Error. Debes ingresar un Apellido.");
validar_Campos_Vacios($Email,"Error. Debes ingresar un Email.");
validar_Campos_Vacios($Pais, "Error. Debes ingresar un Pais.");
validar_Campos_Vacios($Motivo_De_Contacto, "Error. Debes ingresar un Motivo de Contacto.");
validar_Campo($Nombre, "/^[a-zA-Z]+$/", "Nombre valido.", "Soy un invalido.");
validar_Campo($Apellido, "/^[a-zA-Z]+$/", "Apellido Valido.", "Apellido invalido.");
validar_Campo($Email, "/[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", "Email valido.", "El Email es invalido.");
validar_Campo($Pais, "/^[a-zA-Z]+$/", "Pais Valido.", "Pais Invalido.");
validar_Campo($Motivo_De_Contacto, "/.*/", "Motivo Seleccionado Correctamente.", "Falta Seleccionar El motivo.");

$query = "INSERT INTO CVManuel(Nombre,Apellido,Email,Pais,Motivo_del_Contacto,estado) VALUES('$Nombre','$Apellido','$Email','$Pais','$Motivo_De_Contacto','1')";

try {
    $resultado = $base_de_datos->query($query);
    if ($resultado) {
        echo "<script> alert('Datos insertados correctamente') </script>";
        echo "<script> window.history.go(-1)</script>";
    } else {
        throw new PDOException();
    }
} catch (PDOException $error) {
    echo "<script> alert('Error la informacion no fue insertada correctamente. " . $error->getMessage() . "')</script>";
}


function validar_Campo($variable, $regex, $mensaje, $mensaje_Error)
{
    if (preg_match($regex, $variable)) {
        echo $mensaje;
    } else {
        echo "<script> alert('$mensaje_Error') </script>";
        echo "<script> window.history.go(-1)</script>";
        die;
    }
    echo "<br>";
}

function validar_Campos_Vacios($var,$mensaje_Error){
    if(empty($var)){
        echo "<script> alert('$mensaje_Error'); </script>";
        echo "<script> window.history.go(-1); </script>";
        die;
    }
}
?>