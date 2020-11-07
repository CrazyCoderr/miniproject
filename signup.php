<!DOCTYPE html>
<html>

<head>
<!--Icon-->
  <link rel="shortcut icon" href="icon_1.png" type = "image/png" sizes="16*16" >	
	<link rel="icon" href="icon_1.png" type = "image/png" sizes="16*16" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TuriGo India</title>

  <!-- style-css -->
  <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="css/animate-custom.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">


  <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>


  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
<div class="smartphone-content" >
<div class="laptop-content" >


  <section id="title">

    <!-- Nav Bar -->
    <div class="container-fluid">

          <nav class="navbar navbar-expand-lg navbar-dark ">

            <img class="navbar-brand rounded-sm" src="images/logo.png" alt="my-logo" height="100" >
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                      <li><a class="nav-link" href="homepage.html">Home</a></li>
							<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
							<li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
							<li class="nav-item"><a href="contact.html"class="nav-link">Contact</a></li>
                  </ul>
                </div>
          </nav>



  </section>
<div>
            <section id="form">					
                <div id="container"  style="background-color: #ff8e6e;" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="login.php" method="post" > 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email</label>
                                    <input id="email" name="email" required="required" type="text" placeholder="abc@gmail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password"  placeholder="password"/> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
				  <?php
session_start();
          $host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = dcjrfn9ert59om";
   		$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   		$db = pg_connect( "$host $port $dbname $credentials");

   /* Create a query statement */
   $qry = pg_query($db,"SELECT * FROM logind WHERE email = '$_POST[email]' and password = md5('$_POST[password]') ");
   $row= pg_num_rows($qry);
$_SESSION['email']= $_POST[email];
    if($row > 0)
    { include_once("dashboard.html"); }
    else 
    { echo " Email or Password is inncorrect";  } 

pg_close($db);
?> 
                                <p class="login button"> 
                                     <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form action="connect.php" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="abc@gmail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="password_confirm" required="required" type="password" placeholder="password"/>
                                </p>
                                <p class="signin button"> 
					<input type="submit" id ="Signup" name = "Signup" value="Signup"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
</div>

  
    <!-- carousel-slider -->
	<section id="testimonials">
    <h3 class="sevices-text"><i class="fa fa-heart" aria-hidden="true"></i>OUR SERVICES<i class="fa fa-heart" aria-hidden="true"></i></h3>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause = "hover">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">Book fully sanitised AC Buses with full safety and Discounts.</h2>
          <img class="testimonial-image" src="images/bus.png" alt="Bus-image"><br>
          <em>Full AC,WIFI,Charging ports.</em>
        </div>
        <div class="carousel-item">
          <h2>Book Cabs at lowest price with comfortable rides</h2>
          <img src="images/cabs.jpg" class="testimonial-image" alt="Taxi"><br>
          <em>Fully Ac cabs with WIFI and Jack</em>
        </div>
        <div class="carousel-item" >
          <h2>Want to shift home but need a transport Like: Truck.</h2>
          <img src="images/truck.png" class="testimonial-image" alt="truck"><br>
          <em>Shift your home full safety of your house furniture.</em>
        </div>
        <div class="carousel-item">
          <h2>We have promised you to provide you comfort.</h2>
          <img src="images/lady.jpg" class="testimonial image" alt="lady"><br>
          <em>Book now to avial first free rides and exiting offers.</em>
        </div>
        <div class="carousel-item">
          <h2>We are growing our network day by day.</h2>
          <img src="images/network.jpg" class="testimonial-image" alt="network"><br>
          <em>Our network growing very fast to give you more comfort.</em>
        </div>
	  <div class="carousel-item" >
          <h2 class="testimonial-text">Our users.</h2>
          <img src="images/cab.jpg" class="testimonial-image" alt="cab-driver"><br>
          <em>I belived in TuriGo.</em>
        </div>
        <div class="carousel-item" >
          <h2 class="testimonial-text">Our users.</h2>
          <img src="images/lady_cab.jpg" class="testimonial-image" alt="cab-driver"><br>
          <em>I belived in TuriGo.</em>
        </div>
        <div class="carousel-item" >
          <h2 class="testimonial-text">Our Customer.</h2>
          <img src="images/thanks.jpg" class="testimonial-image" alt="girl"><br>
          <em>I belived in TuriGo,found safe rides with discounts.</em>
        </div>

      </div>
    </div>



  </section>


  <!-- Press -->

  <section id="press" class="coloured-section">
    <img class="press-logo"src="images/Niet_logo.png" alt="niet-logo" >
    <img class="press-logo"src="images/jagran.jpg" alt="news-logo" >
    <img class="press-logo"src="images/pubg.png" alt="biz-insider-logo" >
    <img class="press-logo"src="images/free.png" alt="mashable-logo" >

  </section>

  <!-- Footer -->

  <footer id="footer">


    <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
    <i class="social-icon fa fa-facebook-square" aria-hidden="true"></i>
    <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
    <i class="social-icon fa fa-envelope" aria-hidden="true"></i>
    <p>© Copyright 2020 TouriGo India</p>

  </footer>

</div>
</div>
</body>

</html>
