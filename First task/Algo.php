<?php
$a=1;
$arr = array(40, 18, 2, 89, 146, 92, 0, 2, 11);
$len = count($arr);
for ($i=0; $i<$len; $i++){
  if(strrpos($arr[$i],"2")!=false){
    $len++;
    for($j=$len-1; $j>$i; $j--){
      $arr[$j] = $arr[$j-1];
    }
    $i++;
    $arr[$i] = $a;
  }
}
?>
