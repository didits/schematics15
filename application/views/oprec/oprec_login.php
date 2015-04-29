<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
    <script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.js"></script>
    <link rel="import" href="<?php echo base_url(); ?>bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/core-toolbar/core-toolbar.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/core-tooltip/core-tooltip.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/paper-slider/paper-slider.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/paper-tabs/paper-tabs.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/core-pages/core-pages.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/paper-shadow/paper-shadow.html">
    <link rel="import" href="<?php echo base_url(); ?>bower_components/paper-button/paper-button.html">
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
	margin-top: auto;
	margin-bottom: auto;
	margin-left: 20px;
	margin-right: 20px;
	padding: 15px;
	height:300px;
}
h1 {
	font-size: 16px;
	color: #FF9909;
}
paper-input-decorator floatingLabel label {
}
}
 @media only screen and (min-width: 480px) {
#page {
	position:absolute;
	top:50%;
	left:50%;
	margin-left:-250px;
	margin-top:-200px;
	width:400px;
	height:300px;
	padding: 50px;
}
h1 {
	font-size: 22px;
}
}
 @media only screen and (min-width: 760px) {
#page {
	position:absolute;
	top:50%;
	left:50%;
	margin-left:-250px;
	margin-top:-200px;
	width:400px;
	height:300px;
	padding: 50px;
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
#my-button {
	margin-top: 15px;
	float: right;
}
 #my-button::shadow #ripple {
 color: #F7CA18;
}
@font-face {
	font-family: 'Droid Serif';
	src: url('Droid-Serif.ttf');
}
.list {
	display: inline-block;
	color: white;
	list-style: none;
	margin: 0;
	padding: 0;
}
.list > *.core-selected {
	font-family: Droid-Serif;
	background-color: #333;
	color: black;
}
    paper-button.colored {
      color: #4285f4;
    }

    paper-button[raised].colored {
      background: #4285f4;
      color: #fff;
    }
</style>
    </head>
    <body unresolved>
	<paper-shadow z="1" id="page">
		<center>
			<h1>OPREC SCHEMATICS 15</h1>
		</center>
		<paper-input-decorator floatingLabel label="NRP">
			<input is="core-input">
		</paper-input-decorator>
		<paper-input-decorator floatingLabel label="Nama Lengkap">
			<input is="core-input">
		</paper-input-decorator>
		<div class="g-recaptcha" data-sitekey="6LdXBgYTAAAAANF8nyHGOWpymBrV_-zQY71iRDrX"></div>
		<center>
		<div style="display:block; height:30px; margin-top:30px; margin-bottom:30px">
			 <paper-button raised class="colored">next</paper-button>
		</div>
		</center>
	</paper-shadow>
</body>
</html>
