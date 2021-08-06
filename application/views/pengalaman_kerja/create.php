<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('pengalaman_kerja/simpanpengalaman_kerja') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengalaman</label>
            <textarea name="pengalaman" class="form-control" id="exampleFormControlInput1" placeholder="pengalaman"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>