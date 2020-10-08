<?php
	session_start();

	if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	 header('location:../login.php');
}
?>
<?php 
include ('header.php');
?>

	<div class="admintitle" align="center">
	<h4> <a href="logout.php"style="float:right; margin-right: 30px; colour:#fff; font-size=20px;">Logout </a> </h4>
    <h1>WELCOME TO ADMIN DASHBOARD</h1>
</div>
<div class="vertical-menu">
  <a href="admindash.php" class="active">ADMIN</a>
  <a href="addstudent.php">ADD STUDENT</a>
  <a href="deletestudent.php">DELETE STUDENT</a>
  <a href="updatestudent.php">UPDATE STUDENT</a>
  </div>

</body>
</html>
