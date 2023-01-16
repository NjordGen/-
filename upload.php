<?php

if(($file=fopen('Book1.csv','r')) !==false){
  while(($data=fgetcsv($file, 1000, ";"))!=false){
    //print_r($data);
    $out = '
';
    for($i=0;$i<count($data);$i++){
      $out .=$data[$i]." ";
    }
    echo $out;

  }

  //fclose($file);
}
?>
