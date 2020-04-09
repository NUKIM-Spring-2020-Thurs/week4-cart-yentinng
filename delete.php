<?php
$id = $_GET["Id"]; 
if ( isset($_COOKIE[$id]) ) { 

   while ( list($name, $value) = each($_COOKIE[$id]) )
      setcookie($id."[".$name."]", "", time()-3600); 
}
header("Location: cart.php"); 
?>