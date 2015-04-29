<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Schematics - Page Not Found</title>
<script src='<?php echo base_url(); ?>assets/notfound/jquery-1.8.3.min.js'></script>
<link href="<?php echo base_url(); ?>assets/notfound/style.css" rel="stylesheet" />
<script src='<?php echo base_url(); ?>assets/notfound/jquery.elevatezoom.js'></script>
</head>
<body style="background-color:#F1C40F; margin:0;">
<div class="center">
<p align="center"><img id="zoom_07" src="<?php echo base_url(); ?>assets/notfound/images/small/404.png" data-zoom-image="<?php echo base_url(); ?>assets/notfound/images/large/404D.png" width="40%"/></p>
</div>
<div class="left">
	<div class="box">
		<h1 align="center">Error (404)</h1>
		<ul class="navigasi" type="none">
			<li><h3>Mengapa Anda berada di halaman ini?</h3></li>
			<ul>
				<li>Halaman yang Anda tuju kemungkinan telah dihapus oleh admin</li>
				<li>Anda salah memasukkan alamat website</li>
			</ul>
		</ul>
		<ul class="navigasi" type="none">
			<li><h3>Bagaimana cara mengatasinya?</h3></li>
			<ul>
				<li>Cek alamat website yang Anda masukkan</li>
			</ul>
		</ul>
		<br />
	</div>
</div>
<script>
$("#zoom_07").elevateZoom({ zoomType : "lens", lensShape : "round", lensSize : 200 }); 
</script>
</body>
</html>
