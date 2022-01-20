<?php 
include 'konek.php';
$sql="select * from apotek order by nama desc";
    $hasil=mysqli_query($kon,$sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah>0){
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

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
    <!--untuk home-->
    <section class="jumbotron">
      <h2 style="font-family: roboto;font-size: 30px; padding-left: 120px; color: aliceblue;padding-top: 60px;">SELAMAT DATANG DI</h2>
      <h2 style="color: darkorange; font-family: roboto; font-size: 30px; padding-left: 120px; padding-top: 7px;">APOTEK YOSPAN</h2>
      <p style=" padding-left: 120px; color: aliceblue; font-family: roboto;font-size: 18px; width: 850px;padding-top: 18px;">Di website kami berisikan informasi apotek seperti lokasi apotek, obat-obatan, dan jadwal dokter pada masing-masing apotek yg ditampilkan pada website ini.</p>
  </div>
      <center><div class="container">
        <div class="row row-cols-2 row-cols-lg2 g-1 g-lg-2 ">
          <?php 
        while ($data = mysqli_fetch_array($hasil)): ?><div style="padding-bottom:70px;" class="col">

            <div class="p-3 ">
                <div class="card">
                    <img src="img/<?php echo $data['gambar'];?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $data['nama'];?></h5>
                      <p class="card-text"><?php echo $data['keterangan']; ?></p><br>
                      <a href="<?php echo $data['maps']; ?>" class="btn btn-success">Masuk</a>
                    </div>
                  </div>
            </div>
          </div>
          
          <?php 
        endwhile;}
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