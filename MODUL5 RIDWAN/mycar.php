<?php 
session_start();

//koneksi ke database
$hostname   = 'localhost';
$username   = 'root';
$pass   = '1202200297';
$dbname     = 'wad_modul4_ridwan';
$conn    = mysqli_connect($hostname,$username,$pass,$dbname);
//variabel
$err        = "";
$email   = "";
$remember  = "";
?>

    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MODUL5 RIDWAN</title>
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

        <!-- product -->
        <div class="container-fluid jenis pt-5 pb-5 bg-light">
          <div class="container text-center">
            <h2 class="display-3" id="jenis"> Jenis Mobil</h2>
            <div class="row pt-4 gx-4 gy-4">
              <div class="col-md-4">
                <div class="card crop-img">
                  <img
                    src="img/lexus.jpg"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                  <div class="card-body">
                    <h5 class="card-title"> LEXUS</h5>
                    <p class="card-text">
                      Mulai Dari IDK 500.000/ Hari
                    <br><br>
                    Spesifikasi :
                    <ol class="list-group">
                      <li class="list-group-item">4 Kursi</li>
                      <li class="list-group-item">1200 cc</li>
                      <li class="list-group-item">Matic</li>
                    </ol>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card crop-img">
                  <img
                    src="img/lexus.jpg"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                  <div class="card-body">
                    <h5 class="card-title"> LEXUS</h5>
                    <p class="card-text">
                      Mulai Dari IDK 800.000/ Hari
                      <br><br>
                      Spesifikasi :
                      <ol class="list-group">
                        <li class="list-group-item">5 Kursi</li>
                        <li class="list-group-item">2000 cc</li>
                        <li class="list-group-item">Matic</li>
                      </ol>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card crop-img">
                  <img
                    src="img/lexus.jpg"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                  <div class="card-body">
                    <h5 class="card-title"> LEXUS</h5>
                    <p class="card-text">
                      Mulai Dari IDK 400.000/ Hari
                      <br><br>
                      Spesifikasi :
                      <ol class="list-group">
                        <li class="list-group-item">4 Kursi</li>
                        <li class="list-group-item">1200 cc</li>
                        <li class="list-group-item">Matic</li>
                      </ol>
                    </p>
                  </div>
                </div>
              </div>