<?php
session_start(); 
error_reporting(0);
include("connect.php");
include('auth_sessionuser.php');
?>

<!DOCTYPE html>
<html>
<title>QUIZ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    
    <div class="w3-section w3-bottombar w3-padding-16">
     <h3>SELECT YOUR QUIZ</h3>
      <button class="w3-button w3-black">ALL</button>
      
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="series/quiz.php" target="_blank">
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/bestteenmovies-1612822987.jpg" alt="SERIES" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        
        <h3><p><b><u>SERIES</u></b></p></h3>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
       <a href="movies/quiz.php" target="_blank">
      <img src="https://avidlist.com/wp-content/uploads/2020/10/the-most-mind-twisting-90s-Bollywood-quiz.jpeg" alt="MOVIES" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        
        <h3><p><b><u>MOVIES</u></b></p></h3>
      </div>
    </div>
    <div class="w3-third w3-container">
    <a href="music/quiz.php" target="_blank">
      <img src="https://media.pitchfork.com/photos/5fc7cbe40aaaf18ca0286f39/2:1/w_1600,h_800,c_limit/Songs%20Header%20Final.png" alt="SONGS" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        
        <h3><p><b><u>SONGS</u></b></p></h3>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
       <a href="anime/quiz.php" target="_blank">
      <img src="https://yodoozy.com/wp-content/uploads/2020/09/Fantasy-Anime.jpg" alt="ANIME" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        
        <h3><p><b><u>ANIME</u></b></p></h3> 
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
       <a href="sports/quiz.php" target="_blank">
      <img src="https://www.funquizzes.uk/wordpress/wp-content/uploads/2018/07/sports-quiz-questions-1-300x200.jpg" alt="SPORTS" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <h3><p><b><u>SPORTS</u></b></p></h3> 
        
      </div>
    </div>
    <div class="w3-third w3-container">
    <a href="slangs/quiz.php" target="_blank">
      <img src="https://sguru.org/wp-content/uploads/2017/10/internet-slang.png" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
         <h3><p><b><u>SLANGS</u></b></p></h3> 
        
      </div>
    </div>
  </div>

  
 <!-- tHIRD Photo Grid-->
 <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
       <a href="personality/quiz.php" target="_blank">
      <img src="http://4.bp.blogspot.com/-drovcLKcg6A/UbYhtso9-WI/AAAAAAAAybg/vFefeZqqzPE/s1600/Icomania+-+Guess+The+Celeb!+Walkthrough.png" alt="CELEBRITY" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        
        <h3><p><b><u>CELEBRITY</u></b></p></h3> 
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
       <a href="Geography/quiz.php" target="_blank">
      <img src="https://triviaboss.com/static/6498047a5b707308180f687361767253/07770/fi_geography.png" alt="GEOGRAPHY" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <h3><p><b><u>GEOGRAPHY</u></b></p></h3> 
        
      </div>
    </div>
   
  </div>
  
</body>
</html>
