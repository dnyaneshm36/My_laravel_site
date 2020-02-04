



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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










</style>
</head>
<body>


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
                                             
                                              <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>

                                              @if (Route::has('register'))
                                                  <a href="{{ route('register') }}">Register</a>
                                              @endif
                                          @endauth
                                      
                                  @endif
  </div>
</div>


                </div>


<h2 style="text-align:center">Dnyanesh</h2>

            </div>
        </div>
    </div>
</div>
<div class="about-section">
  
  <p>This site is made for testing purpose.</p>
  <p>We bring you closer to<br>
   things you like</p>
   <p>We put people first, and valuable<br>
    craft and simplicity in our work. <br>
 create and share. Join us!</p>
  <p>create by dnyaneshwar.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img 

      src="data:image/jpeg;base64,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" 


      alt="Dnyaneshwar" style="width:100%">
      <div class="container">
        <h2>Dnyanesh</h2>
        <p class="title">CEO & Founder</p>
       
        <p>Computer Science Engineer, The One who Turns Coffee into Code.</p>
        <p>dmogal36@gmail.com</p>
        <p>9511840289</p>
        <p>

<form    action={{ url('https://www.linkedin.com/in/dnyaneshwar-mogal-82971415b/') }}  target="_blank">
   <button class="button" type="submit" >Contact</button>
</form>
          

        </p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://media-exp1.licdn.com/dms/image/C5103AQHRhBR9-N_nJA/profile-displayphoto-shrink_800_800/0?e=1586390400&v=beta&t=RrGqZeO-2CDM_mhtfG2b0kJqDE82tHMm0PhRxvbwJlQ" alt="parag" style="width:100%">
      <div class="container">
        <h2>Parag more</h2>
        <p class="title">Art Director</p>
        <p>Cofounder at SchoolTie.</p>
        <p>paragmore306@gmail.com</p>
          <p>8605976910</p>
        <p>

<form    action={{ url('linkedin.com/in/parag-more-') }}  target="_blank">
   <button class="button" type="submit" >Contact</button>
</form>
          

        </p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img

       src="https://media-exp1.licdn.com/dms/image/C5103AQFQwCsaS5VgsQ/profile-displayphoto-shrink_800_800/0?e=1586390400&v=beta&t=Ymk0IAXT6PLQD0loaG9OBBmXsqoYEaRU1wPdpHLtNBg" 


      alt="John" style="width:100%">
      <div class="container">
        <h2>Aniket Jadhav</h2>
        <p class="title">developer</p>
        <p>Bcz computer is not just a machine for me... 
            
          </p>
        <p>aniket.jadhav.8151@gmail.com</p>
        <p>9860797374</p>
        <p>

<form    action={{ url('https://www.linkedin.com/in/ajstyle') }}  target="_blank">
   <button class="button" type="submit" >Contact</button>
</form>
          

        </p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
