<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
	<link rel="stylesheet" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="DataTables/Buttons-1.6.1/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="DataTables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
	<script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
	<script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
	<script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script src="DataTables/Buttons-1.6.1/js/buttons.html5.min.js"></script>
	
	<script>
		$('document').ready(function () {
			$('#tdd').DataTable({
				paging: true,
				searching: true,
				ordering: true,
				info: true,
				dom: 'Bfrtp',
				buttons: [
		            'excelHtml5',
		            {
		            	extend: 'pdfHtml5',
		            	text: 'Unduh PDF',
		            	orientation: 'portrait',
		            	pageSize: 'A4',
		            	customize: function (doc) {
		            		doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
		            	},
		            	title: function () {
		            		return 'Laporan Data Peminjaman Alat';
		            	}
		        	}
		        ]
			});
		});
	</script>
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
			<h2 align="center">Form Peminjaman Alat</h2>
			<br>
			<form action="pinjam_alat_proses.php" method="post" enctype="multipart/form-data">
				<table width="450" align="center" border="0">
					<td>
						<label for="basic-url">Nim</label>
						<div class="input-group mb-3">
						   <input type="text" name="nim" class="form-control" placeholder="Nim" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<label for="basic-url">Nama</label>
						<div class="input-group mb-3">
						   <input type="text" name="nama" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<label for="basic-url">Kode Alat</label>
						<div class="input-group mb-3">
						   <input type="text" name="kode_alat" class="form-control" placeholder="Kode Alat" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<label for="basic-url">Tanggal Peminjaman</label>
						<div class="input-group mb-3">
						   <input type="datetime-local"  name="tgl_peminjaman" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<button class="btn btn-secondary btn-flat btn-block">Pinjam Alat</button>
							
						</div>
					</td>
				</table>
			</form>

			<hr>
			<br>
			<h2 align="center">Daftar Peminjam</h2>
			<br>
			<form action="" method="post">
				<table width="100%">
					<td>
	   				<table id="tdd" class="table table-hover table-striped">
	   					<thead>
							<tr>
								<th scope="col" align="left">Nim</th>
								<th scope="col" align="left">Nama</th>
								<th scope="col" align="left">Kode Alat</th>
								<th scope="col" align="left">Nama Alat</th>
								<th scope="col" align="left">Tanggal Peminjaman</th>
								<th scope="col" align="left">Tanggal Pengembalian</th>
								<th scope="col" align="left">Status</th>
								<th scope="col" align="left">Aksi</th>
							</tr>
						</thead>
						<tbody>

						<?php
							$conn = mysqli_connect('localhost', 'root', '', 'db_invbarang');

							$result = mysqli_query($conn, 'SELECT * FROM tbl_peminjaman');

							while ($row = mysqli_fetch_array($result)) {
						?>

							<tr>
								<td align="left"><?php echo $row[1];?></td>
						        <td align="left"><?php echo $row[2];?></td>
						        <td align="left"><?php echo $row[3];?></td>
							<?php
							include 'aksi.php';
						        $q = "SELECT * FROM input_barang WHERE kode_alat='$row[3]'";
								 	 $hsl = mysqli_query($koneksi,$q);
								 	 $data = mysqli_fetch_assoc($hsl);
							?>
						        <td align="left"><?php echo $data['nama_alat']; ?></td>
						        <td align="left"><?php echo $row[4];?></td>
						        <td align="left"><?php echo $row[5];?></td>
						        <td align="left"><?php echo $row[6];?></td>
						        <td>
              					<a href="kembalikan.php?no=<?php echo $row[0]; ?>">Kembalikan</a> | 
              					<a href="hapus_pinjam.php?no=<?php echo $row[0]; ?>">Hapus</a>
            					</td>
							</tr>

						<?php } ?>

						</tbody>
					</table>
					</td>
				</table>
				</form>
		</section>
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
</html>