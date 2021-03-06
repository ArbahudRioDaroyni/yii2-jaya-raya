<div class="card card-nav-tabs card-content">
  <div class="card-header card-header-warning">
    Agen
  </div>
  <div class="card-body">
    <h1 id="content-h1" class="card-title">Transaksi Pembelian</h1>
    <a href="./create"  class="btn btn-primary"><i class="material-icons">add</i> Tambah</a>
    <table class="table with-overflow" id="content-table">
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
                        <a href="./view" rel="tooltip" class="btn btn-info btn-fab btn-fab-mini btn-simple" title="" data-placement="bottom" data-original-title="Lihat">
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                        <a href="./update" rel="tooltip" class="btn btn-warning btn-fab btn-fab-mini btn-simple" title="" data-placement="bottom" data-original-title="Edit">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="javascript:void(0)" rel="tooltip" class="btn btn-danger btn-fab btn-fab-mini btn-simple" data-toggle="modal" data-target="#modalAlert" title="" data-placement="bottom" data-original-title="Batal">
                            <i class="material-icons">close</i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</div>

<?= $this->render(
'modal-alert.php', [
    'modalHeader' => 'Hapus Transaksi',
    'modalBody' => 'Apa anda yakin ingin menghapus transaksi ?',
    'modalBtnAccept' => 'Ya, Hapus!',
    'modalBtnDecline' => 'Batal.',
]); ?>