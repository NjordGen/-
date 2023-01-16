<?php
$file = new SplFileObject("Book1.csv");
$file->setFlags(SplFileObject::READ_CSV);
foreach($file as $row){
  list($name, $conten)=$row;
  printf("%s %s \n", $name, $content);
}
?>
