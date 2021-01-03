<?php
include("koneksi2.php");
// username dan password yang dikirim dari form login
$username=$_POST['username'];
$password=$_POST['password'];


// Untuk melindungi MySQL injection (http://us.php.net/mysql_real_escape_string)
$username = stripslashes($username);
$password = stripslashes($password);

$sql="SELECT * FROM akun_login WHERE binary username='$username' and password='$password'";
$result=mysqli_query($koneksi, $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
	
	$row=mysqli_fetch_array($result);
	$status = $row['jenis_akun'];
	$kode = $row['NIP'];
	$namauser = $row['nama_pegawai'];

	// daftarkan $username, $password dan diarahkan ke file main_admin ato main_control
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['jenis_akun'] = $status;
		$_SESSION['NIP'] = $kode;
		$_SESSION['nama_pegawai'] = $namauser;
	

			if($status=="1") {
				header("location:admin.php");
				}
			else {
				header("location:user.php");
				}
}
			else {
				// apabila mengalami login error
				echo "<script>";
				echo "alert('Username atau Password Anda Salah');";
				echo "window.location='index.php';";
				echo"</script>";
				//header("location:login.php");
			}
?>