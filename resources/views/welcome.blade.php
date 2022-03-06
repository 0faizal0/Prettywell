<!DOCTYPE html>
<html style="background-color: #130d0a; width: 100%; scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
    

<style>
    /* Style the body */
    body {
      font-family: "Playfair Display", serif;
      color: #fff;
      transition: opacity 3s;
    }
    
    /* Header/Logo Title */
    .header {
      text-align: center;
      color: white;
      font-size: 1.2em;
      width: 100%;
      height: 1080px;
      background-color: #130d0a;
      padding-top: 5px;
    }
    .aboutus {
      padding-top: 20px;
      width: 100%;
      height: 600px;
      background-color: #130d0a;
    }
    

.button:link, .button:visited {
  position: relative;
  right: 30px;
  top: 10px;
  margin-left: 20px;
  border-radius: 10px;
  float: right;
  background-color: #f44336;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.button:hover, .button:active {
  background-color: red;
}

p{
  color: black;
}
#judul{
  /* position: relative;
  top: 200px;
  right: 300px; */
  margin-top: 200px;
  margin-left: 30px;
  color: black;
  font-family: cursive;
  /* mix-blend-mode: overlay; */
  font-size: 50px;
}
#about{
  position: relative;
  top: 150px;
  left: 20px;
  font-size: 26px;
  color: white;
  text-align: center;
}
.read:link {
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: relative; 
  bottom: 20px;
}

.read:visited{
  color: #946500;
  text-decoration: none;
}

.read:hover{
  color: #ffba26;
  text-decoration: none;
}

.read2:link, .read2:visited {
  background-color: #ffdb8e;
  padding: 70px 65px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: relative; 
  right: 100px;
  top: 30px;
  border-radius: 20px;
  color: black;
  font-size: 40px;
}
.read2:hover, .read2:active {
  background-color: rgb(255, 233, 137);
}

#kontak:link, #kontak:visited {
  color: white;
  border: 2px solid #5D63A2;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  background-color: #f44336;
  border-radius: 5px;
}
#kontak:hover, #kontak:active {
  background-color: #5D63A2;
  color: white;
}

#menu{
  position: relative;
  left: 200px;
  text-decoration: none;
  margin-left: 20px;
  font-size: 20px;
  top: 15px;
}
.topnav {
  width: 100%;
  background-color: #130d0a;
  border-bottom: 1px solid gray;
  position: fixed;
  z-index: 1;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 7px 8px;
  text-decoration: none;
  font-size: 1.2em;
  margin-top: 1%;
  margin-bottom: 2%;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  border-radius: 10px;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1300px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1300px) {
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

#contactus{
  padding-top: 200px;
  padding-bottom: 300px;
  width: 100%;
  height: 250px;
  position: relative;
  bottom: 10px;
  background-color: #130d0a;
}
#ourteam{
  width: 100%;
  height: 1200px;
  background-color: #130d0a;
  padding-top: 50px;
}
#imgteam{
  
}
#ourmisi{
  padding-top: 50px;
  width: 100%;
  height: 600px;
  background-color: #130d0a;
}

#hero {
  width: 100%;
  height: 800px;
  overflow: hidden;
  position: relative;
}

#content {
  background-color: #130d0a;
  width: 100%;
}

.layer {
  background-position: bottom center;
  background-size: auto;
  background-repeat: no-repeat;
  width: 100%;
  height: 800px;
  position: fixed;
  z-index: -1;
}

#hero-mobile {
  display: none;
  background: url("https://i.ibb.co/d7hw559/full-illustration.png") no-repeat center bottom/cover;
  height: 320px;
}

.first-section {
  padding: 50px 0 20px 0;
}

.text-header {
  font-size: 50px;
  text-align: center;
}

h1 {
  line-height: 120%;
  margin-bottom: 30px;
}

p {
  color: #ede0d5;
  font-size: 18px;
  line-height: 150%;
}

#hero,
.layer {
  min-height: 800px;
}

.layer-bg {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_bg.jpg");
}

.layer-1 {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_03.png");
  background-position: left bottom;
}

.layer-2 {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_02.png");
}

.layer-3 {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_man.png");
  background-position: right bottom;
}

.layer-4 {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_01.png");
}

.layer-overlay {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_overlay.png");
}

