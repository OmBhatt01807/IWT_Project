<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	}	
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];
  }
?>
<html>
<head>
<title>Billing System</title>
<link rel="stylesheet" type="text/css" href="Css/style2.css">
</head>
<body>
<?php
if (isset($_POST['add']))
	{	   
	include 'db.php';
			 		$id=$_POST['id'] ;
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					
		 mysqli_query($conn,"INSERT INTO  owners (id,lname,fname,mi,address,contact) 
		 VALUES ('$id','$lname','$fname','$mi','$address','$contact')"); 
				
				echo '<script>alert("success")</script>';
				
				
	        }
	
?>

<div class="wrapper">
<div class="header">
<ul>
  <p class="loginuser">Welcome User: <?php echo $sessionname;?></p>
<li><a href="billing.php">Home</a></li>
<li><a href="bill.php">Billing</a></li>
<li><a href="user.php">Users</a></li>

<li><a href="logout.php">logout</a></li>


</ul>
</div>
<hr>
<h1 class="headtext">Water Billing System</h1>
<hr>
<div class="billingform">

  <h1>Add Client</h1>
  <form method="post" id="billingform">
    <table width="100%" border="0">
    <tr>
    
    <td width="99"><input type="hidden"  name="id" value="0" /></td>
  </tr>
  <tr>
    <td><p>Last Name:</p></td>
    <td width="223"><input type="text" name="lname" /></td>
    </tr>
    <tr>
    <td><p>First Name:</p></td>
    <td><input type="text" name="fname" /></td>
    </tr>
    <tr>
    <td><p>Meter ID:</p></td>
    <td><input type="text" name="mi" /></td>
  </tr>
  <tr>
    <td><p>Address:</p></td>
    <td><input type="text" name="address" /></td>
  
  </tr>
  <tr>
    <td><p>Contact No:</p></td>
    <td><input type="text" name="contact" /></td>
  </tr>
   <tr>
    <td><input type="submit" name="add" value="ADD CLIENT" /></td>
  <td><input type="reset" value="CANCEL" /></td>
  </tr>
 
</table>
</form>
</div>
<div id="ryt">
<h1 align="center">View</h1>
<?php
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM owners");

echo "<table border='0' bgcolor='#fff' width='100%'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Mi</th>
<th>Address</th>
<th>Contact</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['mi'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
 echo "<td><a href='edit.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a href='del.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>
</div>
<hr>
</div>
</body>
</html>

  <script type="text/javascript">
$(function() {
$(".delbutton").click(function(){


var element = $(this);

var del_id = element.attr("id");

var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
	  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 }
return false;
});

});
</script>
 