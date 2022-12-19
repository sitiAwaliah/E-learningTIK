<?php 
require 'function.php';
	if(isset($_POST["login"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result=mysqli_query($conn, "SELECT * FROM registrasi WHERE username='$username' ");
		if (mysqli_num_rows($result)===1) {
			# cek password
			$row=mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){
				header("Location:materi.php");
				exit;
			}
		}
		$error=true;
	}


 ?><!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		@import"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
		body{
			margin:0;
			padding: 0;
			font-family: sans-serif;
			 height: 100vh;
        background: linear-gradient(#74434C, #231F4B);
        display:flex;
			background-size:cover;
      display: flex;
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
    p a{
      color :blue;
    }
			
	</style>
</head>
<body>
	<div class="login-box">
		<h1><img src="img/logo.png" alt="" width="20%" height="20%">Login</h1>

<form action="" method="post">
		<div class="username">
			<input type="text" placeholder="Username" name="username" value="" id="username">
			<i class="fa fa-user" aria-hidden="true"></i>
		</div>
		
		<div class="password">
			<input type="Password" placeholder="Password" name="password" Value="" id="password">
			<i class="fa fa-lock" aria-hidden="true"></i>
		</div>

		<button class="btn" type="Submit" name="login">Login</button>
		
<div class="isset">
	<?php if(isset($error)) : ?>
	echo "<script>
		alert('username/password anda salah !');
		alert('silahkan masukan kembali data anda !');
		document.location.href='login.php';
		</script>
	";
	<?php endif; ?>
</div>
<p>belum daftar ?<a href="registrasi.php">Registrasi Sekarang?</a></p>

</form>
</body>
</html>