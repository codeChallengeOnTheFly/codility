<?php

$coins =  [0,0,1,1];

function solution($A){
  $tails = 0;
  foreach ($A as $key => $value) {
    if($value == 1){
      $A[$key] = 0;
      $tails++;
    }
  }
  return $tails;
}

solution($coins);
?>
