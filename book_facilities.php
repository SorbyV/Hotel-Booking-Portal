<?php
include "db.php";
session_start();
?>
<?php
if(isset($_POST['book'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];

  $fac=$_POST['facil'];
  if($fac=='rest'){
    $date1=$_POST['dater'];
    $time1=$_POST['timer'];
    $guest1=$_POST['guestr'];
      $cui=$_POST['cuisine'];
    $query="select * from restaurant_a where r_name='$cui'";
    $select=mysqli_query($connection, $query);
    while($row=mysqli_fetch_assoc($select))
      $db_t=$row['available_t'];
    if($db_t==0){
    ?>
      <script>alert("Sorry! All tables for the selected restaurant are booked!")</script>
    <?php
    }
    else{
      $query="update restaurant_a set available_t=$db_t-ceil(($guest1/5)) where r_name ='$cui'";
      $select=mysqli_query($connection, $query);
      $query="insert into restaurant_b(b_name, b_date, b_time, guests, rest_name, email, contact) values('$name','$date1','$time1','$guest1','$cui','$email','$contact')";
      $select=mysqli_query($connection, $query);
      ?>
        <script>alert("Your Booking was Successful!")</script>
      <?php
    }
  }
  elseif($fac=='spa'){
    $date2=$_POST['dates'];
    $time2=$_POST['times'];
    $guest2=$_POST['guests'];
      $query="select * from spa_a";
    $select=mysqli_query($connection, $query);
    $row=mysqli_fetch_assoc($select);
      $db_t=$row['available'];
    if($db_t==0){
    ?>
      <script>alert("Sorry! The spa is fully booked!")</script>
    <?php
    }
    else{
      $query="update spa_a set available=$db_t-$guest2";
      $select=mysqli_query($connection,$query);
      $query="insert into spa(name,email,contact,date,time,guest) values('$name','$email','$contact','$date2','$time2','$guest2')";
      $select=mysqli_query($connection, $query);
    ?>
        <script>alert("Your Booking was Successful!")</script>
    <?php
  }
}
  elseif($fac=='conf'){
      $date=$_POST['date'];
  $time=$_POST['time'];
  $guest=$_POST['guest'];
    $con=$_POST['conroom'];
    $query="select * from conf_a where venue='$con'";
    $select=mysqli_query($connection, $query);
    $row=mysqli_fetch_assoc($select);
      $db_t=$row['available'];
    if($db_t=='no'){
    ?>
      <script>alert("Sorry! The selected conference room is booked!")</script>
    <?php
    }
    else{
      $query="update conf_a set available='no' where venue='$con'";
      $select=mysqli_query($connection,$query);
      
      $query="insert into conferance(b_name,b_email,b_contact,b_date,b_time,guests,b_venue) values('$name','$email','$contact','$date','$time','$guest','$con')";
      $select=mysqli_query($connection, $query);
    ?>
        <script>alert("Your Booking was Successful!")</script>
    <?php
  }
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

      li a,p {
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

<script>
$(document).ready(function(){
  $("#display").click(function(){
    $("#frame").toggle(1500);
  });
});
</script>

<script type="text/javascript">
      
      var myVar = setInterval(myTimer, 1000);

      function myTimer() {
        var d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();
      }

    </script>
</head>
<body>

    <div class="row nav center-align" style="width: 100vw; position: fixed; z-index: 2; background-color: #f0a500;">
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
  <div id="mainform" style="margin:0 auto; width: 50vh; padding: 5vh; padding-top: 10vw; color: #f0a500; box-shadow:0 0 15px; border-radius:2vh; ">
    <form id="form" name="myform" method="post">


      <label for="facil">Choose facility: </label>
      <select name="facil" id="facil" onchange = "selector()" style="color: black;">
            <option value="pick">Choose an option</option>
            <option value="rest">Restaurant</option>
            <option value="spa">Spa</option>
            <option value="conf">Conference Room</option>

  </select><br>

     <label>Name:</label><br>
      <input type="text" id="name" name="name" style="color: black;">

      <label>Email:</label><br>
      <input type="email" id="email" name="email" style="color: black;">
      
      <label>Contact No:</label><br>
      <input type="text" id="contact" name="contact" style="color: black;">

      <div id = "restform" style="display: none;">
            <label>Date: </label><br>
            <input type="Date" name="dater" id = "date" style="color: black;">

            <label>Time: </label><br>
            <input type="time" name="timer" id = "time" style="color: black;">

            <label>Guests: </label><br>
            <input type="number" name="guestr" id = "guest"style="color:black;">

            <label>Cuisine: </label><br>

            
            <input type="radio" id="deccan" name="cuisine" value="deccan crossroads" style="width: auto;">
            <label>The Deccan Crossroads</label><br>
            
            
            <input type="radio" id="medit" name="cuisine" value="mediterranean" style="width: auto;">
            <label>The Medditerranean</label><br>
           
            
            <input type="radio" id="salsa" name="cuisine" value="salsa and siesta" style="width: auto;">
            <label for="other">Salsa and Siesta</label>
        </div>

        <div id = "spaform" style="display: none;">
            <label>Date: </label><br>
            <input type="Date" name="dates" id = "date" style="color: black;">

            <label>Time: </label><br>
            <input type="Time" name="times" id = "time" style="color: black;">

            <label>Guests: </label><br>
            <input type="number" name="guests" id = "guest"style="color: black">
        </div>

        <div id = "conform" style="display: none;">
            <label>Date: </label><br>
            <input type="Date" name="date" id = "date" style="color: black;">

            <label>Time: </label><br>
            <input type="Time" style="color: black; " name="time" id = "time">

            <label>Guests: </label><br>
            <input type="number" name="guest" style="color: black;" id = "guest">

            <label>Conference Rooms: </label><br>

            
            <input type="radio" id="muse" name="conroom" value="muse" style="width: auto;">
            <label>The Muse</label><br>
            
            
            <input type="radio" id="president" name="conroom" value="presidential" style="width: auto;">
            <label>The Presidential Palate</label><br>
           
        </div>
<input type="submit" name="book" value='Book'style="color: #1a1c20;  background-color: #f0a500; margin-top: 5vh;">
    </form>
</div>
</div>



<div>
  <button id = "display" type="button" style="width: 10vw; height: 7vh; margin-left: 45vw; margin-top: 5vh; color: #1a1c20;  background-color: #f0a500;">View facilities</button>
</div>

    <div id = "frame" style="display: none">
      
      <iframe src="facility.php" style="height: 70vh; width: 80vw; margin-left: 10vw; margin-top: 10vh;"></iframe>
    </div>


<div class="contact" id="contact_us" style="background-color: #1a1c20; width: 99vw; text-align: center;">
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


<script>
    function selector(){
      var x = document.getElementById("facil").value;
      if(x == "rest"){
        document.getElementById("restform").style.display = "block";
        document.getElementById("spaform").style.display = "none";
        document.getElementById("conform").style.display = "none";
      }
      if(x == "spa"){
        document.getElementById("restform").style.display = "none";
        document.getElementById("spaform").style.display = "block";
        document.getElementById("conform").style.display = "none";
      }
      if(x == "conf"){
        document.getElementById("restform").style.display = "none";
        document.getElementById("spaform").style.display = "none";
        document.getElementById("conform").style.display = "block";
      }
    }

</script>

</html>