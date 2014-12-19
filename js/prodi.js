function checkAllProdi() {
	checkValidKodeProdi(ge("kodeprodi"));
	checkValidNamaProdi(ge("namaprodi"));

}

function checkValidKodeProdi(input) {
	if (input.value == "") {
		input.setCustomValidity("Masukan Kode Program Studi");
	} else {
		input.setCustomValidity('');
	}
}

function checkValidNamaProdi(input) {
	if (input.value == "") {
		input.setCustomValidity("Masukan Nama Program Studi");
	} else {
		input.setCustomValidity('');
	}
}

function saveProdi(action) {
	//alert(action);
	if (action == "edit") {

		kodeprodi = gv("kodeprodi");
		namaprodi = gv("namaprodi");
		st_edit_proses = "<div class='alert-box notice'><span>Proses: </span>Update Data</div></span>";
		st_edit_ok = "<div class='alert-box success'><span>Update Data </span>Success</div>";
		st_edit_fail = "<div class='alert-box error'><span>Error: </span> Tidak bisa update data </div>";
		si("ketprodi", st_edit_proses);
		ok = ajaxdata("POST", "editprodi.php", "kodeprodi=" + kodeprodi + "&namaprodi=" + namaprodi);
		if (ok == "1") {
			si("ketprodi", st_edit_ok);
			var delay = 100;
			setTimeout(function() {
				LoadSub('prodi_data.php');
			}, delay);
			setTimeout(function() {
				window.location.href = '#';
			}, delay);
		} else {
			si("ketprodi", st_edit_fail);
		}
	} else {
		kodeprodi = gv("kodeprodi");
		namaprodi = gv("namaprodi");
		st_insert_proses = "<div class='alert-box notice'><span>Proses: </span>Insert Data</div></span>";
		st_insert_ok = "<div class='alert-box success'><span>Insert Data </span>Success</div>";
		st_insert_fail = "<div class='alert-box error'><span>Error: </span> Tidak bisa insert data </div>";
		si("ketprodi", st_insert_proses);
		ok = ajaxdata("POST", "insertprodi.php", "kodeprodi=" + kodeprodi + "&namaprodi=" + namaprodi);
		if (ok == "1") {
			si("ketprodi", st_insert_ok);
			var delay = 100;
			setTimeout(LoadSub('prodi_data.php'), delay);
			setTimeout(function() {
				window.location.href = '#';
			}, delay);
		} else {
			si("ketprodi", st_insert_fail);
		}

	}
}

function searchProdi(cari) {
	data = ajaxdata("GET", "prodi_data.php?cari=" + cari);
	si("data", data);
}

function hapusProdi(kodeprodi) {
	if (confirm("Hapus data dengan kode prodi '" + kodeprodi + "'") == true) {
		ok = ajaxdata("POST", "delete_prodi.php", "kodeprodi=" + kodeprodi);
		if (ok == "1") {
			var delay = 100;
			setTimeout(LoadSub('prodi_data.php'), delay);
		} else {
			alert("Tidak bisa menghapus data");
		}
	} else {
		return;
	}

}

function openEditProdi(kodeprodi, namaprodi) {
	location.href = '#modal';
	//alert(kodeprodi);
	sv("action", "edit");
	ge('fm-prodi').reset();
	sv("kodeprodi", kodeprodi);
	sv("namaprodi", namaprodi);
	ge("kodeprodi").focus();
	si("ketprodi", "");
	si("headform", "<h2>Edit Data Program Studi</h2>");
	checkAllProdi();
}

function openInsertProdi() {
	location.href = '#modal';
	sv("action", "insert");
	ge('fm-prodi').reset();
	ge("kodeprodi").focus();
	si("ketprodi", "");
	si("headform", "<h2>New Data Program Studi</h2>");
	checkAllProdi();
	//window.location.href="#";
	//alert('');
}
