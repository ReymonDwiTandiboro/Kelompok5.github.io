<?php 
 include '../konek.php';
session_start();
 
if (isset($_SESSION['username'])) {
    

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>REYMOND</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
         <a class="navbar-brand">
          <img style="height:200px;" src="logo.png" >
          
          <span class="hidden-folded inline">Apotek <br>Yospan</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Main</small>
                </li>
                
                <li>
                  <a href="dashboard.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>
            
                
            
               
                <li class="nav-header hidden-folded">
                  <small class="text-muted">INPUT DATA</small>
                </li>
            
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="'../assets/images/i_6.svg'"></span>
                      </i>
                    </span>
                  <span class="nav-text">PILIH</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="form1.php" >
                        <span class="nav-text">INPUT APOTEK</span>
                      </a>
                    </li>
                    <li>
                      <a href="form2.php" >
                        <span class="nav-text">INPUT DOKTER</span>
                      </a>
                    </li>
                    <li>
                      <a href="form3.php" >
                        <span class="nav-text">INPUT OBAT</span>
                      </a>
                    </li>
                    
                  </ul>
                </li>
            
            
                
            
              </ul>
          </nav>
      </div>
      
    </div>
  </div>
  <!-- / -->
 <?php
if (isset($_POST['submit'])) {
 

// Ambil Data yang Dikirim dari Form upload
$ok = rand(10,100).uniqid();
$asal = $_POST['asal'];
$nama = $_POST['namadokter'];
$bidang = $_POST['bidang'];
$jam = $_POST['jam'];
$hari = $_POST['hari'];// Set path folder tempat menyimpan gambarnya
// Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG

    if(!empty($nama)){
      // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query = "INSERT INTO doctor(okl,asal,nama,bidang,hari,jam) VALUES('".$ok."','".$asal."','".$nama."','".$bidang."','".$hari."','".$jam."')";
      // Eksekusi/ Jalankan query dari variabel $query
      $sql = mysqli_query($kon, $query);
      if($sql){
        // Jika Sukses, Lakukan :   
        
         echo " OKE SUKSES <br><a href='doc.php'>Kembali Ke Form</a>";// Redirectke halaman index.php
      }
      else {
        echo "asu gak bisa";
      }
    }
   }
  ?>


  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar collapse -->
            
            <!-- / navbar collapse -->
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              
              <span class="avatar w-32"><a href="logout.php">
                    <img src="../assets/images/logout.png" alt="..."></a>
                  </span>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        
       
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
  <div class="row"><center>
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h2>INPUT DATA DOKTER</h2>
          <small><h6 style="font-size:12px; color: white;">Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group</h6>untuk melakukan input data diharapkan agar sesuai data yang diberikan agar tidak terjadi kesalahan data.<br><h6 style="font-size:12px; color: white;">Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group</h6></small>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" action="form2.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Asal Dokter</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  name="asal" placeholder="Asal Dokter">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Nama Dokter</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  name="namadokter" placeholder="Nama Dokter">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Bidang Dokter</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="bidang" placeholder="Bidang dokter">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Jam Kerja</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="jam" placeholder="Jam Dokter">
            </div>
           <div class="form-group">
              <label for="exampleInputFile">Hari Kerja</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="hari" placeholder="Hari kerja">
            </div>
            <button type="submit" name="submit" class="btn white m-b">Submit</button>
          </form>
        </div>
      </div>
    </div>
   
   </center>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->


<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="../libs/jquery/underscore/underscore-min.js"></script>
  <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="../libs/jquery/PACE/pace.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>

  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
<?php } else {
  header("Location: index.php");
  echo "<script>alert('belum login gblk. Silahkan pulang!')</script>";

}  ?>