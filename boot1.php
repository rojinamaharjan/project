<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 20px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
      font-size: 25px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a  class="navbar-brand" href="#myPage">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About Us</a></li>
        <li><a href="#portfolio">Design</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">

  <h1><img src="lol.png" height=100 width=200>Tattoo Design & Appointment</h1> 
  <p>Tattoo:The soul Of Our skin!!!</p> 
  <form method="post" action="signin1.php">
    <div class="input-group">
      <input type="email" class="form-control" size="50" name="email" placeholder="Email Address" required>
      <input type="password" class="form-control" size="50" name="pass" placeholder="Password" required>
      <div class="input-group-btn">
        <button style="font-size:6" class="btn btn-danger"><h5>
        <input type="radio" name="login" value="user">user
        <input type="radio" name="login" value="owner">Owner<br/>
        <input type="submit" value="login" class="btn btn-danger"></br>
      </h5></button>
      </div>
    </div>
  </form>
  <form method="post" action="signup1.php">
  <p><input type="submit" class="btn btn-danger" value="Create a new" ></p>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Our Page</h2><br>
      <h4> The group of &#8220Tattoo design & appointments&#8221 most useful website.
        This site has some objectives which are given below:
          who are interested and want to get tattoo on their skin.
        For this, we have included necessary information about many  tattoo studio, their owners and tattoo artists
        found in different localities so that people can get the nearest tattoo studio wherever they like. Here,
        we can also see varieties of designs with their prices and can also upload their own designs which is very 
          useful for the clients to get desired design in a reasonable price. Next, the most important thing is that 
          they can arrange appointment date online whenever they want and whenever they are free which lend a hand to 
        save our client's valuable time going to different tattoo   studios and getting other all information
        In a nut shell, we can say the main aim of this website is to let the client get the nearest tattoo studio and
        desired tattoo designs in a reasonable price. Hope the clients enjoy using this site and utilize their time.
      </h4>
      <br>
    </div>
    <div class="col-sm-4">
      <br/>
      <br/>
      <br/>
      <br/>
      <img src="intro.png" alt="San Francisco" width="300" height="250">
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <br/>
      <img src="intro1.jpg" alt="San Francisco" width="300" height="250">
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Offering competitively-priced introductory tattoos to encourage &#8220tattoo newbies&#8221
Retaining high-quality artists to retain tattoo collectors
Offering a wide range of custom designs in different styles to broaden appeal
Selling additional products with designs by the tattoo artists to build an additional revenue stream
The body of work of the artist - Beginning with the tattoos on the body of the artist 
(if a customer doesn't like these designs and the taste of the artist, he or she may have second thoughts) 
and including the flash art created by the artist.</h4><br>
    </div>
  </div>
</div>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Our Design</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="japanese.jpg" alt="Paris" width="300" height="300">
        <p><strong>Japanese</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="tribal.jpg" alt="San Francisco" width="300" height="300">
        <p><strong>Tribal</strong></p>
      </div>
    </div>
  <div class="col-sm-4">
      <div class="thumbnail">
        <img src="finelines.jpg" alt="San Francisco" width="300" height="300">
        <p><strong>Finelines</strong></p>
      </div>
    </div>
  <div class="col-sm-4">
      <div class="thumbnail">
        <img src="traditional.jpg" alt="San Francisco" width="300" height="300">
        <p><strong>Traditional</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="geometric.jpg" alt="New York" width="300" height="200">
        <p><strong>Geometric</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="horror.jpg" alt="New York" width="300" height="200">
        <p><strong>Horror</strong></p>
      </div>
    </div>
  </div>,
</div>
 <center> <h2>Latest Work</h2></center>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-tYes, San Fran is ourso="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <center><img src="a.png" alt="New York" width="400" height="200">
        <p><strong>Ink Insipiration</strong></p></center>
      </div>
      <div class="item">
       <center><img src="b.png" alt="New York" width="400" height="200">
        <p><strong>Kathmandu Tattoo House</strong></p></center>
      </div>
      <div class="item">
       <center><img src="c.png" alt="New York" width="400" height="200">
        <p><strong>Tatto Dssign House</strong></p></center>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">FeedBack</h2>
  <div class="row">
    <div style="color:red" class="col-sm-5">
      <h1>Contact us</h1>
      <p><span class="glyphicon glyphicon-map-marker"></span> Kathmandu,Nepal</p>
      <p><span class="glyphicon glyphicon-phone"></span> 9860579953,9860578894</p>
      <p><span class="glyphicon glyphicon-envelope"></span>tattogroup@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer style="color:black" class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made BY TattooGroup</p>
    <p><em>Copyright &copy; 2009-2018&nbsp;tattoo design& appointment. All Rights Reserved.<br>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
