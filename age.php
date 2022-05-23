<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>あなたは何歳？</title>
  </head>
  <body>
    <?php
      $age = $_POST["age"];
      
      function repeat() {
        echo '<a href="index.html">もう一度やり直す</a><br><br><br>';
        echo '作成者　はる<br><br>ブログ→　<a href="https://sushiringblog.com/" rel="noopener" target="_blank">すしりんぐ日記</a>';
      }

      function repeat1() {
        echo "<strong>もう一度やり直す、なんてことできないよ</strong><br><br>";
        echo '<a href="index.html">あなたは何歳？に戻る</a><br><br><br>';
        echo '作成者　はる<br><br>ブログ→　<a href="https://sushiringblog.com/" rel="noopener" target="_blank">すしりんぐ日記</a>';
      }
      
      if (preg_match('/^[0-9]+$/', $age)) {
        echo $age . "歳かぁ～<br>";
      } else {
        echo "私は数字が得意なんだなぁ、、、<br>半角数字の整数がいいな笑<br><br>";
        repeat();
        exit;
      }
      
      if(150 <= $age) {
        echo "おっと、ホントに人間？？　もしかして火星人！？<br><br>";
        repeat();
        exit;
      }
      
      if(100 <= $age && $age < 150) {
        echo "ギネス級の老いだね！！<br><br>";
        repeat();
        exit;
      }

      if(40 <= $age && $age < 80) {
        echo "若くないです、、、でも自信を持っている人は若く見えるよ！<br><br>";
        repeat();
        exit;
      }

      if(80 <= $age && $age < 100) {
        echo "もうおじいちゃんおばあちゃんだね！！<br><br>";
        repeat();
        exit;
      }

      if(30 <= $age && $age < 40) {
        echo "まだ若いよ！　安心して(｀・ω・´)<br><br>";
        repeat();
        exit;
      }

      if(21 <= $age && $age < 30) {
        echo "完全に大人だね！！　でもまだ若いよ！！<br><br>";
        repeat();
        exit;
      }

      if(5 <= $age && $age < 12) {
        echo "文句なしに若いね！！<br><br>";
        repeat();
        exit;
      }

      if(0 <= $age && $age < 5) {
        echo "よくこのサイトにたどり着いたね、、、<br>素晴らしい！<br><br>";
        repeat();
        exit;
      }

      if(12 <= $age && $age < 18) {
        echo "せ、青春だね(´；ω；`)ｳｩｩ<br>後悔の無いようにね、、、<br><br>";
        repeat1();
        exit;
      }

      if(18 <= $age && $age < 20) {
        echo "もう大人だね！！　でもまだ若いよ！！<br><br>";
        repeat();
        exit;
      }

      if($age == 20) {
        echo "成人おめでとう🎉　立派な大人になってね！！<br><br>";
        repeat();
        exit;
      }
      ?>
  </body>
  </html>