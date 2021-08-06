<div class="row mt-3">
    <div class="col-3">
        <a href="<?= base_url('profil/create') ?>" class="btn btn-success">Tambah</></a>
    </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Golongan Darah</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($allprofil as $no => $profil) {
        ?>
            <tr>
                <th scope="row"><?= $no + 1 ?></th>
                <td><?= $profil['nama']; ?></td>
                <td><?= $profil['alamat']; ?></td>
                <td><?= $profil['tgl_lahir']; ?></td>
                <td><?= $profil['gol_darah']; ?></td>
                <td><?= $profil['status']; ?></td>

                <td>
                    <a href="<?= base_url('profil/edit/' . $profil['id_profil']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('profil/hapus/' . $profil['id_profil']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>