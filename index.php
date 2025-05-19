<html>
<head>
<title>Water Billing System</title>
<link rel="stylesheet" href="Css/style.css">
</head>
<body>

<div class="pg-100">
<form method="post" action="process.php" id="idxform">
  <div class="indeximgcontainer">
    <h1 id="idxhead">Water Billing System </h1>
    <img src="imgs/indexavatar.png" alt="Index Login Avatar Image" height="25%" width="25%">
  </div>

  <div class="indexcontainer">
    <label class="inputlabel"><b>Username</b></label>
    <input type="text" placeholder="Enter Your Username " name="username" id="idxuname" />

    <label class="inputlabel"><b>Password</b></label>
    <input type="password" name="password" id="idxpass" />
    <input type="submit" value="Login" name="ok" id="idxsubmit"/>
  </div>

  <div class="indexcontainer" style="background-color:#f1f1f1">
    <button type="Reset" class="cancelbtn">Cancel</button>
    <span class="psw"><a name="forget" href="forgetpass.php">Forgot Password?</a></span>
  </div>
</form>
</div>

<?php if(isset($_GET['err'])){
	echo "<script>alert('Invalid Username or Password')</script>";
	} ?>
</body>
</html>