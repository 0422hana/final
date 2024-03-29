<?php require 'db_connect.php' ?>
<?php require 'header.php' ?>
    
<?php
    echo '<h1>Cafe_Memory</h1>';
    echo '<div class="cafe"><p>[カフェ一覧]</p></div>';
    echo '<table border="1">';
    echo '<tr><td width="230" height="30">SHOP</td> <td width="230" height="30">FOOD</td> <td width="100" height="30">CATEGORY</td> <td width="100" height="30">PRICE</td> <td width="350" height="30">ADDRESS</td> <td width="60" height="30"></td><td width="60" height="30"></td></tr>';
    
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo -> query('select * from Shop inner join Category on Shop.category_id = Category.category_id');
    foreach($sql as $row){
        $shopId = $row['shop_id'];

        $code = $row['postcode'];
        $code1 = substr($code, 0, 3);
        $code2 = substr($code, 3);
        $zipcode = $code1."-".$code2;

        echo '<tr>';
        echo '<td>',$row['shop_name'],'</td>　';
        echo '<td>',$row['food_name'],'</td>　';
        echo '<td>',$row['category_name'],'</td>　';
        echo '<td>￥',$row['price'],'</td>　';
        echo '<td>',$zipcode,'<br>',$row['address'],'</td>　';
        echo '<td><button onclick="location.href=`review.php?shopId=',$shopId,'`">レビュー</button></td>';
        echo '<td><button onclick="location.href=`update.php?shopId=',$shopId,'`">更新</button></td>';
        echo '<td><button onclick="location.href=`delete.php?shopId=',$shopId,'`">削除</button></td>';
        echo '</tr>';
    } 
    echo '</table>';
    echo '<div class="insert_button"><td><button onclick="location.href=`insert.php`">登録</button></td><div>';
    ?>
<?php require 'footer.php' ?>