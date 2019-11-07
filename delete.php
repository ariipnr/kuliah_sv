Anda yakin ingin menghapus data?<br>
<?php
    $kiriman = $_GET["no"];		
	  include "aksi.php";
	  $q = "SELECT * FROM input_barang WHERE id='$kiriman'";
	  $result = mysqli_query($koneksi,$q);
//	  $row = mysqli_fetch_assoc($result);
//	  foreach($row as $field)
//			echo " $field&nbsp;&nbsp;&nbsp;";
//			echo "<img width='30' height='40' src='gambars/".$row["nama_file_photo"]."'>";
?>
<h2><a href="delete.php?pil=y&no=<?php echo $kiriman; ?>">YA</a> / 
    <a href="delete.php?pil=t&no=<?php echo $kiriman; ?>">TIDAK</a><h2>

 <?php
 	if(isset($_GET["pil"])){
 		if($_GET["pil"]=="t")
 			header("location:data_barang.php");
 		else{
 			$q = "DELETE FROM `input_barang` WHERE `input_barang`.`no` = ".$_GET["no"];
 			mysqli_query($koneksi,$q);
 			header("location:data_barang.php");
 		}
 	}
 ?>   