<?php
require('../includes/config.php');
$artist_id = (int) $_POST['artistId'];
$name = trim($_POST['artistName']);
$country = trim($_POST['country']);

if (isset($_FILES['image'])) {

    

    if ($_FILES['image']['type'] == "image/png"  ||  $_FILES['image']['type'] == "image/jpg") {

        $source = $_FILES['image']['tmp_name'];
        $target = "../upload/" . $_FILES['image']['name'];
        $path = "../upload/" . $_FILES['image']['name'];
        move_uploaded_file($source, $target) or die("Couldn't copy");
       
    }

    
    $sql = "UPDATE artists SET name = '{$name}', country = '{$country}', img_path =  '{$path}' WHERE artist_id = $artist_id ";
    print $sql;
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: index.php");
        
    }
}
?>