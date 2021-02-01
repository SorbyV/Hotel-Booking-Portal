<?php
session_start();
include "db.php";
$t='';
$o='';
$otp=0;
$name='';
?>
<?php
  if(isset($_POST['em'])){
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $query="select user_contact from users where username='{$name}'";
    if($select=mysqli_query($connection,$query)){
      while($row=mysqli_fetch_assoc($select)){
      $con=$row['user_contact'];
    }
  }
      if($con==$mob)
        $t='yes';
      else
        $t='no';
      if($t=='no'){
?>
    <script>alert("User not found!")</script>
<?php
    }
}
  if(isset($_POST['update'])){
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $hash = password_hash($pass,PASSWORD_DEFAULT);  
    if($pass!=$cpass){
    ?>
    <script>alert("Passwords don't match!")</script>
    <?php
    }
    else{
      $query="update users set user_password='$hash' where username='$name'";
      $select=mysqli_query($connection, $query);
      if($select)
        header("Location: sign_in.php");
      else
        echo mysqli_error($connection);
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>CELESTE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/path/to/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
  html{
        scroll-behavior: smooth;
      }
      body{
        background-color: #1a1c20;
        font-family: 'Philosopher', sans-serif;
      }
           @media screen and (min-width: 1180px) {

      .dropdown {
        display: none;
      }
      .nav {
        display: block;
      }
    

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #f0a500;
      }

      li {
        padding-top: 3vh;
        float: right;
        font-family: 'Cormorant Garamond', serif;
        background-color: #f0a500;
      }

      li a {
        display: block;
        color: #1a1c20;
        text-align: center;
        padding: 5vh 3vh 2vh;
        text-decoration: none;
        font-size: 4vh;
      }
      li p {
        display: block;
        color: #1a1c20;
        text-align: center;
        padding: 5vh 3vh 2vh;
        text-decoration: none;
        font-size: 4vh;
      }
    }

    @media screen and (max-width: 1180px){

      .dropdown {
        display: block;
      }
      .nav {
        display: none;
      }
    


      .dropbtn {
        background-color: #f0a500;
        color: #1a1c20;
        padding: 3vh;
        font-size: 4vh;
        padding-right: 5vh;
        border: none;
        cursor: pointer;
        float: right;
      }

      .dropdown {
        float: right;
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #1a1c20;
        min-width: 7vh;
        z-index: 1;
      }

      .dropdown-content a {
        color: #f0a500;
        padding-top :2vh;
        padding-right: 4vh;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {color: white;}
      .dropdown:hover .dropdown-content {display: block;}
      .dropdown:hover .dropbtn {background-color: #f0a500; color: #1a1c20;}


      ul{
        list-style-type: none;
      }
    }

      

  input{
    width: 36vh;
    border-radius: 1vh;
  }

  .fa:hover {
    font-size: 7vh;
    color: white;
    transform: rotate(360deg);
}

.fa-facebook {
  background: #1a1c20;
  color: #f0a500;
  border-radius: 0.75vh;
  transition: transform 1s, font-size 1s;
}

.fa-twitter {
  background: #1a1c20;
  color: #f0a500;
  border-radius: 0.75vh;
  transition: transform 1s, font-size 1s;
}

.fa-linkedin {
  background: #1a1c20;
  color: #f0a500;
  border-radius: 0.75vh;
  transition: transform 1s, font-size 1s;
}

.fa-youtube {
  background: #1a1c20;
  border-radius: 0.75vh;
  transition: transform 1s, font-size 1s;
  color: #f0a500;
}

.fa-instagram {
  background: #1a1c20;
  border-radius: 0.75vh;
  color: #f0a500;
  transition: transform 1s, font-size 1s;
}
.fa-envelope{
  background: #1a1c20;
  border-radius: 0.75vh;
  color: #f0a500;
  transition: transform 1s, font-size 1s;
}



</style>

<script type="text/javascript">
      
      var myVar = setInterval(myTimer, 1000);

      function myTimer() {
        var d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();
      }

    </script>
    
</head>
<body>

<div class="row nav" style="width: 100vw; position: fixed; z-index: 2;">
        <div>
          <ul>
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          ?>
          <li><a href="sign_in.php">Sign out</a></li>
          
          <?php
          }
          else{
          ?>
          <li><a href="sign_in.php">Sign in</a></li>
          <?php
        }
          ?>
          <li><a href="#contact_us">Contact Us</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="facility.php">Facilities</a></li>
          <li><a href="book.php">Packages & Rooms</a></li>
          <li><a href="index.php">Home</a></li> 
           <li><p id = "clock" style="font-family: 'Lato', sans-serif;"></p></li>  
        </ul>
        </div>
  </div>

  <div class="dropdown" style="width: 100vw; position: fixed;">
      <button class="dropbtn">Menu</button>
      <div class="dropdown-content" style="padding-top: 13vh;">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="book.php">Packages & Rooms</a></li>
            <li><a href="facility.php">Facilities</a></li>     
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="#contact_us">Contact Us</a></li>
            <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          ?>
          <li><a href="sign_in.php">Sign out</a></li>
          
          <?php
          }
          else{
          ?>
          <li><a href="sign_in.php">Sign in</a></li>
          <?php
        }
          ?>        
        </ul>  
      </div>
  </div>


<div class="row" style="font-size: 15px; margin: 0 auto;">
  <div id="mainform" style="margin:0 auto; width: 50vh; padding: 5vh; padding-top: 8vw; color: #f0a500; box-shadow:0 0 15px; border-radius:2vh; ">

      <h3 style="text-align: center;">Forgot Password</h3>
    <?php
      if($t=='yes'){
    ?>
        <form id="form" name="myform" method="post">
      <label>New Password</label>
      <input type="password" id="name" name="pass" style="color: black;"><br><br>
      <label>Confirm Password</label>
      <input type="password" name="cpass" id="name" style="color: black"><br><br>
      <input style="color: #1a1c20;  background-color: #f0a500;" type="submit" name="update" id="submit" value="Submit">  
        </form>
    <?php
      }
      else{
    ?>
        <form id="form" name="myform" method="post">
      <label>Please enter your username</label><br>
      <input type="text" id="name" name="name" style="color: black;"><br><br>
      <label>Please enter your registered contact number</label><br>
      <input type="number" name="mob" id="mob" style="color: black;"><br><br>
      <input style="color: #1a1c20;  background-color: #f0a500;" type="submit" name="em" id="submit" value="Submit">
    </form>
    <?php
      }
    ?>

    

</div>
</div>




<div class="contact" id="contact_us" style="background-color: #1a1c20; width: 99vw; text-align: center; margin-top: 5vh;">
      <div class="row" style=" width: 100vw; text-align: center; padding: 5vh; color: #f0a500;">
        <h3>Contact Us</h3>
      <hr style="margin-top: 1vh; height: 0.3vh; width: 30vh; background-color: #f0a500; text-align: center;">
    </div>
      <div class="row" style="text-align: center; padding-bottom: 5vh; text-decoration: none; font-size: 5vh; width: 100vw;">
        <div class="col-lg-2"><a href="#" class="fa fa-facebook"></a></div>
        <div class="col-lg-2"><a href="#" class="fa fa-instagram"></a></div>
        <div class="col-lg-2"><a href="#" class="fa fa-linkedin"></a></div>
        <div class="col-lg-2"><a href="#" class="fa fa-envelope"></a></div>
        <div class="col-lg-2"><a href="#" class="fa fa-twitter"></a></div>
        <div class="col-lg-2"><a href="#" class="fa fa-youtube"></a></div>
      </div>
    </div>


</body>

</html>