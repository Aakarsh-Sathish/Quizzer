<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  //set qno
  $number=(int)$_GET['n'];
  $query="Select * from puzquestions where question_number=$number";
   //$query="SELECT * FROM questions ORDER BY rand()  LIMIT 3 ;";
  
  //result
  $result=$mysqli->query($query) or die($mysqli->error.__LINE__);
  $question=$result->fetch_assoc();

  $query="Select * from puzchoices where question_number=$number";
  //result
  $choices=$mysqli->query($query) or die($mysqli->error.__LINE__);
 
$query="Select (question_number)from puzquestions";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$result->num_rows;

?> 
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
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <!--<div class="container d-flex h-100">
      <div class="page-header">-->
        <div class="container">
        <div class="jumbotron">
                  <h4>TOPIC: PUZZLES</h2>
      </div>
</div>
<!--</div>
</div>-->
  
  <div class="container">
  <div class="current">Question <?php echo $number ?> of <?php echo $total ?></div>
  <p class="question">
      <?php echo $question['texts']; ?>
  </p>
  <form method="post" action="puzprocess.php">
  <ul class="choices">
  <?php
  while($row=$choices->fetch_assoc()) : ?>
  <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
  <?php echo $row['texts']; ?>
  </li>
  <?php endwhile;?>
  </ul>
  <ul class="pagination pagination-lg">
    <li><a href="puzzles.php?n=1">1</a></li>
    <li><a href="puzzles.php?n=2">2</a></li>
    <li><a href="puzzles.php?n=3">3</a></li>
    <li><a href="puzzles.php?n=4">4</a></li>
    <li><a href="puzzles.php?n=5">5</a></li>
  </ul>
  <br>
  <input type="submit" value="Next"/>  
  <!--<div class="start">
  <a href="questions.php?n=".$next  class="Next">NEXT</a>
  <a href="questions.php?n=".$prev  class="Previous">PREVIOUS</a>
  </div>
  -->
  <input type="hidden" name="number" value="<?php echo $number; ?>"/> 
  </form>
  </div>
  </body>
</html>
