<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai3</title>
</head>
<body>
  <?php

  // (1)
  echo "(1)<br/>";

  $random = rand(0,100);
  if($random <= 33){
    echo "あなたの数字は" . $random . "です。<br/>";
    echo "低いですね。";
  } elseif(33 < $random && $random <= 66) {
    echo "あなたの数字は" . $random . "です。<br/>";
    echo "そこそこですね。";
  } else {
    echo "あなたの数字は" . $random . "です。<br/>";
    echo "大きいですね。";
  }
  
  // (2)
  echo "<br/><br/>(2)<br/>";

  $center = 50;
  echo $random < $center ? "ハズレです。" : "当たりです。";
  
  // (3)
  echo "<br/><br/>(3)<br/>";

  $switch = rand(1,4);

  switch ($switch) {
    case 1:
      echo "1です。";
      break;
    case 2:
      echo "2です。";
      break;
    case 3:
      echo "3です。";
      break;
    case 4:
      echo "4です。";
      break;
  }


  // (4)
  echo "<br/><br/>(4)<br/>";

  switch ($switch) {
    case 1:
      echo "1です。";
      
    case 2:
      echo "2です。";
      
    case 3:
      echo "3です。";
      
    case 4:
      echo "4です。";
      
  }

  // (5)
  echo "<br/><br/>(5)<br/>";

  $switch2 = rand(1,6);

  switch ($switch2) {
    case 1:
      echo "1です。";
      break;
    case 2:
      echo "2です。";
      break;
    case 3:
      echo "3です。";
      break;
    case 4:
      echo "4です。";
      break;
    case 5:
      echo "エラー";
      break;
    case 6:
      echo "エラー";
      break;
  }

  // (6)
  echo "<br/><br/>(6)<br/>";

  switch ($switch) :
    case 1:
      echo "1です。";
      break;
    case 2:
      echo "2です。";
      break;
    case 3:
      echo "3です。";
      break;
    case 4:
      echo "4です。";
      break;
    endswitch;

  // (7)
  echo "<br/><br/>(7)<br/>";

  $i = 1;
  while($i <= 10){
    echo $i . "回目" . "<br/>";
    $i++;
  }

  // (8)
  echo "<br/><br/>(8)<br/>";

  $num = 1;
  do{
    echo $num . "回目" . "<br/>";
    $num++;
  } while ($num <= 10);

  // (9)
  echo "<br/><br/>(9)<br/>";

  for($counter = -3; $counter < 10; $counter++) {  
    if($counter === 0){
      break;
    }
    echo 100 / $counter;
    echo "<br/>";
  }

  // (10)
  echo "<br/><br/>(10)<br/>";

  for($counter = -3; $counter < 10; $counter++) {  
    if($counter === 0){
      continue;
    }
    echo 100 / $counter;
    echo "<br/>";
  }


  ?>
</body>
</html>