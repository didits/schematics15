<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
<script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.min.js"></script>
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-toolbar/core-toolbar.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-tooltip/core-tooltip.html">
<title>National Logic Competition | Schematics 2015</title>
<style shim-shadowdom>
html, body {
	height: 100%;
	font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
	margin: 0;
	padding: 0;
}
core-scroll-header-panel {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: #fff;
	height: 100%;
}
	    /* background for toolbar when it is at its full size */
	    core-scroll-header-panel::shadow #headerBg {
 background-image: url(<?php echo base_url();
?>assets/images/bg9.jpg);
}

	    /* background for toolbar when it is condensed */
	    core-scroll-header-panel::shadow #condensedHeaderBg {
 background-color: #f4b400;
}
core-toolbar {
	color: white;
	fill: white;
	background-color: transparent;
}
a {
	text-decoration: none;
	color: #fff;
}
a.map {
	text-decoration: none;
	color: #666;
}
.title {
	-webkit-transform-origin: 0;
	transform-origin: 0;
	font-size: 40px;
}
p {
	line-height: 30px;
	margin: 0;
}
h3 {
	margin-top: 30px;
	margin-bottom: 0;
	color: #263238;
}
 @media only screen and (min-width: 200px) {
.content {
	padding: 10px;
}
}
 @media only screen and (min-width: 720px) {
.content {
	padding: 50px;
}
}
.tab1 {
	margin-left: 25px;
}
.tab1 p {
	color: #37474f;
}
.tab2 {
	margin-left: 50px;
	color: #546e7a;
	font-size: 14px;
}
.tab2 p {
	color: #607d8b;
	font-size: 14px;
}
.divider {
	margin-top: 30px;
	border-top: #CCC solid 1px;
}
.divider2 {
	margin-top: 30px;
	border-top: #CCC dotted 1px;
}
</style>
<style shim-shadowdom>
core-tooltip.fancy::shadow .core-tooltip {
 opacity: 0;
 -webkit-transition: all 300ms cubic-bezier(0, 1.92, .99, 1.07);
 transition: all 300ms cubic-bezier(0, 1.92, .99, 1.07);
 -webkit-transform: translate3d(0, -10px, 0);
 transform: translate3d(0, -10px, 0);
}
 core-tooltip.fancy:hover::shadow .core-tooltip, core-tooltip.fancy:focus::shadow .core-tooltip {
 opacity: 1;
 -webkit-transform: translate3d(0, 0, 0);
 transform: translate3d(0, 0, 0);
}
.lokasi {
	height: 20px;
	width: 20px;
}
</style>
</head>
<body unresolved>
<core-scroll-header-panel condenses>
<core-toolbar class="tall">
	<core-tooltip label="Kembali" class="fancy"> <a href="<?php echo base_url(); ?>">
		<core-icon-button icon="arrow-back"></core-icon-button>
		</a> </core-tooltip>
	<div flex></div>
	<core-icon-button icon="more-vert"></core-icon-button>
	<div class="bottom indent title">NLC</div>
