<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MODUL3 RIDWAN</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- top navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo-ead.png" alt="Logo" width="80" height="24" class="d-inline-block align-text-top"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation">
        <section class="navbar-toggler-icon"></section>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav mb-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>              
            <a class="nav-link" href="additem.php">Add Car</a>
            </li>
            </li>              
            <a class="nav-link" href="Mycar.php">My Car</a>
            </li>
          </ul>
          </header>
          </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Add Item -->
<div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="tambah"> Tambah Mobil </h2></div>
        <p>Tambah Mobil baru anda ke showroom</p>
        <form>
          <<div class="mb-3">
            <label for="Nama" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="nama_mobil">
          </div>
          <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="pemilik_mobil">
          </div>
          <div class="mb-3">
            <label for="Tgl" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="Tgl_beli">
          </div>
          <div class="mb-3">
            <label for="Merk" class="form-label">Merk</label>
            <input type="text" class="form-control" id="merk_mobil">
          </div> 
          <div class="ms-6">
            <label for="Deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="Deskripsi">

          <br>
          <p>Status Pembayaran</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="status_pembayaran">
            <label class="form-check-label" for="flexRadioDefault1"> Lunas
            </label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="status_pembayaran" checked>
            <label class="form-check-label" for="flexRadioDefault2"> Belum Lunas
            </label>
          </div>
          <br>
        </form>
        <button type="submit" class="btn btn-primary">Selesai</button>
        <br>
        <br>

        <?php
            include('config.php');
            $Nama = $_POST['nama_mobil'];
            $Pemilik = $_POST['pemilik_mobil'];
            $Tgl =$_POST['tgl_beli'];
            $Merk =$_POST['merk_mobil'];
            $Deskripsi =$_POST['deskripsi'];
            $query = mysqli_query(connect, "INSERT INTO showroom_nama_table(nama_mobil, pemilik_mobil, tgl_beli, merk_mobil, deskripsi) VALUES