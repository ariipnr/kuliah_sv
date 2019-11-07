<?php

	$a = $_POST["kd_alat"];
	$b = $_POST["kategori"];
	$c = $_POST["merek"];
	$d = $_POST["nama_alat"];
	$e = $_POST["spek"];
	$f = $_POST["jml"];
	$g = $_POST["no"];
	


	//var_dump($e)

	include 'aksi.php';
	$q = "UPDATE `input_barang` 
			SET 
				`kode_alat` = '$a', `kategori` = '$b', `merek` = '$c', `nama_alat` = '$d', `spesifikasi` = '$e', `jumlah` = '$f' 
				WHERE `input_barang`.`no` = '$g' ";
	
	mysqli_query($koneksi,$q);

	//move_uploaded_file($_FILES["foto"]["tmp_name"], "gambar/$nama_baru");
	echo "Data $b sudah Berhasil Di Edit."

?>
<br>
<a href="data_barang.php">Kembali Ke Data Barang</a>