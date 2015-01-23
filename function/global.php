<?php


//$a=5;
//function myTestFunc(){
   // $a =6;
   // return $a;
//}

//echo $a;
//echo '<br>';
//echo myTestFunc();


$a=5;
function myTestFunc(){
  global $a;
    $a=6;
    return $a;
}

echo $a;
echo '<br>';
echo myTestFunc();
echo '<br>';
echo $a;



