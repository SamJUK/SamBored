<html>
  <head>
    <title>Sam Bored</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!--<link href="light.css" rel="stylesheet">-->
    <!--<link href="dark.css" rel="stylesheet">-->
  </head>
  <body>
    <!--<div id="spinner">
      <div class="sk-cube sk-cube1"></div>
      <div class="sk-cube sk-cube2"></div>
      <div class="sk-cube sk-cube3"></div>
      <div class="sk-cube sk-cube4"></div>
      <div class="sk-cube sk-cube5"></div>
      <div class="sk-cube sk-cube6"></div>
      <div class="sk-cube sk-cube7"></div>
      <div class="sk-cube sk-cube8"></div>
      <div class="sk-cube sk-cube9"></div>
    </div>-->
    <div id="container">
      <a href="https://github.com/you"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
      <h1>Sam Bored</h1>
      <span id="volLabel">Volume:</span>
      <div id="VolumeSlider"></div>
      <div id="SoundSection">
        <?php include 'clips.php'; ?>
        <hr/>
        <a href="zip.php" target="_blank">Download All Sounds In A Zip File!</a>
      </div>
    </div>
    <audio id="audio" autoplay="false">
      <source id="audiosource" type="audio/aac">
    </audio>
    <!--Scripts-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="main.js"></script>
  </body>
</html>
