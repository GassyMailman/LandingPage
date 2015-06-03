<!DOCTYPE html>

<html>
<div class="page">
	<head>
		<link type="text/css" rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Pragati+Narrow' rel='stylesheet' type='text/css'>
		<title>Hayden Guthrie</title>
	</head>
	<body>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic' rel='stylesheet' type='text/css'>

<nav class="Quick-navigation">
  <a href="#A" class="Quick-navigation-item">Home</a>
  <a href="#B" class="Quick-navigation-item">About</a>
  <a href="#C" class="Quick-navigation-item">Projects</a>
  <a href="#E" class="Quick-navigation-item">Contact</a>
</nav>

<section id="A" class="js-scroll-step">
		<center class="name"><img src="http://fontmeme.com/embed.php?text=Hayden%20Guthrie&name=Airstream.ttf&size=100&style_color=15155E" alt="Retro Fonts"></a><center class="type"></center></center>
		
		
</section>

<section id="B"  class="js-scroll-step">
  <center class="aboutme"><img src="http://fontmeme.com/embed.php?text=About%0A&name=
DEFTONE.ttf&size=70&style_color=15155E" alt="Retro Fonts"></center>
		<center class="about">
My name is Hayden Guthrie and i go to Pasadena High School, but you dont care about that. Right now the languages I'm learnig are HTML, CSS, Java, and spanish. Bla bla bla other stuff about me. I like to eat and sleep (those are my hobbies) in my free time when im not eating, sleeping or doing homework you can find me on the toilet. I like it there. </center>
</section>

<section id="C" class="js-scroll-step">
		<center class="projects"><img src="http://fontmeme.com/embed.php?text=Projects&name=
DEFTONE.ttf&size=70&style_color=15155E" alt="Retro Fonts"></center>
		<hr class="line2" color="white" width="30%">
		<div class="set1">
		<img class="spaces" src="images/insta.png" alt="" height="240" width="540">
		<img src="images/blog.png" alt="" height="240" width="540">
		</div>
		<div class="set2">
		<img class="spaces" src="images/port.png" alt="" height="240" width="540">
		<img src="images/hay.png" alt="" height="240" width="540">
		</div>
</section>

<section id="E" class="js-scroll-step">
		<center class="contact"><img src="http://fontmeme.com/embed.php?text=Contact&name=
DEFTONE.ttf&size=100&style_color=15155E" alt="Retro Fonts"></center>

 
         <center class="register">  
         	<?php
                require_once(__DIR__ . "/model/config.php");

            ?>
            <h1>Register</h1>
            <!-- goes to create-user page and displays whatevers there -->   <!-- used to create users -->
            <form class="register" method="post" action="<?php echo $path . "controller/create-user.php";?> ">
                <div id="name">
                    <!-- input box for user's username  -->
                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="Hayden Guthrie"/>
                </div>
                <div id="number">
                    <!-- input box for user's password -->
                    <label for="number">Phone: </label>
                    <input type="text" name="number" placeholder="(626) 298-2816"/>
                </div>
                <div id="email">
                    <!-- input box for user's email -->
                    <label for="email">Email: </label>
                    <input type="text" name="email" placeholder="seehaydeng@gmail.com"/>
                </div>
                <div id="other">
                    <!-- input box for user's username  -->
                    <label for="other">Other: </label>
                    <input type="text" name="other" placeholder="@HaydenGu3"/>
                </div>
                <div>
                    <!-- button to submit previous three input values -->
                    <button type="submit" class="btn btn-primary btn-lg" id="submitbutton" data-toggle="modal" data-target="#myModal">
                        Submit
                    </button>
                </div>
            </form>
            </center> 
     
</section>
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>




	</body>

	</div>
</html>