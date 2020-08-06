<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ONLINE QUIZ</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="styles1.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OnlineQuiz</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Add</a></li>
      <li><a href="#">Example</a></li>
    </ul>
  </div>
</nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img
            src="four-letter-tiles-1591061 (1).jpg"
            alt="HTML"
            width="400"
            height="200"
          />
          <div class="carousel-caption">
            <h3>HTML</h3>
            <p>Quiz relating to basic HTML,CSS and PHP</p>
          </div>
        </div>

        <div class="item">
          <img
            src="soccer-ball-on-grass-field-during-daytime-46798.jpg"
            alt="SPORTS"
            width="400"
            height="200"
          />
          <div class="carousel-caption">
            <h3>SPORTS</h3>
            <p>You can also take on Sports quiz</p>
          </div>
        </div>

        <div class="item">
          <img
            src="colorful-color-play-concentration-54101.jpg"
            alt="Puzzles"
            width="400"
            height="200"
          />
          <div class="carousel-caption">
            <h3>PUZZLES</h3>
            <p>Try to solve these tricky puzzles!</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a
        class="left carousel-control"
        href="#myCarousel"
        role="button"
        data-slide="prev"
      >
        <span
          class="glyphicon glyphicon-chevron-left"
          aria-hidden="true"
        ></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="right carousel-control"
        href="#myCarousel"
        role="button"
        data-slide="next"
      >
        <span
          class="glyphicon glyphicon-chevron-right"
          aria-hidden="true"
        ></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container text-center">
      <h3>QUIZ</h3>
      <p>We would love to help you by generating some questions</p>
      <p>We have created a demo quiz website. Lorem ipsum..</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta an
        imi delectus dolores magni ducimus reiciendis veniam non, et similique minus a modi,
         officiis explicabo cupiditate dolorum itaque possimus provident quas!
</p>
      <br />
      <br />
      <div class="row">
        <div class="col-sm-3">
          <p><strong>Aakarsh Sathish</strong></p>
          <a href="#demo1" data-toggle="collapse">
            <br />
            <img
              src="boy.jpg"
              class="img-circle person"
              alt="Random Name"
              width="240"
              height="240"
            />
          </a>
          <br />
          <div id="demo1" class="collapse">
            <p>Aakarsh S</p>
            <p>4NI18IS001</p>
            <p>Information Science</p>
          </div>
        </div>
        <div class="col-sm-3">
          <p><strong>Snehal URS</strong></p>
          <a href="#demo2" data-toggle="collapse">
            <br />
            <img
              src="girl.png"
              class="img-circle person"
              alt="Random Name"
              width="240"
              height="240"
            />
          </a>
          <br />
          <div id="demo2" class="collapse">
            <p>Snehal URS</p>
            <p>4NI18IS</p>
            <p>Information Science</p>
          </div>
        </div>
        <div class="col-sm-3">
          <p><strong>Sai Pavan</strong></p>
          <a href="#demo3" data-toggle="collapse">
            <br />
            <img
              src="boy.jpg"
              class="img-circle person"
              alt="Random Name"
              width="240"
              height="240"
            />
          </a>
          <br />
          <div id="demo3" class="collapse">
            <p>Sai Pavan</p>
            <p>4NI18IS</p>
            <p>Information Science</p>
          </div>
        </div>
        <div class="col-sm-3">
          <p><strong>Niharika Arun</strong></p>
          <br />
          <a href="#demo4" data-toggle="collapse">
            <img
              src="girl.png"
              class="img-circle person"
              alt="Random Name"
              width="240"
              height="240"
            />
          </a>
          <br />
          <div id="demo4" class="collapse">
            <p>Niharika Arun</p>
            <p>4NI18IS</p>
            <p>Information Science</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-1">
      <div class="container">
        <h3 class="text-center">EXAM QUESTIONS</h3>
        <p class="text-center">
          There will be some questions in each genre <br />
        </p>
        <ul class="list-group">
          <li class="list-group-item">HTML,CSS 5 questions!</li>
          <li class="list-group-item">Sports 5 questions!</li>
          <li class="list-group-item">Puzzles 5 questions!</li>
        </ul>
        <div class="row text-center">
          <div class="col-sm-4">
            <div class="thumbnail">
              <img
                src="code-coder-coding-computer-270404.jpg"
                alt="HTML"
                width="400"
                height="300"
              />
              <p><strong>HTML QUIZ</strong></p>
              <p>Press the button to sign in and start the quiz!!</p>
              <button onclick="location.href='signin.php';" class="btn">
                Start Quiz
              </button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img
                src="ball-basketball-basketball-court-basketball-hoop-1752757.jpg"
                alt="SPORTS"
                width="400"
                height="300"
              />
              <p><strong>SPORTS</strong></p>
              <p>Press the button to sign in and start the quiz!!</p>
              <button onclick="location.href='signinsports.php';" class="btn">
                Start Quiz
              </button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img
                src="jigsaw-puzzle-3482442.jpg"
                alt="PUZZLES"
                width="400"
                height="300"
              />
              <p><strong>PUZZLES</strong></p>
              <p>Press the button to sign in and start the quiz!!</p>
              <button onclick="location.href='signinpuzzles.php';" class="btn">
                Start Quiz
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
