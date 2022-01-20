<?php 
include 'konek.php';
error_reporting(0);
$sql="select * from apotek order by nama desc";
    $hasil=mysqli_query($kon,$sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah>0){
    ?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="drug.css" />

    <title>APOTEK YOSPAN</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <img src="./img/logo.png" alt="" width="100" height="45" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php"><b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor.php"><b>DOCTOR</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="drug.php"><b>DRUG</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php"><b>ABOUT</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <section class="jumbotron text-center">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-1 g-1 g-2 lg-3 ">
          <div class="col">
            <div class="p-3 border bg-light">
                <div class="card-body">
                  <h5 class="card-title">DAFTAR OBAT DAN KETERANGAN</h5><br>
                  <table class="table" style="height: 100%;">
                    <thead style="font-family: roboto; font-size: 14px;">
                      <tr>
                        <th style="padding-bottom: 20px;" scope="col">OBAT</th>
                        <th  style="padding-bottom: 20px;" scope="col">GOLONGAN</th>
                        <th  style="padding-bottom: 20px;" scope="col">KATEGORI</th>
                        <th style="padding-bottom: 20px;" scope="col">MANFAAT</th>
                        <th  style="padding-bottom: 20px;" scope="col">DIGUNAKAN OLEH</th>                        
                      </tr>
                    </thead>
                    <?php 
                    $cm="select * from obat  order by obat desc";
    $h=mysqli_query($kon,$cm);
                     ?>
                    <tbody style="font-size: 12px; font-family: roboto; text-align: center;">
                      <?php while ($obt = mysqli_fetch_array($h)): ?><tr >
                        <th style="padding-top: 20px;padding-bottom: 20px; width: 15px;" scope="row"><?php echo $obt['obat'];?></th>
                        <td style="padding-top: 20px;padding-bottom: 20px"><?php echo $obt['golongan'];?></td>
                        <td style="padding-top: 20px;padding-bottom: 20px"><?php echo $obt['kategori'];?></td>
                        <td style="padding-top: 20px;padding-bottom: 20px"><?php echo $obt['manfaat'];?></td>
                        <td style="padding-top: 20px;padding-bottom: 20px"><?php echo $obt['digunakan'];?></td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
    </div>
    </section>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html><?php } else{}?>