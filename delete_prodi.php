<?php

include "pdo.crud.php";

$db = new crud();
$kodeprodi = $_POST["kodeprodi"];
//#update - Contoh
$tabel = "tbprodi";
$where = array("kodeprodi" => $kodeprodi);

echo $db -> delete($tabel, $where);
?>