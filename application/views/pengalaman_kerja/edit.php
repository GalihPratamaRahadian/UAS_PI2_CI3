<div class="mt-3">
    <form action="<?= base_url('pengalaman_kerja/editpengalaman_kerja') ?>" method="POST">
        <input type="hidden" name="id_pengalaman" value="<?= $pengalaman_kerja['id_pengalaman'] ?>"> <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pengalaman</label>
        <textarea name="pengalaman" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $pengalaman_kerja['pengalaman'] ?></textarea>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>