<?php 
include ('new/dbcon.php');
?>
 <?php
 if(isset($_POST['submit'])){
 //   {  
$first_name = $_POST['Fname'];
$rollno = $_POST['roll'];
$department = $_POST['Dname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];

//Execute the query


$sql = "INSERT INTO student (username, password, sname, rollno, department, dob, address, email)
                    VALUES ('$first_name','$rollno','$first_name','$rollno','$department','$dob','$address','$email')";
    $result = mysqli_query($con, $sql);
    if($result){
    	echo "Insered succesfully";
    }
    else {
    	echo "error";
    }
    
    mysqli_close($con);
}
?>
<!DOCTYPE HTML>
<html lang="">
<head>
<title>Register to ERP </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="./index.html">Student Portfolio</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="home.html">Home</a></li>
          <li class="active"><a class="drop" href="#">ERP</a>
            <ul> 
              <li><a href="profile.html">Profile</a></li>
              <li><a href="add.html">Add Record</a></li>
              <li><a href="remove.html">Remove Record</a></li>
              <li><a href="update.html">Update Record</a></li>
        </ul>
          </li>
          <li><a class="drop" href="#">Account</a>
            <ul>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="Settings.html">Settings</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
     </header>
  </div>
  <section id="breadcrumb" class="hoc clear"> 
      <h1>Add Record</h1>
  </section>
  </div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
      <div class="sidebar one_quarter first"> 
      <h6>Quick Links</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="attendance.html">Add Record</a></li>
              <li><a href="attendance.html">Remove Record</a></li>
          <li><a href="Academic">Update Record</a></li>
        </ul>
      </nav>
   </div>
   <div class="content three_quarter">  
     <div id="form1">
        <form action="add.php" method="post">
          <div>
            <label for="Fname">Full Name  :<span>*</span></label>
            <input type="text" name="Fname" id="Fname" value="" size="40" required> <br>
            <label for="Dname">Department :<span>*</span></label>
            <input type="text" name="Dname" id="Dname" value="" size="22" required><br>
            <label for="email">Email ID   :<span>*</span></label>
            <input type="email" name="email" id="email" value="" size="50" required><br>
            <label for="roll">Roll no.   :<span>*</span></label>
            <input type="text" name="roll" id="roll" value="" size="8" required><br>
            <label for="dob">Date Of Birth :<span>*</span></label>
            <input type="date" name="dob" id="dob" value="" size="22" required><br>
            <label for="Address">Address :<span>*</span></label>
            <input type="textarea" name="address" id="address" value="" size="120" required><br>
         
          </div>
          <div>
            <input type="submit" name="submit" value="Add Record">
            <input type="reset" name="reset" value="Reset">
          </div>
        </form>
         <div><p>Enter the student details First and then add the records in the <a href="update.html" >Update Record Section</a></p></div>
      </div>
    </div>
     <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear"> 
     <div>
  <footer id="footer" class="hoc clear"> 
   <div>
      <h6 color="#ffffff">Contact US</h6>
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
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
