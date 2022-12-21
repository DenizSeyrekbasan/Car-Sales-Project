<?php 
require_once("baglan.php");
?>

<!DOCTYPE html>
<html lang="en">
    
  <?php 
  require_once("header.php");
  ?>
  <title>DenizOtomativ-Arac-Detay</title>

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
          <a class="navbar-brand" href="index.php"><h2>DENIZ <em>otomativ</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="index.php">Anasayfa
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="cars.php">Arabalar</a></li>
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
    <?php 
            $arac=$db->prepare("SELECT * FROM ilan_bilgileri WHERE ilan_id=:ilan_id");
            $arac->execute([
            'ilan_id'=>$_GET['ilan_id']
            ]);
            
            while($arac_bilgi_cek_deneme=$arac->fetch(PDO::FETCH_ASSOC))
            {?>
                 <div class="page-heading about-heading header-text" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
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
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">

              <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fiyat</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_fiyat'] ?></strong>
                    </div>
               </li>

              
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">İlan id</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_id'] ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Marka</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_marka']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Seri</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_seri']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Model</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_model']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Yıl</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_yil']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Yakıt</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_yakit']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Vites</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_vites']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Araç Durumu</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_arac_durumu']?></strong>
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">KM</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_km']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Kasa Tipi</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_kasa_tipi']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Motor Gücü</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_motor_gucu']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Motor Hacmi</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_motor_hacmi']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Çekiş</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_cekis']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Renk</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_renk']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Kimden</span>

                         <strong class="pull-right"><?php echo $arac_bilgi_cek_deneme['ilan_kimden']?></strong>
                    </div>
               </li>
              </ul>
            </form>
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
                <strong><?php echo $arac_bilgi_cek_deneme['satici_isim']?></strong>
              </p>

              <p>
                <span>Soyadı</span>
                <br>
                <strong>
                <?php echo $arac_bilgi_cek_deneme['satici_soyisim']?>
                </strong>
              </p>

              <p>
                <span>Telefon</span>
                <br>
                <strong>
                <?php echo $arac_bilgi_cek_deneme['satici_telefon']?>
                </strong>
              </p>

              <p>
                <span>E-posta</span>
                <br>
                <strong><?php echo $arac_bilgi_cek_deneme['satici_eposta']?>
              </strong>
              </p>

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


   

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name denizseyrekbasan.com</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
