<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  //set qno
  $number=(int)$_GET['n'];
  $query="Select * from sportsquestions where question_number=$number";
  //result
  $result=$mysqli->query($query) or die($mysqli->error.__LINE__);
  $question=$result->fetch_assoc();

  $query="Select * from sportschoices where question_number=$number";
  //result
  $choices=$mysqli->query($query) or die($mysqli->error.__LINE__);
 
$query="Select (question_number)from sportsquestions";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$result->num_rows;
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QUIZ</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
  </head>
  <body>
      <div class="headin">
          <h1>QUIZ</h1> <br>
          <h2>TOPIC:SPORTS</h2>
      </div>
      <br>
      <br>
  <div class="container">
  <div class="current">Question <?php echo $number ?> of <?php echo $total ?></div>
  <p class="question">
      <?php echo $question['texts']; ?>
  </p>
  <form method="post" action="sportsprocess.php">
  <ul class="choices">
  <?php
  while($row=$choices->fetch_assoc()) : ?>
  <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
  <?php echo $row['texts']; ?>
  </li>

  <?php endwhile;?>
  <ul class="pagination pagination-lg">
    <li><a href="sports.php?n=1">1</a></li>
    <li><a href="sports.php?n=2">2</a></li>
    <li><a href="sports.php?n=3">3</a></li>
    <li><a href="sports.php?n=4">4</a></li>
    <li><a href="sports.php?n=5">5</a></li>
  </ul>
  </br>
  </ul>
  <input type="submit" value="Submit"/>
  <input type="hidden" name="number" value="<?php echo $number; ?>"/>
  </form>
  </div>
  </body>
</html>
