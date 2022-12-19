<?php 
//koneksi ke DBMS
// mysqli_connect("Localhost","root","perpustakaan");
require 'function.php';

//ambil data
$id = $_GET["id"];
//query data mhs berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
//cek apakah tombo; submit ditekan Tu belum
if ( isset($_POST["submit"])){
	//cek apakah data berhasil di tambahkan tidak
	if( ubah($_POST)> 0){
		echo "
		<script>
		alert('data berhasil diubah!');
		document.location.href='isi.php'
		</script>";
	}else{
		echo "<script>
		alert('data gagal diubah!');
		document.location.href='isi.php'
		</script>
	";
}


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Created</title>
	<style type="text/css">
		@import"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
		body{
			margin:0;
			padding: 0;
			font-family: sans-serif;
			background: url(8.jpg); 
			background-size: cover;
		}
		.close{
			width: 100%;
			font-size: 20px;
			padding:10px 0;
			margin:10px 0;
		}
		.close i{ /*logo*/
			width:24px;
			size:20px;
			float:left;
			text-align:center;
			color:red;
		}
		.container {
			width: 300px;
			background-color: white;
			margin:auto;
			padding: 30px;
			background:none;
			border:2px solid #d100d4;
			color: #d100d4;
		}
		.login-box{ /*box login*/
			width: 300px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color:white;
		}
		.login-box h1{ /*nama login*/
			float: left;
			font-size: 40px;
			border-bottom: 10px solid #d100d4;
			margin-bottom: 50px;
			padding:10px 0;
		}
		.username{	/*box text*/
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom: 1px solid #d100d4;
		}


		.NIK{ /*box NIK*/
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom: 1px solid #d100d4;
		}
		.NIK i{ /*logo dari NIK*/
			width: 26px;
			float:left;
			text-align:center;
			color: pink;
		}
		.NIK input{ /*tulisan NIK*/
			border:none;
			outline:none;
			background: none;
			color:white;
			font-size: 18px;
			width:80%;
			margin:0 10px;
		}
		
		.username i{ /*logo*/
			width: 26px;
			float:left;
			text-align:center;
			color: pink;
		}

		.username input{/* input tulisan username)*/
			border:none;
			outline:none;
			background: none;
			color:white;
			font-size: 18px;
			width:80%;
			margin:0 10px;
			}	

		.password{ /*box password*/
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom: 1px solid #d100d4;
		}
		.password i{ /*logo dari password*/
			width: 26px;
			float:left;
			text-align:center;
			color: pink;
		}
		.password input{ /*tulisan password*/
			border:none;
			outline:none;
			background: none;
			color:white;
			font-size: 18px;
			width:80%;
			margin:0 10px;
		}


		.alamat{ /*box alamat*/
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom: 1px solid #d100d4;
		}
		.alamat i{ /*logo dari alamat*/
			width: 26px;
			float:left;
			text-align:center;
			color: pink;
		}
		.alamat input{ /*tulisan password*/
			border:none;
			outline:none;
			background: none;
			color:white;
			font-size: 18px;
			width:80%;
			margin:0 10px;
		}
		.email{ /*box email*/
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom: 1px solid #d100d4;
		}
		.email i{ /*logo dari email*/
			width: 26px;
			float:left;
			text-align:center;
			color: pink;
		}
		.email input{ /*tulisan email*/
			border:none;
			outline:none;
			background: none;
			color:white;
			font-size: 18px;
			width:80%;
			margin:0 10px;
		}
		
		
		
		

			.btn{
				width: 100%;
				background:none;
				border:2px solid #d100d4;
				color: #d100d4;
				font-size: 100%;

				}
	.isset{
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:3px 0;
			margin:3px 0;
		}
	.isset p{
			text-align:center;
			float: left;
			font-size: 20px;
			border-bottom: 6px solid #d100d4;
			margin-bottom: 50px;
			padding:10px 0;
			font-style: italic;
			color:red;
		}
			
	</style>
</head>
<body>
	<div class="login-box">
		<div class="close"><a href="isi.php"><i class="fa fa-window-close" aria-hidden="true" href="isi.php"></i></a>
		<div class="container">

		<h1>UBAH IDENTITAS KARTU VAKSIN</h1>


<form action="" method="post" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?=$mhs["id"];?>">
		<div class="NIK">
			<input type="text" placeholder="masukan No Nik anda !" name="nrp" id="nrp" requered value="<?=$mhs["nrp"]?>">
			<i class="fa fa-user" aria-hidden="true"></i>
		</div>

		<div class="username">
			<input type="text" placeholder="masukan Nama lengkap!" name="nama" id="nama" required value="<?=$mhs["nama"]?>">
			<i class="fa fa-user" aria-hidden="true"></i>
		</div>
		
		<div class="alamat">
			<input type="text" name="jurusan" id="jurusan" placeholder="Masukan Alamat Lengkap" required value="<?=$mhs["jurusan"]?>">
			<i class="fa fa-indent" aria-hidden="true"></i>
		</div>

		<div class="email">
			<input type="text" name="email" id="email" placeholder="Masukan Email anda!"required value="<?=$mhs["email"]?>">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</div>

		<button class="btn" type="submit" name="submit">Update Data</button>

</form>
</div>
</div>
</div>
</body>
</html>