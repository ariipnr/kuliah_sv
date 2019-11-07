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
				dom: 'Bfrtip',
				buttons: [
		            'copyHtml5',
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
		            		return 'Laporan Data Barang Inventaris Lab Komputer';
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
	
	<section class="white " id="section2"><br>
		<div class="content">

			<h2 align="center">Daftar Barang</h2>
			<form action="" method="post">
				<table width="100%">
					<td>
	   				<table id="tdd" class="table table-hover table-striped">
	   					<thead>
							<tr>
								<th scope="col" align="left">Kode Alat</th>
								<th scope="col" align="left">Kategori</th>
								<th scope="col" align="left">Merek</th>
								<th scope="col" align="left">Nama Alat</th>
								<th scope="col" align="left">Spesifikasi</th>
								<th scope="col" align="left">Jumlah</th>
								<th scope="col" align="left">Aksi</th>
							</tr>
						</thead>
						<tbody>

						<?php
							$conn = mysqli_connect('localhost', 'root', '', 'db_invbarang');

							$result = mysqli_query($conn, 'SELECT * FROM input_barang');

							while ($row = mysqli_fetch_assoc($result)) {
						?>

							<tr>
								<td align="left"><?php echo $row["kode_alat"];?></td>
						        <td align="left"><?php echo $row["kategori"];?></td>
						        <td align="left"><?php echo $row["merek"];?></td>
						        <td align="left"><?php echo $row["nama_alat"];?></td>
						        <td align="left"><?php echo $row["spesifikasi"];?></td>
						        <td align="left"><?php echo $row["jumlah"];?></td>
						        <td>
              					<a href="edit_barang.php?no=<?php echo $row["no"]; ?>">Edit</a> |
                				<a href="delete.php?no=<?php echo $row["no"]; ?>"">Delete</a> | 
                				<a href="generate_barcode.php?no=<?php echo $row["no"]; ?>">Generate</a> 
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