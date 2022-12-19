<?php 
	require 'function.php';

if ( isset($_POST["registrasi"])){
	
	//cek apakah data berhasil di tambahkan tidak{
	if( registrasi($_POST)> 0){
		echo "
		<script>
		alert('data berhasil ditambahkan!');
		document.location.href='login.php'
		</script>";
	}else{
		echo "<script>
		document.location.href='login.php'
		</script>
	";
}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<title>Login</title>
	<style type="text/css">
		@import"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
		body{
			margin:0;
			padding: 0;
			font-family: sans-serif;
			height: 100vh;
			background: linear-gradient(#231F4B, #74434C);
			display:flex;
			background-size:cover;
			background-attachment: fixed;
		}
		.login-box{ /*box login*/
			width: 280px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color:white;
		}
		.login-box h1{ /*nama login*/
			float: left;
			font-size: 40px;
			border-bottom: 6px solid  #d100d4;
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

		.password2{ /*box password*/
			width: 100%;
			overflow:hidden;
			font-size: 20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom: 1px solid #d100d4;
		}
		.password2 i{ /*logo dari password*/
			width: 26px;
			float:left;
			text-align:center;
			color: pink;
		}
		.password2 input{ /*tulisan password*/
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
<h1><img src="img/logo.png" alt="" width="20%" height="20%">Registrasi</h1>
<form action="" method="post">
			<div class="username">
			<input type="text" name="username" id="username" placeholder="masukan username !">
			<i class="fa fa-user" aria-hidden="true"></i>
			</div>

			<div class="password">
			<input type="password" name="password" id="password" placeholder="masukan password !">
			<i class="fa fa-lock" aria-hidden="true"></i>
			</div>

		
			<div class="password">
			<input type="password" name="password2" id="password2" placeholder="konfirmasi password !">
			<i class="fa fa-lock" aria-hidden="true"></i>
		</div>

		<button class="btn" type="submit" name="registrasi" id="registrasi">Register</button>


	</ul>

	 	<p>	Sudah punya akun ? <a href="login.php">login</a></p>
       
  


</form>
</body>
</html>