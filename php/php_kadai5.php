<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=], initial-scale=1.0">
  <title>php_kadai5</title>

</head>
<body>
  <?php
    include ('php_kadai5_function.php');

    echo "関数課題1<br/>";

     sum(3,7);
     echo"<br/>";
     sub(20,3);
     echo"<br/>";
     multi(6,9);
     echo"<br/>";
     div(14,7);

     echo "<br/><br/>関数課題2<br/>";

     $a = 5;
     $b = 8;

     sum2($a,$b);
     echo"<br/>";
     sub2($a,$b);
     echo"<br/>";
     multi2($a,$b);
     echo"<br/>";
     div2($a,$b);


  ?>
</body>
</html>