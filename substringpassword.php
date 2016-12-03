<?php

$string = "a0Ba";
print_r(str_split($string));

function solution($A){

$range = str_split($A);
$token = 0;
$count = 0;
$lenght = 0;

  foreach ($range as $key => $value) {
    if(ctype_upper($value)){
      if($token == 0){
        $count++;
      }
      $token = 1;
    }

    if (ctype_lower($value)){
      if($token == 1){
        $count++;
      }
    }

    if (ctype_digit($value)){
      $token = 0;
      $count = 0;
    }

    $lenght = $count;

  }

  if($lenght > 0){
    return $lenght;
  }else{
    return -1;
  }
}

print solution($string)

?>
