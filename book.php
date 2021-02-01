<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celeste Packages</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


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
      }li p {
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
.grid-container{
	display: grid;
	grid-template-columns: auto auto auto;
	grid-template-rows: 70vh 10vh 70vh 10vh 70vh 10vh;
	column-gap: 10px;
}

a{
	color: inherit;
}
.grid{
		display: grid;
		grid-template-columns: 45vw 45vw;
		grid-template-rows: auto;
		grid-column-gap: 5vw;
		margin-bottom: 1vw;
		margin-left: 2vh;
	}
	.leftcell{
		grid-column: 1/2;
		width: 45vw;
	}
	.rightcell{
		width: 45vw;
		grid-column: 2/3;
	}

	
	@media screen and (min-width: 1180px) {
		.deluxe-room{
		font-size: 25px;
		text-align: right;
  		color: #f0a500;
	}
	.deluxe-heading{
		text-align: right;
  		color: #f0a500;
	}
	.luxury-room{
		font-size: 25px;
		text-align: left;
  		color: #f0a500;
	}
	.luxury-heading{
		text-align: left;
  		color: #f0a500;
	}
	.president{
		text-align: center;
	}
	.pres-head{		
  		color: #f0a500;
  		padding-top: 5vh;
  		margin-top: 2vh;
  		border-top: solid 1px #f0a500;
	}

	.pres-content{
		color: #f0a500;
		padding-top: 2vh;
		font-size: 25px;
	}
	}.grid{
		color: #f0a500;
	}
	.president{
		color: #f0a500;
		text-align: center;
	}
	.pres-head{		
  		color: #f0a500;
  		padding-top: 5vh;
  		margin-top: 2vh;
  		border-top: solid 1px #f0a500;
	}
	.pres-content{
		color: #f0a500;
		padding-top: 2vh;
	}

    </style>


    <script>
      $(document).ready(function(){
        $("#hover1").hover(function(){
          $("#test1").slideToggle(20);
  });
        $("#hover2").hover(function(){
          $("#test2").slideToggle(20);
  });
        $("#hover3").hover(function(){
          $("#test3").slideToggle(20);
  });
        $("#hover4").hover(function(){
          $("#test4").slideToggle(20);
  });
        $("#hover5").hover(function(){
          $("#test5").slideToggle(20);
  });
        $("#hover6").hover(function(){
          $("#test6").slideToggle(20);
  });
        $("#hover7").hover(function(){
          $("#test7").slideToggle(20);
  });
        $("#hover8").hover(function(){
          $("#test8").slideToggle(20);
  });
        $("#hover9").hover(function(){
          $("#test9").slideToggle(20);
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


    <div class="main" id="main1">
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





  <div class="row" style=" width: 100vw; padding: 3vh; padding-top: 17vh; text-align: center;">
  	<h1 style="color: #cf7500; border-bottom: 5px double #cf7500; padding-bottom: 3px;">Packages</h1>
  </div>
  
  <div class="grid-container">

  	<div class = "grid-item1" style=  "border-right: 5px double #CD7F32;" id = "hover1">
  		<img src="bronze.jpeg"  style = "width: 100%;">
      <div style="background-color: #1a1c20; color: #f0a500; position: relative; bottom: 25vh; left:60vh;  z-index: 1; display: none; width: 50vh;" id = "test1">Cost: 7999<br>
3 days 2 nights<br>Couple Spa Coupons at Scents and Dreams<br>
1 Deluxe Suite

</div>
    </div>





  	<div  id = "hover2"><img src="silver.jpeg" style = "width: 100%; margin-top: 10vh;">
    <div style="background-color: #1a1c20; color: #f0a500; position: relative; bottom: 25vh; left:60vh;  z-index: 1; display: none; width: 50vh;" id = "test2"> 
Cost: 8999<br>
3 days 2 nights<br>
Pool Access<br>
All Meals Covered<br>
Couple Spa Session at Scents and Dreams<br>
2 Deluxe Suite
    </div>
</div>




  	<div style=  "border-left: 5px double #FFD700;"  id = "hover3"><img src="gold.jpeg" style = "width: 100%; margin-top: 20vh;">
      <div style="background-color: #1a1c20; color: #f0a500;  position: relative; bottom: 25vh; right:30vh;  z-index: 1; display: none; width: 50vh;" id = "test3"> 
Cost: 10500<br>
3 days 2 nights<br>
Free Sight Seeing tour<br>
All Meals Covered<br>
Private Movie Show<br>
4 Deluxe Suite
      </div></div>

  	 <div style="font-size: 30px; text-align: center; border-right: 5px double #CD7F32; border-bottom: #CD7F32 5px double; margin-bottom: 5px; color: #CD7F32;"><a href = "checkout.php?package=Bronze">Bronze</a></div>

  	<div style="font-size: 30px; text-align: center; border-bottom: #C0C0C0 5px double; color: #C0C0C0"><a href = "checkout.php?package=Silver">Silver</a></div>
  	<div style="font-size: 30px; text-align: center; border-bottom: #FFD700 5px double; border-left: 5px double #FFD700; color: #FFD700;"><a href = "checkout.php?package=Gold">Gold</a></div>



  	<div class = "grid-item1" style=  "border-right: 5px double #E5E4E2;"   id = "hover4">
  		<img src="platinum.jpeg"  style = "width: 100%;">
    <div style="background-color: #1a1c20; color: #f0a500; ; position: relative; bottom: 25vh; left:60vh;  z-index: 1; display: none; width: 50vh;" id = "test4"> 

Cost: 8500
4 days 3 nights<br>
Pool Access<br>
1 Deluxe Suite
    </div></div>



  	<div  id = "hover5"><img src="sapphire.jpeg" style = "width: 100%; margin-top: 10vh;">
    <div style="background-color: #1a1c20; color: #f0a500;  position: relative; bottom: 25vh; left:60vh;  z-index: 1; display: none; width: 50vh;" id = "test5"> 
Cost: 13999<br>

4 days 3 nights<br>

Free Sight Seeing tour<br>
All Meals Covered<br>
2 Luxury Suite
    </div>
</div>



  	<div style=  "border-left: 5px double #50C878;"  id = "hover6"><img src="emerald.jpeg" style = "width: 100%; margin-top: 20vh;">
     <div style="background-color: #1a1c20; color: #f0a500;  position: relative; bottom: 25vh; right:30vh;  z-index: 1; display: none; width: 50vh;" id = "test6"> 

Cost: 14999<br>

4 days 3 nights<br>

Pool and Gym Access<br>
Free Sight Seeing tour<br>
All Meals Covered<br>
Couple Spa Session at Scents and Dreams<br>
2 Deluxe Suite
     </div></div>







  	<div style="font-size: 30px; text-align: center; border-right: 5px double #E5E4E2; border-bottom: #E5E4E2 5px double; margin-bottom: 5px; color: #E5E4E2;"><a href = "checkout.php?package=Platinum">Platinum</a></div>
  	<div style="font-size: 30px; text-align: center; border-bottom: #0f52ba 5px double; color: #0f52ba;"><a href = "checkout.php?package=Sapphire">Sapphire</a></div>
  	<div style="font-size: 30px; text-align: center; border-bottom: #50C878 5px double; border-left: 5px double #50C878; color: #50C878;"><a href = "checkout.php?package=Emerald">Emerald</a></div>



  	<div class = "grid-item1" style=  "border-right: 5px double #E0115F;"  id = "hover7">
  		<img src="ruby.jpeg"  style = "width: 100%;">
    <div style="background-color: #1a1c20; color: #f0a500;  position: relative; bottom: 25vh; left:60vh;  z-index: 1; display: none; width: 50vh;" id = "test7"> 
Cost: 12500<br>

5 days 4 nights<br>

Couple Spa Session at Scents and Dreams<br>
Personal Pool Access<br>
1 Luxury Suite
    </div></div>





  	<div id = "hover8"><img src="silver.jpeg" style = "width: 100%; margin-top: 10vh;">
    <div style="background-color: #1a1c20; color: #f0a500;  position: relative; bottom: 25vh; left:60vh;  z-index: 1; display: none; width: 50vh;" id = "test8">
      
Cost: 16500<br>

5 days 4 nights<br>

Pool and Gym Access<br>
Free Sight Seeing tour<br>
All Meals Covered<br>
Couple Spa Session at Scents and Dreams<br>
2 Luxury Suite

    </div></div>





  	<div style=  "border-left: 5px double #b9f2ff;"  id = "hover9"><img src="diamond.png" style = "width: 100%; margin-top: 20vh;">
    <div style="background-color: #1a1c20; color: #f0a500;  position: relative; bottom: 25vh; right:30vh;  z-index: 1; display: none; width: 50vh;" id = "test9">
      
Cost: 25000
5 days 4 nights<br>
Couple Spa Session at Scents and Dreams<br>
Personal Pool Access<br>
Private Movie Show<br>
All Meals Covered<br>
Choice Sight Seeing Tour<br>
1 Presidential Suite

    </div></div>

  	<div style="font-size: 30px; text-align: center; border-right: 5px double #E0115F; border-bottom: #E0115F 5px double; margin-bottom: 5px; color: #E0115F;"><a href = "checkout.php?package=Ruby">Ruby</a></div>
  	<div style="font-size: 30px; text-align: center; border-bottom: #AA53C6 5px double; color: #AA53C6;"><a href = "checkout.php?package=Amethyst">Amethyst</a></div>
  	<div style="font-size: 30px; text-align: center; border-bottom: #b9f2ff 5px double; border-left: 5px double #b9f2ff; color: #b9f2ff;"><a href = "checkout.php?package=Diamond">Diamond</a></div>

  </div>

  <hr style="height: 0.5vh; background-color: #cf7500; width: 30vh; color: #cf7500; margin-top: 10vh;">  
  <div class="row" style=" width: 100vw; padding: 5vh; text-align: center">
  	<h1 style="color: #cf7500; border-bottom: 5px double #cf7500; padding-bottom: 3px;">Rooms</h1>
  </div>

  <div class="grid">
  	<div class="leftcell">
  		<h2 class="deluxe-heading"><a href="checkout.php?room=Deluxe&package=none" style="text-decoration: none;">Deluxe Suite</a></h2>
  		<p class="deluxe-room">
  			Oozing with comfort, our deluxe rooms are furnished with a queen size bed and a writing desk. The Italian marble bathroom has a freestanding bathtub and a separate shower. Contemporary artworks add a touch of elegance. Perfect for leaving your daily life behind and enjoy life in the moment.
  				<br><br>Cost:₹9,000 per night
  		</p>
  	</div>
  	<div class="rightcell">
  		<img src="delux.jpg"  style = "width: 100%;">
  	</div>
  </div>

  <div class="grid">
  	<div class="leftcell">
  		<img src="luxury.jpg"  style = "width: 100%;">
  		</div>
  	<div class="rightcell">
  		<h2 class="luxury-heading"><a href="checkout.php?room=Luxury&package=none">Luxury Suite</a></h2>
  		<p class=" luxury-room">
  			These rooms offer bird’s eye views of the city's skyline, dotted with modern and traditional architecture. Interiors include a king size bed, a walk in wardrobe, a silk armchair and a writing desk. The bathroom has a standalone bathtub and a separate shower.
  				<br><br>Cost: ₹12,000 per night
  		</p>
  	
  	</div>
  </div>
  <div class = "president">
  	<h2 class="pres-head"><a href="checkout.php?room=Presidential&package=none">Presidential Suite</a></h2>
  	<span style="width: 50vw; display: inline-block;">
  		<img src="presidential.jpg" style="width: 100%;">
  	</span>
  	
  	<p class="pres-content">
  		No detail has been spared in this crown jewel of a suite. From the master bedroom with its private living area and ensuite bathroom, to the separate living room and dining room. All with silk furnishings and wall to wall windows that frame unrivalled views of Mumbai’s famous Queen’s Necklace. For your convenience, there is a smart workspace furnished with an executive writing desk. There is also a powder room, for your guests. For your privacy, there is a separate entrance for your personal butler and a fully equipped pantry. And for your wellbeing, there is a treadmill for you to work out on. An unrivalled stay experience in Mumbai. This suite has an optional extra interconnecting twin bedroom.
  			<br>Cost: ₹50,000 per night</div>
  	</p>
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
</html>