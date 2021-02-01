<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celeste Homepage</title>

    <!-- google font*********************************************************************************************************-->
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <style>
      html{
        scroll-behavior: smooth;
      }
      body{
      	background-color: #1a1c20;
      	font-family: 'Philosopher', sans-serif;
      }
      .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        border: 2vh solid transparent;
        border-image: url(frame1.jpg) 30 stretch; 
      }
      .grid-item {
        background-color: #1a1c20;
        text-align: center;
        color: #f0a500;
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
.welcomepage{
	font-family: 'Philosopher', sans-serif;
	font-size: 70px;
}
.welcome-wrapper{

	border: 11px double #f0a500;	
}
.arrow{
	animation: welcomearrow 1s infinite;
}
@keyframes welcomearrow{
	0%{transform: translate3d(0, -50%, 0);}
	50%{transform: translate3d(0, -0, 0);}
	100%{transform: translate3d(0, -50%, 0);}
}

.fa-plane:hover{
	animation: planehover infinite 1s;
}
@keyframes planehover{
	0%{transform: rotate(-45deg);}
	50%{transform: rotate(45deg);}
	100%{transform: rotate(-45deg);}
}
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f0a500;
  border-radius: 50%;
  border-top: 16px solid #1a1c20;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.animate-bottom {
  position: relative;
  animation-name: animatebottom;
  animation-duration: 1s
}

@keyframes animatebottom { 
  from{ bottom:-100vh; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#complete {
  display: none;
}

#deal-grid{
 margin-top: 5vw; 
  display: grid;
  grid-template-columns: 30vw 30vw 30vw;
  grid-column-gap: 4vw;
}
    </style>

    <script>
			var myVar;

			function myFunction() {
			  myVar = setTimeout(showPage, 20);
			}

			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("complete").style.display = "block";
			}
</script>
</script>
    <script type="text/javascript">
      
      var myVar = setInterval(myTimer, 1000);

      function myTimer() {
        var d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();
      }

    </script>
    <script>
      $(document).ready(function(){
  $("#angeles").click(function(){
    $("#ajax").load("angeles.txt");
  });
  $("#paris").click(function(){
    $("#ajax").load("paris.txt");
  });
  $("#kenya").click(function(){
    $("#ajax").load("kenya.txt");
  });

});
    </script>
</head>

<body onload="myFunction()">
	<div id="loader"></div>
	<div id = "complete" class="animate-bottom">
  <div style="height: 100vh; background-color: #1a1c20;">
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



    <div class="grid-container" style="display: grid;">
      <div class="grid-item"></div>
      <div class="grid-item" style="padding-top: 29vh; font-size: 20vh;">
      	<div class = "welcome-wrapper">
	        <h2 class="welcomepage">WELCOME TO</h2>
	        <h1 style="padding-bottom: 15vh;"  class="welcomepage">CELESTE</h1>
        </div>
        <div>
          <a class="scroll" style="font-size: 10vh; color: #f0a500;" href="#main1"><i class="fas fa-chevron-down arrow"></i></a>
        </div>
      </div>
      <div class="grid-item">

      </div>
    </div>
  </div>

  <div class="main" id="main1">

    <div class="row" style="width: 100vw; padding-top: 13vh; background-color: #1a1c20;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
          <div class="item active">
            <img src="zurich.jpg" alt="Zurich Cityscape" style="width:100vw; height: 70vh;">
            <div class="carousel-caption">
              <h2 style="font-family: 'Philosopher', sans-serif;">Zurich</h2>
              <h3 style="font-family: 'Philosopher', sans-serif;">Experience the beauty of Zurich</h3>
            </div>
          </div>

          <div class="item">
            <img src="hawaii.jpg" alt="Chicago" style="width:100vw; height: 70vh;">
            <div class="carousel-caption">
              <h2 style="font-family: 'Philosopher', sans-serif;">Hawaii</h2>
              <h3 style="font-family: 'Philosopher', sans-serif;">Feast on the enchanting colors of Hawaii's tentalizing beaches</h3>
            </div>
          </div>

          <div class="item">
            <img src="york.jpg" alt="New York" style="width:100vw; height: 70vh;">
            <div class="carousel-caption">
              <h2 style="font-family: 'Philosopher', sans-serif;">New York</h2>
              <h3 style="font-family: 'Philosopher', sans-serif;">We love the Big Apple!</h3>
            </div>
          </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


  <div class="row" style=" font-family: 'Philosopher', sans-serif; width: 100vw; padding: 5vh; text-align: center; color: #cf7500; border-top: 5px double #f0a500; border-bottom: 5px double #f0a500; margin-top: 30px;"><h1>October Highlight</h1></div>

  <div class="row" style="width: 100vw; margin-bottom: 5vh; font-family: 'Philosopher', sans-serif;">
    <div class="col-lg-6 col-sm-12" style="border-radius: 5vh; background-color: #1a1c20; color: #cf7500;">
      <h2 style="text-align: center;">Experience luxury as never before</h2>
      <p style="font-size: 3vh; padding: 5vh; color: #f0a500">The Celeste New York stands tall as a beautiful and striking symbol of opulence painting the cityscape of this exquisite city. A stay in New York is not complete without us treating you to the luxuries of the city as no one else could. Enjoy the view from our high-rise spa, or feast on divine dishes in our Michelin Star restaurant, The Taste of Divinity. There is something for everyone in this home away from home.</p>
    </div>

    <div style="text-align: center; padding: 5vh;" class="col-lg-6 col-sm-12">
      <img src="highlight.jpg" style = "height: 70vh; border-radius: 50% 0%;">
    </div>

  </div>

  <span class="row" style="color: #cf7500; padding-left: 4vh; padding-bottom: 3vh;" align="center">
    <h3 style="color: #f0a500;">Choose an experience tailored to your tastes<br>
    	<button style=" border-radius: 1vh; display: inline; background-color: #cf7500; padding: 3vh; margin-top: 10px;"><a style="color: #1a1c20;" href="book.html">Explore our Packages</a></button></h3>
  </span>
  <div style="text-align: center; color: #f0a500;"><i class="fas fa-plane" style="font-size: 30px;"></i></div>
<div align="center">
    <p id = "deals" style="border-radius: 1vh; background-color: #cf7500; padding: 3vh; margin-top: 5vh; font-size: 20px;">Check out our amazing deals by clicking on the images below</p>
</div>

  <div id = "deal-grid">
    <div>
      <img src="angeles.jpg" style="width: 100%; height: 30vh;" id="angeles">
    </div>
    <div>
      <img src="paris.jpg"style="width: 100%; height: 30vh;" id="paris">
    </div>
    <div>
      <img src="kenya.jpg"style="width: 100%;  height: 30vh;" id="kenya">
    </div>
  </div>
  <div id = "ajax">
    
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
</div>
</body>


</html>
  