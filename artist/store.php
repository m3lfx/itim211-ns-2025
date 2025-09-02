<?php
require('../includes/config.php');

$name = trim($_POST['artistName']);
$country = trim($_POST['country']);
print "<h1>$name</h1>";

if (isset($_FILES['image'])) {

    if ($_FILES['image']['type'] == "image/png"  ||  $_FILES['image']['type'] == "image/jpg") {

        $source = $_FILES['image']['tmp_name'];
        $target = "../upload/" . $_FILES['image']['name'];

        move_uploaded_file($source, $target) or die("Couldn't copy");
        $size = getImageSize($target);

        $imgstr = "<p><img width=\"$size[0]\" height=\"$size[1]\" ";
        $imgstr .= "src=\"$target\" alt=\"uploaded image\" /></p>";

        print $imgstr;
    }
    $sql = "INSERT INTO artists (name,country,img_path) VALUES('$name', '$country','$target')";
    print $sql;
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    }
}