@media only screen and (max-width: 768px) {
	#hero {
		display: none;
	}
	#hero-mobile {
		display: block;
	}
}

    </style>

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

    <title>Asteriks</title>
</head>
<body onload="document.body.style.opacity='1'">
  
  <script>
    (function() {
  window.addEventListener('scroll', function(event) {
    var depth, i, layer, layers, len, movement, topDistance, translate3d;
    topDistance = this.pageYOffset;
    layers = document.querySelectorAll("[data-type='parallax']");
    for (i = 0, len = layers.length; i < len; i++) {
      layer = layers[i];
      depth = layer.getAttribute('data-depth');
      movement = -(topDistance * depth);
      translate3d = 'translate3d(0, ' + movement + 'px, 0)';
      
      layer.style['-webkit-transform'] = translate3d;
      layer.style['-moz-transform'] = translate3d;
      layer.style['-ms-transform'] = translate3d;
      layer.style['-o-transform'] = translate3d;
      layer.style.transform = translate3d;
    }
  });

}).call(this);

  </script>

  <header>
    <div class="topnav" id="myTopnav">
      <a id="menu" href="#" style="position: relative; left: 10%; padding-left: 5px; padding-right: 5px;"><i class="fa-solid fa-gamepad"></i> Asteriks</a>
      <a id="menu" href="#contactus" style="padding-left: 5px; padding-right: 5px;"><i class="fa-solid fa-phone"></i> Contact Us</a>
      <a id="menu" href="#aboutus" style="padding-left: 5px; padding-right: 5px;"><i class="fa-solid fa-users"></i> About Us</a>
      <a id="menu" href="#ourmisi" style="padding-left: 5px; padding-right: 5px;"><i class="fa-solid fa-clipboard-list"></i> Our Mission</a>
      <a id="menu" href="#ourteam" style="padding-left: 5px; padding-right: 5px;"><i class="fa-solid fa-id-card"></i> Our Team</a>
      <a id="menu" href="#article" style="padding-left: 5px; padding-right: 5px;"><i class="fa-solid fa-newspaper"></i> Article</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
      </a>
      @if (Route::has('login'))
          @auth
              <a href="{{ url('/dashboard') }}" class="button"><i class="fa-solid fa-house-user"></i> Dashboard</a>
          @else
              <a href="{{ route('login') }}" class="button"><i class="fa-solid fa-user-ninja"></i> Login</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="button"><i class="fa-solid fa-user-ninja"></i> Register</a>
              @endif
          @endauth
          @endif
    </div>
  </header>

  <div id='hero'>
    <div class='layer-bg layer' data-depth='0.10' data-type='parallax'></div>
    <div class='layer-1 layer' data-depth='0.20' data-type='parallax'></div>
    <div class='layer-2 layer' data-depth='0.50' data-type='parallax'></div>
    <div class='layer-3 layer' data-depth='0.80' data-type='parallax'></div>
    <div class='layer-overlay layer' data-depth='0.85' data-type='parallax'></div>
    <div class='layer-4 layer' data-depth='1.00' data-type='parallax'></div>
  </div>

  <div id='hero-mobile'>
  </div>

