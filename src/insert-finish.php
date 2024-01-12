<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
<?php
    $code = $_POST['zipCode'];
    $code1 = substr($code, 0, 3);
    $code2 = substr($code, 3);
    echo $code2;
    $zipcode = $code1."-".$code2;

    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo -> prepare('insert into Shop values(null, ?, ?, ?, ?, ?, ?)');
    $sql -> execute([$_POST['shopName'], $_POST['foodName'], $_POST['price'], $zipcode, $_POST['address'], $_POST['category']]);
?>
<p>登録しました</p>
<p><a href="home.php">カフェ一覧画面へ</a></p>