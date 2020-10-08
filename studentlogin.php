<?php session_start();
if(isset($_SESSION['uid']))
{
header('location:student/home.html');
} ?>
<?php
    include ('dbcon.php');
    if(isset($_POST['login']))
    {
    	$username = $_POST['uname'];
	    
		$password = $_POST['pass'];
	    $query="SELECT * FROM `student` WHERE `username` ='$username' AND `password` ='$password'";

	    $run=mysqli_query($con,$query);

	    $row = mysqli_num_rows($run);

	    if ($row<1)
	{
	?>
	<script>
			alert('USERNAME AND PASSWORD NOT MATCH!!!');
			window.open('studentlogin.php','_self');
	</script>
<?php
}
	else
	{
	$data = mysqli_fetch_assoc($run);

	$id=$data['id'];
	
	

	$_SESSION['uid']=$id;
	header('location:student/home.html');
}
}

?>
<!DOCTYPE html>
<html lang="html/css">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
 <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
     <div id="logo" class="fl_left">
        <h1><a href="index.html">Student Login</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.html">Home</a></li>
          <li class="active"><a class="drop" href="#">Login</a>
            <ul>
              <li class="active"><a href="login.php">Admin Login</a></li>
              <li><a href="studentlogin.php">Student Login</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">About Us</a>
		  <ul>
              <li><a href="#">The Erp</a></li>
              <li><a href="#">About Us </a></li>
            </ul>
          </li>
        </ul>
      </nav>
     </header>
  </div>
   <div class="wrapper row3" class="bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <main class="hoc container clear"> 
     <div class="content"> 
     <div id="form1">
        <form action="studentlogin.php" method="post">
          <div>
              <label for="name"><font face="Candara" size="4" color="white">Username :</font><span>*</span></label>
            <input type="text" name="uname" id="uname" value="" size="40" required> <br>
            <label for="name"><font face="Candara" size="4" color="white">Password :</font><span>*</span></label>
            <input type="password" name="pass" id="pass" value="" size="22" required><br>
          </div>
            <div> <font face="Candara" size="6" color="black"></font>
            <input type="submit" name="login" value="Login">
            </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
 </div>
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div>
  <footer id="footer" class="hoc clear"> 
   <div class="one_half first">
      <h6 class="heading">ERP Solution</h6>
      <p>This Webiste is Specifically for all the Hindustan university faculty as well as students.</p>
          </div>
      <div class="one_half">
      <h6 class="heading">Contact US</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
              <p>Hindustan University</p>
              <p>Rajiv gandhi Salai, OMR Padur, Kelambakkam, Chennai, Tamilnadu 603103.</p>
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 044 2747 4395 (Padur Campus)</li>
        <li><i class="fa fa-fax"></i> 044 2234 1389 (Guindy Campus)</li>
        <li><i class="fa fa-envelope-o"></i> http://hindustanuniv.ac.in/</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/Hindustan.University"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/HindustanUni"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
  </footer>
</div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; IT4 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>