<?php

	$a = $_POST["nim"];
	$b = $_POST["nama"];
	$c = $_POST["kode_alat"];
	//$d = $_POST["nama_alat"];
	$e = $_POST["tgl_peminjaman"];
	//$f = $_POST["jml"];

	//var_dump($e)

	include 'aksi.php';
	$q = "INSERT INTO 
			`tbl_peminjaman` (`no`, `nim`, `nama`, `kode_alat`, `tgl_peminjaman`, `status`) 
	VALUES (NULL, '$a', '$b', '$c', '$e', 'Belum Kembali')";
	
	mysqli_query($koneksi,$q);

	//move_uploaded_file($_FILES["foto"]["tmp_name"], "gambar/$nama_baru");
	echo "Data $b sudah tersimpan di DB.";
	header("location:pinjam_alat.php");

?>
