<?php
include_once "apisaya.php";


header("Content-Type: application/json; charset=UTF-8");

$isbn = $_GET['isbn'];


$query =  "DELETE FROM buku WHERE 'isbn' = $isbn";
$execute = $dbConn->query($query);
$response = [];




if ($execute) {
    $response['status'] = 'succcess';
    $response['message'] = 'data berhasil dihapus';
} else {
    $response['status'] = 'failed';
    $response['message'] = 'data gagal dihapus';
}
$json = json_encode($response, JSON_PRETTY_PRINT);
echo $json;