<?php
include("headerr.php");

?>
<!-- Page Content -->
<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>Update Account</center></h1>
					</div>	<br><br><br>
					<center>
<form method="POST" action="viewupdateacc.php">
					<div class="col-lg">
												 <select name="name" style="width:210px;">
													<option>--SELECT--</option>
													<?php
														
														include("connection.php");
														
														$query ="SELECT *FROM client";
														$data =mysqli_query($conn,$query);
														while($row =mysqli_fetch_assoc($data))
														{
															$name =$row['name'];
															echo"<option value='$name'>$name</option>";
														}	
													?>
												 </select>
												 <input type="submit" name="sub" value="ok">
					  			                 </div>
												 </form></center>
												 <br><br>
<center>					
<?php
    include("connection.php");
?>
<html>
<head>
</head>
<body>
<table border="2px" width="70%">
    <tr>
         
        <td>
            SRNO
        </td>
        <td>
            name
        </td>
        <td>
            location
        </td>
        <td>
            mobile
        </td>
		<td>
            email
        </td>
		<td>
            gstin
        </td>
		<td>
            paymentdetail
        </td>
		<td>
            OPTION
        </td>
		<td>
            OPTION
        </td>

        
    </tr>
    <?php
        $query ="SELECT *FROM client";
        $data =mysqli_query($conn,$query);

        while($row =mysqli_fetch_assoc($data))
        {
           echo"
             <tr>
                 <td>".$row['srno']."</td>
                 <td>".$row['name']."</td>
                 <td>".$row['location']."</td>
                 <td>".$row['mobile']."</td>
				 <td>".$row['email']."</td>
				 <td>".$row['gstin']."</td>
				 <td>".$row['paymentdetail']."</td>
				 <td><button class='de' value='Delete'><a class='aa' href='updateaccountde.php?del=".$row['srno']."'>Delete</a></button></td>
				 <td><button class='de'><a class='aa' href='updateaccedit.php?ed=".$row['srno']."'>EDIT</a></button></td>
             </tr>
         ";
        }
    ?>
	</center>					

</table>
</body>
</html>