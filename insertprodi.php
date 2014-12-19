<?php

include "pdo.crud.php";

$db = new crud();

//#Insert - Contoh
$tabel = "tbprodi";
$kodeprodi = $_POST["kodeprodi"];
$namaprodi = $_POST["namaprodi"];

$data = array('kodeprodi' => $kodeprodi, 'namaprodi' => $namaprodi);

echo $db -> insert($tabel, $data);
?>