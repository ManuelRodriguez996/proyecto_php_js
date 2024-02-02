<?php
try {
    $base_de_datos = new PDO("mysql:host=localhost;dbname=test", "root", "");
    //echo "Me pude CONECTAR a la base de datos";
} catch (PDOException $error) {
    echo "Error. No me pude CONECTAR a la base de datos" . $error->getMessage();
}
?>