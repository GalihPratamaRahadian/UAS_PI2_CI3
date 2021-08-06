<div class="mt-3">
    <form action="<?= base_url('hubungi_saya/edithubungi_saya') ?>" method="POST">
        <input type="hidden" name="id_telp" value="<?= $hubungi_saya['id_telp'] ?>"> <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No Telp</label>
        <input type="number" name="no_telp" class="form-control" id="exampleFormControlInput1" placeholder="no_telp" value="<?= $hubungi_saya['no_telp'] ?>">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>