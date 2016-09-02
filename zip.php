<?php

  $files = glob('SC/*.{mp3}', GLOB_BRACE);
  $zipname = 'SamBoredSOUNDCLIPS.zip';
  $zip = new ZipArchive;
  $zip->open($zipname, ZipArchive::CREATE);
  foreach ($files as $file) {
    $shortname = basename($file);
    $zip->addFile($file,$shortname);
  }
  $zip->close();

  ///Then download the zipped file.
  header('Content-Type: application/zip');
  header('Content-disposition: attachment; filename='.$zipname);
  header('Content-Length: ' . filesize($zipname));
  readfile($zipname);

?>
