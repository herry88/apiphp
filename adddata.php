<?php
//include ke database 
include 'config.php';

//deklarasi variabel 
$nmproduct  = $_POST['nm_product'];
$harga = $_POST['harga'];
$stok = $_POST['stock'];

//insert data 
$query = mysqli_query(
    $koneksi,
    "INSERT INTO product VALUES ('',
    '$nmproduct',
    '$harga',
    '$stok')"
);

//response data 
if ($query) {
    //menampilkan pesan berhasil
    $response = array(
        'status' => true,
        'msg' => 'Data Berhasil Ditambahkan'
    );
    echo json_encode($response);
    header('location:getdata.php');
}  else {
    //menampilkan pesan failed 
    $response = array(
        'status' => false,
        'msg' => 'Data Gagal Ditambahkan'
    );
}
