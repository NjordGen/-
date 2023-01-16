<?php
$file = new SplFileObject("Book1.csv");
$file->setFlags(SplFileObject::READ_CSV);
foreach($file as $row){
  list($name, $conten)=$row;
  printf("%s %s \n", $name, $content);
}

mkdir("/home/runner/Zadacha-1/upload/", 0777);
file_put_contents("/home/runner/Zadacha-1/upload/aaa.txt", "Привет");
file_put_contents("/home/runner/Zadacha-1/upload/bbb.log", "Теcт");
file_put_contents("/home/runner/Zadacha-1/upload/ccc.html", "<h1>Заголовок</h1>");
?>
