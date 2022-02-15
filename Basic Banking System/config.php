<?php

$username="root";
$password="";
$server="localhost";
$db="sparkbank";

$conn=mysqli_connect($server,$username,$password,$db);
if($conn)
{
//echo "Connection Successful";
}
else{
echo "No Connection";
}

?>
