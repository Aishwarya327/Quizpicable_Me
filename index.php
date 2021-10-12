<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connect.php");
include('auth_sessionuser.php');
$useridup=$_SESSION['username'];
if(!isset($_SESSION['random'])){ 
  $_SESSION['random'] = mt_rand(0000000000, 9999999999); 
} 
$random = $_SESSION['random']; 
$quizname = $_POST['quiz']; 

if ($quizname == 'Anime') 
{
  $success = "<a type='button' class='btn btn-warning' href='anime/quiz.php'><span color='red' style='color:red;'>Play Anime</span></a> ";
}
if ($quizname == 'Geography') 
{
  $success = "<a type='button' class='btn btn-warning' href='Geography/quiz.php'><span color='red' style='color:red;'>Play Geography</span></a> ";
}
if ($quizname == 'Movies') 
{
  $success = "<a type='button' class='btn btn-warning' href='movies/quiz.php'><span color='red' style='color:red;'>Play Movies</span></a> ";
}
if ($quizname == 'Music') 
{
  $success = "<a type='button' class='btn btn-warning' href='music/quiz.php'><span color='red' style='color:red;'>Play Music</span></a> ";
}
if ($quizname == 'Personality') 
{
  $success = "<a type='button' class='btn btn-warning' href='personality/quiz.php'><span color='red' style='color:red;'>Play Personality</span></a> ";
}
if ($quizname == 'Series') 
{
  $success = "<a type='button' class='btn btn-warning' href='series/quiz.php'><span color='red' style='color:red;'>Play series</span></a> ";
}
if ($quizname == 'Slangs') 
{
  $success = "<a type='button' class='btn btn-warning' href='slangs/quiz.php'><span color='red' style='color:red;'>Play Slangs</span></a> ";
}
if ($quizname == 'Sports') 
{
  $success = "<a type='button' class='btn btn-warning' href='sports/quiz.php'><span color='red' style='color:red;'>Play Sports</span></a> ";
}


if(isset($_POST['submit'] ))
{
	$mql = "INSERT INTO usersgames(token,username,email,game) VALUES('".$_POST['token']."','".$_POST['username']."','".$_POST['email']."','".$_POST['quiz']."')";
	mysqli_query($db, $mql);

  $query=mysqli_query($db, "update  `users` set timesplayed=timesplayed+1 where username='$useridup' ");
  }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Quizz</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
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
  <style>
    body{
     background-color: grey;
    }
  </style>
  </head>

<body>
<!-- <?php
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?> -->
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
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
          src=""
          height="35"
          alt=""
          loading="lazy"
        />
      </a>
      <span class="text-white">Quizpicable Me</span>
      
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="text-danger">WELCOME <?php echo $_SESSION['username']?></span></a>
        </li>
       
        
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
          src="images/logo.jpeg"
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
       
          <a class="dropdown-item" href="user_profile.php">Your profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="redeem.php">Redeem</a>
        </li>
        <li>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>

            <!-- /.navbar -->
         </header>
<div class="container m-3"></div>
<div class="container">
         <div class="w3-row-padding ">
    <div class="w3-third w3-container w3-margin-bottom">
     
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/bestteenmovies-1612822987.jpg" alt="SERIES" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        
        <h3><p><b><u>SERIES</u></b></p></h3>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
     
      <img src="https://avidlist.com/wp-content/uploads/2020/10/the-most-mind-twisting-90s-Bollywood-quiz.jpeg" alt="MOVIES" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        
        <h3><p><b><u>MOVIES</u></b></p></h3>
      </div>
    </div>
    <div class="w3-third w3-container">
   
      <img src="https://media.pitchfork.com/photos/5fc7cbe40aaaf18ca0286f39/2:1/w_1600,h_800,c_limit/Songs%20Header%20Final.png" alt="SONGS" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        
        <h3><p><b><u>SONGS</u></b></p></h3>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
     
      <img src="https://yodoozy.com/wp-content/uploads/2020/09/Fantasy-Anime.jpg" alt="ANIME" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        
        <h3><p><b><u>ANIME</u></b></p></h3> 
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
     
      <img src="https://www.funquizzes.uk/wordpress/wp-content/uploads/2018/07/sports-quiz-questions-1-300x200.jpg" alt="SPORTS" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <h3><p><b><u>SPORTS</u></b></p></h3> 
        
      </div>
    </div>
    <div class="w3-third w3-container">
   
      <img src="https://sguru.org/wp-content/uploads/2017/10/internet-slang.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
         <h3><p><b><u>SLANGS</u></b></p></h3> 
        
      </div>
    </div>
  </div>

  
 <!-- tHIRD Photo Grid-->
 <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
     
      <img src="http://4.bp.blogspot.com/-drovcLKcg6A/UbYhtso9-WI/AAAAAAAAybg/vFefeZqqzPE/s1600/Icomania+-+Guess+The+Celeb!+Walkthrough.png" alt="CELEBRITY" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        
        <h3><p><b><u>CELEBRITY</u></b></p></h3> 
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
       
      <img src="https://triviaboss.com/static/6498047a5b707308180f687361767253/07770/fi_geography.png" alt="GEOGRAPHY" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <h3><p><b><u>GEOGRAPHY</u></b></p></h3> 
        
      </div>
    </div>
   
  </div>

  </div>

  
         <div class="page-wrapper">
         
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-6">
                        <div class="widget">
              
                           <div class="widget-body">
                              
							  <form action="" method="post">
                                 <div class="row">
								  
                                    <div class="form-group ">
                                     
                                       <input class="form-control" type="hidden" name="token" id="example-text-input" value="<?php echo $random ?>"> 
                                    </div>
                                    <div class="form-group col-sm-4">
                                       <label for="exampleInputEmail1">UserName</label>
                                       <input class="form-control" type="text" name="username" id="example-text-input" value="<?php echo $_SESSION['username']?>" > 
                                    </div>
                                    <div class="form-group ">
                                       
                                       <input class="form-control" type="hidden" name="email" id="example-text-input-2"  value="<?php echo $_SESSION['email']?>"> 
                                    </div>                                                                     
                                    <div class="form-group col-sm-4">
                                       <label for="exampleInputEmail1">Select Quiz</label>

<select id="cars" class="form-control" name="quiz">
  <option>Anime</option>
  <option >Geography</option>
  <option >Movies</option>
  <option >Music</option>
  <option >Personality</option>
  <option >Series</option>
  <option >Slangs</option>
  <option >Sports</option>
</select> 
           
</div>

                                 </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="PLAY" name="submit" class="btn btn-success"> </p>
                                       <?php echo $success; ?>
                                    </div>
                                 </div>
                              </form>
                           
						   </div>
                        
                        </div>
                 
                     </div>
                 
                  </div>
               </div>
            </section>

         </div>





    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>