<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // $testing = 5;
    // print gettype($testing); // integer
    // print "<br>";
    // $testing = "five";
    // print gettype($testing); // string
    // $undecided = 3.14;
    // print gettype($undecided); // double
    // print "-- $undecided<br>"; // 3.14

    // settype($undecided, "double");
    // print gettype($undecided); // double
    // print " -- $undecided<br>"; // 3.0
    // settype($undecided, "boolean");
    // print gettype($no_var); // boolean
    // print " -- $undecided<br>"; // 1

    $undecided = 3.14;
    $holder = (float) $undecided;
    print gettype($holder); // double
    print " -- $holder<br>"; // 3.14
    $holder = (string) $undecided;
    print gettype($holder); // string
    print " -- $holder<br>"; // 3.14

    $holder = (int) $undecided;
    print gettype($holder); // integer
    print " -- $holder<br>";

    print gettype($holder); // double
    print " -- $holder<br>"; // 3.14
    $holder = (bool) $undecided;
    print gettype($holder); // boolean
    print " -- $holder<br>"; // 1
    print "hello" . " " . "world";
    define("USER", "Mike");
    print "Welcome " . USER;

    $mood = "angry";
    if ($mood == "happy") {
        print "Hooray, I'm in a good mood";
    } else if ($mood == "sad") {
        print "Awww. Don't be down!";
    } else {
        print "Neither happy nor sad but $mood";
    }

    $mood = "sadder";
    switch ($mood) {
        case "happy":
            print "Hooray, I'm in a good mood";
            break;
        case "sad":
            print "Awww. Don't be down!";
            break;
        default:
            print "Neither happy nor sad but $mood";
    }

    $counter = 1;
    while ($counter <= 12) {
        print "$counter times 2 is " . ($counter * 2) . "<br>";
        $counter++;
    }

    $num = 1;
    do {
        print "Execution number: $num<br>\n";
        $num++;
    } while ($num > 200 && $num < 400);

    for ($counter = 1; $counter <= 12; $counter++) {
        print "$counter times 2 is " . ($counter * 2) . "<br>";
    }
    for ($counter = 1; $counter <= 10; $counter++) {
        $temp = 4000 / $counter;
        print "4000 divided by $counter is... $temp<br>";
    }

    $counter = -4;

    for (; $counter <= 10; $counter++) {
        if ($counter == 0)
            break;
        $temp = 4000 / $counter;
        print "4000 divided by $counter is... $temp<br>";
    }

    $counter = -4;
    for (; $counter <= 10; $counter++) {
        if ($counter == 0)
            continue;
        $temp = 4000 / $counter;
        print "4000 divided by $counter is... $temp<br>";
    }

    print "<table border='1'>\n";
    for ($y = 1; $y <= 12; $y++) {
        print "<tr>\n";
        for ($x = 1; $x <= 12; $x++) {
            print "\t<td>";
            print($x * $y);
            print "</td>\n";
        }
    }
    print "</table>";

    $num = -321;
    $newnum = abs($num);
    print $newnum;
    function bighello()
    {
        print "<h1>HELLO!</h1>";
    }

    bighello();
    bighello();

    function printBR($txt)
    {
        print("$txt<br>\n");
    }
    printBR("This is a line");
    printBR("This is a new line");
    printBR("This is yet another line");

    function addNums($firstnum, $secondnum)
    {
        $result = ($firstnum + $secondnum);
        return $result;
    }
    print addNums(3, 5);

    function sayHello()
    {
        print "hello<br>";
    }
    $function_holder = "sayHello";
    $function_holder();

    function test()
    {
        $testvariable = "this is a test variable";
    }
    print "test variable: $testvariable<br>";

    $life = 42;
    function meaningOfLife()
    {
        global $life;

        print "The meaning of life is $life<br>";
    }
    meaningOfLife();

    $num_of_calls = 0;
    function andAnotherThing($txt)
    {
        static $num_of_calls = 0;
        $num_of_calls++;
        print "<h1>$num_of_calls. $txt</h1>";
    }
    andAnotherThing("Widgets");
    print("We build a fine range of widgets<p>");
    andAnotherThing("Doodads");
    print("Finest in the world<p>");
    print $num_of_calls;

    // function fontWrap($txt, $size)
    //   {
    //     print "<font size=\"$size\" face=\"Helvetica,Arial,Sans-Serif\">$txt</
    //  font>";
    //   }
    //   fontWrap("A heading<br>", 5);
    //   fontWrap("some body text<br>", 3);
    //   fontWrap("some more body text<BR>", 3);
    //   fontWrap("yet more body text<BR>", 3);

    function fontWrap($txt, $size = 3)
    {
        print "<font size=\"$size\"face=\"Helvetica,Arial,Sans-serif\">$txt</font>";
    }
    fontWrap("A heading<br>", 5);
    fontWrap("some body text<br>");
    fontWrap("some more body text<br>");
    fontWrap("yet more body text<br>");

    function addFive(&$num)
    {
        $num += 5;
    }
    $orignum = 10;
    addFive($orignum);
    print($orignum);

    // $users = array("Bert", "Sharon", "Betty", "Harry", 200, true, 90.80);
    // print "$users[6]";
    $users[] = " Bert";
    $users[] = " Sharon";
    $users[] = " Betty";
    $users[] = " Harry";
    print_r($users);

    foreach ($users as $user) {
        print "<h1>$user</h1></br>";
    }

    $first = array("a", "b", "c");
    $second = array(1, 2, 3);
    $third = array_merge($first, $second);
    print_r($third);
    foreach ($third as $val) {
        print "$val<BR>";
    }

    // $character = array(
    //   "name" => "bob",
    //   "occupation" => "superhero",
    //   "age" => 30,
    //   "special power" => "x-ray vision",
    // // "special power" => "flight",
    // );
    // print $character["special power"];
    // print $character["name"];
    // print $character["age"];

    $character = array();
    $character['name'] = "bob";
    $character['occupation'] = "superhero";
    $character['age'] = 30;
    $character["special power"] = "x-ray vision";
    $character['job'] = 'reporter';
    print_r($character);

    foreach ($character as $key => $value) {
        print "<h1>" . $key . "</h1>" . " " . $value . "<br>";
    }

    $characters = array(
        array(
            "name" => "bob",
            "occupation" => "superhero",
            "age" => 30,
            "specialty" => "x-ray vision",
        ),
        array(
            "name" => "sally",
            "occupation" => "superhero",
            "age" => 24,
            "specialty" => "superhuman strength"
        ),
        array(
            "name" => "mary",
            "occupation" => "arch villain",
            "age" => 63,
            "specialty" => "nanotechnology"
        )
    );
    print_r($characters);
    print "<h2>" . $characters[2]['specialty'] . "</h2>";
    print "<h2>" . $characters[1]['name'] . "</h2>";

    foreach ($characters as $character) {
        print_r($character);
        foreach ($character as $key => $value) {
            print $key . " " . $value . "<br>";
        }
    }

    foreach ($_COOKIE as $key => $value) {
        print "\$_SERVER[\"$key\"] == $value<br/>";
    }


    ?>
</body>

</html>