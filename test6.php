<?php
date_default_timezone_set('Asia/Manila');
print time();
$date_array = getdate(); // no argument passed so today's date will be used
foreach ($date_array as $key => $val) {
    print "$key = $val<br>";
}

print "Today's date: {$date_array['mday']}/{$date_array['mon']}/
{$date_array['year']}<p>";

$ts = mktime( 2, 30, 0, 5, 1, 1999 );
// print $ts;

// print date("m/d/Y G.i:s<br>", time());

// print date("l,..... jS \of F Y h:i:s A", get_date());

$number = 1900;
 printf("Decimal: %d<br>", $number );
 printf("Binary: %b<br>", $number );
printf("Double: %f<br>", $number );
 printf("Octal: %o<br>", $number );
 printf("String: %s<br>", $number );
printf("Hex (lower): %x<br>", $number );
 printf("Hex (upper): %X<br>", $number );

 $red = 204;
$green = 204;
$blue = 204;
printf( "#%X%X%X", $red, $green, $blue );
printf( "%04d", 36 );

$test = "scallywag";
print $test[0]; // prints "s"
print $test[2];

$membership = 'tesst';
if ( strlen( $membership ) === 4 )
print "Thank you!";
else
print "Your membership number must have 4 digits<P>";

// $membership = "mz00xyz";
// if ( strpos($membership, "mzc") === 0 )
// print "hello mz";

// $test = "scallywag";
// print substr($test,-6,3); // prints "wag"
// print substr($test,6,2);

$test = "matt@corrosive.co.uk";
if ( $test = substr( $test, -6 ) === ".co.uk" )
print "Don't forget our special offers for British customers";
else
print "Welcome to our shop!";

 $test = "http://www.deja.com/qs.xp?OP=dnquery.xp&ST=MS&DBS=2&QRY=developer+php";
$delims = "?&";
$word = strtok( $test, $delims );
 while ( is_string( $word ) )
 {
 if ( $word )
 print "$word<br>";
 $word = strtok( $delims);
 }
 print( $test);

//  $text = "\t\t\tlots of room to breath ";
//  print "<pre>{$text}</pre>";
// $text = trim( $text );
// print $text;

// $membership = "mz99xyz";
// print $membership;
// $membership = substr_replace( $membership, "00", 2, 1 );
// print "New membership number: $membership<p>";

$string = "Site g@g0 g@g0 duck. buck clock socks packs u ";
$string .= "The g@g0 Guide to All Things Good in Europe";

print str_replace("g@g0","****", $string);

$membership = "mz00xyz";
$membership = strtoupper( $membership );
print "$membership<P>";

 $home_url = "WWW.CORROSIVE.CO.UK";
$home_url = strtolower( $home_url );
if ( ! ( strpos( $home_url, "http://") === 0 ) )
    $home_url = "http://$home_url";
print $home_url;

$full_name = "violet elizabeth bott";
$full_name = ucwords( $full_name );
print $full_name;

$full_name = "      VIolEt eLIZaBeTH bOTt    ";
$full_name = ucwords( strtolower(trim($full_name)) );
print $full_name;

$start_date = "TUPT-24-0438";
$date_array = explode("-", $start_date);
print $date_array[0]. "<br>" ;
print $date_array[1]. "<br>" ;
print $date_array[2]. "<br>";
print $start_date;
// TUPT-24-0438