<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Shipping</title>
</head>

<style>
    body {
  margin: 0;
  color: #222222;
  font-size: 1em;
  font-family: "Open Sans", "Helvetica Neue", sans-serif;
}

/*---------- heading ----------- */
.masthead {
  padding: 15em 0;
  background-image: url("../img/ship.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  border-top: 1em solid #ffcf33;
}

.masthead-heading {
  font-size: 6em;
  font-family: "Open Sans", "Helvetica Neue", sans-serif;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: -0.02em;
  text-shadow: 1.5px 3px 0px #edc647;
  color: #f7e199;
  margin-top: -0.2em;
}
.masthead-intro {
  font-size: 2em;
  font-family: "Gentium Book Basic", Georgia, serif;
  text-align: center;
  color: #e5e5e5;
  margin-bottom: 0.1em;
}

/*---------- section ----------- */
.intro,
.where-Im-from,
.more-about-me {
  max-width: 38em;
  margin-left: auto;
  margin-right: auto;
  margin-top: 2em;
  text-align: left;
}

.bold {
  font-weight: bold;
}

.intro > p,
.where-Im-from > p,
.more-about-me > p {
  font-weight: 300;
  letter-spacing: 0.05em;
}

section > h1 {
  font-size: 30px;
  font-family: sans-serif;
  font-weight: bold;
  margin-bottom: 50px;
  padding-top: 30px;
}

.more-about-me > h2 {
  font-size: 1.2em;
  font-family: "Gentium Book Basic";
  font-weight: bold;
  color: #f7e199;
}

/*---------- footer ----------- */
.content-footer {
  margin-top: 8em;
  padding-top: 4em;
  padding-bottom: 4em;
  background-color: #ffcf33;
}

.content-footer > p {
  font-weight: 300;
  text-align: center;
  letter-spacing: 0.05em;
  font-family: "Open Sans";
}

footer > ul {
  padding: 0;
  margin: 0;
  text-align: center;
}

footer ul li {
  list-style-type: none;
  display: inline;
}

.content-footer a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

a:hover {
  color: #000;
}

@media only screen and (max-width: 500px) {
  .masthead {
    padding: 3em 0;
  }
  .masthead-heading {
    font-size: 3em;
  }
  .intro,
  .where-Im-from,
  .more-about-me,
  .content-footer {
    font-size: 0.5em;
  }
}

</style>

{{-- STYLE UNTUK NAVBAR --}}
<style>
  * {box-sizing: border-box;}
  
  body { 
    margin: 0;
  }
  
  #navbar {
    overflow: hidden;
    background-color: #ffffff;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
    padding: 30px 10px;
    transition: 0.4s;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99;
  }
  
  #navbar a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 25px;
    border-radius: 4px;
    margin-top: 15px;
  }
  
  #navbar #logo {
    font-size: 25px;
    font-weight: bold;
    transition: 0.4s;
  }
  
  #navbar a:hover {
    background-color: #ddd;
    color: black;
  }
  
  #navbar a.active {
    background-color: dodgerblue;
    color: white;
  }
  
  #navbar-right {
    float: right;
  }

  </style>

<style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to bottom right, rgb(255, 255, 128), rgb(120, 253, 120));
  }
  
  .topnav {
    overflow: hidden;
  }
  
  .topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    background-color: #ddd;
  }
  
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  .topnav .icon {
    display: none;
  }
  
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
  </style>

<body>

  <div class="site">
	
    <div id="navbar">
      <div class="topnav" id="myTopnav">
      <img src="../img/ptlogo.png" alt="logo" style="width: 100px; height: 80px; display: inline-block;" id="logo">
      <div id="navbar-right">
        <a href="/">Home</a>
        <a href="/product">Product</a>
        <a href="/reviews">ACNE STORY</a>
        <a href="/article">Article</a>

        @if (Route::has('login'))
        @auth
  			<a href="{{ url('/toko') }}"><i class="fa-solid fa-house-user"></i> Dashboard</a>
        @else
  			<a href="{{ route('login') }}"><i class="fa-solid fa-image-portrait"></i> Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}"><i class="fa-solid fa-image-portrait"></i> Register</a>
        @endif
          @endauth
        @endif

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
        {{-- <a href="{{ route('register') }}"><i class="fa-solid fa-user"></i> </a> --}}
      </div>
    </div>
    </div>

    <br><br><br><br><br>
    <header class="masthead">
        <p class="masthead-intro">#Prettywell</p>
        <h1 class="masthead-heading">Shipping</h1>
      </header>
      <section class="intro">
        <h1>Shipping</h1>
      </section>
      <section class="where-Im-from">
        <a href="https://jet.co.id/" target="_blank"><img src="../img/jet.jpg" alt="shopee" style="display: inline-block; width: 40%; height: 40%; margin-right: 20px;"></a>
        <a href="https://www.sicepat.com/" target="_blank"><img src="../img/cepat.jpg" alt="tokped" style="width: 50%; display: inline-block;"></a>
        <a href="https://anteraja.id/" target="_blank"><img src="../img/anter.png" alt="anteraja" style="width: 50%; display: inline-block;"></a>


      </section>
      <section class="more-about-me">
        
      </section>
      <footer class="content-footer">
        <p>Say hi to me on these social media:</p>
        <ul class="social">
          <li><a href="https://www.instagram.com/prettywell.co/" target="_blank">Instagram</a></li>
          <li><a href="https://twitter.com/prettywell_co" target="_blank">Twitter</a></li>
          <li><a href="https://www.tiktok.com/@prettywell.co" target="_blank">Tiktok</a></li>
        </ul>
      </footer>

      <script>
        // JS UNTUK NAVBAR
        window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
      document.getElementById("navbar").style.padding = "15px 10px";
      document.getElementById("logo").style.fontSize = "15px";
    } else {
      document.getElementById("navbar").style.padding = "20px 10px";
      document.getElementById("logo").style.fontSize = "25px";
    }
  }
      </script>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>

</body>
</html>