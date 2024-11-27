<?php
include("headerr.php");
?>

<!-- Page Content -->
<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>Account Register</center></h1>
					</div>	<br><br><br>
<center>
<form method="POST" action="#">
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
												 </form>
<?php
    include("connection.php");
?>
<html>
<head>
</head>
<body>
<table border="2px">
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
       
    </tr>
    <?php
	if(isset($_POST['sub']))
	{
		$name =$_POST['name'];
        $query ="SELECT *FROM client WHERE name='$name'";
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
				
			 </tr>
         ";
        }
	}	
    ?>
	</center>
</table>
</body>
</html>