<!DOCTYPE html>
<html lang="en" >
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connect.php");
include('auth_sessionuser.php');
$useridup=$_SESSION['username'];
if(isset($_POST['submit'] ))
{
  $query=mysqli_query($db, "update  `users` set wallentLink='".$_POST['wallet']."' where username='$useridup' ");

  $query=mysqli_query($db, "update  `users` set points=points-'".$_POST['points']."' where username='$useridup' ");

		$success = "Your Point has been redeemed ";		
		
    }
?>

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
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->

<!-- Form Module-->
<div class="module form-module mt-1">
 
  <div class="toggle">
  </div>
  <div class="form">
    
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"></span>

<form method="post">
  <div class="container">
  <img class="img-fluid mt-0" src="images/logi.png" alt="">
  <h2>Add Wallet Link</h2><br>

  <label for="exampleInputEmail1">Wallet Link</label>
  <input type="textbox" name="wallet"  class="form-control mt-1" style="color:black"/>
  <label for="exampleInputEmail1">Points</label>
  <?php

 
$loggedin=$_SESSION['username'];

$ret=mysqli_query($db,"select * from `users` where username='$loggedin'");
while ($row=mysqli_fetch_array($ret)) {

?>
  <input type="textbox" name="points" value="<?php  echo $row['points'];?>" class="form-control mt-1" style="color:black" readonly/>
  <?php 
}?>
<input type="submit" name="submit"  class="btn btn-success btn-block mt-1" style="color:black" />
   
    <a type="button" class="btn btn-danger btn-block" href="index.php">Home</a>
    <?php echo $success; ?>
  </div>
</form>
  
</div>

</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  
</body>

</html>