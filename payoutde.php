<?php
include("connection.php");
    $srno =$_GET['del'];

    $query ="DELETE FROM payout WHERE srno=$srno";
    $data =mysqli_query($conn,$query);

    if($data)
    {
        header("Location:payoutregister.php");
    }
    else
    {
        echo"OFFFFFF";
    }

?>