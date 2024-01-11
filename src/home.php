<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
    
<?php
    echo '<h1>Cafe_Memory</h1>';
    echo '<p>[カフェ一覧]</p>';
    echo '<table>';
    echo '<tr><td>SHOP</td> <td>FOOD</td> <td>PRICE</td> <td>ADDRESS</td> <td></td></tr>';
    
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo -> query('select * from Shop');
    foreach($sql as $row){
        $shopId = $row['shop_id'];
        echo '<tr>';
        echo '<td>',$row['shop_name'],'</td>';
        echo '<td>',$row['food_name'],'</td>';
        echo '<td>',$row['price'],'</td>';
        echo '<td>',$row['postcode'],'　　',$row['address'],'</td>';
        echo '<td><button onclick="location.href=`delete.php?cosmeId=',$shopId,'`">削除</button></td>';
        echo '</tr>';
    } 
    echo '</table>';
    ?>
<?php require 'footer.php' ?>