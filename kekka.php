<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果！</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<br>
<!-- タイトル -->
<br>
    <div id="title">キュアピースとじゃんけん勝負！</div>
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

// 関数
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}
$name = $_POST["name"];

// 判定
echo "<div id=han>";
    if($me == 1 & $com == 2){
        $result = '勝ち';
        echo '<img src = "img/r5.jpg"/>';
        echo "<br><br>キュアピースは、チョキ！<br>";
        echo $name.'ちゃんの勝ちだよ！';
    } else if($me == 1 & $com == 3){
        $result = '負け';
        echo '<img src = "img/par.jpg"/>';
        echo "<br><br>キュアピースは、パー！";
        echo "<br>負けちゃった。もう1回挑戦しよう！";
    } else if($me == 1 & $com == 1){
        $result = 'あいこ';
        echo '<img src = "img/r4.gif"/>';
        echo "<br><br>キュアピースは、グー！";
        echo "<br>あいこだよ！もう1回挑戦しよう！";
    } else if($me == 2 & $com == 3){
        $result = '勝ち';
        echo '<img src = "img/r5.jpg"/>';
        echo "<br><br>キュアピースは、パー！<br>";
        echo $name.'ちゃんの勝ちだよ！';
    } else if($me == 2 & $com == 1){
        $result = '負け';
        echo '<img src = "img/goo.jpg"/>';
        echo "<br><br>キュアピースは、グー！";
        echo "<br>負けちゃった。もう1回挑戦しよう！";
    } else if($me == 2 & $com == 2){
        $result = 'あいこ';
        echo '<img src = "img/r7.jpg"/>';
        echo "<br><br>キュアピースは、チョキ！";
        echo "<br>あいこだよ！もう1回挑戦しよう！";
    } else if($me == 3 & $com == 1){
        $result = '勝ち';
        echo '<img src = "img/r2.gif"/>';
        echo "<br><br>キュアピースは、グー！<br>";
        echo $name.'ちゃんの勝ちだよ！';
    } else if($me == 3 & $com == 2){
        $result = '負け';
        echo '<img src = "img/choki.jpg"/>';
        echo "<br><br>キュアピースは、チョキ！";
        echo "<br>負けちゃった。もう1回挑戦しよう！";
    } else if($me == 3 & $com == 3){
        $result = 'あいこ';
        echo '<img src = "img/r8.gif"/>';
        echo "<br><br>キュアピースは、パー！";
        echo "<br>あいこだよ！もう1回挑戦しよう！";
echo "</div>";
    }}
?>
<br><br>

<!-- リセット -->
<form action ="index.php" method ="post">
<div id="bt">
    <button id="b2">もう一回！</button>
</div>
</form>
<br>

</body>
</html>