<?php

include("../includes/header.php");
include "../includes/config.php";


?>
<div class="container-fluid container-lg">
    <a class="btn btn-primary" href="create.php" role="button">Add Artist</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Album ID</th>
                <th>album Name</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Date Released</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php

        $result = mysqli_query($conn, "SELECT * FROM albums al INNER JOIN artists ar on (al.artist_id = ar.artist_id) ORDER BY al.album_id asc");

        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row);
            print "<tr>";
            echo "<td> {$row['album_id']}</td>";
            echo "<td>{$row['title']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['genre']}</td>";
            echo "<td>{$row['date_released']}</td>";
            echo "<td>
                    <a href=edit.php?id={$row['album_id']}>
                        <i class='fa-regular fa-pen-to-square' aria-hidden='true' style='font-size:24px'>
                        </i>
                    </a>
                    <a href=delete.php?id={$row['album_id']}>
                        <i class='fa-regular fa-trash-can' aria-hidden='true' style='font-size:24px; color:red'>
                        </i>
                    </a>
                </td>";
            print "</tr>";
        }

        ?>
    </table>
</div>
<?php
include("../includes/footer.php");
?>