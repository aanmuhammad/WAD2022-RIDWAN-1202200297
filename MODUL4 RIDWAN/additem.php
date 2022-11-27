<?php 
session_start();

//koneksi ke database
$hostname   = 'localhost';
$username   = 'root';
$pass       = '1202200297';
$dbname     = 'wad_modul4_ridwan';
$conn       = mysqli_connect($hostname,$username,$pass,$dbname);

if(isset($_POST['bsimpan']))
{
  // data  diedit atau disimpan baru
  if($_GET['hal'] == "edit")
  {
    //Data akan di edit
    $edit = mysqli_query($conn, "UPDATE  set
                       '$_POST[imobil]', 
                         '$_POST[ipemilik]', 
                         '$_POST[imerk]', 
                         '$_POST[itanggal]',
                         '$_POST[ideskripsi]',
                         '$_POST[ifoto]',
                         '$_POST[istatus]',
                     WHERE id_mobil = '$_GET[id]'
                     ");
    if($edit) //jika edit sukses
    {
      echo "<script>
          alert('Edit data suksess!');
          document.location='index.php';
           </script>";
    }
    else
    {
      echo "<script>
          alert('Edit data GAGAL!!');
          document.location='index.php';
           </script>";
    }
  }
  else
  {
    //Data Baru yang akan disimpan/ditambahkan 
    $simpan = mysqli_query($conn, "INSERT INTO showroom_nama_tabel (nama_mobil, pemilik_mobil, merk_mobil, tgl_beli, deskripsi, foto_mobil, status_pembayaran)
                    VALUES ('$_POST[imobil]', 
                         '$_POST[ipemilik]', 
                         '$_POST[imerk]', 
                         '$_POST[itanggal]',
                         '$_POST[ideskripsi]',
                         '$_POST[ifoto]',
                         '$_POST[istatus]',)
                   ");
    if($simpan) //jika simpan sukses
    {
      echo "<script>
          alert('Simpan data suksess!');
          document.location='index.php';
           </script>";
    }
    else
    {
      echo "<script>
          alert('Simpan data GAGAL!!');
          document.location='index.php';
           </script>";
    }
  }


  
}


//Pengujian jika tombol Edit / Hapus di klik
if(isset($_GET['hal']))
{
  //Pengujian jika edit Data
  if($_GET['hal'] == "edit")
  {
    //Tampilkan Data yang akan diedit
    $tampil = mysqli_query($conn, "SELECT * FROM showroom_nama_tabel WHERE id_mobil = '$_GET[id]' ");
    $data = mysqli_fetch_array($tampil);
    if($data)
    {
      //data ditemukan
      $vnim = $data['nim'];
      $vnama = $data['nama'];
      $valamat = $data['alamat'];
      $vprodi = $data['prodi'];
    }
  }
  else if ($_GET['hal'] == "hapus")
  {
    // hapus data
    $hapus = mysqli_query($conn, "DELETE FROM showroom_nama_tabel WHERE id_mobil = '$_GET[id]' ");
    if($hapus){
      echo "<script>
          alert('Hapus Data Suksess!!');
          document.location='index.php';
           </script>";
    }
  }
}

?>

      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>MODUL4 RIDWAN</title>
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
            class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
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

          

      <div class="container">
        <h1 class="text-center">Tambahkan Mobil</h1>
        <h2 class="text-center">Tambahkan Mobil</h2>

          <!-- Awal Card Form -->
          <div class="card mt-3">
            <div class="card-header bg-primary text-white">
              Form Input Mobil
            </div>
            <div class="card-body">
              <form method="post" action="">
                <div class="form-group">
                  <label>Nama Mobil</label>
                  <input type="text" name="imobil" value="<?=@$imobil?>" class="form-control" placeholder="Nama Mobil" required>
                </div>
                <div class="form-group">
                  <label>Nama Pemilik</label>
                  <input type="text" name="ipemilik" value="<?=@$ipemilik?>" class="form-control" placeholder=" Nama Anda" required>
                </div>
                <div class="form-group">
                  <label>Merk</label>
                  <input type="text" name="imerk" value="<?=@$imerk?>" class="form-control" placeholder="Merk" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Beli</label>
                  <input type="date" name="itanggal" value="<?=@$itanggal?>" class="form-control" placeholder="Tanggal" required>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="ideskripsi"  placeholder="Deskripsi"><?=@$ideskripsi?></textarea>
                </div>
                <br>
               <p>Status Pembayaran</p>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="ilunas" id="status_pembayaran">
                  <label class="form-check-label" for="flexRadioDefault1"> Lunas
                  </label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="iblunas" id="status_pembayaran" checked>
                  <label class="form-check-label" for="flexRadioDefault2"> Belum Lunas 
                  </label>
                </div>
                <br>
              </form>
              <button type="submit" class="btn btn-primary">Selesai</button>
              <br>
            </form>
          </div>
        </div>
        <!-- Akhir Card Form -->

        