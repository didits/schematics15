<html>
<head>
<title>Faq | Schematics 2015</title>
<script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-collapse/core-collapse.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-header-panel/core-header-panel.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
<style>
core-header-panel {
	float: left;
	width: 100%;
	height: 100%;
}
 core-header-panel[mode=cover]::shadow #mainContainer {
 left: 70px;
}
.core-header {
	height: 60px;
	line-height: 60px;
	font-size: 18px;
	padding: 0 10px;
	background-color: #4F7DC9;
	color: #FFF;
	transition: height 0.2s;
}
.core-header.tall {
	height: 180px;
}
.core-header.medium-tall {
	height: 120px;
}
.content {
	height: auto;
	background: linear-gradient(rgb(214, 227, 231), lightblue);
}
body {
	font-family: sans-serif;
	margin: 8px 24px;
}
.heading {
	padding: 10px 15px;
	background-color: #f3f3f3;
	border: 1px solid #dedede;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	font-size: 18px;
	cursor: pointer;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
}
.content {
	padding: 15px;
	border: 1px solid #dedede;
	border-top: none;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}
</style>
</head>
<body unresolved fullbleed layout vertical>
<core-header-panel mode="waterfall-tall" tallClass="medium-tall">
	<div class="core-header">
	<core-toolbar class="dark-theme">
    <core-icon-button icon="arrow-back"></core-icon-button>
    <span flex>Faq | Schematics 2015</span>
  </core-toolbar>
	</div>
	<div class="content">
		<div class="heading" onclick="document.querySelector('#collapse1').toggle();">Collapse #1</div>
		<core-collapse id="collapse1">
			<div class="content">
				<div>Lorem ipsum dolor sit amet, per in nusquam nominavi periculis, sit elit oportere ea, id minim maiestatis incorrupte duo. Dolorum verterem ad ius, his et nullam verterem. Eu alia debet usu, an doming tritani est. Vix ad ponderum petentium suavitate, eum eu tempor populo, graece sententiae constituam vim ex. Cu torquatos reprimique neglegentur nec, voluptua periculis has ut, at eos discere deleniti sensibus. Lorem ipsum dolor sit amet, per in nusquam nominavi periculis, sit elit oportere ea, id minim maiestatis incorrupte duo. Dolorum verterem ad ius, his et nullam verterem. Eu alia debet usu, an doming tritani est. Vix ad ponderum petentium suavitate, eum eu tempor populo, graece sententiae constituam vim ex. Cu torquatos reprimique neglegentur nec, voluptua periculis has ut, at eos discere deleniti sensibus.</div>
			</div>
		</core-collapse>
		<br>
		<div class="heading" onclick="document.querySelector('#collapse2').toggle();">Collapse #2</div>
		<core-collapse id="collapse2">
			<div class="content">
				<div>Pro saepe pertinax ei, ad pri animal labores suscipiantur. Modus commodo minimum eum te, vero utinam assueverit per eu, zril oportere suscipiantur pri te. Partem percipitur deterruisset ad sea, at eam suas luptatum dissentiunt. No error alienum pro, erant senserit ex mei, pri semper alterum no. Ut habemus menandri vulputate mea. Feugiat verterem ut sed. Dolores maiestatis id per. Pro saepe pertinax ei, ad pri animal labores suscipiantur. Modus commodo minimum eum te, vero utinam assueverit per eu, zril oportere suscipiantur pri te. Partem percipitur deterruisset ad sea, at eam suas luptatum dissentiunt. No error alienum pro, erant senserit ex mei, pri semper alterum no. Ut habemus menandri vulputate mea. Feugiat verterem ut sed. Dolores maiestatis id per.</div>
				<br>
				<div class="heading" onclick="document.querySelector('#collapse3').toggle();">Collapse #3</div>
				<core-collapse id="collapse3">
					<div class="content">
						<div>Iisque perfecto dissentiet cum et, sit ut quot mandamus, ut vim tibique splendide instructior. Id nam odio natum malorum, tibique copiosae expetenda mel ea. Mea melius malorum ut. Ut nec tollit vocent timeam. Facer nonumy numquam id his, munere salutatus consequuntur eum et, eum cotidieque definitionem signiferumque id. Ei oblique graecis patrioque vis, et probatus dignissim inciderint vel. Sed id paulo erroribus, autem semper accusamus in mel. Iisque perfecto dissentiet cum et, sit ut quot mandamus, ut vim tibique splendide instructior. Id nam odio natum malorum, tibique copiosae expetenda mel ea. Mea melius malorum ut. Ut nec tollit vocent timeam. Facer nonumy numquam id his, munere salutatus consequuntur eum et, eum cotidieque definitionem signiferumque id. Ei oblique graecis patrioque vis, et probatus dignissim inciderint vel. Sed id paulo erroribus, autem semper accusamus in mel.</div>
					</div>
				</core-collapse>
			</div>
		</core-collapse>
	</div>
</core-header-panel>
</body>
</html>