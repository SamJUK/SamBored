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
