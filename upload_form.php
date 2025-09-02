<?php
print_r($_FILES);
 if ( isset( $_FILES['fupload'] ) ) {

     print "name: ".     $_FILES['fupload']['name']       ."<br />";
     print "size: ".     $_FILES['fupload']['size'] ." bytes<br />";
     print "temp name: ".$_FILES['fupload']['tmp_name']   ."<br />";
     print "type: ".     $_FILES['fupload']['type']       ."<br />";
     print "error: ".    $_FILES['fupload']['error']      ."<br />";

     if ( $_FILES['fupload']['type'] == "image/png" || $_FILES['fupload']['type'] == "image/jpeg" ) {

         $source = $_FILES['fupload']['tmp_name'];
         $target = "upload/".$_FILES['fupload']['name'];
         move_uploaded_file( $source, $target ) or die ("Couldn't copy");
         $size = getImageSize( $target );

         $imgstr = "<p><img width=\"$size[0]\" height=\"$size[1]\" ";
         $imgstr .= "src=\"$target\" alt=\"uploaded image\" /></p>";

         print $imgstr;
     }
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <title>Listing 10.11 A Simple File Upload Form</title>
</head>

<body>

    <form enctype="multipart/form-data" action="<?php print $_SERVER['PHP_SELF'] ?>" method="POST">
        <p>
            
            <input type="file" name="fupload" /><br />
            <input type="submit" value="upload!" />
        </p>
    </form>
</body>

</html>