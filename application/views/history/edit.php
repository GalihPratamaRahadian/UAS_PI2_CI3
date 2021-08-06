<div class="mt-3">
    <form action="<?= base_url('history/edithistory') ?>" method="POST">
        <input type="hidden" name="id_history" value="<?= $history['id_history'] ?>" <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama SD Terakhir</label>
        <input type="text" name="nama_sd_terakhir" class="form-control" id="exampleFormControlInput1" placeholder="nama SD terakhir" value="<?= $history['nama_sd_terakhir'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama SMP Terakhir</label>
    <input type="text" name="nama_smp_terakhir" class="form-control" id="exampleFormControlInput1" placeholder="nama SMP terakhir" value="<?= $history['nama_smp_terakhir'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama SMA Terakhir</label>
    <textarea name="nama_sma_terakhir" class="form-control" id="exampleFormControlInput1"placeholder="nama SMA terakhir" value="<?= $history['nama_sd_terakhir'] ?>"></textarea>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>