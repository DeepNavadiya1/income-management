<?php
include("connection.php");

    $srno = $_GET['ed'];

    $query ="SELECT *FROM client WHERE srno=$srno";
    $data =mysqli_query($conn,$query);
    $row =mysqli_fetch_assoc($data);




       
    $name =$row['name'];
	$location =$row['location'];
	$mobile =$row['mobile'];
	$email =$row['email'];
	$gstin =$row['gstin'];
	$paymentdetail =$row['paymentdetail'];


    // UPDATE CODE //////
if(isset($_POST['sub']))
{

    $name =$_POST['name'];
	$location =$_POST['location'];
	$mobile =$_POST['mobile'];
	$email =$_POST['email'];
	$gstin =$_POST['gstin'];
	$paymentdetail =$_POST['paymentdetail'];
  

  
$query = "UPDATE client SET name='$name', location='$location', mobile='$mobile', email='$email', gstin='$gstin', paymentdetail='$paymentdetail' WHERE srno=$srno";
$data =mysqli_query($conn,$query);
echo $query;
if($data)
{
  header("Location:addaccount.php");
}
else
{
  echo"NOT";
}

  
}

?>


<!DOCTYPE html>
<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<style>
form {
  width: 470px;
  padding: 30px 0px 0px 40px;
  background-color:;
  box-shadow: 10px 10px 40px 20px lightblue;
  }
  
  
 .bn54 {
  position: relative;
  outline: none;
  text-decoration: none;
  border-radius: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  text-transform: uppercase;
  height: 45px;
  width: 130px;
  opacity: 1;
  background-color: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.6);
}

.bn54 .bn54span {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  color: #000000;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.7px;
}

.bn54:hover {
  animation: bn54rotate 0.7s ease-in-out both;
}

.bn54:hover .bn54span {
  animation: bn54storm 0.7s ease-in-out both;
  animation-delay: 0.06s;
}

@keyframes bn54rotate {
  0% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
  25% {
    transform: rotate(3deg) translate3d(0, 0, 0);
  }
  50% {
    transform: rotate(-3deg) translate3d(0, 0, 0);
  }
  75% {
    transform: rotate(1deg) translate3d(0, 0, 0);
  }
  100% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
}

@keyframes bn54storm {
  0% {
    transform: translate3d(0, 0, 0) translateZ(0);
  }
  25% {
    transform: translate3d(4px, 0, 0) translateZ(0);
  }
  50% {
    transform: translate3d(-3px, 0, 0) translateZ(0);
  }
  75% {
    transform: translate3d(2px, 0, 0) translateZ(0);
  }
  100% {
    transform: translate3d(0, 0, 0) translateZ(0);
  }
}

.box  {
   margin: 69px 20px 10px 330px;
   }
</style>
<title>Digital Khata Book </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-teal w3-bar-block" style="width:20%">
  <h2 class="w3-bar-item  ">Menu</h2><br>
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="addaccount.php" class="w3-bar-item w3-button">Add Account</a>
  <a href="accountregister.php" class="w3-bar-item w3-button">Account Register</a>
  <a href="updateaccount.php" class="w3-bar-item w3-button">Update Account</a>
  <a href="payin.php" class="w3-bar-item w3-button">Pay In</a>
  <a href="payout.php" class="w3-bar-item w3-button">Pay Out</a>
  <a href="#" class="w3-bar-item w3-button">Ledger</a>
  <a href="payinregister.php" class="w3-bar-item w3-button">Pay In Register</a>
  <a href="payoutregister.php" class="w3-bar-item w3-button">Pay Out Register</a>
  <a href="#" class="w3-bar-item w3-button">Account wise pay in Register</a>
  <a href="#" class="w3-bar-item w3-button">Account wise pay Out Register</a>
  <a href="#" class="w3-bar-item w3-button">Log Out</a>
</div>

<!-- Page Content -->
<div style="margin-left:20%">

					<div class="w3-container w3-teal">
							  <h1><center>Update Account</center></h1>
					</div>


  <!-- Details -->
 <div class="box">
 <form method="POST">
					 	
					 <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fname">Name : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text" name="name" value="<?php echo  $name; ?>"><br><br><br>
					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="flocation">Location : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="location" value="<?php echo  $location; ?>"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fmobileno">Mobile No :</label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="mobile" value="<?php echo  $mobile; ?>"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="femail">Email : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="email" value="<?php echo  $email; ?>"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fgstin">GSTIN : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="gstin" value="<?php echo  $gstin; ?>"><br><br><br>

					  			</div>
					 </div>
					  <div class="row">
					 
					 			<div class="col-lg-4">
					 							 <label for="fpaymentdetail">Payment Detail : </label>
					 			</div>
					 			<div class="col-lg-8">
					 						     <input type="text"  name="paymentdetail" value="<?php echo  $paymentdetail; ?>"><br><br><br>

					  			</div>
					 </div>
					 <input type="submit" name="sub" class="bn54" value="ENTER"><br>

		</form>
		
      </form>
 </div>



</body>
</html>
