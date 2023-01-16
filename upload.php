<?php
$data = [];

if(($file=fopen('Book1.csv','r')) !==false){
  while(($row=fgetcsv($file, 0, ";"))!=false){
//    $str = implode("\n", $row);
//    file_put_contents('Book1.csv', $str);
    list($name, $content) = $row;
    $data[]=[
      'name' => $name,
      'content' => $content
    ];
  }
}
foreach($data as $row){
  echo ' '.$row['name'];
  echo ' '.$row['content'];
}
?>
