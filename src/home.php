<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
    
<?php
    echo '<h1>Cafe_Memory</h1>';
    echo '<p>[カフェ一覧]</p>';
    echo '<table>';
    echo '<tr><td>SHOP</td> <td>FOOD</td> <td>ADDRESS</td> <td></td> <td>PRICE</td></tr>';
    
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo -> query('select * from Shop');
    foreach($sql as $row){
        echo '<tr>';
        echo '<td>',$row['shop_name'],'</td>';
        echo '<td>',$row['food_name'],'</td>';
        echo '<td>',$row['price'],'</td>';
        echo '<td>',$row['postcode'],'　　',$row['address'],'</td>';
        //echo '<td><input type="button" name="delete" formaction="delete.php>削除</td>';
        //echo '<td><input type="button" name="delete">削除</td>';
        echo '</tr>';
    } 
    echo '</table>';
    ?>
<?php require 'footer.php' ?>