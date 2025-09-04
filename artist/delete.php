<?php
session_start();
require('../includes/config.php');

if (!isset($_SESSION['user_id'])) {
    $_SESSION['message'] = "please Login to access the page";
    header("Location: ../user/login.php");
}


$artist_id = (int) $_GET['id'];

$sql = "DELETE FROM artists WHERE artist_id = $artist_id LIMIT 1";
$result = mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: index.php ");
}
