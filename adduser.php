<head>
  <title>Add User</title><link rel="stylesheet" type="text/css" href="Css/style2.css">
<div class="wrapper">
<h1 style="font-family: Consolas; text-align: center">Add User</h1>
<form method="post" action="useradd.php">
<table width="50%" border="0"  align="center" style="margin-top: 5%" cellspacing="5px" cellpadding="2px">
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td>Name:</td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td><input type="reset" value="Clear" id="redBtn" style="width: 50%" /></td>
    <td><input type="submit" name="ok" value="Add" id="submitBtn" style="width: 50%" /></td>
  </tr>
</table>

</form>
</div>
