<?php
include ('dbcon.php');
if(isset($_POST['login']))
{
$username = $_POST['Fname'];
$password = $_POST['pass'];
$qry ="SELECT * FROM `admin` WHERE 'username' ='$username' AND 'password' ='$password'";
$run = mysqli_query($con,$qry);
$row = mysqli_num_rows($run);
if ($row<1)
{
?>
	<script>
			alert('USERNAME AND PASSWORD NOT MATCH!!!');
			window.open('login.html','_self');
	</script>
<?php
}
	else
	{
	$data = mysqli_fetch_assoc($run);
	$id=$data['id'];
	
	session_start();
	$_SESSION['uid]=$id;
	header('location:sidebar-right.html');
}
}

?> 