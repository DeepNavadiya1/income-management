<?php
include("headerr.php");
?>
<!-- Page Content -->
<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>Pay In</center></h1>
					</div>
					
					
					
<div class="box">
		<form method="POST" class="forme">
					 	
					 <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="freceiptno">Receipt No. </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text" id="freceiptno" name="receiptno"><br><br>
					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="famount">Amount : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text" id="famount" name="amount"><br><br>
					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fdate">Date :</label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="date" id="fdate" name="date"style="width:210px;"><br><br>
					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="faccountname">Account Name : </label>
					 			</div>
					 			<div class="col-lg-8">
												 <select name="accountname" style="width:210px;">
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
					  			</div>
					 </div><br>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fmobile">Mobile  : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text" id="fmobile" name="mobile"><br><br>
					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fpaymentdetail">Payment Type : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						 <input type="radio" id="fmobile" name="paymenttype" value="UPI">UPI    <br>
					 						  <input type="radio" id="fmobile" name="paymenttype" value="Card">Card    <br>
					 						   <input type="radio" id="fmobile" name="paymenttype" value="Net Banking">Net Banking    <br>
					 						    <input type="radio" id="fmobile" name="paymenttype" value="Cash">Cash    <br><br><br>
					 			</div>
					 </div>
					 <input type="submit" name="sss" class="bn54" value="ENTER"><br>

		</form>
</div>
<?php
include("connection.php");
if(isset($_POST['sss']))
{
	$receiptno =$_POST['receiptno'];
	$amount =$_POST['amount'];
	$date  =$_POST['date'];
	$accountname  =$_POST['accountname'];
	$mobile  =$_POST['mobile'];
	$paymenttype =$_POST['paymenttype'];
	
	$query ="INSERT INTO payin(receiptno, amount, date, accountname, mobile, paymenttype) 
	VALUES('$receiptno','$amount','$date','$accountname','$mobile','$paymenttype')";
	$data =mysqli_query($conn,$query);
	
	if($data)
	{
		echo"OK";
	}	
	else
	{
		echo"NOT";
	}
}
?>


</body>
</html>
