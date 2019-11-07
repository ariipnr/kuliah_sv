<?php

	$a = $_POST["kd_alat"];
	$b = $_POST["kategori"];
	$c = $_POST["merek"];
	$d = $_POST["nama_alat"];
	$e = $_POST["spek"];
	$f = $_POST["jml"];

	//var_dump($e)

	include 'aksi.php';
	$q = "INSERT INTO 
			`input_barang` (`no`, `kode_alat`, `kategori`, `merek`, `nama_alat`, `spesifikasi`, `jumlah`) 
	VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f')";
	
	mysqli_query($koneksi,$q);

	//move_uploaded_file($_FILES["foto"]["tmp_name"], "gambar/$nama_baru");
	echo "Data $b sudah tersimpan di DB.";
	header("location:input_barang.php?pesan=terinput");

?>