<?php

session_start();
if (!isset($_SESSION["sesion_creada"])) {
    die;
}

$response = array();

if (isset($_SESSION['last_action']) && time() - $_SESSION['last_action'] > 10) {
    $response['expired'] = true;
    session_unset();
    session_destroy();
} else {
    $response['expired'] = false;
    $_SESSION['last_action'] = time();
}

echo json_encode($response);
?>