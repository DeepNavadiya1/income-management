<?php
include("headerr.php");
?>

<!-- Page Content -->
<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>Pay In Register</center></h1>
					</div>	<br><br><br>
<center>
<form method="POST" action="view.php">
					<div class="col-lg">
												 <select name="accountname" style="width:210px;">
													<option>--SELECT--</option>
													<?php
														
														include("connection.php");
														
														$query ="SELECT *FROM payin";
														$data =mysqli_query($conn,$query);
														while($row =mysqli_fetch_assoc($data))
														{
															$accountname =$row['accountname'];
															echo"<option value='$accountname'>$accountname</option>";
														}	
													?>
												 </select>
												 <input type="submit" name="sub" value="ok">
					  			                 </div>
												 </form>
												 <br><br>
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
            receiptno
        </td>
        <td>
            amount
        </td>
        <td>
            date
        </td>
		<td>
            accountname
        </td>
		<td>
            mobile
        </td>
		<td>
            paymenttype
        </td>
        <td>
            OPTIONS
        </td>
		<td>
            OPTIONS
        </td>
    </tr>
    <?php
        $query ="SELECT *FROM payin";
        $data =mysqli_query($conn,$query);

        while($row =mysqli_fetch_assoc($data))
        {
           echo"
             <tr>
                 <td>".$row['srno']."</td>
                 <td>".$row['receiptno']."</td>
                 <td>".$row['amount']."</td>
                 <td>".$row['date']."</td>
				 <td>".$row['accountname']."</td>
				 <td>".$row['mobile']."</td>
				 <td>".$row['paymenttype']."</td>
				 <td><button class='de' value='Delete'><a class='aa' href='payindelete.php?del=".$row['srno']."'>Delete</a></button></td> 
                 <td><button class='de'><a class='aa' href='edit.php?ed=".$row['srno']."'>EDIT</a></button></td>
			 </tr>
         ";
        }
    ?>
	</center>
</table>
</body>
</html>