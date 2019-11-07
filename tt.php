<h2 align="center">Form Input Barang</h2><br>
		
			<form action="hh.php"method="post" enctype="multipart/form-data"  onSubmit="return validate();">
				<table width="500" align="center" border="0">
					<td>
						<label for="basic-url">Kode Alat</label>
						<div class="input-group mb-3">
						   <input id="ka" type="text" name="kd_alat" class="form-control" placeholder="Kode Alat" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<label for="basic-url">Nama Alat</label>
						<div class="input-group mb-3">
						   <input id="na" type="text"  name="nama_alat" class="form-control" placeholder="Nama Alat" aria-label="Username" aria-describedby="basic-addon1">
						</div>

						<br>
						<div class="input-group mb-3">
							<button class="btn btn-primary btn-flat btn-block">Simpan</button>
							
						</div>

						  <div>
					        <input type="submit" name="generate" class="submit-button"
					            value="Generate Barcode">
					    </div>

					</td>
				</table>
</form>
<script type="text/javascript" src="pp.js"></script>
