<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>QUIZ</title>
    <link rel="stylesheet"href="styles.css?v=<?php echo time(); ?>" />
</head>
<?php 
 session_start();
$roll=$_SESSION['ROLL'];
$score=$_SESSION['score'];
$in = "UPDATE stuscores SET scores='$score' where USN='$roll' and topic='HTML'";
if(!mysqli_query($mysqli,$in))
 {
     echo ' not inserted';
     // header("refresh:2;url:questions.php?n=1");
 }
?>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OnlineQuiz</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="signin.php">Sign in</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
  </div>
</nav>

    <div class="headin">
          <h1>QUIZ COMPLETE!</h1>
      </div>
    <div class="container">
        <h2>You are done</h2>
        <h3>Congrats u have completed the test</h3>
        <br><br>
        <h3 class="bg-info">Your score is : <?php echo $_SESSION['score'] ; ?></h3>
        <br>
        <a href="index.php" class="start">Log out</a>
         <a href="ldboardques.php" class="start">Leaderboard</a>
  </body>
</html>
 <?php session_destroy(); ?>
