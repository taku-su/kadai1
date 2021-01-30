<?php
$name = "takuma";
if($name=="takuma"){
 echo  "私はあなたの名前です";
 echo "\n";
}
else{
  echo "あなたの名前ではありません";
 echo "\n";
}
  
  $total=0;
for($i=0;$i<=10000;$i++){
   $total+=$i;
}
echo $total;
echo "\n";

$fruits= array("apple","orange","kiwi","cherry","mango");
foreach($fruits as $fruit){
  echo $fruit;
   echo "\n";
}
$start=1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  echo "\n";
  }
}