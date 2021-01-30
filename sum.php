<?php
function sum($max){
$result=0;
for($i=1;$i<=$max;$i++){
$result+=$i;
}
return $result;
}
echo sum(100);
echo "\n";
?>
//課題3//
<?php
function maltipul($max){
$result=0;
$result=$max*2;
return $result;
}
echo maltipul(2);
echo "\n";

function f($a,$b){
    $tasu = $a + $b;
return $tasu;
}
echo f(3,2);
echo "\n";

function arrs($arr){
    $result = 1;
    foreach($arr as $val){
        $result *= $val;
    }
    return $result;
}
echo arrs(array(1,3,5,7,9));
echo "\n";

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($a > $max_number){
         $max_number = $a;
} }
 return $max_number;
 }
echo max_array(array(1,6,3,3,2,5,));
echo "\n";


