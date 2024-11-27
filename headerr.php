<!DOCTYPE html>
<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>

  .forme {
  width: 470px;
  padding: 30px 0px 0px 60px;
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

.de{
            background-color: #425664;
            color: #FEFEFE;
        }
        .aa{
            text-decoration:none;
            color:#ffff;
        }
		th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
			
        }

        th, td {
            background-color: #FAFAFA;
        }
		table {box-shadow: 10px 10px 40px 20px lightblue;}
	/* 
========================
      BUTTON THREE
========================
*/
.btn-three {
  color: black;
  transition: all 0.5s;
  position: relative;
}
.btn-three::before {
  
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background-color: rgba(255,255,255,0.1);
  transition: all 0.3s;
}
.btn-three:hover::before {
  opacity: 0 ;
  transform: scale(0.5,0.5);
}
.btn-three::after {
  
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s;
  border: 2px solid rgb(0 0 0 / 50%);
  transform: scale(1.2,1.2);
}
.btn-three:hover::after {
  opacity: 1;
  transform: scale(1,1);
}


</style>
<title>Digital Khata Book </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-teal w3-bar-block" style="width:20%">
  <h2 class="w3-bar-item  ">Menu</h2><br>
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
  <a href="addaccount.php" class="w3-bar-item w3-button"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Account</a>
  <a href="accountregister.php" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Account Register</a>
  <a href="updateaccount.php" class="w3-bar-item w3-button"><i class="fa fa-refresh" aria-hidden="true"></i> Update Account</a>
  <a href="payin.php" class="w3-bar-item w3-button"><i class="fa fa-money" aria-hidden="true"></i> Pay In</a>
  <a href="payout.php" class="w3-bar-item w3-button"><i class="fa fa-money" aria-hidden="true"></i> Pay Out</a>
  <a href="ledger.php" class="w3-bar-item w3-button">
<i class="fa fa-book" aria-hidden="true"></i> Ledger</a>
  <a href="payinregister.php" class="w3-bar-item w3-button"><i class="fa fa-credit-card" aria-hidden="true"></i>
Pay In Register</a>
  <a href="payoutregister.php" class="w3-bar-item w3-button"><i class="fa fa-credit-card" aria-hidden="true"></i>
Pay Out Register</a>
  <a href="#" class="w3-bar-item w3-button">Account wise pay in Register</a>
  <a href="#" class="w3-bar-item w3-button">Account wise pay Out Register</a>
  <a href="#" class="w3-bar-item w3-button">Log Out</a>
</div>
