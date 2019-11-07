<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
	<link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
		<?php
		$daftar_kategori = array("Network Device","PC","Sparepart","Printer","Alat","Lainnya");

	?>
	<div id="container">
	<section id="menu">
		<nav class="navbar fixed-top navbar-light bg-dark sticky-top">
	  		<ul> 
				<li><a href="index.html">Beranda</a></li>
				<li><a href="data_barang.php">Data Barang</a></li>
				<li><a href="input_barang.php">Input Barang</a></li>
				<li><a href="pinjam_alat.php">Pinjam Alat</a></li>
				<li><a href="tentang_kami.html">Tentang Kami</a></li>
			</ul>	
			<a href="" class="btn btn-white">Logout</a>
		</nav>
	</section>
	</div>

	<div>
		<section class="navy" id="section1">
			<div class="content">
				<img align="left" src="image/LogoIPB.png" width="400px">
				<h1 align="right">Inventaris Barang Lab Komputer</h1>
				<p align="right">Inventaris Barang Lab Komputer Sekolah Vokasi Institut Pertanian Bogor</p>
			
			</div>
		</section>
	</div>

	<div>
		<section class="white" id="section2"><br>
					<?php 
		if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "terinput"){ ?>
			<div class="alert alert-info"role="alert" align="center">
 				 Data telah Terinput Kedalam Database, Silahkan Cek di Data Barang
			</div>
		<?php }
	}
	?>
			<h2 align="center">Form Input Barang</h2><br>
		
			<form action="input_barang_proses.php" method="post" enctype="multipart/form-data">
				<table width="500" align="center" border="0">
					<td>
						<label for="basic-url">Kode Alat</label>
						<div class="input-group mb-3">
						   <input type="text" name="kd_alat" class="form-control" placeholder="Kode Alat" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<label for="basic-url">Kategori</label>
						<div class="input-group mb-3">
						   <select name="kategori" class="form-control" required>
						   		<?php
									foreach ($daftar_kategori as $kategori) {
										echo "<option value='$kategori'>$kategori</option>";
										}
								?>
						   </select>
						</div>

						<label for="basic-url">Merek</label>
						<div class="input-group mb-3">
						   <input type="text" name="merek" class="form-control" placeholder="Merek" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<label for="basic-url">Nama Alat</label>
						<div class="input-group mb-3">
						   <input type="text"  name="nama_alat" class="form-control" placeholder="Nama Alat" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<label for="basic-url">Spesifikasi</label>
						<div class="input-group">
						  <div class="input-group-prepend">
						    
						  </div>
						  <textarea class="form-control" cols="50" name="spek" aria-label="With textarea"></textarea>
						</div>

						<label for="basic-url">Jumlah</label>
						<div class="input-group mb-3">
						   <input type="text" name="jml" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="input-group mb-3">
							<button class="btn btn-primary btn-flat btn-block">Simpan</button>
							
						</div>
					</td>
				</table>
			</form>
		</section>
	</div>
			<section class="navy" id="section3">
			<div class="content">
			
			<h4>CONTACT US</h4>
			<span>Jl. Kumbang No. 14 Cilibende Bogor, Jawa Barat, Indonesia</span><br>
			<span>Phone: (0251) 8329101</span><br>
			<span>E-mail: sv@apps.ipb.ac.id.</span><br>

			</div>
		<div class="clear"></div>
		</section>

		<section class="gray" id="section4">
			<div class="content">
				<p>Copyright © 2019 - Developed by Kelompok 6</p>
			</div>

		</section>

</body>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>

</html>