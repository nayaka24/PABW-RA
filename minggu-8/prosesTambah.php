<!DOCTYPE html>
<html>
<head>
	<title>simpan buku tamu</title>
</head>
<body>
<h1>simpan buku tamu MySQL</h1>
<?php 
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
mysqli_select_db($conn,"faruq");
echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Komentar : $komentar <br>";
$sqlstr="insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
$hasil = mysqli_query($conn,$sqlstr);
echo "simpan buku tamu berhasil dilakukan";
?>
</body>
</html>