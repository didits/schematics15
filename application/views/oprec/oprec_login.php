<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
<script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-tooltip/core-tooltip.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/paper-slider/paper-slider.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-pages/core-pages.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/paper-shadow/paper-shadow.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/paper-button/paper-button.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/paper-toast/paper-toast.html">
<script src='https://www.google.com/recaptcha/api.js'></script>
<style shim-shadowdom>
body {
	font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
	margin: 0;
	padding: 0;
	background-color: #0288D1;
}
 paper-input-decorator /deep/ .label-text, paper-input-decorator /deep/ .error {
			/* inline label,  floating label, error message and error icon color when the input is unfocused */
			color: green;
 margin: 0;
}
 paper-input-decorator /deep/ ::-webkit-input-placeholder {
			/* platform specific rules for placeholder text */
			color: #FF9909;
}
 paper-input-decorator /deep/ ::-moz-placeholder {
 color: green;
}
 paper-input-decorator /deep/ :-ms-input-placeholder {
 color: green;
}
 paper-input-decorator /deep/ .unfocused-underline {
			/* line color when the input is unfocused */
			background-color: green;
}
 paper-input-decorator[focused] /deep/ .floating-label .label-text {
			/* floating label color when the input is focused */
			color: orange;
}
 paper-input-decorator /deep/ .focused-underline {
			/* line color when the input is focused */
			background-color: orange;
}
 paper-input-decorator.invalid[focused] /deep/ .floated-label .label-text, paper-input-decorator[focused] /deep/ .error {
			/* floating label, error message nad error icon color when the input is invalid and focused */
			color: salmon;
}
 paper-input-decorator.invalid /deep/ .focused-underline {
			/* line and color when the input is invalid and focused */
			background-color: salmon;
}
 @media only screen and (min-width: 240px) {
#page {
}
h1 {
	font-size: 16px;
	color:  #fff;
}
paper-input-decorator floatingLabel label {
}
}
 @media only screen and (min-width: 480px) {
#page {
}
h1 {
	font-size: 22px;
}
}
 @media only screen and (min-width: 760px) {
#page {
	display:inline-block;
	width: 400px;
	height: auto;
	margin:12px;
}
h1 {
	font-size: 30px;
}
}
#page {
	box-shadow: #FC62BE;
	background-color: white;
	border: #F60;
}
.dalam-page{
	display:block;
	margin-left:auto;
	margin-right:auto;
	width:300px;
	height:auto;
	padding:20px;
	}
</style>
</head>
<body unresolved <?php
		   if(isset($_GET['status']) && $_GET['status']=="gagal"){
			echo "onLoad='myFunction()'";
		   }
		  ?>>
<paper-toast id="toast1" text="Verifikasi Captcha Gagal!" style="background-color:#f44336; position:fixed; right: 10px; left:auto;top:10px; width: 200px; height:50px"></paper-toast>
<paper-shadow z="1" id="page">
	<center>
	<div style="display:inline-block; width:100%; height:80px; background-color: #2196f3;"><h1>Oprec Schematics 2015</h1></div>
		
	</center>
	
	<form class="dalam-page" action="<?php echo base_url(); ?>oprec/register" method="post">
		<paper-input-decorator floatingLabel label="NRP">
			<input id="i1" type="text" name="nrp" is="core-input" maxlength="10" required="required">
		</paper-input-decorator>
		<paper-input-decorator floatingLabel label="Nama Lengkap">
			<input type="text" is="core-input" name="nama" maxlength="50" required="required">
		</paper-input-decorator>
		<paper-input-decorator floatingLabel label="Email">
			<input type="email" name="email" is="core-input" required="required">
		</paper-input-decorator>
		<paper-input-decorator floatingLabel label="Link Facebook">
			<input type="text" name="fb" is="core-input">
		</paper-input-decorator>
		<center>
		<div class="g-recaptcha" data-sitekey="6LdXBgYTAAAAANF8nyHGOWpymBrV_-zQY71iRDrX" style="margin-top:30px; width:100%;"></div>
			<div style="display:block; height:30px; margin-top:30px; margin-bottom:30px">
				<label for="next">
					<paper-button raised class="colored">next</paper-button>
				</label>
				<input type="submit" is="next" id="next" style="display:none">
			</div>
		</center>
	</form>
</paper-shadow>
<script type="text/javascript">
	function myFunction(){
	document.querySelector('#toast1').show()
	}
	</script>
</body>
</html>
