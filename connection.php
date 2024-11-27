<?php

     $servername ="localhost";
     $username ="root";
     $password ="";
     $db_name ="account";

$conn=mysqli_connect($servername, $username, $password, $db_name);
if($conn)
{
  //echo"ok";
}
else
{
	echo"NO ";
}
?>