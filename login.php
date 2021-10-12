<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<!-- Font Awesome -->
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
     

      <style>
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}
body
{
background-image: url('https://cdn.lifestyleasia.com/wp-content/uploads/sites/3/2021/03/31122336/ilse-orsel-I0238w5OesU-unsplash-scaled.jpg');
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
  
</head>

<body >
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	$_SESSION["username"] = $username;
  
  $_SESSION["email"] = $row['email'];
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{

                        $_SESSION["u_id"] = $row['u_id'];
                        $_SESSION["phone"] = $row['phone'];
                        $_SESSION["email"] = $row['email'];
                        $_SESSION["points"] = $row['points'];
                        $_SESSION["address"] = $row['address'];
                        $_SESSION["profile_picture"] = $row['profile_picture'];
                        $_SESSION["username"] = $row['username'];
                        $_SESSION["user_id"] = $row['u_id']; // put user id into temp session
                          header("refresh:1;url=index.php"); // redirect to index.php page
                                    } 
                    else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
}
?>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->

<!-- Form Module-->
<div class="module form-module mt-5">
 
  <div class="toggle">
  </div>
  <div class="form">
    
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>

  <form method="post" name="login">
  <div class="container">
  <img class="img-fluid mt-0" src="images/logi.png" alt="">
  <h2>Login to your account</h2><br>

    <label for="username"><b>username</b></label>
    <input type="text" required  name="username" id="username" required>

    <label for="password"><b>password</b></label>
    <input type="password" name="password" id="password" required>

     

    <button type="submit" value="Login" name="submit" class="registerbtn">Login</button>
    
  </div>

  <div class="container signin">
    <a href="register.php">Not registered? <span color="red" style="color:red;">Create an account</span></a>
  </div>
</form>
  
  </div>

</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  
</body>

</html>