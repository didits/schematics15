<!DOCTYPE html>
<html>
	<head>

	  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
	  <script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.min.js"></script>
	  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-animated-pages/core-animated-pages.html">
	  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-toolbar/core-toolbar.html">
	  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
	  <link rel="import" href="<?php echo base_url(); ?>bower_components/core-tooltip/core-tooltip.html">
	  <style>
    body {
      font-family: 'Roboto 2', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      margin: 0;
      background: #f1f1f1;
    }

    .green {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      height: 350px;
      background: #70c26f;
    }
  </style>
	</head>
<body unresolved>
	  <polymer-element name="music-demo">
  <template>

    <style>
      .chip-container {
        position: absolute;
        top: 275px;
        right: 0;
        left: 0;
        text-align: center;
      }

      .chip {
        display: inline-block;
        position: relative;
        border-radius: 3px;
        margin: 4px;
        overflow: hidden;
        text-align: start;
        background-color: #fff;
        box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
      }

      .chip-top {
        width: 200px;
        height: 200px;
      }

      .chip-bottom {
        padding: 8px;
        line-height: 1.5;
      }

      .chip-album-title {
        font-weight: bold;
      }

      #details {
        padding: 200px 10% 0;
      }

      .card {
        height: 400px;
        border-radius: 3px;
        text-align: start;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      .card-left {
        width: 400px;
      }

      .card-right {
        padding: 24px;
      }

      .card-icon {
        border-radius: 50%;
        width: 60px;
        height: 60px;
        margin-right: 16px;
      }

      .card-album-title {
        font-size: 2em;
      }
    </style>

    <core-animated-pages selected="{{page}}" transitions="hero-transition" on-core-animated-pages-transition-end="{{complete}}">

      <section>

        <div class="chip-container" hero-p on-tap="{{transition}}">

          <template repeat="{{items as item}}">

            <div class="chip" hero-id="{{item.artist}}-{{item.album}}" hero?="{{selectedAlbum === item }}">
              <div class="chip-top" style="background:{{item.color}};" hero-id="{{item.artist}}-{{item.album}}-art" hero?="{{selectedAlbum === item}}"></div>
              <div class="chip-bottom">
                <div class="chip-album-title">{{item.album}}</div>
                <div class="chip-artist">{{item.artist}}</div>
              </div>
            </div>

          </template>

        </div>
      </section>

      <section id="details">

        <div class="card" layout horizontal hero-id="{{selectedAlbum.artist}}-{{selectedAlbum.album}}" hero on-tap="{{transition}}">
          <div class="card-left" style="background:{{selectedAlbum.color}};" hero-id="{{selectedAlbum.artist}}-{{selectedAlbum.album}}-art" hero></div>
          <div class="card-right" flex>
            <div layout horizontal center>
              <div>
                <div class="card-icon" style="background:{{selectedAlbum.color}};"></div>
              </div>
              <div flex>
                <div class="card-album-title">{{selectedAlbum.album}}</div>
                <div class="card-album-artist">{{selectedAlbum.artist}}</div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </core-animated-pages>

  </template>
  <script>

    Polymer('music-demo', {

      page: 0,

      items: [
        { artist: 'Tycho', album: 'NLC', color: '#f4db33' },
        { artist: 'Tycho', album: 'NPC', color: '#972ff8' },
        { artist: 'Tycho', album: 'NST', color: '#7dd6fe' },
        { artist: 'Tycho', album: 'REEVA', color: '#dc3c84' }
      ],

      selectedAlbum: null,

      transition: function(e) {
        if (this.page === 0 && e.target.templateInstance.model.item) {
          this.selectedAlbum = e.target.templateInstance.model.item;
          this.page = 1;
        } else {
          this.page = 0;
        }
      }
    });

  </script>
  </polymer-element>

  <div class="green"></div>

  <music-demo></music-demo>
</body>
</html>