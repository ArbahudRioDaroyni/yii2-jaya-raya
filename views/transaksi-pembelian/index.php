<div class="row">
    <div class="col-lg-8">
        <h1 id="content-h1">Transaksi Pembelian</h1>
    </div>
    <div class="col-lg-4">
        <button type="button" class="btn btn-primary"><i class="material-icons">add</i> Tambah</button>
    </div>
</div>
    
<table class="table" id="content-table">
    <thead>
        <tr class="text-center">
            <th>#</th>
            <th>No. Invoice</th>
            <th>Tanggal</th>
            <th>jatuh Tempo</th>
            <th>Tagihan</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i=1; $i < 10; $i++) { ?>
            <tr class="text-center">
                <td class="text-center"><?= $i ?></td>
                <td>IV-00<?= $i+1 . $i ?>-00<?= $i ?></td>
                <td>1<?= $i ?>-0<?= $i ?>-201<?= $i ?></td>
                <td>1<?= $i ?>-0<?= $i+1 ?>-201<?= $i ?></td>
                <td>Rp. 99.225.00,-</td>
                <td class="td-actions">
                    <button type="button" rel="tooltip" class="btn btn-info btn-fab btn-fab-mini btn-simple">
                        <i class="material-icons">remove_red_eye</i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-warning btn-fab btn-fab-mini btn-simple">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-danger btn-fab btn-fab-mini btn-simple" data-toggle="modal" data-target="#myModal">
                        <i class="material-icons">delete</i>
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?= $this->render(
    'modal.php', [
        'modalHeader' => 'Hapus Transaksi',
        'modalBody' => 'Apa anda yakin ingin menghapus transaksi ?',
        'modalBtnAccept' => 'Ya, Hapus!',
        'modalBtnDecline' => 'Batal.',
    ]); ?>