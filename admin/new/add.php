
 <?php
 if(isset($_POST['submit'])){
 //   {
 include ('dbcon.php');  
$first_name = $_POST['Fname'];
$rollno = $_POST['roll'];
$department  = $_POST['Dname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];

//Execute the query


$sql = "INSERT INTO `student`(`sname`, `rollno`, `department`, `dob`, `address`, `email`)
                    VALUES ('$first_name','$rollno','$department','$dob','$address','$email')";
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
