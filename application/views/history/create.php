<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('history/simpanhistory') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama SD Terakhir</label>
            <input type="text" name="nama_sd_terakhir" class="form-control" id="exampleFormControlInput1" placeholder="nama SD terakhir">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama SMP Terakhir</label>
            <input type="text" name="nama_smp_terakhir" class="form-control" id="exampleFormControlInput1" placeholder="nama SMP terakhir">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama SMA Terakhir</label>
            <input type="text" name="nama_sma_terakhir" class="form-control" id="exampleFormControlInput1" placeholder="nama SMA terakhir">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>