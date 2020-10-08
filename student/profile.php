 <?php
  if(isset($_POST['submit']))
  {
    $rollnum = $_POST['rollno'];

    $con = mysqli_connect('localhost','root','','sms');

    if($con == false)
  {
    echo "#### NOT CONNECTED TO DATABASE ####";
  }
    
    $query = "SELECT `sname`,`department`, `dob`, `address`, `email` FROM `student` WHERE `rollno`= $rollnum ";

    

    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result))
    {
      $sname = $row['sname'];
      $dname = $row['department'];
      $dob = $row['dob'];
      $address = $row['address'];
      $email = $row['email'];
    }

     mysqli_free_result($result);
     mysqli_close($con);

  }else{
    $sname = "";
      $dname = "";
      $dob = "";
      $address = "";
      $email = "";
  }
  
  ?>
<html lang="">
<head>
<title>Home</title>
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
              <li><a href="profile.php">Profile</a></li>
              <li><a href="attendance.html">Attendance</a></li>
              <li><a href="academics.html">Academics</a></li>
              </ul>
          </li>
          <li><a class="drop" href="#">Account</a>
            <ul>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="Settings.html">Settings</a></li>
              <li><a href="studentlogout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
     </header>
  </div>
  <section id="breadcrumb" class="hoc clear"> 
      <h1>Student Profile</h1>
  </section>
  </div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
   <div class="sidebar one_quarter first"> 
      <h6>Quick Links</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="home.html">Home</a>
          <li><a href="attendance.html">Attendance</a>
          <li><a href="Academic.html">Academics</a>
          </li>
        </ul>
      </nav>
   </div>
    <div class="content three_quarter"> 
        <div class="heading">
            <h6>Profile</h6>
        </div>
      <img class="imgr borderedbox inspace-5" src="../images/demo/imgl.jpg" alt="">
      <div id="form1">
        <form action="#" method="post">
          <div>
            <label for="name">Roll Number :<span>*</span></label>
            <input type="text" name="rollno" id="rollno" value="Enter your Roll no." size="40" > <br>
			<input type="submit" name="submit" value="Enter">
			<input type="reset" name="reset" value="Clear">
            <label for="name">Name :<span>*</span></label>
            <input type="text" name="name" id="name" value="<?php echo $sname; ?>" size="8" ><br>
            <label for="name">Department : <span>*</span></label>
            <input type="text" name="Dname" id="email" value="<?php echo $dname; ?>" size="50" ><br>
            <label for="name">Date of Birth     :<span>*</span></label>
            <input type="text" name="dob" id="DOB" value="<?php echo $dob; ?>" size="22" ><br>
            <label for="name">email : <span>*</span></label>
            <input type="text" name="email" id="email" value="<?php echo $email; ?>" size="8" ><br>
            <label for="name">Address        :<span>*</span></label>
            <input type="text" name="address" id="address" value="<?php echo $address; ?>" size="12" ><br>
          </div>
          <div>
            
          </div>
        </form>
      </div>
     </div>
      
      </div>
     </div>
  <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear"> 
    <div>
      <p>CONTACT US</p>
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