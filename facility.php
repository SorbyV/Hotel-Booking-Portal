<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facilities</title>
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
		html{
        scroll-behavior: smooth;
      }
      body{
      	background-color: #1a1c20;
      	font-family: 'Philosopher', sans-serif;
      	width: 100%;
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
	h2{
		text-align: center;
		color: #f0a500;
		border-bottom: solid 1px #f0a500;
		padding-bottom: 5vh;
		padding-top: 5vh;
		border-top: double 5px #f0a500;
	}
	h3{
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


	<div class="heading-content">
    	<h1 class="heading">
    		Facilities
    	</h1>
    </div>

    <div class = "main-content">
    	Our hotels boast of the most extreme of luxuries, available for you to use to your heart's content. Our guests have the options of choosing according to their taste and enjoying these leisures whenever they want.
    </div>

	<h2>
		Fine Dining
	</h2>


    <div class = "grid">
    	<div class = "leftcell" >
    		<h3>
    			The Deccan Crossroads
    		</h3>
        <p style="font-size: 20px;">Spicy, rich, flavourful and diverse are terms that are frequently used to describe Indian food. All these words are apt in describing Indian cuisine, for it is diverse in variety and taste, and is made up from a wide array of regional cuisines throughout various parts of India. Due to the differences in climate and soil conditions, the local cuisines in various regions may vary greatly from each other, as each region uses spices, herbs and ingredients that are grown locally. Culture, tradition and religion also play significant roles in influencing the cuisines and diets of the Indians.</p>
    	</div>
    	<div class="rightcell">
    		<img src="indian.jpg" style="width: 100%;">
    	</div>
    </div>


    <div class = "grid">
    	<div class = "leftcell">
    		<img src="continent.png" style="width: 100%;">
    	</div>
    	<div class="rightcell">
    		<h3>
    			The Medditerranean
    		</h3>
        <p style="font-size: 20px;">
          Mediterranean cuisine is not the product of a specific ethnic group or culture.  Rather, it is a label referring to the culinary trends shared by a diverse array of peoples that live in the region around the Mediterranean Sea.   While Mediterranean cuisine is understood to be a unified culinary tradition in this country, in reality, there is a vast amount of cultural variance in the cooking found in this geographic region.
        </p>
    	</div>
    </div>


    <div class = "grid">
    	<div class = "leftcell">
    		<h3>
    			Salsa and Siesta
    		</h3>
        <p style="font-size: 20px;">
          One of the world’s great cuisines, Mexican food is diverse, delicious, and profoundly omnivorous, both simple and sophisticated. Typical Mexican dishes are as basic as the ubiquitous quesadilla (a warm tortilla filled with melted cheese) or as elaborate as chicken served in mole negro (a Oaxacan sauce prepared with dozens of hand-ground ingredients). Food is essential to Mexican culture, and eating well is something enjoyed throughout Mexico, at every price point and in every type of establishment—from food stalls, bakeries, and markets to cafés, cantinas, and restaurants.
        </p>
    	</div>
    	<div class="rightcell">
    		<img src="buffet.jpg" style="width: 100%;">
    	</div>
    </div>

    <h2>
		Fitness and Lifestyle
	</h2>

    <div class = "grid">
    	<div class = "leftcell">
    		<h3>
    			Olympus
    		</h3>
        <p style="font-size: 20px;">
          The Olympus is the abode of the Gods. And we can boast that rightly so, with state-of-the-art machinery, equipment and services. Equipped with a fully centralised air conditioning system, take in the scenery from the top, as you burn away the calories. Trainers are available 24/7 to guide our guests with the best regimens, fully tailores to suuit you and your body.
        </p>
    	</div>
    	<div class="rightcell">
    		<img src="gym.jpg" style="width: 100%;">
    	</div>
    </div>

    <div class = "grid">
    	<div class = "leftcell">
    		<img src="spa.jpg" style="width: 100%;">
    	</div>
    	<div class="rightcell">
    		<h3>
    			Scents and Dreams
    		</h3>
        <p style="font-size: 20px;">
          The sybaritic Scents and Dreams Spa is a hymn to nature, intriguing to the senses yet calming to the mind. The sound of falling water, the fine incense of ouzo and anise, the breeze in the garden treatment rooms, the rich natural textures; these and a variety of treatments offering different experiences and  products have been deployed in its design to awake all the senses and sooth the body and mind. This is one of the best spas in the world, a space that can keep the visitor content day after day.

        </p>
    	</div>
    </div>

    <div class = "grid">
    	<div class = "leftcell">
    		<h3>
    			Moana at the Shores
    		</h3>
        <p style="font-size: 20px;">
          After a long day of traveling or sightseeing, there’s nothing like a refreshing dip in the pool. The enduring allure of the pool couldn’t be more simple and pure: It’s a cool and inviting respite from the heat—and an irresistible opportunity to kick off your sandals and play. Laze around with your friends and family and enjoy under the twinkling blue tiles. Extravagant, lavish and sophisticated: these are just a few words that come to mind.


        </p>
    	</div>
    	<div class="rightcell">
    		<img src="swim.jpg" style="width: 100%;">
    	</div>
    </div>


    <h2>
		Executive and Corporate
	</h2>

    <div class = "grid">
    	<div class = "leftcell">
    		<img src="conf.jpg" style="width: 100%;">
    	</div>
    	<div class="rightcell">
    		<h3>
    			The Muse
    		</h3>
        <p style="font-size: 20px;">
          Our experienced and creative events team will provide all the inspiration and support you need to make your event a resounding success, guiding you every step of the way. From planning a wedding banquet, to a private party, a workshop, a conference, a seminar, or a business meeting, be rest assured that all your requirements will be impeccably taken care of.
        </p>
    	</div>
    </div>

    <div class = "grid">
    	<div class = "leftcell">
    		<h3>
    			The Presidential Palate
    		</h3>
    		<p style="font-size: 20px;">
          The stunning facilities come with flexible settings, feature the latest technology, and are supported by personal and immaculate service, luminous guest bedrooms,  delectable cuisine, and the extravagantly lavish Spa, offering an unforgettable experience for all your corporate or social gatherings. The Presidential Palate boasts of a private host service with a 5-star cook and personal staff to make your meeting a delight for those attending.
        </p>
    	</div>
    	<div class="rightcell">
    		<img src="business.jpg" style="width: 100%;">
    	</div>
    </div>

    <div style="text-align: center; margin-top: 5vh;"><a href="book_facilities.php" style="text-decoration: none; color: black; border-radius: 1vh; background-color: #cf7500; padding: 3vh; margin-top: 5vh; font-size: 20px;">Book Facility</a></div>



	<div class="contact" id="contact_us" style="background-color: #1a1c20; width: 99vw; text-align: center; margin-top: 20px;">
  		<div class="row" style=" width: 100vw; text-align: center; padding: 5vh; color: #f0a500;">
  			<h3>
  				Contact Us
  			</h3>
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