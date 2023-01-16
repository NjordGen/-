<?php
$file = new SplFileObject("Book1.csv");
$file->setFlags(SplFileObject::READ_CSV);
foreach($file as $row){
  list($name, $content)=$row;
  printf("%s %s \n", $name, $content);
}

mkdir("C:\Users\User\Documents\GitHub\Tasks\upload", 0777);
file_put_contents("C:\Users\User\Documents\GitHub\Tasks\upload\aaa.txt", "Привет");
file_put_contents("C:\Users\User\Documents\GitHub\Tasks\upload\bbb.log", "Теcт");
file_put_contents("C:\Users\User\Documents\GitHub\Tasks\upload\ccc.html", "<h1>Заголовок</h1>");
?>
 
