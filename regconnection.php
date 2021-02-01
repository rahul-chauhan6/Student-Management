<?php
$server="localhost";
$user="root";
$pass="";
$db="rcdatabase";
$con=mysqli_connect($server,$user,$pass,$db);
if(!$con){
   // echo"database not connected";
}
else{
  //  echo"databases successfully conected";
}
?>