<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
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

	<style type="text/css">
		/* ***************************************************************************************CSS Styling********************************************************************** */
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
	.heading-content{
		padding-top: 20vh;
		padding-bottom: 15vh;
		text-align: center;
		border-bottom: double 10px #f0a500;
		height: 30vh;
		color: #f0a500;
	}
	.main-content{
		font-size: 20px;
		margin-top: 5vh;
		color: #f0a500;
		text-align: center;
		padding-right: 5vh;
		padding-left: 5vh;
		padding-bottom: 5vh;		
		border-bottom: double 5px #f0a500;
	}
	.upper-grid{
		display: grid;
		grid-template-areas: 
		'contentleft contentright';
		color: #f0a500;
		grid-column-gap: 30vw;
		text-align: center;
		padding :5px;
	}
	.aim{
		grid-area: contentleft;
		font-size: 18px;
	}
	.value{
		grid-area: contentright;
		font-size: 18px;
		padding :5px;
	}
	.lowercontent{
		width: 50vw;
		margin-left: 25vw;
		color: #f0a500;
		text-align: center;
		font-size: 18px;
		padding :5px;
	}
	h2{
		text-align: center;
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

    <div class="heading-content">
    	<h1 class="heading">
    		About Us
    	</h1>
    </div>
    <div class = "main-content" style="color: #f0a500;">
    	The Celeste Group of Hotels is a world-wide hotel and restaurant chain. We are committed to delivering an enjoyable and memorable experience to our guests all over the world in a responsible manner. The Celeste Group believes in the power of hospitality. Every guest we host is a part of our global family, and we strive to make Celeste their home away from home, where they can relax, rejuvenate and focus on enjoying every moment of their stay. Our staff is dedicated to providing you with a seamless yet invisible experience, always working behind the scenes to make sure every aspect of your experience is picture perfect.
    </div>


    <div class="upper-grid">
    	<div class = "aim">
    		<h2>
    			Our Aim
    		</h2>
    		<p style="color: #f0a500;">
    			We aim to provide a comfortable and hassle free experience to all our customers. We have strived to build a relationship of trust within the industry. Our customers are treated as members of our global family. At each of our locations, we want to give back to every culture what they provide for us. Our staff is hired from among the best of the local society, so that we can have a tailored staff who know the best, while also economically energizing the region. Each hotel is built and functions in a sustainable manner with ethically sourced local labour and resources. All our hotels are water positive and carbon emission negative.
    		</p>
    	</div>
    	<div class = "value">
    		<h2>
    			Our Values
    		</h2>
    		<p style="color: #f0a500;">
    			Our reputation stands upon the shoulders of the excellence of our workforce, which is an enigmatic and brilliant team of charismatic individuals who work day and night to ensure your comfort. All our decisions are based on the best interests of the customers, as well as making a dynamic impact on the environment which is sustainable and eco-friendly. We are soundly aware of our responsibility towards the rules and regulations of the regions where our venture is located, and dedicate all of our efforts to making sure no harm comes to the environment from any of our actions. In these difficult times, our focus is on the well being of our guests and staff, thus hygiene has been the first and foremost dedication at every location. 
    		</p>
    	</div>
    </div>

    <div class="lowercontent">
    	<h2>
    		Our Vision
    	</h2>
    	<p style="color: #f0a500; font-size: 20px;">
    		Our goals for the future lie in our efforts to build our brand world-wide and estabilish our name as the leaders of the industry. We wish to become the flag-bearers that herald in a future of the hospitality industry where brands respect the customer and nature, and not just profits. We aim to expand our efforts towards altering the tourism industry towards these goals and ensure that each step taken towards leisure and luxury is a sustainable one, which does not prey on a regions resources to build its brands.
    	</p>
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
</html>