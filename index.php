<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけんゲーム(php版)</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- タイトル -->
    <br>
    <div id="title">キュアピースとじゃんけん勝負！</div>
    <div id="t2">(ボタンをクリックするとじゃんけんできるよ)</div>
    <br>

<!-- 最初の画像 -->
<div id="top">
  <img id ="r9" src="..//php_05_kadai/img/r9.jpg">
</div>

<!-- じゃんけんボタン -->
<form action ="" method ="post">
<div id="bt">
    <button id="b1" value=1 button type ="sbumit" name ="te">グー</button>
    <button id="b2" value=2　button type ="sbumit" name ="te">チョキ</button>
    <button id="b3" value=3　button type ="sbumit" name ="te">パー</button>
</div>
</form>
<br>
<br>
<div id="caution">
    ↓下に結果が出るよ
</div>
<br>

<?php
// 結果の変数
$result = false;

// エスケープ
$me = $_POST['te'];

// ポスト変数の存在有無
if(isset($_POST['te'])){

// 相手の手
$com = mt_rand(1,3);

// 判定
echo "<div id=han>";
    if($me == 1 & $com == 2){
        $result = '勝ち';
        echo '<img src = "img/r5.jpg"/>';
        echo '<br><br>君の勝ちだよ！';
    } else if($me == 1 & $com == 3){
        $result = '負け';
        echo '<img src = "img/par.jpg"/>';
        echo "<br><br>負けちゃった。もう1回挑戦しよう！";
    } else if($me == 1 & $com == 1){
        $result = 'あいこ';
        echo '<img src = "img/r4.gif"/>';
        echo "<br><br>あいこだよ！もう1回挑戦しよう！";
    } else if($me == 2 & $com == 3){
        $result = '勝ち';
        echo '<img src = "img/r5.jpg"/>';
        echo '<br><br>君の勝ちだよ！';
    } else if($me == 2 & $com == 1){
        $result = '負け';
        echo '<img src = "img/goo.jpg"/>';
        echo "<br><br>負けちゃった。もう1回挑戦しよう！";
    } else if($me == 2 & $com == 2){
        $result = 'あいこ';
        echo '<img src = "img/r7.jpg"/>';
        echo "<br><br>あいこだよ！もう1回挑戦しよう！";
    } else if($me == 3 & $com == 1){
        $result = '勝ち';
        echo '<img src = "img/r2.gif"/>';
        echo '<br><br>君の勝ちだよ！';
    } else if($me == 3 & $com == 2){
        $result = '負け';
        echo '<img src = "img/choki.jpg"/>';
        echo "<br><br>負けちゃった。もう1回挑戦しよう！";
    } else if($me == 3 & $com == 3){
        $result = 'あいこ';
        echo '<img src = "img/r8.gif"/>';
        echo "<br><br>あいこだよ！もう1回挑戦しよう！";
    echo "</div>";
    }}
?>

<!-- リトライボタン -->
<div id="ree">
  <button id ="re">もう一回！</button>
</div>

</body>
</html>