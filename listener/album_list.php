<?php
session_start();
include("../includes/header.php");
require("../includes/config.php");

if (!isset($_SESSION['user_id'])) {
    $_SESSION['message'] = "please Login to access the page";
    header("Location: ../user/login.php");
    exit();
}

// print_r($_SESSION);
$sql = "SELECT l.listener_id as listener_id FROM users u INNER JOIN listeners l ON (u.user_id = l.user_id) WHERE u.user_id = {$_SESSION['user_id']} LIMIT 1";

$query = mysqli_query($conn, $sql);
$listener = mysqli_fetch_assoc($query);
// var_dump($listener);

$_SESSION['listener_id'] = $listener['listener_id'];
// print_r($_SESSION);

$sql1 = "SELECT * FROM albums";

$sql2 = "SELECT * FROM albums a INNER JOIN album_listener al ON (a.album_id = al.album_id) INNER JOIN listeners l ON (al.listener_id = l.listener_id ) WHERE al.listener_id = {$_SESSION['listener_id']}";

$albums = mysqli_query($conn, $sql1);

$myAlbums = mysqli_query($conn, $sql2);
// echo mysqli_num_rows($myAlbums);

if(mysqli_num_rows($myAlbums) > 0) {
    while ($row = mysqli_fetch_assoc($myAlbums)) {
        $album_ids[] = $row['album_id'];
        var_dump(($album_ids)); 
    
    }
} else {
    $album_ids = [];
}
?>
<div class="container-fluid container-lg">
    <form action="storeAlbums.php" method="POST">

        <?php
        // if (mysqli_num_rows($albums) > 0) {
        //     // echo  mysqli_num_rows($albums);
        //     while ($row = mysqli_fetch_assoc($albums)) {

        //         echo "<div class='form-check'>
        //             <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]'>
        //             <label class='form-check-label' for='flexCheckDefault'>
        //                 {$row['title']}
        //             </label>
        //             </div>";
        //     }
        // }

        if (mysqli_num_rows($albums) > 0) {

            while ($row = mysqli_fetch_assoc($albums)) {
                if(in_array($row['album_id'], $album_ids) ) {
                    echo "<div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]' checked>
                    <label class='form-check-label' for='flexCheckDefault'>
                        {$row['title']}
                    </label>
                    </div>";
                } else{
                    echo "<div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]'>
                    <label class='form-check-label' for='flexCheckDefault'>
                        {$row['title']}
                    </label>
                    </div>";
                }
                
            }
        }
        ?>

        <button type="submit" class="btn btn-primary">update list</button>
    </form>
</div>