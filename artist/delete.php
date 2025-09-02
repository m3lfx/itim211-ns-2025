<?php
require('../includes/config.php');
$artist_id = (int) $_GET['id'];

$sql = "DELETE FROM artists WHERE artist_id = $artist_id LIMIT 1";
$result = mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: index.php ");
}
