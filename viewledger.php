<?php
include("headerr.php");
?>


<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>View Ledger</center></h1>
					</div>	<br><br><br> 
								
<?php
    include("connection.php");
?>		
					
					
		<div class="row">

			<div class="col-6">
				
				<table border="2px">
    <tr>
        
        <td>
            srno
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
        
    </tr>
    <?php
		$accountname= $_GET['ed']; 
        $query ="SELECT *FROM payin where accountname='$accountname'";
        $data =mysqli_query($conn,$query);

        while($row =mysqli_fetch_assoc($data))
        {
           echo"
             <tr>
                 
                 <td>".$row['srno']."</td>
                 <td>".$row['amount']."</td>
                 <td>".$row['date']."</td>
				 <td>".$row['accountname']."</td>
				 <td>".$row['mobile']."</td>
				 <td>".$row['paymenttype']."</td>
				 
			 </tr>
         ";
        }
    ?>
	</center>
</table>

			
			</div>
		
			<div class="col-6">
	
									<table border="2px">
    <tr>
       
        <td>
            srno
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
        
    </tr>
    <?php
		$accountname= $_GET['ed']; 
        $query ="SELECT *FROM payout where accountname='$accountname'";
        $data =mysqli_query($conn,$query);

        while($row =mysqli_fetch_assoc($data))
        {
           echo"
             <tr>
                 
                 <td>".$row['srno']."</td>
                 <td>".$row['amount']."</td>
                 <td>".$row['date']."</td>
				 <td>".$row['accountname']."</td>
				 <td>".$row['mobile']."</td>
				 <td>".$row['paymenttype']."</td>
				 
			 </tr>
         ";
        }
    ?>
</table>

				
			</div>

		</div>