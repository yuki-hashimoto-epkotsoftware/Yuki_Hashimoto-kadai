<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai2</title>
</head>
<body>
  <?php


    // (1)
    echo "(1)<br/>";

    echo 2 + 4 - 5;
    echo "<br/>";
    echo 4 - 5 + 2; 
    echo "<br/>";

    echo 4 * 5 / 2;
    echo "<br/>";
    echo 5 / 2 * 4;

    // (2)
    echo "<br/><br/>(2)<br/>";

    echo 2 * 3 + 4 + 1;
    echo "<br/>";
    echo 2 * (3 + 4 + 1);

    // (3)
    echo "<br/><br/>(3)<br/>";

    $username = "Admin";

    if($username == "Admin") {
      echo ("Welcome to the admin page");
    } else {
      echo ("Welcome to the user page");
    }
    echo "<br/>";

    echo "変数ユーザーネームの中身をAdmin以外に変えると下記のようにfallsとなる。<br/>";
    $username = "hashimoto";

    if($username == "Admin") {
      echo ("Welcome to the admin page");
    } else {
      echo ("Welcome to the user page");
    }
    

    // (4)
    echo "<br/><br/>(4)<br/>";

    $array = ["lemon","strawberry","apple","grape","melon","peach"];

    for ($i = 0; $i <= 5; $i++) {
      echo $array[$i];
      echo "<br/>";
    }

    // (5)
    echo "<br/><br/>(5)<br/>";

    sort($array);

    for ($i = 0; $i <= 5; $i++) {
      echo $array[$i];
      echo "<br/>";
    }    

    // (6)
    echo "<br/><br/>(6)<br/>";

    $aiu = array(
      ["あ","い","う","え","お"],
      ["か","き","く","け","こ"],
      ["さ","し","す","せ","そ"]
    );

    foreach($aiu as $array) {
      foreach($array as $value) {
        echo $value;
      }
    }

    echo "<br/>";

    $i = 0;
    $ii = 0;
    $i_count = 2;
    $ii_count = 4;
    
    while($ii <= $ii_count && $i <= $i_count) {
      echo $aiu[$i][$ii];
      $ii++;
      if ($ii >= $ii_count){
        echo $aiu[$i][$ii];
        $ii = 0;
        $i++;
      }
    }


   




  ?>
</body>
</html>