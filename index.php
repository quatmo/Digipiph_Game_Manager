
<!-- Note: All core EaselJS classes are listed here: -->
<!-- http://www.createjs.com/#!/EaselJS -->
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/createjs/events/Event.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/createjs/events/EventDispatcher.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/createjs/utils/IndexOf.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/utils/UID.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/utils/Ticker.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/geom/Matrix2D.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/geom/Point.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/geom/Rectangle.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Shadow.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/SpriteSheet.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Graphics.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/DisplayObject.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Container.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Stage.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Bitmap.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Sprite.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/BitmapAnimation.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/BitmapText.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Shape.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/Text.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/display/DOMElement.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/events/MouseEvent.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/filters/Filter.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/ui/ButtonHelper.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/ui/Touch.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/utils/SpriteSheetUtils.js"></script>
<script type="text/javascript" src="scripts/EaselJS-release_v0.7.0/src/easeljs/utils/SpriteSheetBuilder.js"></script>

<!-- indiegamr's EaselJS Pixel Perfect Collision Detection (modified for 0.7) -->
<!-- http://indiegamr.com/easeljs-pixel-perfect-collision-detection-for-bitmaps-with-alpha-threshold/ -->
<script type="text/javascript" src="scripts/EaselJS-Collision-Detection/src/ndgmr.Collision.js"></script>

<!-- Digipiph Game Manager Script -->
<script type="text/javascript" src="scripts/dgm_1.0.js?<?=time()?>"></script>

<script type="text/javascript">
window.onload = function() {

  function init() {

    // create and define elements
    //setup canvas
    var gameCanvas = dgm.setupCanvas(document.getElementById("gameCanvas"));
    var topGameCanvas = dgm.setupCanvas(document.getElementById("topGameCanvas"));

    var character_sprite_data = {
      "id": "character",
      "x": 100,
      "y": 100,
      "images": 'images/character.png',
      "framerate": 32,
      "animations":
        {
          "down": [0, 3, "down", 0.25],
          "left": [4, 7, "left", 0.25],
          "right": [8, 11, "right", 0.25],
          "up": [12, 15, "up", 0.25],
          "downLeft": [16, 19, "downLeft", 0.25],
          "downRight": [20, 23, "downRight", 0.25],
          "upLeft": [24, 27, "upLeft", 0.25],
          "upRight": [28, 31, "upRight", 0.25]
        },
      "frames":
        {
          "height": 32,
          "width":32,
          "regX": 0,
          "regY": 0,
          "count": 32
        },
      "movement":
        {
          "type" : '8dir',
          "distanceOnPress" : 4,
          "keycodeUp" : 38,
          "keycodeDown" : 40,
          "keycodeLeft" : 37,
          "keycodeRight" : 39
        },
      "collisionObject": true,
      "collisionType": "pixel",
      "collisionAlphaThreshold": 10
    };

    var character2_sprite_data = {
      "id": "character2",
      "x": 200,
      "y": 200,
      "images": 'images/character2.png',
      "framerate": 32,
      "animations":
        {
          "down": [0, 3, "down", 0.25],
          "left": [4, 7, "left", 0.25],
          "right": [8, 11, "right", 0.25],
          "up": [12, 15, "up", 0.25],
          "downLeft": [16, 19, "downLeft", 0.25],
          "downRight": [20, 23, "downRight", 0.25],
          "upLeft": [24, 27, "upLeft", 0.25],
          "upRight": [28, 31, "upRight", 0.25]
        },
      "frames":
        {
          "height": 32,
          "width":32,
          "regX": 0,
          "regY": 0,
          "count": 32
        },
      "movement":
        {
          "type" : '8dir',
          "distanceOnPress" : 4,
          "keycodeUp" : 87,
          "keycodeDown" : 83,
          "keycodeLeft" : 65,
          "keycodeRight" : 68
        },
      "collisionObject": true,
      "collisionType": "pixel",
      "collisionAlphaThreshold": 10,
      "onCollision": function() {
        //only allow the collision text once every 5 seconds
        if (!window.playerCollisionTxt) {
          var log = document.getElementById('gameLog');
          var logDiv = document.createElement("div");
          logDiv.innerHTML = ('Hey! Watch it buddy!');
          log.appendChild(logDiv);
          log.insertBefore(logDiv, log.firstChild);
          window.playerCollisionTxt = true;
          setTimeout(function(){ window.playerCollisionTxt = false; }, 5000);
        }
      }
    };

    var map_background_data = {
      "id": "map_background",
      "x": 0,
      "y": 0,
      "src": 'images/background.jpg'
    };

    var mapObjs_data = {
      "id": "map_objects",
      "x": 0,
      "y": 0,
      "src": 'images/map-objects.png',
      "collisionObject": true,
      "collisionType": "pixel",
      "collisionAlphaThreshold": 10
    };

    var lightPost_data = {
      "id": "light_post",
      "x": 0,
      "y": 0,
      "src": 'images/light-post.png'
    };

    var eventCampfire_data = {
      "id": "ev_campfire",
      "x": 420,
      "y": 63,
      "src": 'images/32x32_event.png'
    }

    var character = dgm.configSprite(character_sprite_data, gameCanvas);
    var character2 = dgm.configSprite(character2_sprite_data, gameCanvas);
    var map_background = dgm.configImg(map_background_data, gameCanvas);
    var mapObjs = dgm.configImg(mapObjs_data, gameCanvas);
    var light_post = dgm.configImg(lightPost_data, topGameCanvas);
    var ev_Campfire = dgm.configImg(eventCampfire_data, topGameCanvas);

    //add the "Enter" keypress event for the campfire
    ev_Campfire.onEventKeypress(13, function() { 
      var log = document.getElementById('gameLog');
      var logDiv = document.createElement("div");
      logDiv.innerHTML = ('It\'s the remains of a campfire.');
      log.appendChild(logDiv);
      log.insertBefore(logDiv, log.firstChild);
    });
    //add the "Space" keypress event for the campfire
    ev_Campfire.onEventKeypress(32, function() { 
      var log = document.getElementById('gameLog');
      var logDiv = document.createElement("div");
      logDiv.innerHTML = ('There is nothing interesting here.');
      log.appendChild(logDiv);
      log.insertBefore(logDiv, log.firstChild);
    });

    //start game timer
    if (!createjs.Ticker.hasEventListener("tick")) {
      createjs.Ticker.addEventListener("tick", tick);
    }

  }

  function tick(character) {
    dgm.draw();
    dgm.update();
  }

  //begin
  init();
};
</script>

<canvas id="gameCanvas" width="544" height="416" style="position: absolute; top:0; left: 0;"></canvas>
<canvas id="topGameCanvas" width="544" height="416" style="position: absolute; top:0; left: 0;"></canvas>
<div id="gameLog" style="position: absolute; top: 417px; width: 536px; height: 75px; overflow: auto;"></div>
