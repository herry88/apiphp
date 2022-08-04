<?php
$koneksi = new mysqli('localhost','root','','apiphpnative'); 

if (!$koneksi) {
    echo '<h1>Berhasil Terkoneksi Ke database</h1>';
}
?>