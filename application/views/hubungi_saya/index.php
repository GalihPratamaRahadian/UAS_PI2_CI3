<div class="row mt-3">
    <div class="col-3">
        <a href="<?= base_url('hubungi_saya/create') ?>" class="btn btn-success">Tambah</a>
    </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No Telp</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($allhubungi_saya as $no => $hubungi_saya) {
        ?>
            <tr>
                <td><?= $hubungi_saya['no_telp']; ?></td>

                <td>
                    <a href="<?= base_url('hubungi_saya/edit/' . $hubungi_saya['id_telp']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('hubungi_saya/hapus/' . $hubungi_saya['id_telp']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>