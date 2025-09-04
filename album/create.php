<?php
    // session_start();
    include("../includes/header.php");
    include("../includes/config.php");
  
    $result = mysqli_query($conn, "SELECT * FROM artists");
    
?>
<div class="container-fluid container-lg">
    <form action="store.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Album Name</label>
            <input type="text" class="form-control" id="name" name="albumName">
        </div>
        <div class="mb-3">
            <label for="artist" class="form-label">Artist</label>
            <select class="form-select" id="artist" aria-label="Select Artist" name="artist">
                <option selected>Select Artist</option>
                <?php 
                    while($row = mysqli_fetch_assoc($result)) {
                       print "<option value={$row['artist_id']}>{$row['name']}</option>";
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="dateReleased" class="form-label">Date Released</label>
            <input type="date" class="form-control" id="dateReleased" name="dateReleased">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include("../includes/footer.php");
?>