<!-- cara II -->
<?php 
//koneksikan DBMS
$conn = mysqli_connect("Localhost", "root","", "e-learning");
function query($query){//menerima parameter query
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows=[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data){
global $conn;
//fungsi dari htmlspecialchars agar terhindar dari hacker
	$nama = htmlspecialchars($data["nama"]) ;
	$kelas = htmlspecialchars($data["kelas"]);
	$email = htmlspecialchars($data["email"]);

	$query="INSERT INTO siswa
	VALUES ('','$nama','$kelas','$email')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id=$data["id"];
	$nama = htmlspecialchars($data["nama"]) ;
	$kelas = htmlspecialchars($data["kelas"]);
	$email = htmlspecialchars($data["email"]);

	$query ="UPDATE siswa SET
			nama ='$nama',
			kelas ='$kelas',
			email ='$email'
			WHERE id = '$id' 
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function hapus ($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query ="SELECT * FROM siswa WHERE
			nama LIKE'%$keyword%' OR  
			kelas LIKE'%$keyword%'OR
			email LIKE '%$keyword%'
			";
return query($query);
}
function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"])) ;
	$password=mysqli_real_escape_string($conn, $data["password"]);
	$password2=mysqli_real_escape_string($conn, $data["password2"]);
	//cek username sudah ada atau belum
   $result = mysqli_query($conn, "SELECT username FROM registrasi WHERE username ='$username'");

	//cek konfirmasi password
	if(mysqli_fetch_assoc($result)){
		echo "<script>
		alert('username berhasil ditambahkan!');
		</script>";
		return false;
	}

	if($password !== $password2){
		echo "<script>
			alert('konfirmasi password tidak sesuai !');
		</script>";
		return false;
	}
	//encripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke db\
	mysqli_query($conn, "INSERT INTO registrasi VALUES('','$username','$password')");
	return mysqli_affected_rows($conn);
}

 ?>
