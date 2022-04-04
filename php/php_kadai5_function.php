<?php

  function sum($x,$y){
    $x = $x + $y;
    echo $x;
  }
  function sub($x,$y){
    $x = $x - $y;
    echo $x;
  }
  function multi($x,$y){
    $x = $x * $y;
    echo $x;
  }
  function div($x,$y){
    $x = $x / $y;
    echo $x;
  }

  function sum2(&$x,&$y){
    $x = $x + $y;
    echo $x;
  }
  function sub2(&$x,&$y){
    $x = $x - $y;
    echo $x;
  }
  function multi2(&$x,&$y){
    $x = $x * $y;
    echo $x;
  }
  function div2(&$x,&$y){
    $x = $x / $y;
    echo $x;
  }


?>