<form action="" method="POST">
	<center>
		<body >
		<br><br><br><br><br><br><br><br><br><br>
	<table border="1" bgcolor="#d8f9ff">
			<tr bgcolor="#fcf5b8">
		<tr bgcolor="pink">
	<td>komentar	:</td>
	<td><input type="text" name="komentar"></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="submit" value="Hitung kata"></td></tr>
<?php
		if(isset($_POST['submit'])){
	$komentar = $_POST['komentar'];
	$hasil = str_word_count($komentar);

	echo "<tr><td><center>jumlah kata : $hasil<center></td> </tr>";

}
?>
