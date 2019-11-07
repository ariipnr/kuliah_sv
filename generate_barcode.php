<?php
	 	 $kiriman = $_GET["no"];
	 	 include "aksi.php";
	 	 $q = "SELECT * FROM input_barang WHERE no='$kiriman'";
	 	 $result = mysqli_query($koneksi,$q);
	 	 $data = mysqli_fetch_array($result);
if(isset($data[0]))
{
 $text=$data[1];
 echo "<img alt='testing' src='barcode/barcode.php?codetype=Code39&size=40&text=".$text."&print=true'/>";
}
?>