{{-- <div id='content'>
  <div class='container'>
    <section class='first-section'>
      <p style="color: black; position: font-size: 3em; font-family: 'Redressed', cursive;" data-aos="fade-down" data-aos-duration="2000">Welcome to website community Asteriks</p>
      <hr style="width: 50%; color: #130d0a; background-color: #130d0a; height: 3px;" data-aos="fade-up" data-aos-duration="2000">
    </section>
  </div>
</div> --}}
  
    <div class="header">
      {{-- <hr style="width: 10%; height: 2px; position: relative; left: 1%; bottom: 20px;" data-aos="fade-up-right">
      <hr style="width: 10%; height: 2px; position: relative; left: 88%; bottom: 20px;" data-aos="fade-up-left"> --}}

      <p style="color: white; font-family: 'Redressed', cursive; font-size: 3em;" data-aos="fade-down" data-aos-duration="1500">Welcome to website community Asteriks</p>
      <hr style="width: 50%; color: #130d0a; background-color: #130d0a; height: 3px; margin-left: auto; margin-right: auto; position: relative; bottom: 50px;" data-aos="fade-up" data-aos-duration="1500">

            <div id="contactus">
              <p style="font-size: 0.9em;" data-aos="fade-left">Have Any Question !</p>
              <p style="font-size: 2em;" data-aos="fade-right">Don't Hesitate to Contact Us <br> Any Time</p>
              <a id="kontak" href="/form" data-aos="fade-left"> Contact Us</a>
            </div>
            <img src="../images/kontak.png" alt="contactUs" style="position: relative; bottom: 200px; right: 450px;" data-aos="fade-right">

            {{-- <hr style="width: 10%; height: 2px; position: relative; left: 1%; bottom: 20px;" data-aos="fade-up-right">
            <hr style="width: 10%; height: 2px; position: relative; left: 88%; bottom: 20px;" data-aos="fade-up-left"> --}}

            <div class="aboutus" id="aboutus">
              <p id="about" data-aos="fade-down">About Us</p>
              {{-- <hr style="width: 50%; height: 2px; position: relative; top: 145px; left: 27%;" data-aos="zoom-in"> --}}
              <p id="about" data-aos="fade-up">We created this website for our community to communicate through the website,<br>
                build our community more solid with chat system, and give us some updates <br>
                for events or news with articles. </p>
                <img src="../images/about2.png" alt="aboutUs" style="position: relative; right: 500px;" data-aos="fade-left">
            </div>

            <div id="ourmisi">
              <p style="font-size: 40px;" data-aos="fade-up">Our Mission</p>
              <hr style="width: 10%; height: 2px; position: relative; left: 45%; bottom: 40px;" data-aos="zoom-in">
              <p data-aos="fade-up">'To make this community more solid'</p>
              <hr style="width: 10%; height: 2px; position: relative; left: 45%; bottom: 10px;" data-aos="zoom-in">
              <p data-aos="fade-up">'To make this community more bigger'</p>
              <hr style="width: 10%; height: 2px; position: relative; left: 45%; bottom: 10px;" data-aos="zoom-in">
              <p data-aos="fade-up">'To make this website more popular'</p>
              <hr style="width: 10%; height: 2px; position: relative; left: 45%; bottom: 10px;" data-aos="zoom-in">
              <p data-aos="fade-up">'To make the people have fun in our community'</p>
              <hr style="width: 10%; height: 2px; position: relative; left: 45%; bottom: 10px;" data-aos="zoom-in">
              <img src="../images/misi.png" alt="misi" style="position: relative; right: 450px; bottom: 250px;" data-aos="fade-right">
            </div>

            <div class="w3-third w3-container w3-margin-bottom" id="ourteam">
              <p style="font-size: 40px;" data-aos="fade-up">Our Team</p>
              <hr style="width: 10%; height: 2px; position: relative; left: 45%; bottom: 40px;" data-aos="zoom-in-right">

              <img src="../images/team1.png" alt="team1" id="imgteam">
              <p style="font-size: 1em; display: inline-block;" data-aos="fade-up">M. Faizal Zantri P.</p>

              <img src="../images/team2.png" alt="team2" id="imgteam">
              <p style="font-size: 1em; display: inline-block;" data-aos="fade-up">Wisnu Arya Tegar A.</p>

              <img src="../images/team3.png" alt="team3" id="imgteam">
              <p style="font-size: 1em; display: inline-block;" data-aos="fade-up">Ridwan Asy'ari</p>
              
              
            </div> 
        
    <!-- First Photo Grid-->
    <div style="background-color: #130d0a; width: 100%; height: 1800px;">
    <p style="color: #68461a; font-size: 50px; background-color: #130d0a;" data-aos="fade-up">Our Articles</p>
    @foreach ($posts as $post)
  
    <div class="w3-third w3-container w3-margin-bottom" data-aos="fade-up" style="background-color: #130d0a;" id="article">
      
      <img src="{{ URL($post->image_path) }}" alt="Image" style="width:100%; height: 250px;" class="w3-hover-opacity">
      <div style="width:90%; margin-left: 21px; background-color: #130d0a;">
        <p><b>{{ $post->title }}</b></p>
        <p style="text-align: left;">{{ Str::limit($post->body, 120) }}</p>

        <a href="/detail/{{ $post->id }}" class="read">Read More</a>
        
      </div>
    </div>
    @endforeach

    <a href="/article" class="read2">></a>

            </div>
          
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </div>
</body>
</html>