<?php
    include("../includes/config.php");
    // print_r($_POST);
    $result = mysqli_query($conn, " UPDATE albums SET title='{$_POST['albumName']}', artist_id =  '{$_POST['artist_id']}', date_released = '{$_POST['dateReleased']}', genre = '{$_POST['genre']}' WHERE album_id = {$_POST['albumId']}");
    // var_dump($result);
    if ($result) {
        header("Location: index.php");
    }
    
?>