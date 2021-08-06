<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('hubungi_saya/simpanhubungi_saya') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Telp</label>
            <input type="number" name="no_telp" class="form-control" id="exampleFormControlInput1" placeholder="no telp">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>