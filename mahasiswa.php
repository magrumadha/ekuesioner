<div class="body">
	<form class="isi">
		<header>
			Tabel Mahasiswa
		</header>
		<fieldset>
			<section>
				<div>
					<input type="text" placeholder="Search" required minLength="4" id="txtsearch" autofocus align="left" style="left:0">
					<input type="button" value="New" class="button blue" id="btnew" align="right" onClick="location.href='#modal'">
					<input type="button" value="Import" class="button blue" id="btimport" align="right">
					<input type="button" value="Export" class="button blue" id="btexport" align="right">
				</div>
			</section>
		</fieldset>
		<fieldset>
			<section>
				<div id="data">

				</div>
			</section>
		</fieldset>
	</form>
</div>

<aside id="modal">
	<header>
		<h2>Edit Table Mahasiswa</h2>
	</header>

	<section>

		<table width="200" border="20" cellpadding="0" cellspacing="0" style="border-collapse:collapse" >
			<tr>
				<td>NPM</td>
				<td>
				<input name="npm" id="npm" type="text" required>
				</td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>
				<input name="nama" id="nama" type="text" required size="30">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
				<input name="tgl" id="tgl" type="text" required size="2"  placeholder="tgl">
				<select name="jurusan" required>
					<option value="1">Januari</option>
					<option value="2">Februari</option>
					<option value="3">Maret</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Agustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
				<input name="tahun" id="tahun" type="text" required size="4"  placeholder="tahun">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
				<input name="email" id="email"  type="text" required>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
				<select name="jurusan">
					<option value="TI">TI</option>
					<option value="SI">SI</option>
					<option value="KA">KA</option>
				</select></td>
			</tr>
		</table>

	</section>

	<footer class="cf">
		<input type="button" value="Save" class="button blue" id="btSave" onClick="">
		<input type="button" value="Close" class="button blue" id="btCancel" onClick="location.href='#'">
		<!-- <a href="#" class="btn">Close</a> -->
	</footer>
</aside>
