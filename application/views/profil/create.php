<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('profil/simpanprofil') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="tanggal lahir">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Golongan Darah</label>
            <input type="text" name="gol_darah" class="form-control" id="exampleFormControlInput1" placeholder="golongan darah">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="status">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>