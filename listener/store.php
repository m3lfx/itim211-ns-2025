<?php
include("../includes/config.php");
// print_r($_POST);
$name = $_POST['listenerName'];
$address = $_POST['address'];

$user_id = $_POST['userId'];


$filename = $_FILES["listenerImage"]["name"];
// echo $filename;
$tempname = $_FILES["listenerImage"]["tmp_name"];
$folder = "../images/" . $filename;
$sql = "INSERT INTO listeners(name, address, img_path, user_id) VALUES('$name', '$address','$filename','$user_id')";
$result = mysqli_query($conn, $sql);
// var_dump($sql);

if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}
if ($result) {
    header("Location: ../user/profile.php");
}
