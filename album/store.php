<?php
    include("../includes/config.php");
    print_r($_POST);
    $title = $_POST['albumName'];
    $artist_id = $_POST['artist'];
    $date = $_POST['dateReleased'];
    $genre = $_POST['genre'];
    $sql = "INSERT INTO albums (title, artist_id, genre, date_released) VALUES('$title', $artist_id,'$genre','$date')";
    // var_dump($sql);
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: index.php");
    }
    else {
        echo mysqli_error($conn);
    }
    
?>