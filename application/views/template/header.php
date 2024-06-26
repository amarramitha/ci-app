<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand">Data Unsoed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('matakuliah'); ?>">Mata Kuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url(); ?>">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url(); ?>">Jadwal Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url(); ?>">Users</a>
      </li>
    </ul>
  </div>
  </div>
</nav>