<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
<!-- <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script> -->
<?php
    // $pdo = new PDO($connect, USER, PASS);
    // $sql = $pdo -> prepare('delete from Shop where shop_id = ?');
    // $sql -> execute([$_GET['shopId']]);
    echo '<form action="update-finish.php" method="post" class="h-adr">';
    echo '<input type="text" name="shopName">';
    echo '<input type="text" name="foodName">';
    echo '<input type="number" name="price">';
    echo '<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>';
    // echo '<form class="h-adr">';
    echo '<span class="p-country-name" style="display:none;">Japan</span>';
    echo '〒<input type="text" class="p-postal-code" size="8" maxlength="8"><br>';
    echo '<input type="text" class="p-region p-locality p-street-address p-extended-address" />';
    echo '</form>';

?>

<?php require 'footer.php' ?>