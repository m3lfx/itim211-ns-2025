<?php
session_start();
include("../includes/config.php");

if (!isset($_SESSION['user_id'])) {
    $_SESSION['message'] = "please Login to access the page";
    header("Location: ../user/login.php");
    exit();
}
$result = mysqli_query($conn, "DELETE from albums WHERE album_id =  {$_GET['id']}");
if ($result) {
    header("Location: index.php");
}
