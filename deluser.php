<?php session_start(); ?>
<?php
 include 'db.php';
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
			

?>
<head><title>Delete User?</title><link rel="stylesheet" type="text/css" href="Css/style2.css"></head>
<div class="wrapper">
<form action="deluserexec.php" method="post">
<h1 style="font-family: Consolas; text-align: center">Are you sure you want to delete this record ? </h1>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete" id="redBtn" style="margin-left:40%">
</form>
</div>