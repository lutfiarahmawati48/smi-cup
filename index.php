<?php 
	/*
	*---------------------------------------------------------------
	* E-REGISTRASI PENCAK SILAT
	*---------------------------------------------------------------
	* This program is free software; you can redistribute it and/or
	* modify it under the terms of the GNU General Public License
	* as published by the Free Software Foundation; either version 2
	* of the License, or (at your option) any later version.
	*
	* This program is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with this program; if not, write to the Free Software
	* Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
	*
	* @Creator Yudha Yogasara
	* yudha.yogasara@gmail.com
	* @Contributor Sofyan Hadi, Satria Salam
	*
	* IPSI KABUPATEN TANGERANG
	* SALAM OLAHRAGA
	*/
	
	include "backend/includes/connection.php";


	//count jumlah peserta ALL
	$sqlpesertaall = mysqli_query($koneksi, "SELECT COUNT(*) FROM peserta");
	$datapesertaall = mysqli_fetch_array($sqlpesertaall);

	//count jumlah peserta ALL WHERE PAID
	$sqlpesertpaid = mysqli_query($koneksi, "SELECT COUNT(*) FROM peserta WHERE status='PAID' ");
	$datapesertapaid = mysqli_fetch_array($sqlpesertpaid);

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrasi Sirkuit Pencak Silat</title>
<meta name="description" content="Registrasi Online Kejuaraan Pencak Silat">
<meta name="keywords" content="registrasi,online,pencak,silat">
<meta name="robots" content="index,follow">
<meta name="author" content="Yudha Yogasara">
<!-- CSS Files -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
	
</head>
<body>
<!-- Start Wrapper -->
<div id="wrapper">
  <?php 
	include "headmenu.php";
  ?>

<p><strong>PERTANDINGAN PENCAKSILAT</strong></p>
<p>
</p>

</br></br>
<p><strong>JADWAL KEGIATAN</strong></p>
<p><strong>Pendaftaran :</strong> ...</p>
<p><strong>Technical Meeting :</strong> ...</p>
<p><strong>Upacara Pembukaan :</strong> ...</p>
<p><strong>Pertandingan :</strong> ...</p>
<p><strong>Upacara Penutupan :</strong> ...</p>

</br></br>


</br>
</br>
<div align="center"><a href="mulai_pendaftaran.php"><img src="images/daftar-now.gif" width="200px"></a></div>


<!-- start: footer -->
<div id="footer">
	<p>Copyleft <?php echo " - ".date("Y"); ?> <a href="developer.php">KAWAN SATRIA EO</a> </p>
	<!-- end: footer -->
</div>
<!-- end: footer -->
</div>
  </body>
</html>