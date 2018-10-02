<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<form action="" method="POST">
	<center>
		<body>
		<br><br><br><br><br><br><br><br><br><br>
	<table border="1" bgcolor="#d8f9ff">
			<tr bgcolor="#fcf5b8">
	<td>Nim	:</td>
	<td><input type="text" name="nim" minlength="10" required=""></td>
		</tr>
		<tr bgcolor="pink">
	<td>Nama	:</td>
	<td><input type="text" name="nama" maxlength="25" required=""></td>
		</tr>
		<tr bgcolor="#fcf5b8">
	<td>Email</td>
	<td><input type="email" name="email" maxlength="30" required=""></td>
		</tr>
		<tr bgcolor="#fcf5b8">
	<td><input type="Submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</center>
</form>
<?php
 	$servername = "localhost";
 	$nim = "root";
 	$nama = "";
 	$db = "jurnal";
 	$con = new mysqli($servername, $nim, $nama, $db);

 	if($con==false){
 		die("Koneksi Gagal" . $con->connect_error);
 	
 	}
 	if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$sql = "INSERT INTO data (nim,nama,email) values ('$nim','$nama','$email')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	}

	?>


</body>
</html>
