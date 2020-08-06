<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QUIZ</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
</head>
<?php 
 session_start();
$roll=$_SESSION['ROLL'];
$score=$_SESSION['score'];
$in = "UPDATE stuscores SET scores='$score' where USN='$roll' and topic="Sports"";
if(!mysqli_query($mysqli,$in))
 {
     echo ' not inserted';
     // header("refresh:2;url:questions.php?n=1");"
 }
?>
<body>
    <div class="headin">
          <h1>WELCOME TO THE QUIZ</h1>
      </div>
    <div class="container">
        <h2>You are done</h2>
        <p>Congrats u have completed the test</p>
        <p>Your score is : <?php echo $_SESSION['score'] ; ?></p>
        <a href="index.php" class="start">LOG OUT</a>
  </body>
</html>
 <?php session_destroy(); ?>
