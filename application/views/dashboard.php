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
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-selector/core-selector.html">



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
    .page2{
      margin: 10%;

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
	
	paper-input-decorator.invalid[focused] /deep/ .floated-label .label-text,
	paper-input-decorator[focused] /deep/ .error {
		/* floating label, error message nad error icon color when the input is invalid and focused */
		color: salmon;
	}
	
	paper-input-decorator.invalid /deep/ .focused-underline {
		/* line and color when the input is invalid and focused */
		background-color: salmon;
	}
  @media only screen and (min-width: 240px){
    #page{
    margin-top:10px;
    margin-bottom:10px;
    margin-left: 20px;
    margin-right: 20px;
    padding: 15px;
    }
    h1{
      font-size: 16px;
      color: #FF9909;
    }
    paper-input-decorator floatingLabel label{

    }
  }
  @media only screen and (min-width: 480px){
    #page{
    margin-top:20px;
    margin-bottom:20px;
    margin-left: 100px;
    margin-right: 100px;
    padding: 30px;
    }
    h1{
      font-size: 22px;
    }
  }
  @media only screen and (min-width: 760px){
    #page{
    margin-top:50px;
    margin-bottom:50px;
    margin-left: 150px;
    margin-right: 150px;
    padding: 50px;
    }
    h1{
      font-size: 30px;
    }
  }  

	#page{
		box-shadow:#FC62BE;
    background-color: white;
		border: #F60;
	}
  #my-button{
    margin-top: 15px;
    float: right;

  }
  #my-button::shadow #ripple {
    color: #F7CA18;
  }
  .line{
    margin: 30px;
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

 /* .list > * {
    height: 40px;
    line-height: 40px;
    padding: 0 20px;
    border-bottom: 1px solid #ccc;
  }*/
  .list > *.core-selected {
    font-family: Droid-Serif;
    background-color: #333;
    color: black;
  }
  a{
    text-decoration:none;
    color:#fff;
  }
  a.map{
    text-decoration:none;
    color:#666;
  }
  .lbr{
    border: 5px groove #ccc;
    background: #666;
    float: left;
    height: 140px;
    width: 140px;
    margin: 4px;
    text-align: center;
  }
  paper-ripple {
      color: #4285f4;
      width: 100px;
      height: 100px;
    }
  </style>
  <style shim-shadowdom>
      core-tooltip.fancy::shadow .core-tooltip {
        opacity: 0;
        -webkit-transition: all 300ms cubic-bezier(0,1.92,.99,1.07);
        transition: all 300ms cubic-bezier(0,1.92,.99,1.07);
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0);
      }

      core-tooltip.fancy:hover::shadow .core-tooltip,
      core-tooltip.fancy:focus::shadow .core-tooltip {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    .lokasi{
      height: 20px;
      width: 20px;
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
  <paper-tab><h4>Identitas Kelompok</h4></paper-tab>
  <paper-tab><h4>Tempat Seleksi</h4></paper-tab>
  <paper-tab><h4>Bukti Pembayaran</h4></paper-tab>
  <paper-tab><h4>Validasi Peserta</h4></paper-tab>
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
  <div class="page2">
      <div class="content">
      <h1 align="center">TEMPAT PENYISIHAN<br>NATIONAL LOGIC COMPETITION</h1>
      
    
      <core-selector class="list">
          <div class="lbr">
            <a class="map" href="https://www.google.com/maps/d/u/0/viewer?ll=-7.279549,112.79723&t=h&source=embed&ie=UTF8&msa=0&spn=0,0&hl=en&mid=zLbm3ifR79ns.kwC3VjBHbgmo">
              <core-tooltip class="fancy" position="bottom">
                <div style="border:#CCC solid 1px; border-radius:5px; padding:2px; padding-top:3px; padding-right:5px; background-color: #F0F0F0; cursor:pointer";><core-icon icon="room" class="lokasi"></core-icon>Surabaya</div>
                <div tip>
                  <iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201744211942696187723.0004d7ede2216183d517f&amp;hl=en&amp;ie=UTF8&amp;t=h&amp;ll=-7.279549,112.79723&amp;spn=0,0&amp;output=embed"></iframe>
                </div>
              </core-tooltip>
            </a>
           </div> 
          <div class="lbr">
            <a class="map" href="https://www.google.com/maps/d/u/0/viewer?ll=-7.279549,112.79723&t=h&source=embed&ie=UTF8&msa=0&spn=0,0&hl=en&mid=zLbm3ifR79ns.kwC3VjBHbgmo">
              <core-tooltip class="fancy" position="bottom">
                <div style="border:#CCC solid 1px; border-radius:5px; padding:2px; padding-top:3px; padding-right:5px; background-color: #F0F0F0; cursor:pointer";><core-icon icon="room" class="lokasi"></core-icon>Malang</div>
                <div tip>
                  <iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201744211942696187723.0004d7ede2216183d517f&amp;hl=en&amp;ie=UTF8&amp;t=h&amp;ll=-7.279549,112.79723&amp;spn=0,0&amp;output=embed"></iframe>
                </div>
              </core-tooltip>
            </a>
          </div>
          <div class="lbr">
            <a class="map" href="https://www.google.com/maps/d/u/0/viewer?ll=-7.279549,112.79723&t=h&source=embed&ie=UTF8&msa=0&spn=0,0&hl=en&mid=zLbm3ifR79ns.kwC3VjBHbgmo">
              <core-tooltip class="fancy" position="bottom">
                <div style="border:#CCC solid 1px; border-radius:5px; padding:2px; padding-top:3px; padding-right:5px; background-color: #F0F0F0; cursor:pointer";><core-icon icon="room" class="lokasi"></core-icon>Madiun</div>
                <div tip>
                  <iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201744211942696187723.0004d7ede2216183d517f&amp;hl=en&amp;ie=UTF8&amp;t=h&amp;ll=-7.279549,112.79723&amp;spn=0,0&amp;output=embed"></iframe>
                </div>
              </core-tooltip>
            </a>
          </div>
          <div class="lbr">
            <a class="map" href="https://www.google.com/maps/d/u/0/viewer?ll=-7.279549,112.79723&t=h&source=embed&ie=UTF8&msa=0&spn=0,0&hl=en&mid=zLbm3ifR79ns.kwC3VjBHbgmo">
              <core-tooltip class="fancy" position="bottom">
                <div style="border:#CCC solid 1px; border-radius:5px; padding:2px; padding-top:3px; padding-right:5px; background-color: #F0F0F0; cursor:pointer";><core-icon icon="room" class="lokasi"></core-icon>Jember</div>
                <div tip>
                  <iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201744211942696187723.0004d7ede2216183d517f&amp;hl=en&amp;ie=UTF8&amp;t=h&amp;ll=-7.279549,112.79723&amp;spn=0,0&amp;output=embed"></iframe>
                </div>
              </core-tooltip>
            </a>
          </div>
          <div class="lbr">
            <a class="map" href="https://www.google.com/maps/d/u/0/viewer?ll=-7.279549,112.79723&t=h&source=embed&ie=UTF8&msa=0&spn=0,0&hl=en&mid=zLbm3ifR79ns.kwC3VjBHbgmo">
              <core-tooltip class="fancy" position="bottom">
                <div style="border:#CCC solid 1px; border-radius:5px; padding:2px; padding-top:3px; padding-right:5px; background-color: #F0F0F0; cursor:pointer";><core-icon icon="room" class="lokasi"></core-icon>Tulungagung</div>
                <div tip>
                  <iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201744211942696187723.0004d7ede2216183d517f&amp;hl=en&amp;ie=UTF8&amp;t=h&amp;ll=-7.279549,112.79723&amp;spn=0,0&amp;output=embed"></iframe>
                </div>
              </core-tooltip>
            </a>
          </div>
      <core-selector>

    </div>
  </div>
  <div>
<!---->

<!---->
  </div>
</core-pages>
<script>
  Polymer('selector-examples', {
        ready: function() {
          this.multiSelected = [1, 3];
          this.color = 'green';
        }
      });

  var tabs  = document.querySelector('paper-tabs'); 
  var pages = document.querySelector('core-pages');
  tabs.addEventListener('core-select',function(){
  pages.selected = tabs.selected;
  console.log("Selected: " + tabs.selected);
});
</script>
</body>
</html>
