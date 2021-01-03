<?php
session_start();
include "koneksi2.php";
?>
<?php
if(isset($_SESSION['username'])) {
$namauser= ($_SESSION['nama_pegawai']);
?>
<script>
$(document).ready( function () {
    $('#table_id').dataTable( {
        "id": '<"toolbar">frtip'
} );
} );
function hapus(id) {
    if(confirm("Apakah Data Ingin Dihapus?")){
    	location.href="hapus_str.php?id="+id;
    	//alert('hello');
    }
}
</script>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>


<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>

<script type="text/javascript" src="js/jsDatePick.jquery.min.1.3.js"></script>

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
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Beranda</span>
								</a>
							</li>

							<li>

								<a href="#datauser" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page-type="carousel" data-page="#tm-section-2">
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
							<header class="mb-4"><h1 class="tm-text-shadow">Selamat Datang <?php echo $namauser;?></h1></header>
							<p class="mb-5 tm-font-big">Sistem informasi yang dipergunakan untuk melakukan olah data mengenai Surat Tanda Registrasi ( STR ) pegawai.</p>
							
						</div>
					</section>

					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section tm-section-carousel">
						<div>
							<header class="mb-4"><h2 class="tm-text-shadow">Data Keseluruhan</h2></header>

								<?php

	$query = "SELECT * FROM data_pegawai order by No asc";
	$result = mysqli_query($koneksi, $query);
	echo "<center>";
	echo "<div class='tabel'>";
	echo "<table id='table_id' class='display' style='border:1px solid #424242; border-width: 1px 1px 1px 1px' >";
	echo "<thead>";
	echo "<tr>";
	// echo "<th valign='middle' class='td-header'><center>ID LAB</center></th>";	
	echo "<th ><center>No</center></th>";
	echo "<th ><center>NIP</center></th>";
	echo "<th ><center>Nama Pegawai</center></th>";
	echo "<th ><center>Nomor STR</center></th>";
	echo "<th ><center>Tgl Berlaku STR</center></th>";
	echo "<th ><center>File</center></th>";
	echo "<th ><center>EDIT</center></th>";
	echo "<th ><center>HAPUS</center></th>";
	echo "</tr>";
	echo "</thead>";
	echo "<center>";
	echo "<tbody>";
	if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
	while($row = mysqli_fetch_array($result)){
		echo "<center>";
		echo "<tr class='tr-tabel'>";
		// echo "<td valign='middle' class='td'>".$row['id_lab']."</td>";		
		echo "<td >".$row['No']."</td>";
		echo "<td >".$row['NIP']."</td>";
		echo "<td >".$row['nama']."</td>";
		echo "<td >".$row['nomor_STR']."</td>";
		echo "<td >".$row['akhir_STR']."</td>";
		echo "<td >".$row['file_scan']."</td>";
		echo "<td style='text-align:center'><a href='edit_str.php?id=".$row['No']."'><img style='width:20px;height:20px'src='images/edit.png' title='Edit'></a></td>";
		echo "<td style='text-align:center'><a href='#' onClick='hapus(".$row['nomor_STR'].")'><img style='width:20px;height:20px'src='images/hapus.png' title='Hapus'></a></td>";
		echo "</tr>";
		echo "<center>";


	}
	echo "</tbody>";
	echo "</table>";
	echo "<a href='in_str.php'><button type='submit'><img src='images/tambah.png' width='25' title='Tambah' >Tambah</button></a>";
	echo "</div>";
?>

								
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
