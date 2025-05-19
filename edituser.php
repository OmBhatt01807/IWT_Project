<?php session_start(); ?>
<?php
include 'db.php';
$user_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE id  = '$user_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$username= $test['username'] ;					
				$password=$test['password'] ;
				$name=$test['name'] ;
				

?>
<html>
<head><title>Edit Account</title><link rel="stylesheet" type="text/css" href="Css/style2.css"></head>
<body>
<div class="wrapper">
<h1 class="headtext">User Update</h1>
<hr>
  <form method="post" action="edituserecex.php">
<table width="50%" border="0" align="center" style="margin-top: 5%" cellspacing="5px" cellpadding="2px">
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>"/></td>
    </tr>
    <tr>
    <td>Password:</td>
    <td><input type="text" name="password"value="<?php echo $password; ?>" /></td>
    </tr>
    <tr>
    <td>Name:</td>
    <td><input type="text" name="name" value="<?php echo $name; ?>"/></td>
 
  </tr>
 
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Edit" id="submitBtn" /></td>
	</tr>
</table>
</form>
<hr>
</div>
</body>
</html>