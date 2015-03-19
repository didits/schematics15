<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
<script src="bower_components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
<link rel="import" href="bower_components/core-toolbar/core-toolbar.html">
<link rel="import" href="bower_components/core-icon-button/core-icon-button.html">

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
      background-color: #eee;
      height:100%;
    }

    /* background for toolbar when it is at its full size */
    core-scroll-header-panel::shadow #headerBg {
      background-image: url(bower_components/core-scroll-header-panel/demos/images/bg9.jpg);
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
      padding: 8px;
    }

    .divider {
		margin-top:30px;
		border-top: #CCC solid 1px;
    }

  </style>
</head>
<body unresolved>
  <core-scroll-header-panel condenses>

    <core-toolbar class="tall">

      <core-icon-button icon="arrow-back"></core-icon-button>
      <div flex></div>
      <core-icon-button icon="more-vert"></core-icon-button>
      <div class="bottom indent title">NLC</div>

    </core-toolbar>
    <div class="content">
    <h1 align="center">NATIONAL LOGIC COMPETITION</h1>
      <p align="center" style="line-height:30px">NLC (NATIONAL LOGIC COMPETITION) adalah kompetisi logika nasional terbesar di Indonesia. Di dalam kompetisi ini peserta akan diuji kemampuan logikanya, sehingga peserta tidak usah repot-repot belajar untuk menghapal rumus - rumus dan teori-teori, cukup dengan hanya mengandalkan kemampuan berpikir kalian, kalian bisa mengikuti kompetisi yang bergengsi ini. Ayo uji kemampuan logikamu dalam kompetisi ini!</p>
    <div class="divider"></div>

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
