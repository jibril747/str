<?php
include("koneksi2.php");
$NIP =$_POST['NIP'];
$nama_pegawai=$_POST['nama_pegawai'];
$nomor_STR=$_POST['nomor_STR'];
$akhir_STR=$_POST['akhir_STR'];
$fupload = $_POST['fupload'];
$password = $_POST['password'];
$status = $_POST['jenis_akun'];
$username = $_POST['username'];



 $simpan = "insert into akun_login values('$username','$password','$NIP','$status','$nama_pegawai')";
 $sql = mysqli_query($koneksi, $simpan);
 $simpan2 = "insert into data_pegawai (NIP, nama, nomor_STR, akhir_STR, file_scan) values ('$NIP','$nama_pegawai','$nomor_STR','$akhir_STR','$fupload')";
 $sql2 = mysqli_query($koneksi, $simpan2);

$pesan = "";
	if ($sql) {
		echo"<script>alert('Data Tersimpan ');location.href='admin.php';</script>";
		
	} else {
		echo"<script>alert('Data Gagal diupload ! ');</script>";
	}

?> 