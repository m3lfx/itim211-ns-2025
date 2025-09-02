<?php
// print $_GET['id'];
// session_start();
include('../includes/header.php');
require('../includes/config.php');
// 
$artist_id = (int) $_GET['id'];

$sql = "SELECT * FROM artists WHERE artist_id = $artist_id LIMIT 1";
// print $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
print $row['country'];
?>

<body>
    <div class="container-fluid container-lg">

        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="artistName">Artist name</label>
                <input type="text" class="form-control" id="artistName" aria-describedby="emailHelp" placeholder="Enter name" name="artistName" value="<?php print $row['name']; ?>" />

            </div>
            <div class="form-group">
                <label for="country">country</label>
                <input type="text" class="form-control" id="country" placeholder="artist country"
                    name="country" value="<?php print $row['country']; ?>" />
            </div>
            <div class="form-group">
                <label for="image">upload image</label>
                <input type="file" class="form-control" id="image" placeholder="image"
                    name="image">
                    <img width='250' height='250' src= <?php print $row['img_path'] ?> />
            </div>
            <input type="hidden" name="artistId" value=<?php print $row['artist_id'] ?> />


            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <a href="index.php" class="btn btn-secondary btn-sm " role="button" aria-disabled="true">Cancel</a>
        </form>
    </div>
</body>
<?php
include('../includes/footer.php');
?>