<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 変数に値を代入する
    $user_name = '侍太郎';

    // 変数の中身を出力する
    echo $user_name;

    echo '<br>';

    // 変数に値を再代入する
    $user_name = '侍花子';

    // 変数の中身を出力する
    echo $user_name;
    ?>
  </p>
  <p>
    <?php
    // 変数に値を代入する
    $number = 3;

    // 変数と数値を計算し、その結果を出力する
    echo $number - 1.2;

    // 改行する
    echo '<br>';

    // 変数に値を代入する
    $my_name = '侍一郎';

    // 変数と文字列を連結し、その結果を出力する
    echo '私の名前は' . $my_name . 'です。';

    // 改行する
    echo '<br>';

    // 文字列の中で変数の中身を表示する（変数展開）
    echo "私の名前は{$my_name}です。";
    ?>
  </p>
</body>

</html>