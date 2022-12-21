<?php 
require_once("baglan.php");
?>
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

    <title>Kullanıcı Sayfası</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                        <a class="collapse-item" href="userPageEkle.php">İlan Ekle</a>
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
                        <a class="collapse-item" href="#">Profilimi Görüntüle</a>
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
                        <h1 class="h3 mb-0 text-gray-800">Merhaba <b><?php echo $_SESSION['user_name']?></b></h1>
                    </div>

                    

                        <div>
                        <?php 
            $arac=$db->prepare("SELECT * FROM ilan_bilgileri WHERE ilan_id=:ilan_id");
            $arac->execute([
            'ilan_id'=>$_GET['ilan_id']
            ]);
            
            while($arac_bilgi_cek_deneme=$arac->fetch(PDO::FETCH_ASSOC))
            {?>
                 <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
            <h2><?php echo $arac_bilgi_cek_deneme['ilan_marka']?><?php echo $arac_bilgi_cek_deneme['ilan_seri']?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
              <img src="resim/<?php echo $arac_bilgi_cek_deneme['arac_resim_ad'] ?>" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="-" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="-" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="-" alt="" class="img-fluid">
                </div>
                <br>
              </div>

              <div class="col-sm-4 col-6">
                <div>
                  <img src="-" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="-" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="-" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>
          </div>
          
          





          <div class="col-md-6">
            <form action="islemler.php" method="POST" class="form">
            <input type="submit" name="UyeIlanUpdateIslemi" class="btn btn-primary" value="İlanı Düzenle">
            <input style="width: 120px;" type="submit" name="UyeIlanUpdateIslemi" class="btn btn-danger" value="İlanı Sil">
              <ul class="list-group list-group-flush">
              
              <br>
              <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fiyat</span>
                        <input style="float:right" type="text" name="ilan_fiyat" value="<?php echo $arac_bilgi_cek_deneme['ilan_fiyat'] ?>">
                    </div>
               </li>

              
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">İlan id</span>
                        
                        <input style="float:right" type="hidden" name="ilan_id" value="<?php echo $arac_bilgi_cek_deneme['ilan_id'] ?>" >
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Marka</span>
                         <input style="float:right" type="text" name="ilan_marka" value="<?php echo $arac_bilgi_cek_deneme['ilan_marka'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Seri</span>
                         <input style="float:right" type="text" name="ilan_seri" value="<?php echo $arac_bilgi_cek_deneme['ilan_seri'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Model</span>
                         <input style="float:right" type="text" name="ilan_model" value="<?php echo $arac_bilgi_cek_deneme['ilan_model'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Yıl</span>
                         <input style="float:right" type="text" name="ilan_yil" value="<?php echo $arac_bilgi_cek_deneme['ilan_yil'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Yakıt</span>
                         <input style="float:right" type="text" name="ilan_yakit" value="<?php echo $arac_bilgi_cek_deneme['ilan_yakit'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Vites</span>
                         <input style="float:right" type="text" name="ilan_vites" value="<?php echo $arac_bilgi_cek_deneme['ilan_vites'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Araç Durumu</span>
                         <input style="float:right" type="text" name="ilan_arac_durumu" value="<?php echo $arac_bilgi_cek_deneme['ilan_arac_durumu'] ?>">
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">KM</span>
                         <input style="float:right" type="text" name="ilan_km" value="<?php echo $arac_bilgi_cek_deneme['ilan_km'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Kasa Tipi</span>
                         <input style="float:right" type="text" name="ilan_kasa_tipi" value="<?php echo $arac_bilgi_cek_deneme['ilan_kasa_tipi'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Motor Gücü</span>
                         <input style="float:right" type="text" name="ilan_motor_gucu" value="<?php echo $arac_bilgi_cek_deneme['ilan_motor_gucu'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Motor Hacmi</span>
                         <input style="float:right" type="text" name="ilan_motor_hacmi" value="<?php echo $arac_bilgi_cek_deneme['ilan_motor_hacmi'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Çekiş</span>
                         <input style="float:right" type="text" name="ilan_cekis" value="<?php echo $arac_bilgi_cek_deneme['ilan_cekis'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Renk</span>
                         <input style="float:right" type="text" name="ilan_renk" value="<?php echo $arac_bilgi_cek_deneme['ilan_renk'] ?>">
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Kimden</span>
                         <input style="float:right" type="text" name="ilan_kimden" value="<?php echo $arac_bilgi_cek_deneme['ilan_kimden'] ?>">
                    </div>
               </li>
              </ul>
              
            
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Satıcı ile iletişim kur</h2>
            </div>
            
            <div class="left-content">

              <p>
                <span>Adı</span>
                <br>
                <input type="text" name="satici_isim" value="<?php echo $arac_bilgi_cek_deneme['satici_isim'] ?>">
            </p>

              <p>
                <span>Soyadı</span>
                <br>
                <input type="text" name="satici_soyisim" value="<?php echo $arac_bilgi_cek_deneme['satici_soyisim'] ?>">
            </p>

              <p>
                <span>Telefon</span>
                <br>
                <input type="text" name="satici_telefon" value="<?php echo $arac_bilgi_cek_deneme['satici_telefon'] ?>">
            </p>

              <p>
                <span>E-posta</span>
                <br>
                <input type="text" name="satici_eposta" value="<?php echo $arac_bilgi_cek_deneme['satici_eposta'] ?>">
            </p>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>İlan Detayları</h2>
            </div>

            <div class="left-content">
              <p>- Ön Kol Dayama<br>- Üç Bölgeli Otomatik Klima, Isı Kontrollü Arka Orta Havalandırma Kanalı<br>- Arkada Aydınlatmalı USB-C Çıkışları<br>- Kablosuz Şarj Ünitesi<br>-Geri Görüş Kamerası<br>- Koyu Karartılmış Arka Camlar<br>- Ön Koltuklarda LED Ayak Aydınlatmaları<br>-Full Link (Apple CarPlay, MirrorLink, Android Auto)</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="section-heading">
              <h2>Araç Ekstraları</h2>
            </div>
            
            <div class="left-content">
              <p>- ABS <br>-Deri koltuk <br>-Start/Stop<br>-Elektrikli koltuk ayarlama<br>-Xenon farlar</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    




            <?php } ?>
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

</body>

</html>