<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
  <script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.min.js"></script>
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
.content {
	padding-left: 100px;
	padding-right: 100px;
	color: #666;
}
.divider {
	margin-top: 30px;
	border-top: #CCC solid 1px;
}
</style>
  </head>
  <body unresolved>
<core-scroll-header-panel condenses>
	<core-toolbar class="tall">
		<core-icon-button icon="more-vert"></core-icon-button>
		<div class="bottom indent title"></div>
	</core-toolbar>
	<h1 align="center" style="color:#666">STATISTIK JUMLAH PESERTA SCHEMATICS 2015</h1>
	<div class="content">
		<h2>1. National Logic Competition</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="2" >
			<tr height="30px">
				<td width="30%" align="center" bgcolor="#b5f4f9">PENDAFTAR</td>
				<td width="30%" align="center" bgcolor="#ff7300">BELUM TERVERIFIKASI</td>
				<td width="30%" align="center" bgcolor="#2ecc71">SUDAH TERVERIFIKASI</td>
			</tr>
			<tr>
				<td align="center" bgcolor="#b5f4f9"><p style="font-size:60px">600</p></td>
				<td align="center" bgcolor="#ff7300"><p style="font-size:60px">200</p></td>
				<td align="center" bgcolor="#2ecc71"><p style="font-size:60px">400</p></td>
			</tr>
		</table>
		<div class="divider"></div>
		<p align="LEFT" style="line-height:30px">Peserta Terverifikasi Online maupun Offline</p>
		<table width="100%" border="1">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>

	</div>
</core-scroll-header-panel>
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
