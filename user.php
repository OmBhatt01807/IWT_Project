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
<title>user</title>
<link rel="stylesheet" type="text/css" href="Css/style2.css">
</head>
<body>
<div class="wrapper">
  <div class="header">
  <ul>
  <p class="loginuser">Welcome User: <?php echo $sessionname;?></p>
<li><a href="billing.php">Home</a></li>
<li><a href="bill.php">Billing</a></li>
<li><a href="user.php">Users</a></li>
<li><a href="logout.php">logout</a></li>
<li style="float: right; margin-right: 10%"><a href="adduser.php">Add User</a></li>

</ul>
</div>
<hr>
<div class="content">
  <h1 class="headtext">list of User's</h1>
  <hr>
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM user");

echo "<table border='0' bgcolor='#fff' width='100%'>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Name</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
 echo "<td><a  href='edituser.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a  href='deluser.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>
</div>
<hr>
</div>
</body>
</html>
 
  <script type="text/javascript"> -->
<!-- $(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
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

// });

// });
</script>
 