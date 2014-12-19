<div class="body">
	<form class="isi">
		<header>
			Tabel Program Studi
		</header>
		<fieldset>
			<section>
				<div>
					<input type="text" placeholder="Search" required minLength="4" id="txtsearch" autofocus  onchange="searchProdi(gv('txtsearch'));">
					<input type="button" value="New" class="button blue" id="btnew" align="right" onClick="openInsertProdi()">
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
	<form id="fm-prodi" onsubmit="saveProdi(gv('action')); return false;">
		<header id="headform">
			<h2>Edit Table Program Studi</h2>
		</header>

		<section>

			<table width="200" border="20" cellpadding="0" cellspacing="0" style="border-collapse:collapse" >
				<tr>
					<td>Kode Jurusan</td>
					<td>
					<input name="kodeprodi" id="kodeprodi" type="text" size="3" required
					oninput="checkValidKodeProdi(this)">
					</td>
				</tr>
				<tr>
					<td>Nama Program Studi</td>
					<td>
					<input name="namaprodi" id="namaprodi" type="text" required size="30"
					oninput="checkValidNamaProdi(this)">
					</td>
				</tr>
			</table>
			<input type="hidden" id="action" />

			<div id="ketprodi"></div>

		</section>

		<footer class="cf">
			<input type="submit" value="Save" class="button blue" id="btSave">
			<input type="button" value="Close" class="button blue" id="btCancel" onClick="location.href='#'">
			<!-- <a href="#" class="btn">Close</a> -->
		</footer>
	</form>
</aside>
