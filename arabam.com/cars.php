<?php 
require_once("baglan.php");
?>

<!DOCTYPE html>
<html lang="en">

  <?php 
  require_once("header.php");
  ?>
  <title>Ilanlar</title>

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
                <li  class="nav-item active"><a class="nav-link" href="cars.php">İlanlar</a></li>
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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>İlanlar</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
             <div class="contact-form">
                <form action="#">
                     <label>Used/New:</label>
                     
                     <select class="form-control">
                          <option value="">All</option>
                          <option value="new">New vehicle</option>
                          <option value="used">Used vehicle</option>
                     </select>

                     <label>Vehicle Type:</label>
                     
                     <select class="form-control">
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                     </select>

                     <label>Make:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Model:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Price:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Mileage:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Engine size:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Power:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Fuel:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Gearbox:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Doors:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>Number of seats:</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <button type="submit" class="filled-button btn-block">Search</button>
                </form>
             </div>
          </div>
            
          <div class="col-md-9">
            <div class="row">
            <?php 
            $arac=$db->prepare("SELECT * FROM ilan_bilgileri");
            $arac->execute(array());
            
            while($arac_bilgi_cek_deneme=$arac->fetch(PDO::FETCH_ASSOC))
            {?>
              
              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php?ilan_id=<?php echo $arac_bilgi_cek_deneme['ilan_id'] ?>"><img width="450" height="250" src="resim/<?php echo $arac_bilgi_cek_deneme['arac_resim_ad'] ?>" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4><?php echo $arac_bilgi_cek_deneme['ilan_marka']?><?php echo $arac_bilgi_cek_deneme['ilan_seri']?></h4></a>

                    <h6><?php echo $arac_bilgi_cek_deneme['ilan_fiyat']?></h6>

                    <p><?php echo $arac_bilgi_cek_deneme['ilan_motor_gucu']?> &nbsp;/&nbsp; <?php echo $arac_bilgi_cek_deneme['ilan_yakit']?> &nbsp;/&nbsp; <?php echo $arac_bilgi_cek_deneme['ilan_yil']?> &nbsp;/&nbsp; <?php echo $arac_bilgi_cek_deneme['ilan_arac_durumu']?></p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> <?php echo $arac_bilgi_cek_deneme['ilan_km']?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> <?php echo $arac_bilgi_cek_deneme['ilan_motor_hacmi']?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> <?php echo $arac_bilgi_cek_deneme['ilan_vites']?></strong>
                    </small>
                  </div>
                  </div>
              </div>
            <?php } ?>
            
            <div class="col-md-12">
                <ul class="pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
