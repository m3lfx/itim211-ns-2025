<?php
print_r($_REQUEST);




    print "Welcome <b>" . $_REQUEST['user'] . "</b><br/>\n";
    print "Your address is:<br/><b>" . $_REQUEST['address'] . "</b><br/>\n";

    if (is_array($_REQUEST['products'])) {
        print "<p>Your product choices are:</p>\n";
        print "<ul>\n";
        foreach ($_REQUEST['products'] as $value) {
            print "<li>$value</li>\n";
        }
        print "</ul>\n";
    }
    ?>
?>