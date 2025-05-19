<?php session_start(); ?>
<?php
  include 'db.php';
$owner_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;

?>
<html>
<head><title>Payment</title><link rel="stylesheet" type="text/css" href="Css/style2.css"></head>
<body>
 <div class="wrapper">
<h1 class="headtext">Owners Bill</h1>
 <h2 id="h1font">Name: <?php echo $lname.'&nbsp;' .$fname.'&nbsp;'.$mi;?></h2>
<p id="date">Date: <?php $date=date('y/m/d H:i:s');
 echo $date;?></p>

 <form method="post" action="addbill.php">
 <table width="50%" border="0" align="center" style="margin-top: 5%" cellspacing="5px" cellpadding="2px">
  <tr>
  <input type="hidden" name="owners_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="date" value="<?php echo $date; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev" placeholder="11.7"  /></td>
    <td>(Prize Per Litre)</td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres" placeholder="12"  /></td>
    <td>(Prize Per Litre)</td>
  </tr>
  <tr>
    <td>Prize Per Litre</td>
    <td><input type="text" name="price" value="" placeholder="100/- Rs"  /></td>
    <td>(Rs)</td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Apply Changes"  id="submitBtn" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>