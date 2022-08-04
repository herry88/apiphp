<?php
include 'config.php';

$query = mysqli_query($koneksi, "SELECT * FROM product");
$data = array();
while ($row = mysqli_fetch_array($query)) {
    $data[] = $row;
}

//response 
$response = array(
    'status' => true,
    'msg' => 'success',
    'data' => $data
);
header('Content-Type: application/json');
//ini untuk tampilin datanya 
echo json_encode($response);
