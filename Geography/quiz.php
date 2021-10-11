<?php
session_start(); 
error_reporting(0);
include("../connect.php");
include('../auth_sessionuser.php');
$useridup=$_SESSION['username'];
if(isset($_POST['submit'] ))
{
  $query=mysqli_query($db, "update  `users` set points=points+'".$_POST['score_text']."' where username='$useridup' ");

	 header('Location: ../index.php');	
		
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App </title>
    <link rel="stylesheet" href="quiz.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://www.bing.com/th?id=OIP.2FKaqXMTcftce06eLWibGQHaE_&w=161&h=105&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2"
          height="15"
          alt=""
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="text-danger">WELCOME <?php echo $_SESSION['username']?></span></a>
        </li>
       
        <!-- <?php
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?> -->
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
    

      <!-- Avatar -->
      <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="https://www.bing.com/th?id=OIP.2FKaqXMTcftce06eLWibGQHaE_&w=161&h=105&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
      <li>
       
          <a class="dropdown-item" href="../user_profile.php">Your profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="../logout.php">Logout</a>
        </li>
        <li>
       
          <a class="dropdown-item" href="../index.php">Back</a>
        </li>
      </ul>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>

    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div>
    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>
    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text text-dark">You've completed the Quiz!</div>


        <div class="score_text text-success">
         
        </div>

<form action="" method="POST">
<input type="textbox" name="score_text" id="displayscore" class="score_text form-control mt-1" style="color:black" readonly/>
<input type="submit" name="submit"  class="btn-success btn-block mt-1 btn " />
</form>


        <div class="buttons">
         
         
            <button class="restart" style="background-color:#854E4E"></button>
            <button class="quit" style="background-color:#854E4E"></button>
        </div>
    </div>
    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="quiz.js"></script>
    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="quiz.js"></script>
</body>
</html>
</html>
