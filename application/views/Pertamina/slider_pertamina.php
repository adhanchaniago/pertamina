<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php  echo (isset($title)) ? $title : "Sistem KEMKOMINFO"; ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/public/image/pertamina.png') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/pertamina/Slider/slider/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/pertamina/Slider/slider/css/full-slider.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/pertamina/Slider/file/clock.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/pertamina/Slider/file/font.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/pertamina/Slider/file/normalize.min.css"); ?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar_bg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/pertamina/Slider/Pertamina.png"); ?>" width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
         <!-- menu navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="navbar-nav ml-auto" >
              <div class="clock-bg">
                <div id="clock" class="clock">
                  <div class="time">{{ time }}</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="20000">
      <div class="carousel-inner" role="listbox">
        <!-- ini adalah isi yang di loop -->
        
          <?php include('dashboard/list_pekerjaan.php') ?>
          
        <!-- ini adalah isi yang di loop -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next op1" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  <footer class="py-0 footer_bg">
  <div class="container">
  <p class="m-0 text-center text-white" align="center">Copyright &copy; Teitra Mega 2018</p>
  </div>
  </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url("assets/pertamina/Slider/slider/vendor/jquery/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/pertamina/Slider/slider/vendor/jquery/jquery-2.1.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/pertamina/Slider/slider/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script> 
    <script src="<?php echo base_url("assets/pertamina/Slider/file/vue.min.js"); ?>"></script> 
    <script src="<?php echo base_url("assets/pertamina/Slider/file/clock.js"); ?>"></script>
    <script>
       setTimeout(function(){
           location.reload();
       }, 40000); 

         $('.carousel').carousel({
          interval: 2000 * 10
          });
    </script>
  </body>
