<?php 
require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">

  <?php 
  require_once("header.php");
  ?>
  <title>DenizOtomativ</title>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>DENIZ <em>otomotiv</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Anasayfa
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="cars.php">İlanlar</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">İletişim</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Giriş Yap</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="uyeLogin.php">Giriş Yapın</a>
                      <a class="dropdown-item" href="adminLogin.php">Admin Giriş</a>
                    </div>
                </li>
              </ul>
          </div>

        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            
            <h2>Hayalinizdeki araca sahip olun!</h2>
            <h4>Sahibinden temiz ve guvenilir araçlar DenizOtomotiv'de</h4>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>çevreci seçim yeni elektrikli DenizOtomotiv'de</h4>
            <h2>Hayalinizdeki araca sahip olun!</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>müsteri memnuniyeti ve güven DenizOtomotiv'de</h4>
            <h2>Hayalinizdeki araca sahip olun!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Son Eklenen ilanlar</h2>
              <a href="cars.php">Tüm ilanlar <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          
          <?php 
          $arac=$db->prepare("SELECT * FROM ilan_bilgileri ORDER BY ilan_id DESC limit 4");
          $arac->execute();
          $sayac=0;
          
          while($arac_bilgi_cek=$arac->fetch(PDO::FETCH_ASSOC))
          {?>
              
                <div class="col-lg-4 col-md-6">
                <div class="product-item">
                  <a href="car-details.php?ilan_id=<?php echo $arac_bilgi_cek["ilan_id"] ?>"><img width="450" height="250" src="resim/<?php echo $arac_bilgi_cek["arac_resim_ad"] ?>" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4><?php echo $arac_bilgi_cek["ilan_marka"] ?><?php echo $arac_bilgi_cek["ilan_seri"] ?></h4></a>
    
                    <h6><?php echo $arac_bilgi_cek["ilan_fiyat"] ?></h6>
    
                    <p><?php echo $arac_bilgi_cek["ilan_motor_gucu"] ?> &nbsp;/&nbsp;<?php echo $arac_bilgi_cek["ilan_yakit"] ?> &nbsp;/&nbsp; <?php echo $arac_bilgi_cek["ilan_yil"] ?> &nbsp;/&nbsp; <?php echo $arac_bilgi_cek["ilan_arac_durumu"] ?></p>
    
                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> <?php echo $arac_bilgi_cek["ilan_km"] ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i><?php echo $arac_bilgi_cek["ilan_motor_hacmi"] ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> <?php echo $arac_bilgi_cek["ilan_vites"] ?></strong>
                    </small>
                  </div>
                </div>
              </div>
      <?php } ?>
            
          

        </div>
      </div>
    </div>

   

    
   <?php
   require_once("footer.php"); 
   ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>