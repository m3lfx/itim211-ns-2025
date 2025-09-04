<?php
    include("../includes/header.php");
    include("../includes/config.php");

    // $album = mysqli_query($conn, "SELECT * FROM albums WHERE album_id = {$_GET['id']} LIMIT 1");
    $album = mysqli_query($conn, "SELECT * FROM albums al INNER JOIN artists ar ON (al.artist_id = ar.artist_id) WHERE album_id = {$_GET['id']}");
    $album = mysqli_fetch_assoc($album);

    // $result_artist = mysqli_query($conn, "SELECT * FROM artists");
    // $artists = mysqli_fetch_assoc($result_artist);
    
    // var_dump($album, $artists);
    $artists = mysqli_query($conn, "SELECT * FROM artists WHERE artist_id != {$album['artist_id']}");
    
?>
<div class="container-fluid container-lg">
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Album Name</label>
            <input type="text" class="form-control" id="name" name="albumName" value="<?php echo $album['title']; ?>">
        </div>
        <div class="mb-3">
            <label for="artist" class="form-label">Artist</label>
            <select class="form-select" id="artist" aria-label="Select Artist" name="artist_id" >
                <option selected>Select Artist</option>
                <?php 
                    echo "<option value={$album['artist_id']} selected>{$album['name']}</option>";
                    while($row = mysqli_fetch_assoc($artists)) {
                        echo "<option value={$row['artist_id']}>{$row['name']}</option>";
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="dateReleased" class="form-label">Date Released</label>
            <input type="date" class="form-control" id="dateReleased" name="dateReleased" value="<?php echo $album['date_released']; ?>">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $album['genre']; ?>">
        </div>
        <input type="hidden" id="albumId" name="albumId" value="<?php echo $album['album_id']; ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include("../includes/footer.php");
?>