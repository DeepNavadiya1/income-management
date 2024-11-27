<?php
include("headerr.php");
?>
<!-- Page Content -->
<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>Add Account</center></h1>
					</div>	
<div class="box">
		<form method="POST" class="forme">
					 	
					 <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fname">Name : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text" name="name"><br><br><br>
					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="flocation">Location : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="location"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fmobileno">Mobile No :</label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="mobile"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="femail">Email : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="email"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fgstin">GSTIN : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="gstin"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fpaymentdetail">Payment Detail:</label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="paymentdetail"><br><br><br>

					  			</div>
					 </div>
					 <input type="submit" name="sss" class="bn54" value="ENTER"><br>

		</form>
</div>
<?php
include("connection.php");
if(isset($_POST['sss']))
{
	$name =$_POST['name'];
	$location =$_POST['location'];
	$mobile =$_POST['mobile'];
	$email =$_POST['email'];
	$gstin =$_POST['gstin'];
	$paymentdetail =$_POST['paymentdetail'];
	
	$query ="INSERT INTO client(name, location, mobile, email, gstin, paymentdetail) VALUES('$name','$location','$mobile','$email','$gstin','$paymentdetail')";
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
