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

$albums = mysqli_query($conn, $sql1);
?>
<div class="container-fluid container-lg">
    <form action="storeAlbums.php" method="POST">

        <?php
        if (mysqli_num_rows($albums) > 0) {
            // echo  mysqli_num_rows($albums);
            while ($row = mysqli_fetch_assoc($albums)) {

                echo "<div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]'>
                    <label class='form-check-label' for='flexCheckDefault'>
                        {$row['title']}
                    </label>
                    </div>";
            }
        }
        ?>

        <button type="submit" class="btn btn-primary">update list</button>
    </form>
</div>