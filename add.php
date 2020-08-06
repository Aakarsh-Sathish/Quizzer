<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QUIZ</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
      <div class="headin">
          <h1>WELCOME TO THE QUIZ</h1>
</div>
<div class="container">
    <h2>Add a question</h2>
    <form method="post" action="add.php">
        <p>
            <label>Question number</label>
            <input type="number" name="Question_number"/>
</p>
<p>
            <label>Question</label>
            <input type="text" name="Question"/>
</p>
<p>
            <label>Choice 1</label>
            <input type="text" name="Choice 1"/>
</p>
<p>
            <label>Choice 2</label>
            <input type="text" name="Choice 2"/>
</p>
<p>
            <label>Choice 3</label>
            <input type="text" name="Choice 3"/>
</p>
<p>
            <label>Choice 4</label>
            <input type="text" name="Choice 4"/>
</p>
<p>
            <label>Choice Correct</label>
            <input type="number" name="Choice correct"/>
</p>
<input type="submit" name="Submit" value="Submit"/>
</form>
</div>


  </body>
</html>
