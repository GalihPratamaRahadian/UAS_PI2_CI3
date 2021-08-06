<div class="mt-3">
    <form action="<?= base_url('profil/editprofil') ?>" method="POST">
        <input type="hidden" name="id_profil" value="<?= $profil['id_profil'] ?>"> <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama" value="<?= $profil['nama'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $profil['alamat'] ?></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="tanggal lahir" value="<?= $profil['tgl_lahir'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Golongan Darah</label>
    <input type="text" name="gol_darah" class="form-control" id="exampleFormControlInput1"placeholder="golongan darah"value="<?= $profil['gol_darah'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Status</label>
    <input type="text" name="status" class="form-control" id="exampleFormControlInput1"placeholder="status"value="<?= $profil['status'] ?>">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>