<?php
include "db.php";
session_start();
?>
<?php
$t='';
    if(isset($_POST['share'])){
      $name=$message=$email=$comfort=$hm=$f=$sb=$a=$or='';

$c=0;
      if(!empty($_POST['name'])){
        $name=$_POST['name'];
        $c=$c+1;
      }
      if(!empty($_POST['email'])){
        $email=$_POST['email'];
        $c=$c+1;
      }
      if(!empty($_POST['message'])){
        $message=$_POST['message'];
        $c=$c+1;
      }
      if(!empty($_POST['comfort'])) {
          $comfort=$_POST['comfort'];
          $c=$c+1;
      } 

      if(!empty($_POST['hm'])) {
          $hm=$_POST['hm'];
          $c=$c+1;
      } 
      if(!empty($_POST['f'])) {
          $f=$_POST['f'];
          $c=$c+1;
      } 

      if(!empty($_POST['sb'])) {
          $sb=$_POST['sb'];
          $c=$c+1;
      } 

      if(!empty($_POST['a'])) {
          $a=$_POST['a'];
          $c=$c+1;
      } 

      if(!empty($_POST['or'])) {
          $or=$_POST['or'];
          $c=$c+1;
      } 
      if($c>=8){
              $query="insert into feedback(name, email, remark, comfort, hygiene, food, staff, overall, ameneties) values('$name', '$email', '$message', '$comfort', '$hm', '$f', '$sb', '$or', '$a')";
        $select=mysqli_query($connection, $query);
        $t='suc';

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

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/path/to/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
        font-family: 'Cormorant Garamond', serif;s
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
        padding-top: 2vh;
        padding-right: 4vh;
        text-decoration: none;
        display: block;
      }
      ul{
        list-style-type: none;
      }

      .dropdown-content a:hover {color: white;}
      .dropdown:hover .dropdown-content {display: block;}
      .dropdown:hover .dropbtn {background-color: #f0a500; color: #1a1c20;}

    }

  .in{
    width: 50vh;
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
          <li><a href="#feedback">Feedback</a></li>
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
            <li><a href="#feedback">Feedback</a></li>
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
  <div id="mainform" style="margin:0 auto; width: 60vh; padding: 5vh; padding-top: 15vh; color: #f0a500; box-shadow:0 0 15px; border-radius:2vh; ">
    
    <form id="form" name="myform" method="post">
      <h3 style="text-align: center;">We want to serve you better every time you visit us. Kindly, share your feedback with us.</h3>
      <p id="returnmessage" style="color: #f4f4f4;"></p>
      
      <label>Name: <span>*</span></label><br>
      <input type="text" id="name" name="name" class="in" style="color: black;">
      <p id="namemsg" style="color: #f4f4f4;"></p>
      
      <label>Email: <span>*</span></label><br>
      <input type="email" id="email" name="email" class="in" style="color: black;">
      <p id="emailmsg" style="color: #f4f4f4;"></p>
      
      <label>Remarks:</label><br>
      <textarea id="Message" name="message" style="width: 50vh; border-radius: 2vh; color: black;"></textarea>
      <p id="messagemsg" style="color: #f4f4f4;"></p>
      
      <p style="margin-bottom: -1vh;">Comfort</p>
      <div style="margin-bottom: -1vh;">
      <input type="radio" name="comfort" id="comfort" value="1" style="width: 9vh;">
      <input type="radio" name="comfort" id="comfort" value="2"style="width: 9vh;">
      <input type="radio" name="comfort" id="comfort" value="3"style="width: 9vh;">
      <input type="radio" name="comfort" id="comfort" value="4"style="width: 9vh;">
      <input type="radio" name="comfort" id="comfort" value="5"style="width: 9vh;">
    </div>
      <p style="width: 9vh; display: inline-block; text-align: center;">1</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">2</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">3</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">4</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">5</p>
      <p id="cmsg" style="color: #f4f4f4;"></p>
      <br>
      <p style="margin-bottom: -1vh;">Hygiene Maintanence</p>
      <div style="margin-bottom: -1vh;">
      <input type="radio" name="hm" id="hm" value="1"style="width: 9vh;">
      <input type="radio" name="hm" id="hm" value="2"style="width: 9vh;">
      <input type="radio" name="hm" id="hm" value="3"style="width: 9vh;">
      <input type="radio" name="hm" id="hm" value="4"style="width: 9vh;">
      <input type="radio" name="hm" id="hm" value="5"style="width: 9vh;">
    </div>
      <p style="width: 9vh; display: inline-block; text-align: center;">1</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">2</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">3</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">4</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">5</p>
      <p id="hmmsg" style="color: #f4f4f4;"></p>
      <br>
      <p style="margin-bottom: -1vh;">Food</p>
      <div style="margin-bottom: -1vh;">
      <input type="radio" name="f" id="f" value="1"style="width: 9vh;">
      <input type="radio" name="f" id="f" value="2"style="width: 9vh;">
      <input type="radio" name="f" id="f" value="3"style="width: 9vh;">
      <input type="radio" name="f" id="f" value="4"style="width: 9vh;">
      <input type="radio" name="f" id="f" value="5"style="width: 9vh;">
    </div>
      <p style="width: 9vh; display: inline-block; text-align: center;">1</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">2</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">3</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">4</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">5</p>
      <p id="fmsg" style="color: #f4f4f4;"></p>
      <br>
      <p style="margin-bottom: -1vh;">Staff Behaviour</p>
      <div style="margin-bottom: -1vh;">
      <input type="radio" name="sb" id="sb" value="1"style="width: 9vh;">
      <input type="radio" name="sb" id="sb" value="2"style="width: 9vh;">
      <input type="radio" name="sb" id="sb" value="3"style="width: 9vh;">
      <input type="radio" name="sb" id="sb" value="4"style="width: 9vh;">
      <input type="radio" name="sb" id="sb" value="5"style="width: 9vh;">
      </div>
      <p style="width: 9vh; display: inline-block; text-align: center;">1</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">2</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">3</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">4</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">5</p>
      <p id="sbmsg" style="color: #f4f4f4;"></p>
      <br>
      <p style="margin-bottom: -1vh;">Ameneties</p>
      <div style="margin-bottom: -1vh;">
      <input type="radio" name="a" id="a" value="1"style="width: 9vh;">
      <input type="radio" name="a" id="a" value="2"style="width: 9vh;">
      <input type="radio" name="a" id="a" value="3"style="width: 9vh;">
      <input type="radio" name="a" id="a" value="4"style="width: 9vh;">
      <input type="radio" name="a" id="a" value="5"style="width: 9vh;">
      </div>
      <p style="width: 9vh; display: inline-block; text-align: center;">1</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">2</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">3</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">4</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">5</p>
      <p id="amsg" style="color: #f4f4f4;"></p>
      <br>
      <p style="margin-bottom: -1vh;">Overall Rating</p>
      <div style="margin-bottom: -1vh;">
      <input type="radio" name="or" id="or" value="1"style="width: 9vh;">
      <input type="radio" name="or" id="or" value="2"style="width: 9vh;">
      <input type="radio" name="or" id="or" value="3"style="width: 9vh;">
      <input type="radio" name="or" id="or" value="4"style="width: 9vh;">
      <input type="radio" name="or" id="or" value="5"style="width: 9vh;">
      </div>
      <p style="width: 9vh; display: inline-block; text-align: center;">1</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">2</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">3</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">4</p>
      <p style="width: 9vh; display: inline-block; text-align: center;">5</p>      
      <p id="ormsg" style="color: #f4f4f4;"></p>
      <br>


      <input style="color: #1a1c20;  background-color: #f0a500;" type="submit" name="share" id="submit" value="Share" onclick="func()">
    
    </form>
</div>


  <div class="contact" id="contact_us" style="background-color: #1a1c20; width: 99vw; text-align: center;">
    <div class="row" style=" width: 100vw; text-align: center; padding: 5vh; color: #f0a500;"><h3>Contact Us</h3>

      <hr style="margin-top: 1vh; height: 0.3vh; width: 30vh; background-color: #f0a500; text-align: center;"></div>
    
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
function func(){
    var name = document.forms["myform"]["name"].value;
    var email = document.forms["myform"]["email"].value;
    var message = document.forms["myform"]["message"].value;
    var comfort = document.forms['myform']['comfort'].value;
    var hm = document.forms['myform']['hm'].value;
    var f = document.forms['myform']['f'].value;
    var sb = document.forms['myform']['sb'].value;
    var a = document.forms['myform']['a'].value;
    var or = document.forms['myform']['or'].value;
     
    if (email==''){
      document.getElementById("emailmsg").innerHTML="Kindly fill in your email";
    }
    if (name==''){
      document.getElementById("namemsg").innerHTML="Kindly fill in your name";
    }
    if(/\d/.test(name)){
      document.getElementById("namemsg").innerHTML="Name cannot have any numbers";
    }
    if (comfort==''){
      document.getElementById("cmsg").innerHTML="Please fill this field";
    }
    if(hm==''){
     document.getElementById("hmmsg").innerHTML="Please fill this field"; 
    }
    if(f==''){
      document.getElementById("fmsg").innerHTML="Please fill this field";
    }
    if (sb=='') {
      document.getElementById("sbmsg").innerHTML="Please fill this field";
    }
    if(a==''){
      document.getElementById("amsg").innerHTML="Please fill this field";
    }
    if(or==''){
      document.getElementById("ormsg").innerHTML="Please fill this field";
    }

  return false;
  }

</script>

<?php
  if($t=='suc'){
?>
<script>alert('Thank you for your valuable time. Your feedback has been submitted')</script>

<?php
}
?>


</html>