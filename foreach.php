<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
  <p>
    <?php
    $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

    //  配列$user_namesの要素を1つずつ順番に出力する
    foreach ($user_names as $user_name) {
      echo $user_name . '<br>';
    }

    //  配列$user_namesのインデックスと値を1つずつ順番に出力する
    foreach ($user_names as $index => $value) {
      echo "{$index}:{$value}<br>";
    }
    ?>
  </p>
  <p>
    <?php
    $personal_data = ['name' => '侍太郎', 'age' => '36', 'gender' => '男性'];

    // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
    foreach ($personal_data as $key => $value) {
      echo "{$key}は{$value}です。<br>";
    }

    // 連想配列$personal_dataの値を1つずつ順番に出力する
    foreach ($personal_data as $value) {
      echo $value . '<br>';
    }
    ?>
  </p>
  <p>出身地を選択してください。</p>
  <form>
    <select>
      <?php
      $birthplaces = [
        '北海道地方',
        '東北地方',
        '関東地方',
        '中部地方',
        '近畿地方',
        '中国・四国地方',
        '九州地方'
      ];

      foreach ($birthplaces as $birthplace) {
        echo "<option>{$birthplace}</option>";
      }
      ?>
    </select>
  </form>

 </body>
 </html>