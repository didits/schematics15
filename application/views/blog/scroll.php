<!doctype html>
<html>
<head>

  <title>core-scroll-threshold</title>

  <script src="../webcomponentsjs/webcomponents.js"></script>

  <link rel="import" href="core-scroll-threshold.html">

  <style>
    #scroller {
      height: 300px;
      border: 1px solid red;
      padding: 20px;
      overflow: auto;
    }
    .thing {
      padding: 10px;
      margin: 10px;
      background: lightblue;
      border-radius: 10px;
      font-size: 2em;
    }
  </style>

</head>
<body unresolved>

<template is="auto-binding">
  <core-scroll-threshold id="threshold" scrollTarget="{{$.scroller}}" lowerThreshold="100" on-lower-trigger="{{loadMore}}" fit></core-scroll-threshold>
  <div id="scroller" fit>
    <template repeat="{{i in data}}">
      <div class="thing">{{i}}</div>
    </template>
    <div hidden?="{{!$.threshold.lowerTriggered}}">Please wait...</div>
  </div> 
</template>

<script>

  addEventListener('template-bound', function(e) {

    var scope = e.target;
    var n;
    scope.data = [];
    for (n=0; n<20; n++) {
      scope.data.push(n);
    }
    scope.loadMore = function() {
      setTimeout(function() {
        for (var i=n; i<n+10; i++) {
          scope.data.push(i);
        }
        n = i;
        scope.$.threshold.clearLower();
      }, 1000);
    };
  });

</script>

</body>
</html>