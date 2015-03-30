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

  <style shim-shadowdom>

    html, body {
      height: 100%;
      font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
      margin: 0;
      padding: 0;
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
    
    .yellow-slider paper-slider::shadow #sliderKnobInner,
    .yellow-slider paper-slider::shadow #sliderBar::shadow #activeProgress {
      background-color: #f4b400;
    }
    
    .green-slider paper-slider::shadow #sliderKnobInner,
    .green-slider paper-slider::shadow #sliderKnobInner::before,
    .green-slider paper-slider::shadow #sliderBar::shadow #activeProgress {
      background-color: #0f9d58;
    }
    
    #ratingsLabel {
      padding-left: 12px;
      color: #a0a0a0;
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
	  <div>
		  <span>Step</span><span id="ratingsLabel"></span><span>/4</span>
	  </div>
    <br>
  <paper-slider id="ratings" pin snaps max="4" step="1" value="0"></paper-slider>
   <script>
    var ratings = document.querySelector('#ratings');
    ratings.addEventListener('core-change', function() {
      document.querySelector('#ratingsLabel').textContent = ratings.value;
    });
  
  </script>
</body>
</html>

