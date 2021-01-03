<?php
session_start();
include "koneksi2.php";
?>
<?php
if(isset($_SESSION['username'])) {
$namauser= ($_SESSION['nama_pegawai']);
$getid=$_GET['id'];
	$query = "SELECT * FROM data_pegawai WHERE No='$getid'";
	$hasil = mysqli_query($koneksi, $query);
	$data  = mysqli_fetch_array($hasil);
?>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>


<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>

<script type="text/javascript" src="js/jsDatePick.jquery.min.1.3.js"></script>
<script>
	$(function() {
		$( "#akhir_STR" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sistem Informasi Surat Tanda Registrasi (STR)</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">

	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
</head>

<body>
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="admin.php" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>Data Keseluruhan</span>
								</a>
							</li>					
						</ul>
					</nav>
					<ul>

								<a href="logout.php">
									<i class="fas fa-sign-out-alt tm-nav-fa-icon"></i>
									<span>Log Out</span>
								</a>
						
					</ul>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section">
						<div class="ml-auto">
							<header class="mb-4"><h1 class="tm-text-shadow">Data Pegawai</h1></header>
							<form id="formtambahadmin" action="" method="post">

<div class="tabel" style="width:580px;margin:auto">
<table>
	<!-- <tr>
		<td class="td-form">ID Admin</td> 
		<td class="td-form"><center><input type="text" name="kode" class="td-select-form" value=""/></center></td>
	</tr> -->

	<tr>
      <td class="td-form">NIP</td>
      <td class="td-form"><input type="text" name="NIP" class="td-select-form" value="<?php echo $data['NIP'];?>" /></td>
    </tr>
	<tr>
		<td class="td-form">Nama Pegawai</td>
		<td class="td-form"><input type="text" name="nama_pegawai" class="td-select-form" value="<?php echo $data['nama'];?>" required placeholder="Nama"/></td>
	</tr>
	<tr>
		<td class="td-form">Nomor STR</td>
		<td class="td-form"><input type="text" name="nomor_STR" class="td-select-form" value="<?php echo $data['nomor_STR'];?>" required placeholder="Nomor STR"/>
		</td>
	</tr>
	<tr>
		<td>Masa Berlaku STR </td>
        <td><div class="td-form">
          <input type="text" name="akhir_STR" id="akhir_STR" class="td-select-form" value="<?php echo $data['akhir_STR'];?>" required placeholder="Tanggal Berlaku STR"/>
        </div></td>
        <tr>
        <td class="td-form">Upload STR(*pdf)</td>
		<td class="td-form" enctype="multipart/form-data" method="POST" action="">
			<input type="file" name="fupload" id="fupload">
		</td>
	</tr>
	  

        <td class="td-form"></td>
<td class="td-form"><button name="Simpan" class="btn-simpan" value="Upload"><img src="images/simpan.png" width="25" title="Simpan" class="btn-simpan-img"><span style="font-weight:bold">Simpan</span></button></td>
<td class="td-form"><button name="back" class="btn-simpan"><a href="admin.php"><img src="images/simpan.png" width="25" title="Simpan" class="btn-simpan-img"><span style="font-weight:bold">Kembali</span></button></td>

</table></center>
</div>

</form>
							
						</div>
					</section>

					<!-- section 2 -->
					
					
				</div>	<!-- .tm-content -->							
				<footer class="footer-link">
					<p class="tm-copyright-text">Muhammad Jibril - Universitas Gajayana 
                    
                    </p>
				</footer>
			</div>	<!-- row -->			
		</div>
</html>
<?php
	include "footer.php";
}
?>




<?php
if (isset($_POST['Simpan'])) {
	
	

	$NIP=strip_tags($_POST['NIP']);
	$nama_pegawai=strip_tags($_POST['nama_pasien']);
	$nomor_STR =strip_tags($_POST['nomor_STR']);
	$akhir_STR=strip_tags($_POST['akhir_STR']);
	
	$getid=strip_tags($_POST['getid']);
	
	$lokasi_file = $FILES['fupload']['tmp_name'];
$nama_file = $FILES['fupload']['name'];
$folder = "files/$nama_file";
if (move_uploaded_file($lokasi_file, "$folder")){
	echo "$nama_file";
}
else{
	echo "file gagal diupload";
}
/*$nama_file=strip_tags($_POST['nama_file']);
	//update db
	$update = "UPDATE data_pegawai SET NIP='$NIP',nama='$nama_pegawai', nomor_STR='$nomor_STR', akhir_STR='$akhir_STR', file_scan='$nama_file' WHERE No = '$getid'" ;
 	$hasil = mysqli_query($koneksi, $update);
 	
	$pesan = "";
	if ($hasil) {
		echo"<script>alert('Data Tersimpan ');location.href='admin.php';</script>";
		// header("Location:tb_jurusan.php");
	} else {
		echo"<script>alert('Data Gagal diupload ! ');</script>";
	}
*/	
}
?>