<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
//check scores
if(!isset($_SESSION['score']))
{
    $_SESSION['score']= 0 ;
}

if($_POST)
{
    $number=$_POST['number'];
    $selected_choice=$_POST['choice'];
    $next=$number+1;

    $query="SELECT * from sportsquestions";
    $result=$mysqli->query($query) or die();
    $total=$result->num_rows;


    $query="SELECT * from sportschoices where question_number=$number and is_correct=1";
    $result=$mysqli->query($query) or die($mysqli->error.__LINE__);
    $row=$result->fetch_assoc();
    $correct_choice=$row['id'];

    if($selected_choice == $correct_choice)
    {
        $_SESSION['score']=$_SESSION['score'] + 1;
    }
    if($number == $total)
    {
        header("LOCATION: sportsfinal.php");
        exit();
    }
    else
    {
        header("LOCATION: sports.php?n=".$next);
    }
}

?>