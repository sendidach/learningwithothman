<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/connect.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php");

$response = [];
$data = [];

if (isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    if ($action == 'loadUsers') {

        $response['data'] = 'Positive';
        $response['message'] = 'SUCCESS';
        $response['status'] = 200;

    } else {
        $response['data'] = 'Error 1';
        $response['message'] = 'Veuillez verifier votre requete';
        $response['status'] = 206;
    }
} else {

    $response['data'] = 'error 0';
    $response['message'] = 'requete incomplete, contactez votre administrateur avec le code suivant : P_ACTION 321F45';
    $response['status'] = 404;
}

echo json_encode($response);