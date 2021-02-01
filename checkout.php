<?php
include "db.php";
session_start();
$result='';
  if(isset($_POST['checkout'])){
    $bname=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $alt_contact=$_POST['alt_contact'];
    $address=$_POST['address'];
    $from=$_POST['from'];

    if($_GET['package']=='none'){
      $to=$_POST['to'];
      $no_guests=$_POST['no_guests'];
      $no_rooms=$_POST['no_rooms'];

      $room_name='';
      $room_name=$_GET['room'];

      $query="select * from room where room_name='{$room_name}'";
      $select=mysqli_query($connection, $query);

      while($row=mysqli_fetch_assoc($select)){
        $db_ava=$row['available'];
      }
      if($db_ava<1){
        $result='full';
      }
      else{
        if($bname!=''&&$email!=''&&$contact!=''&&$address!=''&&$from!=''&&$to!=''&&$no_guests!=''&&$no_rooms!=''){
          if($alt_contact==''){
            $alt_contact=9999999999;
          }
          $query="insert into room_b(b_name, b_email, b_contact, b_altcontact, b_address, b_from, b_to, guests, rooms, room_name) values('$bname', '$email', '$contact', '$alt_contact', '$address', '$from', '$to', '$no_guests', '$no_rooms','$room_name')";
            $select=mysqli_query($connection, $query);
            if(!$select)
              die(mysqli_error($connection));
          $query="update room set available=$db_ava-$no_rooms where room_name='$room_name'";
            $select=mysqli_query($connection, $query);
            if(!$select)
              die(mysqli_error($connection));
            $result='suc';
        }
      }
    }
   else{
      $use_date = date_create($from);
      $p = $_GET['package'];
      if($p=='Bronze'){
        $no_rooms=1;
        $no_guest=2;
        $name='Deluxe';
        date_add($use_date,date_interval_create_from_date_string("3 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Ruby'){
        $no_rooms=1;
        $no_guest=2;
        $name='Luxury';
        date_add($use_date,date_interval_create_from_date_string("5 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Silver'){
        $no_rooms=2;
        $no_guest=4;
        $name='Deluxe';
        date_add($use_date,date_interval_create_from_date_string("3 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Gold'){
        $no_rooms=4;
        $no_guest=8;
        $name='Deluxe';
        date_add($use_date,date_interval_create_from_date_string("3 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Platinum'){
        $no_rooms=1;
        $no_guest=2;
        $name='Deluxe';
        date_add($use_date,date_interval_create_from_date_string("4 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Sapphire'){
        $no_rooms=2;
        $no_guest=4;
        $name='Luxury';
        date_add($use_date,date_interval_create_from_date_string("4 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Emerald'){
        $no_rooms=1;
        $no_guest=2;
        $name='Deluxe';
        date_add($use_date,date_interval_create_from_date_string("4 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Amethyst'){
        $no_rooms=2;
        $no_guest=4;
        $name='Luxury';
        date_add($use_date,date_interval_create_from_date_string("5 days"));
        $tod= date_format($use_date,"Y-m-d");
      }
      elseif($p=='Diamond'){
        $no_rooms=1;
        $no_guest=2;
        $name='Presidential';
        date_add($use_date,date_interval_create_from_date_string("5 days"));
        $tod= date_format($use_date,"Y-m-d");
      }

      $query="select * from room where room_name='$name'";
      $select=mysqli_query($connection, $query);

      while($row=mysqli_fetch_assoc($select)){
        $db_ava=$row['available'];
      }
      if($db_ava===0){
        $result='full';
      }
      else{

            $query="insert into room_b(b_name, b_email, b_contact, b_altcontact, b_address, b_from, b_to, guests, rooms, room_name) values('$bname', '$email', '$contact', '$alt_contact', '$address', '$from', '$tod', '$no_guest', '$no_rooms','$name')";
          $select=mysqli_query($connection, $query);
          $query="update room set available=$db_ava-$no_rooms where room_name='$name'";
          $select=mysqli_query($connection, $query);
          $result='suc';
        }
      }
      if($result=='suc'){

        ?>
          <script>alert("Your booking is successful")</script>
        <?php
    }
  $errorMessage='';
  if($result=='suc'){
    $msg = "Congratulations on a successful booking! We look forward to seeing you soon. Please ensure you comply with social distancing and hygiene rules during travelling. We wish you a happy and safe journey.";
    $emailSubject='Room booking successful!';
    $msg = wordwrap($msg,70);
        if (mail($email, $emailSubject, $msg)) {
            header('Location: index.php');
        } 
        else {
          ?>
            <script>alert('Oops, something went wrong. Please try again later');</script>
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
        padding-right: 5vh;
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

  input{
    width: 29vw;
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
  <div id="mainform" style="margin:0 auto; width: 35vw; padding: 5vh; padding-top: 15vh; color: #f0a500; box-shadow:0 0 15px; border-radius:2vh; ">
    <form id="form" name="myform" method="post">
      <h3 style="text-align: center;">Kindly Enter Your Details for Booking</h3>
      <p id="returnmessage" style="color: #f4f4f4;"></p>
      
      <?php
        if( $_GET['package']!='none'){
      ?>
      <h4 style="text-align: center;"><?php echo $_GET['package'] ?></h4>
      <?php
      }
      else{
      ?>
      <h4 style="text-align: center;"><?php echo $_GET['room'] ?> Suite</h4>
      <?php
      }
      ?>
      <label>Name: <span>*</span></label><br>
      <input type="text" id="name" name="name" style="color: black;">
      <p id="namemsg" style="color: #f4f4f4;"></p>
      
      <label>Email: <span>*</span></label><br>
      <input type="email" id="email" name="email" style="color: black;">
      <p id="emailmsg" style="color: #f4f4f4;"></p>
      
      <label>Contact No: <span>*</span></label><br>
      <input type="text" id="contact" name="contact" style="color: black;">
      <p id="contactmsg" style="color: #f4f4f4;"></p>
      
      <label>Alternate Contact No:</label><br>
      <input type="text" id="alt_contact" name="alt_contact" style="color: black;">
      <p id="alt_contactmsg" style="color: #f4f4f4;"></p>
      
      <label>Address: <span>*</span></label><br>
      <textarea id="address" name="address" style="width: 29vw; border-radius: 2vh; color: black;"></textarea>
      <p id="addressmsg" style="color: #f4f4f4;"></p>
      
      <label>From Date: <span>*</span></label><br>
      <input type="date" id="from" name="from" style="color: black;">
      <p id="frommsg" style="color: #f4f4f4;"></p>

      <?php
      if($_GET['package']=='none'){
      ?>
      
      <label>To Date: <span>*</span></label><br>
      <input type="date" id="to" name="to"  style="color: black;">
      <p id="tomsg" style="color: #f4f4f4;"></p>
      
      <label>Number of Guests: <span>*</span></label><br>
      <input type="number" id="no_guests" name="no_guests"  style="color: black;">
      <p id="no_guestsmsg" style="color: #f4f4f4;"></p>
      
      <label>Number of Rooms Required: <span>*</span></label><br>
      <input type="number" id="no_rooms" name="no_rooms" style="color: black;">
      <p id="no_roomsmsg" style="color: #f4f4f4;"></p>
      <?php
      if($result=='full'){
      ?>
      <p id="no_roomsmsg" style="color: #f4f4f4;">Sorry! All rooms of this type are booked</p>

      <?php
      }
    }
      ?>
      <p style="text-align: center;">Check-In and Checkout time are 12 noon</p><br>
      
      <input style="color: #1a1c20;  background-color: #f0a500;" type="submit" id="submit" value="Checkout" onclick="func()" name="checkout">


    </form>
</div>
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
  var regEmail = /@/
  var digitpass = /[0-9]/

  document.getElementById("name").onkeyup = function(){
    name = document.getElementById("name").value;
    if (name==''){
      document.getElementById("namemsg").innerHTML="Kindly fill in your name";
    }
    if(name!=''){
      document.getElementById("namemsg").innerHTML="";
    }
  }

  document.getElementById("email").onkeyup = function(){
    email = document.getElementById("email").value;
    var res = regEmail.test(email);
    if (email==''){
      document.getElementById("emailmsg").innerHTML="Kindly fill in your email address";
    }
    if(email!=''){
      if(res == false){
        document.getElementById("emailmsg").innerHTML="Please fill proper email address";
      }      
    }
    if(res==true){
      document.getElementById("emailmsg").innerHTML="";
    }
  }

  document.getElementById("contact").onkeyup = function(){
    contact = document.getElementById("contact").value;
    var digitres = digitpass.test(contact);
    if (contact==''){
      document.getElementById("contactmsg").innerHTML="Kindly fill in your contact number";
    }
    if(digitres==false && contact!=''){
      document.getElementById("contactmsg").innerHTML="Contact number must have numerical digits";
    }
    if(digitres==true && contact!=''){
      document.getElementById("contactmsg").innerHTML="Contact number must have 10 numerical digits";
    }
    if(digitres==true && contact.length==10){
       document.getElementById("contactmsg").innerHTML="";
    }
  }

  document.getElementById("alt_contact").onkeyup = function(){
    alt_contact = document.getElementById("alt_contact").value;
    var digitres = digitpass.test(alt_contact);
    if (alt_contact==''){
      document.getElementById("alt_contactmsg").innerHTML="Kindly fill in your contact number";
    }
    if(digitres==false && alt_contact!=''){
      document.getElementById("alt_contactmsg").innerHTML="Contact number must have numerical digits";
    }
    if(digitres==true && alt_contact!=''){
      document.getElementById("alt_contactmsg").innerHTML="Contact number must have 10 numerical digits";
    }
    if(digitres==true && alt_contact.length==10){
       document.getElementById("alt_contactmsg").innerHTML="";
    }
  }

  document.getElementById("to").onkeyup = function(){
    from = document.getElementById("from").value;
    to = document.getElementById("to").value;
    if(from==''){
      document.getElementById("frommsg").innerHTML="Kindly fill in the from date";
    }
    if(from!=''){
      document.getElementById("frommsg").innerHTML="";
    }
    if(to==''){
      document.getElementById("tomsg").innerHTML="Kindly fill in the to date";
    }
    if(to!=''){
      document.getElementById("tomsg").innerHTML="";
    }
    if(to<from){
      document.getElementById("tomsg").innerHTML="Kindly check the booking dates";
    }
  }
  document.getElementById("address").onkeyup = function(){
    address = document.getElementById("address").value;
    if (address==''){
      document.getElementById("addressmsg").innerHTML="Kindly fill in your address";
    }
    if (address!=''){
      document.getElementById("addressmsg").innerHTML="";
    }
  }

  document.getElementById("no_guests").onkeyup = function(){
    no_guests = document.getElementById("no_guests").value;
     if (no_guests==''){
      document.getElementById("no_guestsmsg").innerHTML="Kindly fill in the number of guests";
    }
    if (no_guests!=''){
      document.getElementById("no_guestsmsg").innerHTML="";
    }
  }

  document.getElementById("no_rooms").onkeyup = function(){
    no_rooms = document.getElementById("no_rooms").value;
     if (no_rooms==''){
      document.getElementById("no_roomsmsg").innerHTML="Kindly fill in the number of rooms";
    }
    if (no_rooms!=''){
      document.getElementById("no_roomsmsg").innerHTML="";
    }
    if (no_guests<no_rooms){
      document.getElementById("no_roomsmsg").innerHTML="Every room can have minimum 1 and maximum 3 guests";
    }
    if(no_guests>(3*no_rooms)){
      document.getElementById("no_roomsmsg").innerHTML="Every room can have minimum 1 and maximum 3 guests";
    }
  }

</script>

</html>