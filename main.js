$( function() {
    $( "#VolumeSlider" ).slider({
      orientation: "horizontal",
      range: "min",
      min: 0,
      max: 100,
      value: 90,
      slide: function( event, ui ) {
        document.getElementById('audio').volume = ui.value/100;
      }
    });
  } );

Sound = {
  play: function(a){
    ClipName = a.innerHTML;
    ClipSource = 'SC/'+ClipName+'.mp3';
    var audio = document.getElementById('audio');
    var audioSource = document.getElementById('audiosource');
    audioSource.src = ClipSource;
    audio.load();
  },
  volume: function(){

  }
};
function themeChange(a){
  link = document.getElementsByTagName("link").item(3);
  theme = a.value;
  link.href = theme+".css";
  if (theme == "light"){
    document.getElementById('gitribbon').src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67";
    document.getElementById('gitribbon').setAttribute("data-canonical-src", "https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png");
  }else {
    document.getElementById('gitribbon').src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67";
    document.getElementById('gitribbon').setAttribute("data-canonical-src", "https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png");
}
};
