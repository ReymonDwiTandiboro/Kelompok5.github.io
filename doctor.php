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
    <link rel="stylesheet" href="doctor.css" />

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
    <!-- Jumbotron -->
    <!--untuk home-->        <?php 
        $dp =$_GET['dp'];
        if (!empty($dp)) { 
            $wl= $dp;
            $cm="select * from doctor  where asal like '%".$wl."%'";
    $h=mysqli_query($kon,$cm);
    $kk=mysqli_query($kon,$cm);
    $lwow=mysqli_query($kon,$cm);
    $hehe=mysqli_query($kon,$cm);
            ?> 
            <section class="jumbotron text-center">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-1 g-1 g-2 lg-3 ">
                <div style="padding-bottom:70px;" class="coli">
                    <div class="haha border bg-light">
                        <div class="card-body">
                  <h5 ><br><b>PRAKTER DOKTER APOTEK <?php echo $wl; ?></b></h5><br>
                    <table class="table table-borderless" style="height: 100%;">
                    <thead style="font-family: roboto; font-size: 14px; text-align: center;">
                       <tr><?php while ($dpp = mysqli_fetch_array($h)): ?>
         
                        <th style="padding-bottom: 10px;margin-top: 10;" scope="col"><?php echo $dpp['nama'];?></th>
                      <?php 
        endwhile;
?> </tr>
                    </thead>

                    <tbody style="font-size: 12px; font-family: roboto; text-align: center;">
                      
                     <tr><?php while ($knn = mysqli_fetch_array($kk)): ?>
                        <td style="padding-top: 1px;padding-bottom: 1px"><?php echo $knn['bidang'];?></td>
                       <?php 
        endwhile;
?></tr>
                      <tr><?php while ($win = mysqli_fetch_array($lwow)): ?>
                        <td style="padding-top: 1px;padding-bottom: 1px"><?php echo $win['jam'];?></td>
                        <?php 
        endwhile;
?>
                        </tr>
                      <tr><?php while ($oki = mysqli_fetch_array($hehe)): ?>
                        <td style="padding-top: 1px;padding-bottom: 1px"><?php echo $oki['hari'];?></td>
                        <?php 
        endwhile;
?></tr>
                        </tbody>

                        </table>
                </div>
            <?php
        }
        else { ?>
        <section class="jumbotron">
      <h2 style="font-family: roboto;font-size: 18px; padding-left: 600px; color: black;padding-top: 0px;"><br><br><b style="margin-bottom: 5px;">DOKTER PRAKTEK</b></h2>
      <center><div class="container">
        <div class="row row-cols-2 row-cols-lg2 g-1 g-lg-2 ">
        <?php
           
        
        while ($data = mysqli_fetch_array($hasil)): ?>
        <div style="padding-bottom:70px;" class="col">

            <div class="p-3 ">
                <div class="card">
                    <img src="img/<?php echo $data['gambar'];?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $data['nama'];?></h3>
                      <p class="card-text"><?php echo $data['keterangan']; ?></p><br>
                      <a href="doctor.php?dp=<?php echo $data['nama']; ?>" class="btn btn-success">Masuk</a>
                    </div>
                  </div>
            </div>
          </div>
          
          <?php 
        endwhile;} }
?>
        </div>
      </div>
      </center>
    </section>
  </section>

    <!-- Akhir Jumbotron -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
