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


  <style shim-shadowdom>

    html, body {
      height: 100%;
      font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
      margin: 0;
      padding: 0;
    }
    body{
      background-color: #FDFF9E;
    }
     core-toolbar {
      background-color: #CFA0E9;
    }
    core-toolbar.dark-theme {
      background-color: #F7CA18;
      color: #f1f1f1;
      fill: #f1f1f1;
    }
    paper-slider {
      width: 100%;
    }
    
    section {
      max-width: 1000px;
      padding: 20px 0;
      background-color: #f0f0f0;
    }
    
    section > div {
      padding: 14px;
    }
    
    
    #ratingsLabel {
      padding-left: 12px;
      color: #a0a0a0;
    }
	
	paper-input-decorator /deep/ .label-text,
	paper-input-decorator /deep/ .error {
		/* inline label,  floating label, error message and error icon color when the input is unfocused */
		color: green;
    margin: 0;
	}
	
	paper-input-decorator /deep/ ::-webkit-input-placeholder {
		/* platform specific rules for placeholder text */
		color: green;
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
	
	paper-input-decorator.invalid[focused] /deep/ .floated-label .label-text,
	paper-input-decorator[focused] /deep/ .error {
		/* floating label, error message nad error icon color when the input is invalid and focused */
		color: salmon;
	}
	
	paper-input-decorator.invalid /deep/ .focused-underline {
		/* line and color when the input is invalid and focused */
		background-color: salmon;
	}

  

	#page{
		box-shadow:#FC62BE;
    background-color: white;
		border: #F60;
		margin-top:50px;
    margin-bottom:50px;
    margin-left: 250px;
    margin-right: 250px;
    padding: 75px;
	}
  #my-button{
    float: right;
  }
  #my-button::shadow #ripple {
    color: #F7CA18;
  }
  .line{
    margin: 30px;
  }
  </style>
</head>
<body unresolved>
  <core-toolbar class="dark-theme">
    <core-icon-button icon="home"></core-icon-button>
    <span flex>Dashboard NLC</span>
  <core-tooltip label="email" position="bottom">
    <core-item icon="account-circle" class="contact-item">
      <core-icon icon="account-circle"></core-icon>
    </core-item>
  </core-tooltip>
  
  </core-toolbar>  
<paper-tabs selected="0">
  <paper-tab>Identitas Kelompok</paper-tab>
  <paper-tab>Tab 2</paper-tab>
  <paper-tab>Tab 3</paper-tab>
  <paper-tab>Tab 4</paper-tab>
</paper-tabs>
<br>
<core-pages selected="0">
<div>
<paper-shadow z="1" id="page">
<div>
  	<h1><center>MASUKAN DATA KELOMPOK ANDA</center></h1>
	<paper-input-decorator floatingLabel label="Nama Kelompok">
    	<input is="core-input">
	</paper-input-decorator>
  <paper-input-decorator floatingLabel label="Email Ketua">
      <input is="core-input">
  </paper-input-decorator>
  <paper-input-decorator floatingLabel label="Asal Sekolah">
      <input is="core-input">
  </paper-input-decorator>
  <paper-input-decorator floatingLabel label="Alamat Sekolah">
      <input is="core-input">
  </paper-input-decorator>
  <div class="line"></div>
  <paper-input-decorator floatingLabel label="Nama Ketua">
      <input is="core-input">
  </paper-input-decorator>
  <paper-input-decorator floatingLabel label="No Handphone Ketua">
      <input is="core-input">
  </paper-input-decorator>
  <div class="line"></div>
  <paper-input-decorator floatingLabel label="Nama Anggota 1">
      <input is="core-input">
  </paper-input-decorator>
  <paper-input-decorator floatingLabel label="No Handphone Anggota 1">
      <input is="core-input">
  </paper-input-decorator>
  <div class="line"></div>
  <paper-input-decorator floatingLabel label="Nama Anggota 2">
      <input is="core-input">
  </paper-input-decorator>
  <paper-input-decorator floatingLabel label="No Handphone Anggota 2">
      <input is="core-input">
  </paper-input-decorator>
	</div>
  <paper-button raised id="my-button">Next</paper-button>
	</paper-shadow>
	</div>
  <div>Page 2</div>
  <div>Page 3</div>
</core-pages>
<script>
  var tabs  = document.querySelector('paper-tabs'); 
  var pages = document.querySelector('core-pages');
  tabs.addEventListener('core-select',function(){
  pages.selected = tabs.selected;
  console.log("Selected: " + tabs.selected);
});
</script>
</body>
</html>
