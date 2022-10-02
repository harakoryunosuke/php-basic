<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
  <p>
    <?php
    // 変数$numに0〜4までのランダムな整数を代入する
    $num = mt_rand(0, 4);

    // カウンタ変数を用意する
    $i = 1;

    // 変数$numの最初の値を出力する(確認用)
    echo "最初の値は{$num}です。<br>";

    // 変数$numの値が0以外である間、変数$numの値を出力し続ける
    while ($num !== 0) {
      // 変数$numに0～4までのランダムな整数を代入する
      $num = mt_rand(0, 4);

      // 次の条件式で比較される、変数$numの現在の値を出力する
      echo "現在の値は{$num}です。<br>";

      // カウンタ変数$iの値が5であれば、break文で繰り返し処理を強制終了する
      if ($i === 5) {
        echo '5回目なので繰り返し処理を強制終了します。';
        break;
      }

      // カウンタ変数の値を1増やす
      $i++;
    }
    ?>
  </p>
 </body>
 
 </html>
