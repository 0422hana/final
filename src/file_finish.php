<?php
$image = $_FILES['image'];

    if($image['type'] == 'image/jpeg' || $image['type'] == 'image/png'){
        if($image['size'] <= 5000000){
            $filename = uniqid().'.'.pathinfo($image['name'], PATHINFO_EXTENSION);
            $destination = 'uploads/'.$filename;
            if(move_uploaded_file($image['tmp_name'], $destination)){
                echo 'ファイルが正常にアップロードされました。';
                echo '<img src="'.$destination.'" alt="アップロードされた画像">';
            }else{
                echo 'ファイルのアップロードに失敗しました。';
            }
        }else{
            echo 'ファイルが大きすぎます。';
        }
    }else{
        echo '無効なファイル形式です。';
    }
?>