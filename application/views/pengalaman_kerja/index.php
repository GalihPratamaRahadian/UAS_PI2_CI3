<div class="row mt-3">
    <div class="col-3">
        <a href="<?= base_url('pengalaman_kerja/create') ?>" class="btn btn-success">Tambah</a>
    </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Pengalaman</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($allpengalaman_kerja as $no => $pengalaman_kerja) {
        ?>
            <tr>
                <td><?= $pengalaman_kerja['pengalaman']; ?></td>

                <td>
                    <a href="<?= base_url('pengalaman_kerja/edit/' . $pengalaman_kerja['id_pengalaman']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('pengalaman_kerja/hapus/' . $pengalaman_kerja['id_pengalaman']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

