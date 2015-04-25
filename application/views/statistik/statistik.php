<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
  <script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/Chart.min.js"></script>
  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-toolbar/core-toolbar.html">
  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
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
?>bower_components/core-scroll-header-panel/demos/images/bg9.jpg);
}

    /* background for toolbar when it is condensed */
    core-scroll-header-panel::shadow #condensedHeaderBg {
 background-color: #f4b400;
}
core-toolbar {
	color: #f1f1f1;
	fill: #f1f1f1;
	background-color: transparent;
}
.title {
	-webkit-transform-origin: 0;
	transform-origin: 0;
	font-size: 40px;
}
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.divider {
	margin-top: 30px;
	border-top: #CCC solid 1px;
	margin-bottom: 30px;
}
@media only screen and (min-width: 200px) {
  	.content {
		padding: 10px;
	}
	.angka{
		font-size:30px; 
	}
	.icon{
		width: 20px;
		height: 20px;
	}
	.huruf{
		display: none;
	}
	.tuk{
		font-size: 100px;
	}
  	}
@media only screen and (min-width: 480px) {
	.content {
	padding-left: 50px;
	padding-right: 50px;
	}
	.angka{
		font-size:60px; 
	}
	.icon{
	width: 50px;
	height: 50px;
	}
	.huruf{
		display:block;
		font-size: 18px;
	}
}
@media only screen and (min-width: 720px) {
	.content {
	padding-left: 100px;
	padding-right: 100px;
	}
	.angka{
		font-size:60px; 
	}
	.icon{
	width: 80px;
	height: 80px;
	}
}
</style>
  </head>
  <body unresolved>
<core-scroll-header-panel condenses>
	<core-toolbar class="tall">
		<core-icon-button icon="home"></core-icon-button>
		<div class="bottom indent title">GOAL</div>
	</core-toolbar>
	<div class="content">
		<h1 align="center">NATIONAL LOGIC COMPETITION</h1>
		<h3>1. Jumlah Pendaftar NLC</h3>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom:50px">
			<tr height="30px">
				<td width="30%" align="center" bgcolor="#2980B9"><p style="color: white;">
					<p style="color:white;">
					<span><core-icon class="icon" icon="face"></core-icon></span></p></td>
				<td width="30%" align="center" bgcolor="#C0392B"><p style="color: white;">
					<span><core-icon  class="icon" icon="cancel"></core-icon></span></p></td>
				<td width="30%" align="center" bgcolor="#27AE60"><p style="color: white;">
					<span><core-icon class="icon" icon="check-circle"></core-icon></span></p></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#2980B9"><p class="huruf" style="color:white;">Pendaftar</p></td>
				<td align="center" bgcolor="#C0392B"><p class="huruf" style="color:white;">Belum terverifikasi</p></td>
				<td align="center" bgcolor="#27AE60"><p class="huruf" style="color:white;">Terverifikasi</p></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#3498DB"><p class="angka" style="color:white;">600</p></td>
				<td align="center" bgcolor="#E74C3C"><p class="angka" style="color:white;">200</p></td>
				<td align="center" bgcolor="#2ECC71"><p class="angka" style="color:white;">400</p></td>
			</tr>
		</table>
		<h3>1. Pendaftar Terverifikasi Secara Online Maupun Offline</h3>
		<div style="width: 100%;">
			<canvas id="canvas" height="50px" width="200px"></canvas>
		</div>
		<h3>3. TUK Tercapai</h3>
		<h1 class="tuk" align="center">1000/1200</h1>
		<div class="divider"></div>
	</div>
</core-scroll-header-panel>
	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["Offline","Surabaya","Semarang","Madiun","Jember","Tulungagung","Probolinggo"],
		datasets : [
			{
				fillColor : "rgba(45,204,112,1)",
				strokeColor : "rgba(255,255,255,1)",
				highlightFill: "rgba(39,174,97,1)",
				highlightStroke: "rgba(255,255,255,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
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
