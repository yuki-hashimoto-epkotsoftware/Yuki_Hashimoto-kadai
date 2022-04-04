<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai1</title>
</head>
<body>
  <?php

    // (1)
    echo "(1)<br/>";

    $ver1 = "こんにちは";
    $ver2 = "こんにちは";
    if (strcasecmp($ver1, $ver2) === 0) {
      echo "同じ文字列です。";
    } else {
      echo "違う文字列です。";
    }
    
    // (2)
    echo "<br/><br/>(2)<br/>";

    echo"おはようございます。" . "朝食は目玉焼きを食べました。";

    // (3)
    echo "<br/><br/>(3)<br/>";
    
    echo "私の身長は" . 170 . "cm以上です";

    // (4)
    echo "<br/><br/>(4)<br/>";

    const TAX = 10;
    define("NAME", "hashimoto");
    echo "税率 " . TAX . "%";
    echo "<br/>";
    echo NAME;

    // (5)
    echo "<br/><br/>(5)<br/>";

    echo __LINE__;
    echo "<br/>";
    echo __FILE__;

    // (6)
    echo "<br/><br/>(6)<br/>";

    $num = 300;
    echo $num / 365;

    // (7)
    echo "<br/><br/>(7)<br/>";

    $num1 = 77;
    $num1++;
    echo $num1;

    // (8)
    echo "<br/><br/>(8)<br/>";

    $num2 = 77;
    $num2--;
    echo $num2;

    //(9)
    echo "<br/><br/>(9)<br/>";

    $num3 = 0;
    $num4 = 0;

    echo $num3 . " → " . ++$num3 . "<br/>";
    echo $num4 . " → " . $num4++ . " → " .$num4;

    //(10)
    echo "<br/><br/>(10)<br/>";

    $num4 = 3;
    $num5 = 2;

    echo $num4 + $num5;

    //(11)
    echo "<br/><br/>(11)<br/>";
    
    var_dump("1234");

    //(12)
    echo "<br/><br/>(12)<br/>";

    $locations = 3;
    $c = 2 + $locations;
    print($c);

  ?>
</body>
</html>