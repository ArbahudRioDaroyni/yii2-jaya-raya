<div class="row">
	<div class="col-lg-12">
		<h1 id="content-h1">Detail Transaksi Pembelian</h1>
	</div>
</div>

<div class="row">

	<div class="col-md-6">
		<h2 id="content-h2">Mitra</h2>
		<table class="table" id="content-table">
			<tbody>
				<tr class="text-left">
					<th>Nama</th>
					<td class="text-left">Pak Ghufron</td>
				</tr>
				<tr class="text-left">
					<th>Telepon</th>
					<td class="text-left">0838-4904-4563</td>
				</tr>
				<tr class="text-left">
					<th>Alamat</th>
					<td class="text-left">Jl Raya Maju Mundur Alon Alon</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
		<h2 id="content-h2">Petani</h2>
		<table class="table" id="content-table">
			<tbody>
				<tr class="text-left">
					<th>Nama</th>
					<td class="text-left">Pak Jodi</td>
				</tr>
				<tr class="text-left">
					<th>Telepon</th>
					<td class="text-left">0838-4904-4563</td>
				</tr>
				<tr class="text-left">
					<th>Alamat</th>
					<td class="text-left">Jl Raya Maju Mundur Alon Alon</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="col-md-12">
		<h2 id="content-h2">Detail Invoice</h2>
		<table class="table" id="content-table">
			<tbody>
				<tr class="text-left">
					<th>No. Invoice</th>
					<td class="text-left">IV-0010-000</td>
				</tr>
				<tr class="text-left">
					<th>Tanggal Jatuh Tempo</th>
					<td class="text-left">12-11-2019</td>
				</tr>
				<tr class="text-left">
					<th>Luas lahan</th>
					<td class="text-left">5 Hektar</td>
				</tr>
				<tr class="text-left">
					<th>Jumlah Pohon</th>
					<td class="text-left">500 Pohon</td>
				</tr>
				<tr class="text-left">
					<th>Koordinat</th>
					<td class="text-left">-7.45945.98, 9.076876.89</td>
				</tr>
				<tr class="text-left">
					<th>Jumlah Estimasi Kopra</th>
					<td class="text-left">500 kg</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="col-md-12">
		<h2 id="content-h2">Detail Kasbon</h2>
		<table class="table" id="content-table">
			<thead>
				<tr class="text-center">
					<th>#</th>
					<th>No. Kasbon</th>
					<th>Tanggal</th>
					<th>Keterangan</th>
					<th>Jumlah</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
					<?php for ($i=1; $i < 4; $i++) { ?>
						<tr class="text-center">
							<td class="text-center"><?= $i ?></td>
							<td>KB-00<?= $i+1 . $i ?>-00<?= $i ?></td>
							<td>1<?= $i ?>-0<?= $i ?>-201<?= $i ?></td>
							<td>Beli Ita Itu Disana Disini</td>
							<td>Rp. 99.225.00,-</td>
							<td class="td-actions">
								<button type="button" rel="tooltip" class="btn btn-warning btn-fab btn-fab-mini btn-simple">
									<i class="material-icons">edit</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-danger btn-fab btn-fab-mini btn-simple" data-toggle="modal" data-target="#myModal">
									<i class="material-icons">delete</i>
								</button>
							</td>
						</tr>
					<?php } ?>
						<tr class="text-center">
							<td class="text-center"><?= $i ?></td>
							<td>KB-00<?= $i+1 . $i ?>-00<?= $i ?></td>
							<td>1<?= $i ?>-0<?= $i ?>-201<?= $i ?></td>
							<td>Pelunasan</td>
							<td>Rp. 99.225.00,-</td>
							<td class="td-actions">
								<button type="button" rel="tooltip" class="btn btn-warning btn-fab btn-fab-mini btn-simple">
									<i class="material-icons">edit</i>
								</button>
								<button type="button" rel="tooltip" class="btn btn-danger btn-fab btn-fab-mini btn-simple" data-toggle="modal" data-target="#myModal">
									<i class="material-icons">delete</i>
								</button>
							</td>
						</tr>
			</tbody>
		</table>
		<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="material-icons">add</i> Tambah Kasbon</button>
		<button type="submit" class="btn btn-success"><i class="material-icons">done</i> Pelunasan</button>
	</div>

</div>

<?= $this->render(
'modal-kasbon.php', [
		'modalHeader' => 'Tambah Kasbon',
		'modalBtnAccept' => 'Tambah!',
		'modalBtnDecline' => 'Batal!',
]); ?>