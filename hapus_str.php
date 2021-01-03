<?php  
include("koneksi2.php");
       
$id=$_GET['id'];  
$delete="Delete from data_pegawai Where nomor_str='$id'";  
      
mysqli_query($koneksi, $delete) or die ("Error tu");  
	echo"<script>alert('Data Berhasil di hapus ');location.href='admin.php';</script>";
?>  
