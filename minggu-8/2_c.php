<!DOCTYPE html>
<html>
<head>
	<title>Koneksi database MySQL</title>
</head>
<body>
	<h1>Koneksi database denngan mysql_fetch_array</h1>
	<?php
	$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
	mysqli_select_db($conn,"faruq");
	$hasil=mysqli_query($conn,"select * from liga");
	while ($row=mysqli_fetch_array($hasil)) {
		echo "liga ".$row["negara"];
		echo " mempunyai ".$row[2];
		echo " wakil di liga champion <br>";
	}
	?>
</body>
</html>