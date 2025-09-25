<?php
session_start();
include("../includes/header.php");
include("../includes/config.php");

$album_ids = $_POST['albums'];
print_r($album_ids);
// if (isset($_POST['albums'])) {
//     // $result = mysqli_query($conn, "DELETE FROM albums_listeners WHERE  listeners_listener_id = {$_SESSION['listener_id']}");
//     foreach ($album_ids as $album_id) {
//         $sql1 = "INSERT INTO album_listener (listener_id, album_id) VALUES({$_SESSION['listener_id']}, $album_id )";
//         $result = mysqli_query($conn, $sql1);
//     }
// }

if(isset($_POST['albums'])) {
    $result = mysqli_query($conn, "DELETE FROM album_listener WHERE  listener_id = {$_SESSION['listener_id']}");
    foreach ($album_ids as $album_id) {
        $sql1 = "INSERT INTO album_listener (listener_id, album_id) VALUES({$_SESSION['listener_id']}, $album_id )";
        $result = mysqli_query($conn, $sql1);
       
    }
}
else {
    $result = mysqli_query($conn, "DELETE FROM album_listener WHERE  listener_id = {$_SESSION['listener_id']}"); 
}


if (mysqli_affected_rows($conn) > 0) {
    header("Location: album_list.php");
}
