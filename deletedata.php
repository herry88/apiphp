<?php
//include konekssi 
include 'config.php';

//logika 
if (isset($_GET['idproduct'])) {
    $id = $_GET['idproduct'];
    $delete = mysqli_query(
        $koneksi,
        "DELETE FROM product WHERE idproduct = '$id'"
    );
    if ($delete) {
        echo json_encode(
            array(
                'status' => true,
                'msg' => 'Data Berhasil Dihapus'
            ),
        );
    }else{
        echo json_encode(
            array(
                'status' => false,
                'msg' => 'Data Gagal Dihapus'
            ),
        );
    }
    
}
