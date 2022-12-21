<?php 
require_once("baglan.php");
?>



<title>Uye Kayit</title>
  <head>le="
    <div  class="page-heading about-heading header-text"style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg)"></div>
    
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='#' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } 
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 20px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}</style>
                  
                  
  </head>
  <header style="top:0px";class="">
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
                      <a class="dropdown-item" href="uyeLogin.php">Giriş Yap</a>
                      <a class="nav-item active" href="uyeLogin.php">Üye Ol</a>
                      <a class="dropdown-item" href="adminLogin.php">Admin Giriş</a>
                      </div>
                </li>
              </ul>
          </div>
        </div>
      </nav>
    </header>
  

    

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
    

    <body className='snippet-body'>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Kurucu:Deniz</span><span class="text-black-50">seyrekbasand@gmail.com</span><span> </span></div>
            
        </div>
        <div style="top:100px;" class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Üye olun,Deniz OTOMATIV'in parçası olun ! !</h4>
                </div>


                <form action="islemler.php"method="POST">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Ad</label><input type="text"name="uye_adi" class="form-control"></div>
                    <div class="col-md-6"><label class="labels">Soyad</label><input type="text"name="uye_soyadi" class="form-control"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Telefon</label><input type="text" name="uye_telefon" class="form-control"></div>
                    <div class="col-md-12"><label class="labels">E-Posta</label><input type="text" name="uye_email" class="form-control"></div>
                    <div class="col-md-12"><label class="labels">TC</label><input type="text" name="uye_tc" class="form-control"></div>
                    <div class="col-md-12"><label class="labels">Adres</label><input type="text" name="uye_adres" class="form-control"></div>
                    <div class="col-md-12"><label class="labels">Şifre</label><input type="text" name="uye_sifre" class="form-control"></div>
                    
                </div>
                <input class="btn btn-primary profile-button" name="uyeEkle" type="submit" value="Üye Ol">
              </form>
                
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

    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

