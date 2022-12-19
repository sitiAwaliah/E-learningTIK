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
<style>
  html{
	position: relative;
}
body{
  background: linear-gradient(#74434C, #231F4B);
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

    </div> 
    <div class="collapse navbar-collapse" id="bs-example-collapse-navbar-1">
     <ul class="nav navbar-nav navbar-right">
       <li ><a href="#pengenalan" class="page-scroll">PengenalanTIK</a></li>
        <li><a href="#sistem" class="page-scroll">SistemKomputer</a></li>
        <li><a href="menuutama.php" class="page-scroll">Kembali</a></li>
     </ul>
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

  

    <!-- sistem -->
     <!-- pengenalan -->
     <section class="about" id="pengenalan" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">MENGENAL TIK</h1>
            <hr>
          </div>
        </div>

        <div class="row text-justify">
          <div class="col-sm-4 col-sm-offset-2" >
            <center><img src="img/tik.png" alt="" width="50%" height="50%" text-shadow="1px 1px 20px rgba(219, 0, 248, 0.793)"	></center>
          <p color="white">Pada mulanya jika seseorang ingin
menyampaikan atau memberitahukan
suatu informasi atau berita dilakukan
dengan cara lisan atau dengan
diungkapkan lewat kata-kata, tetapi dengan
adanya kemajuan teknologi komunikasi
dan informasi yang sangat cepat
memudahkan kita untuk memberitahukan
informasi tidak hanya dengan cara lisan
langsung ke orangnya tetapi bisa juga
melalui media seperti telegraf, telepon,
faximili, email, chatting, teleconference,
webcamdan lain-lain. <br><br>
Dengan email kita bisa mengirim informasi kepada orang lain
yang berada jauh seperti di luar kota atau bahkan sampai di luar
negeri kita bisa mengirim surat dengan cepat dan mudah. Kita
tidak perlu menggunakan amplop, kertas surat dan perangko
tetapi cukup dengan komputer dan internet.</p>
            
          </div>
          <div class="col-sm-4">
          <p color="white">Dalam teknologi informasi dan komunikasi terdapat dua aspek
yang termasuk ke dalamnya, yaitu teknologi informasi dan
teknologi komunikasi. <br><br>Kedua aspek ini hanya berbeda fungsi.
Keduanya mempunyai pengertian yang berbeda tetapi
mempunyai kesamaan yaitu bertujuan membantu seseorang
untuk menyampaikan informasi dan mendapatkan informasi
dengan mudah dan tepat. Komunikasi merupakan suatu
proses yang dilakukan orang untuk menyampaikan
informasi atau gagasan dengan tujuan untuk mengubah atau
membentuk perilaku seseorang, yang semula tidak
mengetahui apapu nmenjadi mengetahui sesuatu <br><br> Sedangkan informasi adalah suatu berita atau pengumuman
yang diproses sedemikian rupa sehingga menjadi sesuatu
yang dapat disebarkan atau diberitahukan ke orang lain,
dengan tujuan untuk memberikan suatu berita atau
pengumuman menjadisesuatu yang bermanfaat bagi orang lain
baik individumaupun kelompok</p>
          </div>
        </div>
        </div>
      </div>
    </section>
  <!-- pengenalan -->
  <section class="about" id="sistem">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">SISTEM KOMPUTER</h1>
            <hr>
          </div>
        </div>

        <div class="row text-justify">

        <div class="col-sm-4  col-sm-offset-2">
        <center><img src="img/memori.png" alt="" width="80%" height="80%" text-shadow="1px 1px 20px rgba(219, 0, 248, 0.793)"	></center>
          </div>

          <div class="col-sm-4" >
          <p color="white">Secara umum, 
Sistem komputer adalah jaringan elemen-elemen yang saling berhubungan, berbentuk 
satu kesatuan untuk melaksanakan suatu tujuan pokok dan sistem tersebut. <br> Tujuan pokok dan sistem komputer adalah mengolah data untuk menghasilkan 
informasi. Supaya tujuan pokok tersebut tercapai, maka harus ada elemen-elemen 
yang mendukungnya. Elemen-elemen dan sistem komputer adalah hardware, software, 
dan brainware.
<ul>
  <li> Hardware (perangkat keras) adalah peralatan di sistem komputer yang secara fisik 
terlihat dan dapat dijamah, seperti monitor, keyboard, dan mouse.</li>
<li>Software (perangkat lunak) adalah program yang berisi perintah-perintah untuk 
melakukan pengolahan data. </li>
<li>Brainware adalah manusia yang terlibat dalam mengoperasikan serta mengatur 
sistem komputer.</li>

</ul></p>
            
          </div>
          </div>
          <div class="row text-justify">
          <div class="col-sm-4 col-sm-offset-2">
          <p color="white">Dalam teknologi informasi dan komunikasi terdapat dua aspek
yang termasuk ke dalamnya, yaitu teknologi informasi dan
teknologi komunikasi. <br><br>Kedua aspek ini hanya berbeda fungsi.
Keduanya mempunyai pengertian yang berbeda tetapi
mempunyai kesamaan yaitu bertujuan membantu seseorang
untuk menyampaikan informasi dan mendapatkan informasi
dengan mudah dan tepat. Komunikasi merupakan suatu
proses yang dilakukan orang untuk menyampaikan
informasi atau gagasan dengan tujuan untuk mengubah atau
membentuk perilaku seseorang, yang semula tidak
mengetahui apapu nmenjadi mengetahui sesuatu <br><br> Sedangkan informasi adalah suatu berita atau pengumuman
yang diproses sedemikian rupa sehingga menjadi sesuatu
yang dapat disebarkan atau diberitahukan ke orang lain,
dengan tujuan untuk memberikan suatu berita atau
pengumuman menjadisesuatu yang bermanfaat bagi orang lain
baik individumaupun kelompok</p>
          </div>
          <div class="col-sm-4">
        <center><img src="img/ram.png" alt="" width="100%" height="100%" text-shadow="1px 1px 20px rgba(219, 0, 248, 0.793)"	></center>
          </div>
          
      
        </div>
      </div>
    </section>
      
   
    <!-- akhir about -->

  
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
   <!--akhir footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="script.js"></script>

    <script type="js/script.js"></script>
  </body>
</html>
