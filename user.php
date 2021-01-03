<?php
session_start();
include "koneksi2.php";
?>
<?php
if(isset($_SESSION['username'])) {
$namauser= ($_SESSION['nama_pegawai']);
$nip = $_SESSION['NIP'];
$query = "SELECT * FROM data_pegawai WHERE NIP='nip'";
	$hasil = mysqli_query($koneksi, $query);
	$data  = mysqli_fetch_array($hasil);

?>

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
								<a href="#beranda" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Beranda</span>
								</a>
							</li>

							<li>

								<a href="#datauser" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page-type="carousel" data-page="#tm-section-2">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>Data Anda</span>
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
							<header class="mb-4"><h1 class="tm-text-shadow">Selamat Datang <?php echo $namauser;?></h1></header>
							<p class="mb-5 tm-font-big">Sistem informasi yang dipergunakan untuk melakukan olah data mengenai Surat Tanda Registrasi ( STR ) pegawai.</p>
							
						</div>
					</section>

					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section tm-section-carousel">
						<div>
							<header class="mb-4"><h2 class="tm-text-shadow">Edit Data Anda</h2></header>		            
							<div class="tm-img-container">
								<form id="formtambahadmin" action="pin_str.php" method="post">

<div class="tabel" style="width:580px;margin:auto">
<table>
	<!-- <tr>
		<td class="td-form">ID Admin</td> 
		<td class="td-form"><center><input type="text" name="kode" class="td-select-form" value=""/></center></td>
	</tr> -->
	<tr>
      <td class="td-form">Username</td>
      <td class="td-form"><input type="text" name="username" class="td-select-form" value="<?php echo $data2['username'];?>" /></td>
    </tr>
    <tr>
      <td class="td-form">Password</td>
      <td class="td-form"><input type="Password" name="password" class="td-select-form" value="<?php echo $data2['password'];?>" /></td>
    </tr>
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
							</div>		            		          
						</div>       		          	
					</section>
					

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
