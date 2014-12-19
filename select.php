<?php

include "pdo.crud.php";

$db = new crud();

//#update - Contoh
$tabel = "tbuser";
$fild = "*";
//menampilkan semua fild
$where = "username='root'";
// tampilkan yang nim -> 0711500546

$hasil = $db -> select($tabel, $fild, $where);

print_r($hasil);
//echo $hasil; //data di tampilkan dalam format json
?>