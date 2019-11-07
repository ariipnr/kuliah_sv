<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
	<link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
	<section id="menu">
		<nav class="navbar navbar-light bg-dark">
	  		<ul> 
				<li><a href="index.html">Beranda</a></li>
				<li><a href="data_barang.php">Data Barang</a></li>
				<li><a href="input_barang.php">Input Barang</a></li>
				<li><a href="pinjam_alat.php">Pinjam Alat</a></li>
				<li><a href="tentang_kami.html">Tentang Kami</a></li>
			</ul>	
			<a href="login.php" class="btn btn-white">Logout</a>
		</nav>
	</section>
	</div>

	
	<section class="navy" id="section1">
		<div class="content">
			<img align="left" src="image/LogoIPB.png" width="400px">
			<h1 align="right">Inventaris Barang Lab Komputer</h1>
			<p align="right">Inventaris Barang Lab Komputer Sekolah Vokasi Institut Pertanian Bogor</p>
			
		</div>
	</section>
	
	<section class="white " id="section2"><br><br>
		<div class="content">
			<h2 align="center">Form Pengembalian Alat</h2>
			<br>
			<form action="kembalikan_proses.php" method="post" enctype="multipart/form-data">
				<table width="450" align="center" border="0">
					<td>
						<label for="basic-url">Tanggal Pengembalian</label>
						<div class="input-group mb-3">
						   <input type="date"  name="tgl_pengembalian" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
						   <input type="hidden"  name="no" value="<?php echo $_GET['no'] ?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<button class="btn btn-warning btn-flat btn-block">Kembalikan Alat</button>
							
						</div>
					</td>
				</table>
			</form>
		</div>
	</section>

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
	<script type="text/javascript" src="script.js"></script>
	<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>

</html>