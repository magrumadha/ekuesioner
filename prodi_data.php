<?php
include "pdo.crud.php";

$db = new crud();

//#update - Contoh
$tabel = "tbprodi";
$field = "*";
//menampilkan semua fild
$cari = $_GET["cari"];
if (isset($cari)) {
	$where = "kodeprodi like '%" . $cari . "%' or namaprodi like '%" . $cari . "%'";
} else {
	$where = "";
}

$result = $db -> select($tabel, $field, $where);
?>

<table class="bordered">
	<thead>
		<tr>
			<th>Kode Program Studi</th>
			<th>Program Studi</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php
	$num = $result["count(*)"];
	//echo $num;
	//echo "Aaa";
	if (sizeof($result) > 0) {
		foreach ($result as $row) {
			echo " <tr>";
			echo "<td>" . $row['kodeprodi'] . "</td>";
			echo "<td>" . $row['namaprodi'] . "</td>";
			echo "          <td>";
			echo "   	  <input type=\"button\" value=\"Edit\" class=\"button blue\" id=\"btEdit\" onClick=\"openEditProdi('" . $row['kodeprodi'] . "','" . $row['namaprodi'] . "')\">";
			echo "         <input type=\"button\" value=\"Hapus\" class=\"button blue\" id=\"btDelete\" onClick=\"hapusProdi('" . $row['kodeprodi'] . "')\">";
			echo "		</td>";
			echo "     </tr>";
		}
	} else {
		echo " <tr>";
		echo "<td colspan=3 ><center> Tidak Ada Data</center> </td>";
		echo "     </tr>";
	}
?>
</table>