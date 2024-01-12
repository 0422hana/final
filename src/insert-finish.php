<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo -> prepare('insert into Shop values(null, ?, ?, ?, ?, ?, ?)');
    $sql -> execute([$_POST['shopName'], $_POST['foodName'], $_POST['price'], $_POST['zipCode'], $_POST['address'], $_POST['category']]);
?>
<p>登録しました</p>
<p><a href="home.php">カフェ一覧画面へ</a></p>