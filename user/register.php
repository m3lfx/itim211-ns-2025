<?php
include("../includes/header.php");
?>
<div class="container-fluid container-lg">
    <form action="store.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<?php
include("../includes/footer.php");
?>