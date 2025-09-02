<?php
$num_to_guess = 42;
$message = "";
if (! isset($_POST['guess'])) {
    $message = "Welcome to the guessing machine!";
} else if ($_POST['guess'] > $num_to_guess) {
    $message = $_POST['guess'] . " is too big! Try a smaller number";
} else if ($_POST['guess'] < $num_to_guess) {
    $message = $_POST['guess'] . " is too small! Try a larger number";
} else { // must be equivalent
    $message = "Well done!";
    header("Location: congrats.html");
    exit;
}
$guess = (int) $_POST['guess'];
$num_tries = (int) $_POST['num_tries'];
$num_tries++;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <title>Listing 10.7 A PHP Number Guessing Script</title>
</head>

<body>
    <h1>
        <?php print $message ?>
        Guess number: <?php print $num_tries ?><br />
    </h1>
    <form method="POST" action="<?php print $_SERVER['PHP_SELF'] ?>">
        <p>
            Type your guess here: <input type="text" name="guess" />
            <input type="submit" value="submit" />
        </p>
        <input type="hidden" name="num_tries" value="<?php print $num_tries ?>" />

    </form>
</body>

</html>