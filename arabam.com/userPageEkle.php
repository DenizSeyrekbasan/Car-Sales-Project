<?php 
session_start();

if(!isset($_SESSION['login']))
{
    echo "Oturumunuz sonlanmıştır..Tekrar giriş yapınız !";
    header("Refresh:1;Url=uyeLogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>İlan Ekle</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        <style>
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300,700);
* {
box-sizing: border-box;
font-family: Quicksand, sans-serif;
}
body {
background-color: #797979;
color: #444;


font-size: 18px;
font-weight: 400;
margin: 0;
padding: 0;
}
.wrap {
margin: 15px;
max-width: 600px;
width: 100%;
}
.wrap form {
box-shadow: 0 1px 3px rgba(0,0,0,.3);
}
.form-header {
background-color: #45CAE6;
border-radius: 4px 4px 0 0;
padding: 1em;
}
.form-header h2 {
color: #fff;
font-weight: 700;
font-size: 1.75em;
margin: 0;
}
.form-body {
background-color: #fff;
padding: 1em;
}
.form-body label,
.form-body input,
.form-body select,
.form-body textarea {
display: block;
width: 100%;
}
.form-body label {
font-size: .8em;
font-weight: 700;
line-height: 1;
margin: .75em 0 .25em;
}
.form-body input,
.form-body select,
.form-body textarea {
background-color: #f4f4f4;
border: none;
border-radius: 4px;
padding: .25em;
}
.form-body fieldset {
border: none;
margin: 0 0 1em;
padding: 0;
}
.form-body fieldset:last-of-type {
margin-bottom: 0;
}
.form-body fieldset legend {
font-size: 1.25em;
font-weight: 700;
}
.form-footer {
background-color: #e2e2e2;
border-radius: 0 0 4px 4px;
padding: 1em;
}
.form-footer input[type="submit"] {
background-color: #F24865;
border: none;
border-radius: 4px;
color: #fff;
padding: 1em 1.5em;
}
/******** Subscription option actions ********/
.sub-opts input[name="subscription"] {
display: none;
}
.sub-opts input[name="subscription"] + .sub-opt {
background-color: #f4f4f4;
border-radius: 4px;
font-weight: 700;
}
.sub-opts input[name="subscription"]:checked + .sub-opt {
background-color: #09C775;
color: #fff;
}
.sub-opts input[name="subscription"] + .sub-opt .sub-label .fa {
display: none;
}
.sub-opts input[name="subscription"]:checked + .sub-opt .sub-label .fa {
display: inline-block;
}
.sub-opts .sub-opt .sub-label {
display: block;
cursor: pointer;
font-size: 1em;
padding: 1em;
}
.sub-opts .sub-opt .sub-label span.price {
display: inline-block;
float: right;
}</style>
   

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="userPage.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DENIZ OTOMATIV</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="userPage.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ana Sayfa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                İşlemler
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>İlan Ayarları</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="userPageGoruntule.php">İlanlarımı Görüntüle</a>
                        <a class="collapse-item" href="#">İlan Ekle</a>    
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Üyelik Ayarları</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="userPageProfil.php">Profilimi Görüntüle</a>
                    </div>
                </div>
            </li>

            

           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?php echo $_SESSION['user_name'] ?></b></span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Çıkış Yap
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><b>İlan Ekle</b></h1>
                    </div>

                    

<div>
<div class="">
<form action="islemler.php"method="POST"enctype="multipart/form-data">

<div class="form-body">
<fieldset>
<legend><i class='fas fa-car'></i> Araç Bilgileri</legend>

<label for="fname">Marka</label>
<input type="text" id="fname" name="ilan_marka" required="">

<label for="lname">Seri</label>
<input type="text" id="lname" name="ilan_seri" required="">

<label for="address">Model</label>
<input type="text" id="address" name="ilan_model" required="">

<label for="city">Yıl</label>
<input type="text" id="city" name="ilan_yil" required="">

<label for="city">Yakıt Türü</label>
<input type="text" id="city" name="ilan_yakit" required="">

<label for="city">Vites</label>
<input type="text" id="city" name="ilan_vites" required="">

<label for="city">Araç Durumu(0/2.el)</label>
<input type="text" id="city" name="ilan_arac_durumu" required="">

<label for="city">KM</label>
<input type="text" id="city" name="ilan_km" required="">

<label for="city">Kasa Tipi</label>
<input type="text" id="city" name="ilan_kasa_tipi" required="">

<label for="city">Motor Gücü</label>
<input type="text" id="city" name="ilan_motor_gucu" required="">

<label for="city">Motor Hacmi</label>
<input type="text" id="city" name="ilan_motor_hacmi" required="">

<label for="city">Çekiş Türü</label>
<input type="text" id="city" name="ilan_cekis" required="">

<label for="city">Renk</label>
<input type="text" id="city" name="ilan_renk" required="">

<label for="city">Kimden (Sahibinden/Galeri)</label>
<input type="text" id="city" name="ilan_kimden" required="">

<label for="city">Fiyat</label>
<input type="text" id="city" name="ilan_fiyat" required="">

<label for="city">Resim Seçiniz</label>
<input type="file"  class="btn btn-primary" id="city" name="yukle_resim" required="">

</fieldset>
<!-- Satici Bilgileri -->
<fieldset>

<legend><i class="fa fa-user"></i>Satıcı Bilgileri</legend>

<label for="email">Adı</label>
<input type="text" id="email" name="satici_isim" required="">

<label for="email">Soyadı</label>
<input type="text" id="email" name="satici_soyisim" required="">

<label for="email">Telefon</label>
<input type="text" id="email" name="satici_telefon" required="">

<label for="email">E-Posta</label>
<input type="text" id="email" name="satici_eposta" required="">

</fieldset>


</div>
<br>
<input type="submit" style="width:500px;" class="btn btn-primary" name="ilanEkle" value="ilan Ekle">
<br>
<br>
  
</form>

                        
</div>

                        

                        

                        


           

          

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Çıkış Yapıyorsunuz..</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">"Çıkış Yap"ı seçerseniz oturumunuz sonlancaktır.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal Et</button>
                    <a class="btn btn-primary" href="userPageLogout.php">Çıkış Yap</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>