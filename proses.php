<?php 

$date = date("Y-m-d");
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jarak = $_POST['ijarak'];
$total = $_POST['ototal'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("datapenerima.txt", "a+");
fputs($fp, "$date | $nama | $alamat | $email | $jarak KM | Rp.$total\n");
fclose($fp);

echo "Terima kasih atas telah mengisi data Penerima, pesanan akan segera di proses<br>";
echo "<a href='formpenerima.php'>-Isi Data Penerima-</a><br>";
echo "<a href='lihat.php'>-Lihat Data Penerima-</a><br>";

 ?>



