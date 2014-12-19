<?php

include "pdo.crud.php";

$db = new crud();

//#update - Contoh
$tabel = "tbprodi";

$kodeprodi = $_POST["kodeprodi"];
$namaprodi = $_POST["namaprodi"];
$update = array('kodeprodi' => $kodeprodi, 'namaprodi' => $namaprodi);
$where = "kodeprodi = '" . $kodeprodi . "'";

echo $db -> update($tabel, $update, $where);
?>