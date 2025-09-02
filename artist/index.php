<?php

// print_r($_SESSION);
include('../includes/header.php');
require("../includes/config.php");

?>

<body>
    <h1>artists</h1>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>artist ID</th>
                <th>artist name </th>
                <th>Country</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM artists ORDER BY artist_id DESC";

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                // var_dump($row);
                echo "<tr>
                        <td>{$row['artist_id']}</td>
                        <td>{$row['name']}</td>
                       
                        <td>{$row['country']}</td>
                        <td><img width='250' height='250' src='{$row['img_path']}' /></td>
                        <td><a href=edit.php?id={$row['artist_id']}><i class='fa-regular fa-pen-to-square' aria-hidden='true' style='font-size:24px'></i></a>
                        <a href=delete.php?id={$row['artist_id']}><i class='fa-regular fa-trash-can' aria-hidden='true' style='font-size:24px; color:red'></i></a></td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<?php
include('../includes/footer.php');

?>