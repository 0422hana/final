<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>

<h2>お店登録</h2>
    <form action="file_finish.php" method="post" enctype="multipart/form-data">
        UPLOAD image：<input type="file" name="image">;
        <input type="submit" value="決定">;
    </form>
