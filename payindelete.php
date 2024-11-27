<?php
include("connection.php");
    $srno =$_GET['del'];

    $query ="DELETE FROM payin WHERE srno=$srno";
    $data =mysqli_query($conn,$query);

    if($data)
    {
        header("Location:payinregister.php");
    }
    else
    {
        echo"OFFFFFF";
    }

?>