</core-toolbar>
<div class="content">
<h1 align="left" style="color:#666;">NATIONAL LOGIC COMPETITION</h1>
<p align="left" style="line-height:30px;color:#666;">NLC (NATIONAL LOGIC COMPETITION) adalah kompetisi logika nasional terbesar di Indonesia. Di dalam kompetisi ini peserta akan diuji kemampuan logikanya, sehingga peserta tidak perlu repot-repot belajar untuk menghapal rumus - rumus dan teori-teori, cukup dengan hanya mengandalkan kemampuan berpikir kalian, kalian bisa mengikuti kompetisi yang bergengsi ini. Ayo uji kemampuan logikamu dalam kompetisi ini!</p>
<div class="divider"></div>
<ol type="A">
	<li>
		<h3>Persyaratan dan Biaya Pendaftaran</h3>
		<ol type="1">
			<li>
				<p>Syarat:</p>
			</li>
			<ul style="list-style-type:none">
				<li style="list-style-type:square">Satu tim maksimal 3 orang dari sekolah yang sama.</li>
			</ul>
			<li>
				<p>Biaya Pendaftaran:</p>
			</li>
			<ul style="list-style-type:none">
				<li style="list-style-type:square">Rp. 120.000,-/tim</li>
			</ul>
		</ol>
		<div class="divider2"></div>
	<li>
		<h3>Tempat Pelaksanaan NLC</h3>
		<p style="list-style-type:square">Penyisihan NLC akan dilaksanakan secara online dan offline. Untuk penyisihan online peserta hanya dibatasi maksimal 200 tim. Sementara untuk penyisihan offline akan dilaksanakan pada daerah-daerah di bawah ini: 
	</li>
	<div class="divider2"></div>
	<li>
		<h3>Hadiah</h3>
		<p style="list-style-type:square">Semua juara akan mendapatkan sertifikat dan plakat juara dan hadiah uang dengan ketentuan: 
	</li>
	<p style="list-style-type:square">*Diterima di Teknik Informatika ITS reguler melalui jalur SNMPTN / double degree (Korea, Belanda, Australia) berlaku peserta yang duduk di kelas 12 saat lomba berlangsung dan lulus UNAS.
		</li>
	<div class="divider2"></div>
	<li>
		<h3>Jadwal Penting</h3>
		<ol type="1">
			<li>
				<p>Pendaftaran: 2 Juli 2015 - 21 September 2014</p>
			</li>
			</ul>
			<li>
				<p> Penyisihan: 28 September 2015</p>
			</li>
			<ul style="list-style-type:none">
				<li style="list-style-type:square">Online: Peserta mengerjakan soal NLC secara online.</li>
				<li style="list-style-type:square">Offine: Peserta mengerjakan soal NLC di tempat yang sudah ditentukan.</li>
				<li style="list-style-type:square">Offine: Seluruh peserta akan mendapatkan sertifikat nasional.</li>
				<li style="list-style-type:square">Offine: Fasilitas peserta penyisihan offline: Soal, Toolkit, Stiker, Snack dan Kartu Peserta.</li>
			</ul>
			<li>
				<p> Perempat Final: 18 Oktober 2015</p>
			</li>
			<ul style="list-style-type:none">
				<li style="list-style-type:square">80 tim terbaik dari babak penyisihan berhak mengikuti babak perempat final.</li>
				<li style="list-style-type:square">Diadakan di Kampus <a class="map" href="https://www.google.com/maps/d/u/0/viewer?ll=-7.279549,112.79723&t=h&source=embed&ie=UTF8&msa=0&spn=0,0&hl=en&mid=zLbm3ifR79ns.kwC3VjBHbgmo">
					<core-tooltip class="fancy" position="top">
						<div style="border:#CCC solid 1px; border-radius:5px; padding:2px; padding-top:3px; padding-right:5px; background-color: #F0F0F0; cursor:pointer";>
							<core-icon icon="room" class="lokasi"></core-icon>
							Teknik Informatika ITS </div>
						<div tip>
							<iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201744211942696187723.0004d7ede2216183d517f&amp;hl=en&amp;ie=UTF8&amp;t=h&amp;ll=-7.279549,112.79723&amp;spn=0,0&amp;output=embed"></iframe>
						</div>
					</core-tooltip>
					</a></li>
				<li style="list-style-type:square">Seluruh peserta akan mendapatkan sertifikat nasional</li>
				<li style="list-style-type:square">Fasilitas Perempat Final: Kaos + Makan </li>
			</ul>
			<li>
				<p>Semifinal dan Final: 19 Oktober 2015</p>
			</li>
			<ul style="list-style-type:none">
				<li style="list-style-type:square">Semifinal: 20 tim terbaik dari babak perempat final berhak mengikuti babak semifinal.</li>
				<li style="list-style-type:square">Fasilitas Semifinal dan Final: Semua biaya penginapan, konsumsi, dan transportasi selama di Surabaya akan dibiayai panitia.</li>
			</ul>
		</ol>
</ol>
<div class="divider2"></div>
</core-scroll-header-panel>
<iframe src="<?php echo base_url(); ?>/assets/slider_nlc" width="100%" height="400px" scrolling="no" frameborder="0"></iframe>
<script>
	    // custom transformation: scale header's title
	    var titleStyle = document.querySelector('.title').style;
	    addEventListener('core-header-transform', function(e) {
	      var d = e.detail;
	      var m = d.height - d.condensedHeight;
	      var scale = Math.max(0.75, (m - d.y) / (m / 0.25)  + 0.75);
	      titleStyle.transform = titleStyle.webkitTransform =
	          'scale(' + scale + ') translateZ(0)';
	    });
	  </script>
</body>
</html>
