<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dnyanesh</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- Styles -->
       <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
.topnav {
  overflow: hidden;
  background-color:rgb(230, 255, 255);
}

.topnav a {
  float: left;
  color: #636b6f;
  text-align: center;
  padding: 13px 25px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgb(242, 255, 255);
  color: black;
}

.topnav-right {
  float: right;
}





* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {



    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
    max-height:  35%
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;

  margin-left: 20%;
  margin-right: 20%;

}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 20%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

        </style>
    </head>
    <body>



  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  
<div class="topnav">
<a class="active"  href="{{ url('/home') }}"><i class="fa fa-home"></i>Home</a>
<a   href="{{ url('/about') }}"><i class='fas fa-info-circle'></i>About</a>
  <div class="topnav-right">
                                  @if (Route::has('login'))
                                    
                                          @auth
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  @if (auth()->user()->photo)
                                  <?php
                                  $file=auth()->user()->photo;
                                  $file= 'storage/upload/'.$file;

                                  ?>
                                      <img src="https://www.herokucdn.com/images/ninja-avatar-96x96.png" style="width: 40px; height: 40px; border-radius: 50%;">
                                  @endif
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                          @else
                                             
                                              <a href="{{ route('login') }}">Login</a>

                                              @if (Route::has('register'))
                                                  <a href="{{ route('register') }}">Register</a>
                                              @endif
                                          @endauth
                                      
                                  @endif
  </div>
</div>


                </div>


<h2 style="text-align:center">Slideshow Gallery</h2>

            </div>
        </div>
    </div>
</div>


<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 /5</div>
    <img src="https://cdn.getyourguide.com/niwziy2l9cvz/3GUaQnoPPieeoyIUugKCiy/48903610af912c99dbcbecb8c360c1b4/taj_mahal-agra-15x850.jpg" style="width:100%" align="middle">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 5</div>
    <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 5</div>
    <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 5</div>
    <img src="https://www.w3schools.com/howto/img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 5</div>
    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
  </div>
    

    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">

    <div class="column">
      <img class="demo cursor" src="https://www.w3schools.com/howto/img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Taj mahal">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.w3schools.com/howto/img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="City">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.w3schools.com/howto/img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.w3schools.com/howto/img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
    </div>    
    <div class="column">
      <img class="demo cursor" src="https://cdn.getyourguide.com/niwziy2l9cvz/3GUaQnoPPieeoyIUugKCiy/48903610af912c99dbcbecb8c360c1b4/taj_mahal-agra-15x850.jpg" style="width:100%" onclick="currentSlide(6)" alt="Nature and sunrises">
    </div>

  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

    </body>
</html>
