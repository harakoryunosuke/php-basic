<!DOCTYPE html>
<html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
      <?php
      // 算術演算子を使った場合の戻り値を出力する
      echo 45 + 18;

      // 改行する
      echo '<br>';

      // 比較演算子を使った場合の戻り値を出力する
      var_dump(45 > 18);
      ?>
     </p>
     <p>
      <?php
      // 等価演算子を使った場合の戻り値を出力する
      var_dump('5' == 5);

      // 改行する
      echo '<br>';

      // 厳密等価演算子を使った場合の戻り値を出力する
      var_dump('5' === 5);
      ?>
     </p>
  </body>

</html>