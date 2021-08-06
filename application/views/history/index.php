<div class="row mt-3">
    <div class="col-3">
        <a href="<?= base_url('history/create') ?>" class="btn btn-success">Tambah</a>
    </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama SD Terakhir</th>
            <th scope="col">Nama SMP Terakhir</th>
            <th scope="col">Nama SMA Terakhir</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($allhistory as $no => $history) {
        ?>
            <tr>
                <th scope="row"><?= $no + 1 ?></th>
                <td><?= $history['nama_sd_terakhir']; ?></td>
                <td><?= $history['nama_smp_terakhir']; ?></td>
                <td><?= $history['nama_sma_terakhir']; ?></td>

                <td>
                    <a href="<?= base_url('history/edit/' . $history['id_history']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('history/hapus/' . $history['id_history']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>