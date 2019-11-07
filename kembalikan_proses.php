<?php
	$a = $_POST['no'];
	$f = $_POST["tgl_pengembalian"];


	//var_dump($e)

	include 'aksi.php';
	if(isset($f)){
	$q = "UPDATE `tbl_peminjaman` 
				SET `tgl_pengembalian` = '$f', `status` = 'Kembali' 
				WHERE `tbl_peminjaman`.`no` = '$a'";
	
	mysqli_query($koneksi,$q);
	header("location:pinjam_alat.php");
	//echo "Data $a sudah Berhasil Di Edit.";
}else{
	echo "Data $a sudah Gagal Di Edit.";
}


	//move_uploaded_file($_FILES["foto"]["tmp_name"], "gambar/$nama_baru");
	

?>
<br>
<a href="pinjam_alat.php">Kembali</a>