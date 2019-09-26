<div class="card card-nav-tabs card-content">
    <div class="card-header card-header-warning">
        Agen
    </div>
    <div class="card-body">
        <h1 id="content-h1" class="card-title">Detail Transaksi Pembelian</h1>
				<div class="row">

			<div class="col-md-6">
				<h2 id="content-h2" class="card-title">Mitra</h2>
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
				<h2 id="content-h2" class="card-title">Petani</h2>
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
				<h2 id="content-h2" class="card-title">Detail Invoice</h2>
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
				<a href="./update" class="btn btn-warning"><i class="material-icons">edit</i> Edit</a>
			</div>

			<div class="col-md-12">
				<h2 id="content-h2" class="card-title">Detail Kasbon</h2>
				<table class="table with-overflow" id="content-table">
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
										<a href="../kasbon-pembelian/view" rel="tooltip" class="btn btn-info btn-fab btn-fab-mini btn-simple" title="" data-placement="bottom" data-original-title="Lihat">
											<i class="material-icons">remove_red_eye</i>
										</a>
										<a href="../kasbon-pembelian/edit" rel="tooltip" class="btn btn-warning btn-fab btn-fab-mini btn-simple" title="" data-placement="bottom" data-original-title="Edit">
											<i class="material-icons">edit</i>
										</a>
										<a href="javascript:void(0)" class="btn btn-danger btn-fab btn-fab-mini btn-simple" data-toggle="modal" data-target="#modalAlert" title="" data-placement="bottom" data-original-title="Batal">
											<i class="material-icons">close</i>
										</a>
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
										<a href="../kasbon-pembelian/view" rel="tooltip" class="btn btn-info btn-fab btn-fab-mini btn-simple" title="" data-placement="bottom" data-original-title="Lihat">
											<i class="material-icons">remove_red_eye</i>
										</a>
										<a href="../kasbon-pembelian/edit" rel="tooltip" class="btn btn-warning btn-fab btn-fab-mini btn-simple" title="" data-placement="bottom" data-original-title="Edit">
											<i class="material-icons">edit</i>
										</a>
										<a href="javascript:void(0)" class="btn btn-danger btn-fab btn-fab-mini btn-simple" data-toggle="modal" data-target="#modalAlert" title="" data-placement="bottom" data-original-title="Batal">
											<i class="material-icons">close</i>
										</a>
									</td>
								</tr>
					</tbody>
				</table>
			</div>

			<div class="col-md-12">
				<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="material-icons">add</i> Tambah Kasbon</button>
				<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="material-icons">done</i> Pelunasan</button>
			</div>
			
		</div>
    <div>
<div>

<?= $this->render(
'modal-kasbon.php', [
	'modalHeader' => '<h3 id="content-h3" class="card-title">Tambah Kasbon Pembelian</h3>',
	'modalBtnAccept' => 'Tambah!',
	'modalBtnDecline' => 'Batal!',
]); ?>

<?= $this->render(
'modal-alert.php', [
    'modalHeader' => 'Batalkan Transaksi',
    'modalBody' => 'Apa anda yakin ingin membatalkan transaksi ?',
    'modalBtnAccept' => 'Ya, Batalkan!',
    'modalBtnDecline' => 'Batal.',
]); ?>

<?php
app\assets\MaterialKitDateTimePickerAsset::register($this);
?>

<?php $script = <<< JS
	// javascript for init
	$('.datetimepicker').datetimepicker({
		icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-chevron-up",
			down: "fa fa-chevron-down",
			previous: 'fa fa-chevron-left',
			next: 'fa fa-chevron-right',
			today: 'fa fa-screenshot',
			clear: 'fa fa-trash',
			close: 'fa fa-remove'
		}
	});
JS;
$this->registerJs($script); ?> 