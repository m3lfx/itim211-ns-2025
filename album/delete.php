<?php
    
    include("../includes/config.php");
    $result = mysqli_query($conn, "DELETE from albums WHERE album_id =  {$_GET['id']}");
    if ($result) {
        header("Location: index.php");
    }
 
?>