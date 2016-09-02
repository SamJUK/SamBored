<?php
  $files = glob('SC/*.{mp3}', GLOB_BRACE);
  foreach ($files as $file) {
    $shortname = basename($file);
    $temp = explode('.', $shortname);
    $ext  = array_pop($temp);
    $name = implode('.', $temp);
    echo '<button onMouseDown="Sound.play(this)" class="Sound">'.$name.'</button>';
  };
?>
