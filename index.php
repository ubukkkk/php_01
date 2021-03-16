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
  <img id ="r9" src="..//php_01/img/r9.jpg">
</div>
<br>

<!-- じゃんけんボタン -->
<form action ="jan2.php" method ="post">
<div id="bt">
    <p id="mae">おなまえ:<input type="text" name="name" size="20"></p><br>
    <button id="b1" value=1 button type ="submit" name ="te">グー</button>
    <button id="b2" value=2　button type ="submit" name ="te">チョキ</button>
    <button id="b3" value=3　button type ="submit" name ="te">パー</button>
</div>
</form>

</body>
</html>