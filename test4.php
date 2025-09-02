<?php
session_start();
print_r($_SESSION);
if ( empty( $_SESSION['products'] ) ) {
  $_SESSION['products'] = array();
}

if ( is_array( $_REQUEST['form_products'] ) ) {
  $_SESSION['products'] = array_unique(
    array_merge( $_SESSION['products'],
          $_REQUEST['form_products'] )
  );
}
?>
<!DOCTYPE html PUBLIC
   "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
 <head>
 <title>Listing 20.4 Registering an Array Element with a Session</title>
 </head>
 <body>
 <div>
 <h1>Product Choice Page</h1>
 <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
 <p>
: <select name="form_products[]" multiple="multiple" size="3">
 <option>Sonic Screwdriver</option>
 <option>Hal 2000</option>
 <option>Tardis</option>
 <option>ORAC</option>
 <option>Transporter bracelet</option>
 </select>
 </p>
 <p>
 <input type="submit" value="choose" />
 </p>
 </form>
 <a href="test5.php">A content page</a>
 </div>
 </body>
 </html>