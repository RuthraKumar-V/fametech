<html>
<head>
<title>Aquila</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
$(function () {
$("#slider3").responsiveSlides({
auto: true,
pager:true,
nav:false,
speed: 500,
namespace: "callbacks",
before: function () {
$('.events').append("<li>before event fired.</li>");
},
after: function () {
$('.events').append("<li>after event fired.</li>");
}
});
});
</script>

</head>
<body>
<div class="banner-w3layouts" id="home">
<div class="header">
<nav class="navbar navbar-default">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<h1><a  href="Home.html">Aquila</a></h1>
</div>
<div class="top-nav-text">
<a class="page-scroll" href="#myModal2" data-toggle="modal" data-hover="LOGIN">LOGIN</a>
<a class="page-scroll" href="#myModal3" data-toggle="modal" data-hover="LOGIN">REGISTER</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li><a class="hvr-underline-from-center active scroll" href="Home.html">Home</a></li>
<li><a href="#Dishes" class="hvr-underline-from-center scroll">Dishes</a></li>
<li><a href="#Restaurants" class="hvr-underline-from-center scroll">Restaurants</a></li>
<li><a href="#contact" class="hvr-underline-from-center scroll scroll">Contact</a>
</ul>
</div>
<div class="clearfix"> </div>	
</nav>
</div>
<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
</div> 
<div class="modal-body login-page ">  
<div class="login-top sign-top">
<div class="agileits-login">
<h5>Login</h5>
<form action="#" method="post">
<input type="email" class="email" name="Email" placeholder="Email" required=""/>
<input type="password" class="password" name="Password" placeholder="Password" required=""/>
<div class="wthree-text"> 
<ul> 
<li>
<label class="anim">
<input type="checkbox" class="checkbox">
<span> Remember me ?</span> 
</label> 
</li>
<li> <a href="#">Forgot password?</a> </li>
</ul>
<div class="clearfix"> </div>
</div>  
<div class="w3ls-submit"> 
<input type="submit" Name="LOGIN" value="LOGIN">  	
</div>	
</form>
</div>  
</div>
</div>  
</div> 
</div>
</div>
<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
</div> 
<div class="modal-body login-page ">   
<div class="login-top sign-top">
<div class="agileits-login">
<h5>Register</h5>
<form action="Home.php" method="post">
<input type="text" name="Username" placeholder="Username" required=""/>
<input type="email"  name="Email" placeholder="Email" required=""/>
<input type="password" name="Password" placeholder="Password" required=""/>
<div class="wthree-text"> 
<ul> 
<li>
<label class="anim">
<input type="checkbox" class="checkbox">
<span> I accept the terms of use</span> 
</label> 
</li>
</ul>
<div class="clearfix"> </div>
</div>  
<div class="w3ls-submit"> 
<input type="submit" Name="Register" value="Register">  	
</div>	
</form>
</div>  
</div>
</div>  
</div>
</div>
</div>
<div class="w3l_banner_info">
<div class="col-md-7 slider">
<div class="callbacks_container">
<ul class="rslides" id="slider3">
<li>
<div class="slider_banner_info">
<h4>Delicious Foods</h4>
<p>Ready to eat quality food</p>
</div>
</li>
<li>
<div class="slider_banner_info">
<h4>Delivery unlimited</h4>
<p>Discover a better way of foodie</p>
</div>
</li>
<li>
<div class="slider_banner_info">
<h4>Delicious Foods</h4>
<p>Ready to eat quality food</p>
</div>
</li>
<li>
<div class="slider_banner_info">
<h4>Delivery unlimited</h4>
<p>Discover a better way of foodie</p>
</div>
</li>
</ul>
</div>
</div>
<div class="col-md-5 banner-form-agileinfo">
<form action="#" method="post">
<input type="text" class="email" name="name" placeholder="Name" required=""/>
<input type="email" class="password" name="email" placeholder="Email" required=""/>
<select class="form-control option-w3ls">
<option>Select Restaurant</option>
<option>Haribhavanam</option>
<option>Ammayi Veedu Pot Cook</option>
<option>Hotel Junior Kuppanna</option>
<option>Shahi Grill</option>
<option>Hotel Atchaya</option>
<option>Kattappas</option>
<option>Tiffinys</option>
<option>Namma Covai Kitchen</option>
</select>
<select class="form-control option-w3ls">
<option>Select Food</option>
<option>Unlimited meals with Curd(N/NV)</option>           
<option>Tawa Fish Fry</option>
<option>Special meals(Veg)</option>                        <option>Mandal Fish Fry</option>
<option>Cup Rice</option>                                  <option>Prawns Fry</option>
<option>Curd rice</option>                                 <option>Crab Masala</option>
<option>Chicken Briyani</option>                           <option>Fish Manchurian</option>
<option>Egg Briyani</option>                               <option>Pepper Fish</option>
<option>Mutton Briyani</option>                            <option>Crispy Fish</option>
</select>
<input type="text" class="email" name="item" placeholder="No of Item" required=""/>
<input type="text" class="email" name="Place" placeholder="Delivery Landmark" required=""/>
<select class="form-control option-w3ls">
<option>Type of Payment</option>
<option>Credit Card</option>
<option>Debit Card</option>
<option>Cash on Delivery</option>
</select>
<input type="submit" class="hvr-shutter-in-vertical" value="Place Order">  	
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
		
