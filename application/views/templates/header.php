<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $title; ?></title>


</head>

<body>
    <div class="container" mt-5">
        <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('profil')?>">Profil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('history')?>">History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('pengalaman_kerja')?>">Pengalaman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('hubungi_saya')?>">Hubungi Saya</a>
  </li>
  
</ul>


        <div class="row">
            <?= $this->session->flashdata('message') ?>
        </div>