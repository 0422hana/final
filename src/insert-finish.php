<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo -> prepare('insert into Shop null, ?, ?, ?, ?, ?, ?');
    $sql -> execute([$_POST['shopName'], $_POST['foodName'], $_POST['category'], $_POST['price'], $_POST['zipCode'], $_POST['address']]);
?>
<p>登録しました</p>
<p><a href="home.php">カフェ一覧画面へ</a></p>