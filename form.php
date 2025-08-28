<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="test2.php" method="POST">
        <p>
            <input type="text" name="user" /></p>
        <p>
            <textarea name="address" rows="5" cols="40">
            </textarea>
        </p>
        <p>
            <select name="products[]" multiple="multiple">
                <option>Sonic Screwdriver</option>
                <option>Tricorder</option>
                <option>ORAC AI</option>
                <option>HAL 2000</option>
            </select>
        </p>
        <p>
            <input type="submit" value="hit it!" /></p>
    </form>
</body>

</html>