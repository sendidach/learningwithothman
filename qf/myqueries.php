<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/connect.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php");

$response = [];
$data = [];

if (isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    if ($action == 'passUpdate') {

        $user_ID = $_POST['user_ID'];
        $new_pass = $_POST['value'];

        $data['user_ID'] = $user_ID;
        $data['password'] = $new_pass;

        $query = ""; //query was incomplete and missing ";"

        $queryUpdatePass = $db->prepare("UPDATE client_authentification SET password = ? where client_authentification_ID = ?");

        $queryUpdatePass->bindParam('?', $new_pass, PDO::PARAM_STR);
        $queryUpdatePass->bindParam('?', $user_ID, PDO::PARAM_INT);
        $queryUpdatePass->execute(array($new_pass, $user_ID));

        if ($queryUpdatePass) {

            $user_action_log = 'user :' . $user_ID . ' -  MdP modifé';
           

            $response['data'] = $data;
            $response['message'] = ' MdP actialisé correctement';
            $response['status'] = 200;
 
        } else {

            $response['data'] = $data;
            $response['message'] = $db->errorInfo();
            $response['status'] = 204;

        }


    } elseif ($action == 'statusUpdate') {

        $user_ID = $_POST['user_ID'];
        $status_value = (int)$_POST['value'];

        $data['user_ID'] = $user_ID;
        $data['status_value'] = $status_value;

        $queryUpdateStatus = $db->prepare("UPDATE client_authentification SET status = ? where client_authentification_ID = ?");

        $queryUpdateStatus->bindParam('?', $status_value, PDO::PARAM_STR);
        $queryUpdateStatus->bindParam('?', $user_ID, PDO::PARAM_INT);
        $queryUpdateStatus->execute(array($status_value, $user_ID));

        if ($queryUpdateStatus) {

            $user_action_log = "userID ( $user_ID ) - status Modifié : $status_value";
            

            $response['data'] = $data;
            $response['message'] = ' Status actualisé correctement';
            $response['status'] = 200;

        } else {

            $response['data'] = $data;
            $response['message'] = $db->errorInfo();
            $response['status'] = 204;
        }
    } else {
        $response['data'] = $data;
        $response['message'] = 'Veuillez verifier votre requete';
        $response['status'] = 206;
    }
} else {

    $response['data'] = $data;
    $response['message'] = 'requete incomplete, contactez votre administrateur avec le code suivant : P_ACTION 321F45';
    $response['status'] = 404;
}

echo json_encode($response);