</div>

<div class="features" id="Dishes">
<div class="container">
<h2 class="title-w3">Delicious Foods for Delivery</h2>
<div class="w3-agile-top-info">	
<div class="w3-welcome-grids">
<div class="col-md-7 w3-welcome-left">
<h5>Breakfast</h5>
<pre><p>Idly                                      Dosai
Vada                                      Masala Dosai
Idiyappam Kurma                           Onion Dosai
Appam Kurma                               Ghee Roast
Pongal                                    Ghee Masala Dosai
Poori Masala                              Paper Roast
uthappam                                  Paper Masala Roast
</p>
</pre>
</div>
<div class="col-md-5 w3ls-welcome-img1">
<img src="images/img8.jpg" alt="" />
</div>
<div class="clearfix"> </div>
</div>
<div class="w3-welcome-grids w3-welcome-bottom">
<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
<img src="images/img9.jpg" alt="" />
</div>
<div class="col-md-7 w3-welcome-left">
<h5>Lunch & Dinner</h5>
<pre><p>Unlimited meals with Curd(N/NV)           Tawa Fish Fry
Special meals(Veg)                        Mandal Fish Fry
Cup Rice                                  Prawns Fry
Curd rice                                 Crab Masala
Chicken Briyani                           Fish Manchurian
Egg Briyani                               Pepper Fish
Mutton Briyani                            Crispy Fish
</p>
</pre>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
<div class="team" id="Restaurants">
<div class="col-md-6 agile-team-grids">
<div class="col-md-6 team-grid">
<div class="team-img">
<img src="images/img10.jpg" class="img-responsive" alt=" " />
<figcaption class="overlay">
<h4>Kattappas</h4>
<span>Saibaba Colony</span>
</figcaption>
</div>				
</div>
<div class="col-md-6 team-grid">
<div class="team-img">
<img src="images/img11.jpg" class="img-responsive" alt=" " />
<figcaption class="overlay">
<h4>Hotel Junior Kuppanna</h4>
<span>Peelamedu</span>
<div class="w3l-social">
</div>
</figcaption>
</div>			
</div>
<div class="col-md-6 team-grid">
<div class="team-img">
<img src="images/img12.jpg" class="img-responsive" alt=" " />
<figcaption class="overlay">
<h4>Ammayi Veedu Pot Cook</h4>
<span>Gandhipuram</span>
<div class="w3l-social">
</div>
</figcaption>
</div>					
</div>
<div class="col-md-6 team-grid">
<div class="team-img">
<img src="images/img13.jpg" class="img-responsive" alt=" " />
<figcaption class="overlay">
<h4>Haribhavanam</h4>
<span>Peelamedu</span>
<div class="w3l-social">
</div>
</figcaption>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="col-md-6 team-grid-text-agile">		
<h4 class="title-w3 two">Nearby Restaurants</h4>
<p>Haribhavanam, Peelamedu</p>
<p>Ammayi Veedu Pot Cook, Gandhipuram</p>
<p>Hotel Junior Kuppanna, Peelamedu</p>
<p>Kattappas, Saibaba Colony</p>
<p>Hotel Alankara Grand, Nehru Stadium</p>
<p>Namma Covai Kitchen, Kalapatti</p>
</div>
<div class="clearfix"> </div>
</div>

<?php
$con=mysqli_connect("localhost","root",""); 
if (!mysqli_select_db($con,"aquila"))    
die("Cant select database"); 
if(isset($_POST["Register"]) and $_POST["Register"]=="Register")
{ 
$name=$_POST["Username"];
$email=$_POST["Email"];
$pass=$_POST["Password"];
if($name=="" and $email=="" and $pass=="")
{
	echo '<script>';
	echo 'alert("Sorry, You have Missed some Details.. Try Once more");';
	echo '</script>';
}
else
{
$result = mysqli_query($con,"insert into login values('$name','$email','$pass')");
echo '<script>';
echo 'alert("Registered Successfully");';
echo '</script>'; 
}
}
mysqli_close($con);
?>

</body>
</html>