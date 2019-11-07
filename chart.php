<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
	<link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="chartjs/Chart.js"></script>
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
			<?php 
	include 'koneksi.php';
	?>

			<h2 align="center">Grafik Chart</h2>
			<p align="center">Jumlah Berdasarkan Kategori</p>
			<br>
			<table align="center">
				<tr>
					<td>
						<div style="width: 800px;margin: 0px auto;">
							<canvas id="myChart"></canvas>
						</div>	
						<br>
					</td>
					<td>
						<table border="0" class="table table-hover table-striped">
						<tr>
							<th>Kategori</th>
							<th>Jumlah</th>
						</tr>
						<?php
							include 'aksi.php';
							$nd_count = "SELECT COUNT(`kategori`) AS ND FROM `input_barang` WHERE `kategori`='Network Device'";
							$nd_r = mysqli_query($koneksi, $nd_count);
							$nd_row = mysqli_fetch_array($nd_r);

						?>
						<tr>
							<td align="left">Network Device</td>
							<td><?php echo $nd_row['ND'] ?></td>
						</tr>

						<?php
							
							$sp_count = "SELECT COUNT(`kategori`) AS Spare FROM `input_barang` WHERE `kategori`='Sparepart'";
							$sp_r = mysqli_query($koneksi, $sp_count);
							$sp_row = mysqli_fetch_array($sp_r);

						?>						
						<tr>
							<td align="left">Sparepart</td>
							<td><?php echo $sp_row['Spare'] ?></td>
						</tr>

						<?php
							
							$AL_count = "SELECT COUNT(`kategori`) AS AL FROM `input_barang` WHERE `kategori`='Alat'";
							$AL_r = mysqli_query($koneksi, $AL_count);
							$AL_row = mysqli_fetch_array($AL_r);

						?>
						<tr>
							<td align="left">Alat</td>
							<td><?php echo $AL_row['AL'] ?></td>
						</tr>

						<?php
							$PR_count = "SELECT COUNT(`kategori`) AS PR FROM `input_barang` WHERE `kategori`='Printer'";
							$PR_r = mysqli_query($koneksi, $PR_count);
							$PR_row = mysqli_fetch_array($PR_r);

						?>						
						<tr>
							<td align="left">Printer</td>
							<td><?php echo $PR_row['PR'] ?></td>
						</tr>
						<?php
							$PC_count = "SELECT COUNT(`kategori`) AS PC FROM `input_barang` WHERE `kategori`='PC'";
							$PC_r = mysqli_query($koneksi, $PC_count);
							$PC_row = mysqli_fetch_array($PC_r);

						?>						
						<tr>
							<td align="left">PC</td>
							<td><?php echo $PC_row['PC'] ?></td>
						</tr>

						<?php

							$L_count = "SELECT COUNT(`kategori`) AS L FROM `input_barang` WHERE `kategori`='Lainnya'";
							$L_r = mysqli_query($koneksi, $L_count);
							$L_row = mysqli_fetch_array($L_r);

						?>
						<tr>
							<td align="left">Lainnya</td>
							<td><?php echo $L_row['L'] ?></td>
						</tr>						
						
					</table>
					</td>
					
				</tr>
				</table>
	<div id="lokasi"></div>

		
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
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Network Device", "Sparepart", "Alat", "Printer", "PC", "Lainnya"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$j_nd = mysqli_query($koneksi,"select * from input_barang where kategori='Network Device'");
					echo mysqli_num_rows($j_nd);
					?>, 
					<?php 
					$j_spar = mysqli_query($koneksi,"select * from input_barang where kategori='Sparepart'");
					echo mysqli_num_rows($j_spar);
					?>, 
					<?php 
					$j_alat = mysqli_query($koneksi,"select * from input_barang where kategori='Alat'");
					echo mysqli_num_rows($j_alat);
					?>, 
					<?php 
					$j_printer = mysqli_query($koneksi,"select * from input_barang where kategori='Printer'");
					echo mysqli_num_rows($j_printer);
					?>,
					<?php 
					$j_PC = mysqli_query($koneksi,"select * from input_barang where kategori='PC'");
					echo mysqli_num_rows($j_PC);
					?>,
					<?php 
					$j_lainnya = mysqli_query($koneksi,"select * from input_barang where kategori='Lainnya'");
					echo mysqli_num_rows($j_lainnya);
					?>
					],
					backgroundColor: [
					'rgb(255, 99, 132)',
					'rgb(54, 162, 235)',
					'rgb(255, 206, 86)',
					'rgb(75, 192, 192)',
					'rgb(188, 43, 255)',
					'rgb(180, 177, 181)'

					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
				
				}
			}
		});
	</script>
	<script type="text/javascript" src="script.js"></script>
	<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>

</html>