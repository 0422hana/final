<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>

<?php
    $odo = new PDO($connect, USER, PASS);
    $sql = $pdo -> prepare('delete from Shop where shop_id = ?');
    $sql -> execute([$_GET['shopId']]);
    echo '<p>削除しました</p>';
    echo '<a href="home.php">カフェ一覧画面へ</a>'; 
?>

<?php require 'footer.php' ?>

