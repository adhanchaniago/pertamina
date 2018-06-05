<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<meta name="description" content="Sistem Informasi Penerimaan Karyawan Kemkominfo Provinsi Bangka Belitung">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	 <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/public/image/pertamina.png') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/public/bootstrap/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/pertamina/css/main.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/public/font-awesome/css/font-awesome.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/public/dist/css/AdminLTE.min.css"); ?>">
	<link async href="http://fonts.googleapis.com/css?family=Passero%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

	  <script src="<?php echo base_url("assets/public/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
	  <script src="<?php echo base_url("assets/public/bootstrap/js/bootstrap.min.js"); ?>"></script>
	  <script type="text/javascript"> 
	      var current_url = '<?php echo current_url(); ?>';
	  </script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Archivo+Black|Nunito');

		.font-opd {
			font-size: 3em;
			margin-top: 10px;
			font-weight: bold;
			font-family: arial;
		}
		.text {
			font-size: 2em;
			margin-top: 10px;
			font-weight: bold;
			font-family: arial;
		}
		.blue-bg {
			background: #2B6BAF;
		}
		.white {
			color: white;
			font-size: 1.2em;
			text-shadow: 1px 0px 1px black;
		}
		.welcome {
			color: white;
			text-shadow: 1px 0px 1px black;
    		font-weight: bold;
		}
		.radius {

			border-radius: 40px 8px 30px 9px;
		}
		.enjoy-css {
		  -webkit-box-sizing: content-box;
		  -moz-box-sizing: content-box;
		  box-sizing: content-box;
		  cursor: pointer;
		  border: none;
		  font: normal 2em/normal "arial", Helvetica, sans-serif;
		  color: rgba(255,255,255,1);
		  text-align: center;
		  -o-text-overflow: clip;
		  text-overflow: clip;
		  text-shadow: 0 1px 0 rgb(204,204,204) , 0 2px 0 rgb(201,201,201) , 0 3px 0 rgb(187,187,187) , 0 4px 0 rgb(185,185,185) , 0 5px 0 rgb(170,170,170) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
		  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		}

		.enjoy-css:hover {
		  color: #EEB715;
		  text-shadow: 0 1px 0 rgba(255,255,255,1) , 0 2px 0 rgba(255,255,255,1) , 0 3px 0 rgba(255,255,255,1) , 0 4px 0 rgba(255,255,255,1) , 0 5px 0 rgba(255,255,255,1) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 -5px 10px rgba(0,0,0,0.247059) , 0 -7px 10px rgba(0,0,0,0.2) , 0 -15px 20px rgba(0,0,0,0.14902) ;
		  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		}

		.shadow {
    		box-shadow: 2px 1px 10px black;
		}

		.text-shadow {
    		color: black;
		}

		.trigonal {
			 background: url('<?php echo base_url("assets/images/trigonal.png"); ?>') repeat; 
		}
		.center {
			margin-right: auto;
			margin-left:auto;
		}
		.fullscreen-bg {
		    position: fixed;
		    top: 0;
		    right: 0;
		    bottom: 0;
		    left: 0;
		    overflow: hidden;
		    z-index: -100;
		}

		.fullscreen-bg__video {
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		}
		.atas {
			padding-top: -300px;
		}
		.border{
			border: 1pt solid red;
		}
		.kiri{
			width: 700px;
			height: 200px;
			margin-left: auto;
		}
		.kanan{
			width: 700px;
			height: 200px;
			padding-left: 30px;
			margin-right: auto;
			margin-top: -205px;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
                <img src="<?php echo base_url("assets/public/image/logo.png"); ?>" class="logo-head" alt="Logo" width="300">
			</div>
			<div class="col-md-2 pull-right" style="margin-top: 15px; margin-left: 50px;">
				<a href="<?php echo base_url('login') ?>"><h3 class="profile-username text-center font-arial enjoy-css">Login</h3></a>
			</div>
			<div class="col-md-1 pull-right" style="margin-top: 15px; ">
				<a href="<?php echo base_url('main') ?>"><h3 class="profile-username text-center font-arial enjoy-css">Beranda</h3></a>
			</div>
		</div>
	
	</nav>
	<div class="container">
		<div class="row">			
	  		<div class="col-md-12 center">
	              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
	                <ol class="carousel-indicators">
	                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
	                </ol>
	             	<div class="carousel-inner fullscreen-bg">
	                  <div class="item active">
	                    <img width="100%" src="<?php echo base_url("assets/pertamina/img/gambar.png"); ?>" alt="Second slide">
	                    <div class="border" style="margin-top: -950px;">
	                    <p class="text-center font-opd">Pekerjaan Hari Ini</p>
	                     <div class="kiri text">nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf</div> 
	                     <div class="kanan text">nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf</div> 
	                    </div>
	                  </div>

					  <div class="item ">
	                    <img width="100%" src="<?php echo base_url("assets/pertamina/img/gambar.png"); ?>" alt="Second slide">
	                    <div style="border: 1pt solid black; margin-top: -950px;">
	                    <p class=" text-center font-opd">Pekerjaan Hari Ini</p>
	                     <div class="kiri text">nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf</div> 
	                     <div class="kanan text">nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf  nadnfanfkjSecond Slide asfhfjhjkafhdfadnfknaknf</div> 
	                    </div>
	                    </div>
	                  </div>
	                </div> 
	                 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	                  <span class="fa fa-angle-left" style="color: black"></span>
	                </a>
	                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	                  <span class="fa fa-angle-right" style="color: black"></span>
	                </a>
	              </div>
	  		</div>		
		</div>
	</div>
<div class="navbar navbar-inverse navbar-fixed-bottom">
   <div class="container">
      <small class="navbar-text pull-left">&copy; Sistem Monitoring Pertamina Provinsi Kepuluan Bangka Belitung</small>
      <small class="navbar-text pull-right">Develop By TeitraMega</small>
   </div>
</div>	




<div class="modal animated fadeIn " id="modal-kontak" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"><i class="fa fa-info-circle"></i> Kontak Kami!</h3>
                <span> </span>    
            </div>
            <div class="modal-body">
				<p>
					<b>Untuk info lebih lanjut dapat menghubungi Kami di :</b>
				</p>
				<p>
					Telepon : (0718) 7362017
				</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>

            </div>
        </div>
    </div>
</div>

</body>
</html>