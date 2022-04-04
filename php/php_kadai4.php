<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai4</title>
</head>
<body>
  <?php

    // (1)
    echo "(1)<br/>";

    $week = array("月曜日","火曜日","水曜日","木曜日","金曜日");
    for($i = 0; $i <= 4; $i++) {
      echo $week[$i];
      echo "<br/>";
    }

    // (2)
    echo "<br/><br/>(2)<br/>";

    $animal = array(
      "cat" => "猫",
      "dog" => "犬",
      "tiger" => "虎",
      "bear" => "熊",
      "sheep" => "羊"
    );

    foreach($animal as $key => $value) {
      echo "英語:" . $key . " 日本語:" . $value . "<br/>";
    }



    // (3)
    echo "<br/><br/>(3)<br/>";

    echo $week[2];
    echo "<br/>";
    echo $week[4];
    echo "<br/>";
    echo $animal["cat"];
    echo "<br/>";
    echo $animal["sheep"];

    // (4)
    echo "<br/><br/>(4)<br/>";

    
    echo count($week); 
    echo "<br/>";
    echo count($animal);


    // (5)
    echo "<br/><br/>(5)<br/>";

    $noodles = array(
      "ラーメン" => [
        "soy_sauce" => "醤油",
        "salt" => "塩",
        "miso" => "味噌"
      ],
      "パスタ" => [
        "peperoncino" => "ペペロンチーノ",
        "carbonara" => "カルボナーラ",
        "japanese" => "和風"
      ],
      "うどん" => [
        "zaru" => "ざる",
        "kake" => "かけ",
        "tukimi" => "月見"
      ]
      );
      

      foreach($noodles as $key => $value){
        echo $key . " : ";
        foreach($value as $key2 => $value2){
          echo $value2;
          if($value2 === end($value)){
            echo "<br/>";
          } else {
            echo " or ";
          }
        }
      }

  ?>
</body>
</html>