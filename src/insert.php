<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
<?php
    // $pdo = new PDO($connect, USER, PASS);
    // $sql = $pdo -> prepare('delete from Shop where shop_id = ?');
    // $sql -> execute([$_GET['shopId']]);
    echo '<form action="insert-finish.php" method="post" class="h-adr">';
    echo 'SHOP NAME：<input type="text" name="shopName"><br>';
    echo 'FOOD NAME：<input type="text" name="foodName"><br>';
    echo 'FOOD CATEGORY：<select name="category">';
    echo    '<option value="1">スイーツ</option>';
    echo    '<option value="2">ランチ</option>';
    echo    '<option value="3">ディナー</option>';
    echo '</select><br>';
    echo 'PRICE：<input type="number" name="price"><br>';
    echo '<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>';
    // echo '<form class="h-adr">';
    echo '<span class="p-country-name" style="display:none;">Japan</span>';
    echo '〒<input type="text" class="p-postal-code" size="8" maxlength="8" name="zipCode"><br>';
    echo '<input type="text" class="p-region p-locality p-street-address p-extended-address" name="address" /><br>';
    echo '<input type="submit" value="登録">';
    echo '</form>';

?>

<?php require 'footer.php' ?>