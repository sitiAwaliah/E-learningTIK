<!-- //fungsi tambah mahasiswa -->
<?php
require 'function.php';//kita memanggil file function
$mahasiswa = query("SELECT * FROM siswa");
//tombol cari ditekan 
if (isset($_POST["cari"])){
  $mahasiswa = cari($_POST["keyword"]);
}

   ?>

   <!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Materi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<style>
  html{
	position: relative;
}
body{
  background: linear-gradient(#231F4B, #74434C);
	margin-bottom: 120px;
	margin-top: 30px;
  color: #eaeaea;
}
.navbar{
  background-color: #74434C;
  color:white;
}
.jumbotron{
	background-image: url(img/navbar.jpg);
	background-attachment: fixed;
	background-size: cover;
	background-position: 0 -100px;
	color: #eaeaea;
	}
.jumbotron img{
	width:80px;
	/* border:5px solid #eaeaea;
	box-shadow: 1px 1px 10px rgba(0,0,0,0.0); */
}
.jumbotron h1{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color:white;
	text-shadow:1px 1px 20px rgba(219, 0, 248, 0.793);	
  -webkit-text-stroke: 2px #74434C;
  
}
.jumbotron p{
  font-family : calibri;
  color:white;
  font-size: 20px;
  /* -webkit-text-stroke: 1.5px #74434C; */
  /* -webkit-text-stroke-color:#74434C;
  -webkit-text-stroke-width:0.75px;
  -webkit-text-fill-color:white; */
  /* text-shadow:1px 1px 20px rgba(219, 0, 248, 0.793);	 */

}
hr{
	width: 300px;
	border-top: 3px solid #999; 
}

section{
	min-height: 600px;
}
.contack{
	min-height:800px ;
}

footer{
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 2.5%;
	background-color:#333;
	padding-top: 10px;
}
footer p{
	color: #aaa;
	font-size: 15px;
}
</style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">

      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
    <a href="#home" class="navbar-brand page-scroll" color="white">Materi</a>
    <a href="#menuutama.php" class="navbar-brand page-scroll" color="white" align-items="right">Kembali</a>
    </div> 
    <div class="collapse navbar-collapse" id="bs-example-collapse-navbar-1">
  

   </div>
    </div>
    </nav>
    </div>
    <!--AKHIR NAVBAR -->
    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/logo.png" >
      <h1>E-Learning</h1>
      <p>Teknologi Informasi dan Komunikasi</p>
    </div>

    <!--  akhir jumbotron -->

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>VIDEO</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <div class="thumbnail">
              <Video controls="true" width="100%" height="100%">
                <source src="video/video 1.mp4" type="video/mp4">
              </Video>
              <a><b>Mengoperasikan Komputer</b><br>#CaraMengaktifkan&MenonaktifkanKomputer</a>
              <br><br>
              <a href="">descripsi...</a>
         </div>
            
          </div>

          <div class="row">
          <div class="col-sm-4">
            <div href="" class="thumbnail">
              <Video controls="true" width="100%" height="100%">
                <source src="video/video 2.mp4" type="video/mp4">
              </Video>
              <a><b>Mengoperasikan Komputer</b><br>#CaraMembuatFolder</a>
              <br><br>
              <a href="">descripsi...</a>
            </div>
          </div>

          <div class="row">
          <div class="col-sm-4">
            <div href="" class="thumbnail">
              <Video controls="true" width="100%" height="100%">
                <source src="video/video 3.mp4" type="video/mp4">
              </Video>
              <a><b>Mengoperasikan Komputer</b><br>#CaraMenghapusSampah</a>
              <br><br>
              <a href="">descripsi...</a>
            </div>
          </div>

          

        </div>

      </div>
    </section>


  <!--footer-->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p><img src="img/logo.png" alt="" width="5%" height="5%" align-items="left">Teknologi Informasi & Komunikasi</p>
        </div>
      </div>
      <!-- <div class="row">
        <div class="row-sm-12">
          <a href="https://youtube.com/@sitiawaliah187" class="btn btn-danger"> <i class="glyphicon glyphicon-play"></i> Subcribe </a>
        </div>
      </div> -->
    </div>
  </footer>
   <!--akhir footer-->

  

    <script src="script.js"></script>

    <script type="js/script.js"></script>
  </body>
</html>
