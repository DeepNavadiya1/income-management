<?php
include("connection.php");
    $srno =$_GET['del'];

    $query ="DELETE FROM client WHERE srno=$srno";
    $data =mysqli_query($conn,$query);

    if($data)
    {
        header("Location:updateaccount.php");
    }
    else
    {
        echo"OFFFFFF";
    }

?>