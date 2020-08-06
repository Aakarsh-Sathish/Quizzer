<?php include 'database.php'; ?>
<?php

if(isset($_POST['search']))
{
session_start();
$username=$_POST['name'];
$email=$_POST['email'];
$roll=$_POST['pass'];
$_SESSION['ROLL']=$_POST['pass'];

// Retrieve username and password from database according to user's input
$in = "INSERT into stuscores(Name,email,topic,USN,scores)
values('$username','$email','Puzzles','$roll',0)";
if(!mysqli_query($mysqli,$in))
 {
     echo ' not inserted';
     // header("refresh:2;url:questions.php?n=1");
 }
 else
 {
     header("Location: http://localhost/quizfinal/puzzles.php?n=1");
     exit();
     //header("refresh:2;url:questions.php?n=1");
 }

 //header("refresh:2;url:index.php");

//if (mysqli_num_rows($login) == 1) 
//{
  //  $_SESSION['username'] = $_POST['username'];
   // $_SESSION['password'] = $_POST['password'];
// Jump to secured page
//header('Location:add.php');
//}
//else {
// Jump to login page

//header('Location:indexadd.php');
}
//}
?>