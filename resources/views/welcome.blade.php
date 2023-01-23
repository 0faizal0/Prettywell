<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="../css/loader.css" />
<link rel="stylesheet" type="text/css" href="../css/navbar.css" />
<link rel="stylesheet" type="text/css" href="../css/home2.css" />
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600&family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prettywell</title>
</head>

<style>

a {
  color: currentColor;
}

p {
  margin: 0 0 20px 0;
}

h2 {
  margin: 0 0 14px 0;
  font-size: 1.8rem;
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

.credits {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 20;
  font-size: 12px;
  padding: 10px;
}

.button {
  padding: 10px 12px;
  color: var(--blue);
  background-color: #fff;
  text-decoration: none;
  display: inline-block;
  border-radius: 3px;
}

.dialog {
  position: fixed;
  padding: 0;
  display: flex;
  height: 100vh;
  width: 100%;
  overflow: auto;
  background: rgba(255, 255, 255, 0.6);
  transition: opacity 300ms ease-in-out, visibility 300ms ease-in-out;
}
.dialog[aria-hidden="true"] {
  opacity: 0;
  visibility: hidden;
}

.dialog[aria-hidden="true"] .dialog__wrapper {
  transform: scale(0.8);
}
.dialog__wrapper {
  margin: auto;
  padding: 60px 40px;
  width: 700px;
  max-width: calc(100% - 40px);
  color: #fff;
  background: var(--blue);
  border-radius: 3px;
  max-height: calc(100vh - 40px);
  overflow: auto;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  position: relative;
  transition: transform 300ms ease-in-out;
}

.dialog__button {
  -webkit-appearance: none;
  appearance: none;
  margin: 0;
  padding: 0;
  border: 0;
  color: #fff;
  background: transparent;
  cursor: pointer;
  transition: all 300ms ease-in-out;
}

.dialog__button--close {
  position: absolute;
  top: 20px;
  right: 20px;
}

.dialog__button--open {
  position: fixed;
  bottom: 0;
  right: 2%;
  padding: 10px;
  background-color: var(--blue);
  opacity: 0;
  border-radius: 3px 3px 0 0;
  visibility: hidden;
  transform: translateY(100%);
  &.dialog__button--toggle {
    transform: translateY(0);
  }
}

.dialog__button--toggle {
  opacity: 1;
  visibility: visible;
}

.dialog__button-label {
  margin-right: 10px;
  display: inline-block;
  vertical-align: middle;
}
.dialog__button-icon {
  display: inline-block;
  vertical-align: top;
}

</style>

{{-- STYLE UNTUK SLIDESHOW --}}
<style>
  .slider,
.slider > div {
    /* Images default to Center Center. Maybe try 'center top'? */
    background-position: center center;
    display: block;
    width: 100%;
    height: 800px;
    /* height: 100vh; */ /* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    overflow: hidden;
    -moz-transition: transform 0.4s;
    -o-transition: transform 0.4s;
    -webkit-transition: transform 0.4s;
    transition: transform 0.4s;
}

.slider > div {
    position: absolute;
}

.slider > i {
    color: #5bbd72;
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 40%;
    text-shadow: 0 10px 2px #223422;
    transition: 0.3s;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    line-height: 0;
    box-sizing: content-box;
    border-radius: 3px;
    z-index: 4;
}

.slider > i svg {
    margin-top: 3px;
}

.slider > .left {
    left: -100px;
}
.slider > .right {
    right: -100px;
}
.slider:hover > .left {
    left: 0;
}
.slider:hover > .right {
    right: 0;
}

.slider > i:hover {
    background: #fff;
    background: rgba(255, 255, 255, 0.8);
    transform: translateX(-2px);
}

.slider > i.right:hover {
    transform: translateX(2px);
}

.slider > i.right:active,
.slider > i.left:active {
    transform: translateY(1px);
}

.slider:hover > div {
    transform: scale(1.01);
}

.hoverZoomOff:hover > div {
    transform: scale(1);
}

.slider > ul {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 4;
    padding: 0;
    margin: 0;
    transform: translateX(-50%);
}

.slider > ul > li {
    padding: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    list-style: none;
    float: left;
    margin: 10px 10px 0;
    cursor: pointer;
    border: 1px solid #fff;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.slider > ul > .showli {
    background-color: #7ec03d;
    -moz-animation: boing 0.5s forwards;
    -o-animation: boing 0.5s forwards;
    -webkit-animation: boing 0.5s forwards;
    animation: boing 0.5s forwards;
}

.slider > ul > li:hover {
    background-color: #7ec03d;
}

.slider > .show {
    z-index: 1;
}

.hideDots > ul {
    display: none;
}

.showArrows > .left {
    left: 0;
}

.showArrows > .right {
    right: 0;
}

.titleBar {
    z-index: 2;
    display: inline-block;
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    transform: translateY(100%);
    padding: 20px 30px;
    transition: 0.3s;
    color: #fff;
}

.titleBar * {
    transform: translate(-20px, 30px);
    transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
    opacity: 0;
}

.titleBarTop .titleBar * {
    transform: translate(-20px, -30px);
}

.slider:hover .titleBar,
.slider:hover .titleBar * {
    transform: translate(0);
    opacity: 1;
}

.titleBarTop .titleBar {
    top: 0;
    bottom: initial;
    transform: translateY(-100%);
}

.slider > div span {
    display: block;
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    bottom: 0;
    color: #fff;
    text-align: center;
    padding: 0;
    width: 100%;
}

@keyframes boing {
    0% {
        transform: scale(1.2);
    }
    40% {
        transform: scale(0.6);
    }
    60% {
        transform: scale(1.2);
    }
    80% {
        transform: scale(0.8);
    }
    100% {
        transform: scale(1);
    }
}

/* -------------------------------------- */

#slider2 {
    max-width: 30%;
    margin-right: 20px;
}

.row2Wrap {
    display: flex;
}

.content {
    padding: 50px;
    margin-bottom: 100px;
}

html {
    height: 100%;
    box-sizing: border-box;
}
*,
*:before,
*:after {
    box-sizing: inherit;
}
h1,
h2,
h3 {
    font-family: "Crimson Text", sans-serif;
    font-weight: 100;
}
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

.content {
    padding: 10px 15vw;
}


</style>


<style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
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

  @media screen and (max-width: 732px) {
  #logo_message {
    visibility: hidden;
    clear: both;
  }
}
@media screen and (max-width: 732px) {
  #logohome {
    visibility: hidden;
    clear: both;
  }
}
  </style>

  <style>
    /* body {
  background: #ff5f6d;
  background: -webkit-linear-gradient(to right, #ff5f6d, #ffc371);
  background: linear-gradient(to right, #ff5f6d, #ffc371);
  min-height: 100vh;
} */

#button-addon1 {
  color: #ffc371;
}


.form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}

.form-control.shadow-0:focus {
  box-shadow: none;
}
  </style>

<body>
  <div id="cover"> 
    <div class="mosaic-loader">
      <div class="cell d-0"></div>
      <div class="cell d-1"></div>
      <div class="cell d-2"></div>
      <div class="cell d-3"></div>
      <div class="cell d-1"></div>
      <div class="cell d-2"></div>
      <div class="cell d-3"></div>
      <div class="cell d-4"></div>
      <div class="cell d-2"></div>
      <div class="cell d-3"></div>
      <div class="cell d-4"></div>
      <div class="cell d-5"></div>
      <div class="cell d-3"></div>
      <div class="cell d-4"></div>
      <div class="cell d-5"></div>
      <div class="cell d-6"></div>
    </div>
    </div>

    <button class="dialog__button dialog__button--open" aria-haspopup="true">
      <span class="dialog__button-label">open</span>
      <svg class="dialog__button-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <line fill="none" stroke="currentColor" stroke-linecap="round" x1="0.7" y1="0.7" x2="15.3" y2="15.3" />
        <line fill="none" stroke="currentColor" stroke-linecap="round" x1="15.3" y1="0.7" x2="0.7" y2="15.3" />
      </svg>
    </button>
    <div class="dialog" role="dialog" aria-labelledby="dialog1Title" aria-describedby="dialog1Desc" aria-hidden="false">
      <div class="dialog__wrapper">
        <button class="dialog__button dialog__button--close">
          <span class="dialog__button-label">close</span>
          <svg class="dialog__button-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <line fill="none" stroke="currentColor" stroke-linecap="round" x1="0.7" y1="0.7" x2="15.3" y2="15.3" />
            <line fill="none" stroke="currentColor" stroke-linecap="round" x1="15.3" y1="0.7" x2="0.7" y2="15.3" />
          </svg>
        </button>
        <div class="dialog__content">
          <h2 id="dialog1Title">Nice animated modal with Vanilla JS</h2>
          <div id="dialog1Desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nihil? Eius dolore illo corporis cupiditate, veritatis tempora velit cumque accusantium excepturi nostrum sunt consequatur ex, quidem fuga quo perferendis repellendus? Repudiandae enim dolore iste asperiores labore quod nobis consequuntur quisquam, necessitatibus quibusdam eaque explicabo alias quae earum! Possimus minus nihil dolorem ipsum sapiente, quod quas?</p><a href="#" class="button">Read more</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site">
	
      <div id="navbar">
        <div class="topnav" id="myTopnav">
        <img src="../img/ptlogo.png" alt="logo" style="width: 100px; height: 80px;" id="logo">
        <div id="navbar-right">
          <a class="active" href="/">Home</a>
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

        {{-- <div style="height: 140px; text-align: center; margin-top: 170px;">

          <div data-aos="zoom-in" data-aos-duration="1500" id="home">
          <img src="../img/ptlogo.png" alt="logo" style="width: 100px; height: 80px;">
        </div>

        </div> --}}
        
        {{-- SLIDESHOW PERTAMA --}}

        <!-- Slider 1 -->
        
        <p style="position: absolute; z-index: 1000; font-size: 40px; color: white; top: 300px; left: 4%; font-family: Georgia, serif;">FEEL ALIVE</p>
        <p style="position: absolute; z-index: 1000; font-size: 20px; color: white; top: 350px; left: 4%; font-family: Georgia, serif;">2% <b> PHA + BHA </b> <br> <i> Gentle Exfoliating Toner</i> </p>
        <p style="position: absolute; z-index: 1000; font-size: 20px; color: white; top: 410px; left: 4%; font-family: Georgia, serif;">Dengan mengkombinasikan Acid dan Papain enzyme to boost <br>
        its performance. Simple Ingredients yet effective, sensitive skin will fall in love deeply.</p>
<div class="slider" id="slider1">
  <!-- Slides -->
  <div style="background-image:url(../img/DORY0833.jpg)"></div>
  <div style="background-image:url(../img/DORY0224.jpg)"></div>
  <div style="background-image:url(../img/DORY1423.jpg)"></div>
  <div style="background-image:url(../img/DORY0768.jpg)"></div>
  <!-- The Arrows -->
  <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
      </svg></i>
  <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
      </svg></i>

</div>


</div>

<div>
<br>

<!--SECTION1-->
<div class="section1">
    <div class="slider" style="height: 100px;">
      <div class="slide-track" style="height: 100px;">
        <div class="slide" style="height: 100px;">
          <img src="../img/logo1.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo2.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo3.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo4.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo1.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo2.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo3.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo4.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo1.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo2.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo3.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo4.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo1.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="../img/logo2.png" height="100" alt="" />
        </div>
      </div>
    </div>
  </div>

   <!--SECTION2-->
   <div class="section2">
    <section>
      <em data-aos="fade-right">Category</em>
      <h1 class="title" data-aos="fade-right">Our Categories</h1>
    </section>
    <section>
      <span>
        <img src="../img/ceramon10ml.png" alt="" loading="lazy" data-aos="fade-up">
        <p>Moisturizer</p>
      </span>
      <span>
        <img src="../img/img4.jpg" alt="" loading="lazy" data-aos="fade-up">
        <p>Face Oil</p>
      </span>
      <span>
        <img src="../img/feelalive 1.png" alt="" loading="lazy" data-aos="fade-up">
        <p>Toner</p>
      </span>
    </section>
  </div>

  <!--SECTION3-->
  <div class="section3">
    <section>
      <figure><img src="../img/DORY0944.jpg" alt="" loading="lazy" data-aos="zoom-in" data-aos-duration="3000"></figure>
    </section>
    <section>
      <span>
        <em data-aos="fade-up">About Us</em>
        <h1 class="title" data-aos="fade-up" data-aos-duration="500">You deserve skincare that works #Prettywell</h1>
        <p data-aos="fade-up" data-aos-duration="1000">"Prettywell" a local beauty brand yang punya komitmen menciptakan produk yg touchable & accessible. Sesuai dengan tagline Prettywell “you deserve skincare that works #prettywell” </p>
        <p data-aos="fade-up" data-aos-duration="1500">mendorong kita untuk selalu mengedepankan kualitas formulasi produknya, <br> a very up-to-date formulation yet AFFORDABLE.</p>
        <a href="/contactus" class="btn1" data-aos="fade-up" data-aos-duration="1800">Contact Us</a>
      </span>
    </section>
  </div>

  <!--SECTION4-->
  <div class="section4">
    <section>
      <span>
        <em data-aos="fade-right">Our Goals</em>
        <h1 class="title" data-aos="fade-right">Our Goal To Achieve More</h1>
        <p data-aos="fade-right" data-aos-duration="1000">We build a very strong belief system within brand and customer. We treat our customer as a human, not simply data.Kita punya yang namanya after sales experience dengan melayani dan membantu customer achieve their skin goals with our expert beauty consultant. Quality, efficacy, and maintaining customer trust must always be OUR priority.</p>
      </span>
    </section>
    <section>
      <figure><img src="../img/DORY0893.jpg" alt="" loading="lazy" data-aos="zoom-in-left"></figure>
    </section>
  </div>

  <!--SECTION5-->
  {{-- <div class="section5">
    <section>
      <figure><img src="../img/DORY0667.jpg" alt="" loading="lazy" data-aos="zoom-in" data-aos-duration="1000"></figure>
    </section>
    <section data-aos="fade-up" data-aos-duration="1000">
      <span data-aos="fade-up" data-aos-duration="1000">
        <h1 class="title" data-aos="fade-up" data-aos-duration="1500">You deserve skincare that works #Prettywell</h1>
      </span>
    </section>
  </div> --}}

  <!--SECTION6-->
  <div class="section6">
    <section>
      {{-- <span>
        <img src="https://i.postimg.cc/tJ05FCJY/icon-4.png" alt="" data-aos="fade-right" data-aos-duration="1000">
        <p data-aos="fade-up" data-aos-duration="1000">(+x) xxxx xxxxx</p>
      </span> --}}
      <span>
        <img src="https://i.postimg.cc/bvBLNRj0/icon-5.png" alt="" data-aos="fade-right" data-aos-duration="1500">
        <p data-aos="fade-up" data-aos-duration="1000">prettywell03@gmail.com</p>
      </span>
      <span>
        <img src="https://i.postimg.cc/B6Pp81qr/icon-6.png" alt="" data-aos="fade-right" data-aos-duration="2000">
        <p data-aos="fade-up" data-aos-duration="1000">Perum griya intan asri DB17, Dermo, Kec. Mojoroto<br> Kota Kediri - Jawa Timur - Indonesia</p>
      </span>
    </section>
  </div>
        {{-- SLIDESHOW KEDUA --}}

        <!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">


{{-- <div class="container" id="product">
  <div class="row" id="slider-text">
    <div class="col-md-6">
      <h2>NEW COLLECTION</h2>
    </div>
  </div>
</div> --}}

<!-- Item slider-->
{{-- <div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail2"><img src="../img/ceramon10 2.png" class="img-responsive center-block"></a>
              <h4 class="text-center">CeraMON Barrier Moistfull Gel 10mL</h4>
              <h5 class="text-center">Rp 34.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail"><img src="../img/Ceramon 1.png" class="img-responsive center-block"></a>
              <h4 class="text-center">CeraMON Barrier Moistfull Gel 50mL</h4>
              <h5 class="text-center">Rp 58.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail3"><img src="../img/Fancy 1.png" class="img-responsive center-block"></a>
              <h4 class="text-center">Clay Mask Fancy</h4>
              <h5 class="text-center">Rp 15.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail3"><img src="../img/Confident 1.png" class="img-responsive center-block"></a>
              <h4 class="text-center">Clay Mask Confident</h4>
              <h5 class="text-center">Rp 15.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail3"><img src="../img/Rare 1.png" class="img-responsive center-block"></a>
              <h4 class="text-center">Clay Mask Rare</h4>
              <h5 class="text-center">Rp 15.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail4"><img src="../img/Piss-off 1.png" class="img-responsive center-block"></a>
              <h4 class="text-center">Piss-Off Blemish Spot Cream</h4>
              <h5 class="text-center">Rp 39.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail5"><img src="../img/feelalive.png" class="img-responsive center-block"></a>
              <h4 class="text-center">Feel Alive 2% PHA + BHA Gentle Exfoliating Toner</h4>
              <h5 class="text-center">Rp 56.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/detail6"><img src="../img/Reset & Restart - 1.png" class="img-responsive center-block"></a>
              <h4 class="text-center">RESET & RESTART Versatile Oil Serum</h4>
              <h5 class="text-center">Rp 38.000</h5>
            </div>
          </div>

        </div>

        <div id="slider-control">
          <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
          <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Item slider end-->
<br /><br />

  <!--FOOTER-->
  <footer>
    <div class="top_header">
      <section>
        <br>
        <img src="https://i.postimg.cc/FFJCzwzY/icon-3.png" alt="" data-aos="fade-up" data-aos-duration="500">
        <br>
        <h1 class="title" data-aos="fade-up" data-aos-duration="500">Newsletter</h1>
        <br><br>
        <form action="https://formspree.io/f/xpznadew" method="POST" data-aos="fade-up" data-aos-duration="1000">
          <fieldset>
            <input type="email" name="email" placeholder="email address*" requried=""><button class="btn2">subscribe</button>
          </fieldset>
        </form>
      </section>
    </div>
    <span class="border-shape" data-aos="zoom-in" data-aos-duration="2500"></span>
    <div class="bottom_content">
      <section>
        <a href="https://www.tiktok.com/@prettywell.co" data-aos="fade-right" data-aos-duration="500"><i class="fa fa-tiktok"></i></a>
        <a href="https://www.instagram.com/prettywell.co/" data-aos="fade-right" data-aos-duration="1000"><i class="fa fa-instagram"></i></a>
        <a href="https://twitter.com/prettywell_co" data-aos="fade-right" data-aos-duration="1500"><i class="fa fa-twitter"></i></a>
      </section>
      <section>
        <a href="/product">Products</a>
        <a href="/shipping">Shipping</a>
        <a href="/ourstore">Our Stores</a>
        <a href="/article">Our Article</a>
        <a href="/contactus">Contact Us</a>
      </section>
    </div>
    <br>
    <div class="copyright">
      Copyright © 2022 prettywell - All rights reserved
    </div>
  </footer>

  <!-- End -->

  <!--ADDITIONAL-->
  <a href="#" id="roll_back" class="animate"><i class="fa fa-angle-up"></i></a>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
  // Set close and open variable
  var btn_close = document.querySelector(".dialog__button--close");
  var btn_open = document.querySelector(".dialog__button--open");

  if (typeof btn_close != "undefined" && btn_close != null) {
    // Click event to close dialog
    btn_close.addEventListener("click", function (event) {
      // btn.parentNode.parentNode.classList.add('dialog--close');
      btn_close.parentNode.parentNode.setAttribute("aria-hidden", "true");
      if (typeof btn_open != "undefined" && btn_open != null) {
        btn_open.classList.add("dialog__button--toggle");
      }
    });
  }

  if (typeof btn_open != "undefined" && btn_open != null) {
    // Click event to open dialog
    btn_open.addEventListener("click", function (event) {
      // btn.parentNode.parentNode.classList.add('dialog--close');
      btn_close.parentNode.parentNode.setAttribute("aria-hidden", "false");
      if (typeof btn_open != "undefined" && btn_open != null) {
        btn_open.classList.remove("dialog__button--toggle");
      }
    });
  }
});

  </script>

  <script>
  $(window).on('load', function () {
$("#cover").fadeOut(1750);
});
    </script>
    
    <script>

// JS UNTUK SLIDE PERTAMA

(function ($) {
    "use strict";
    $.fn.sliderResponsive = function (settings) {
        var set = $.extend(
            {
                slidePause: 5000,
                fadeSpeed: 800,
                autoPlay: "on",
                showArrows: "off",
                hideDots: "off",
                hoverZoom: "on",
                titleBarTop: "off"
            },
            settings
        );

        var $slider = $(this);
        var size = $slider.find("> div").length; //number of slides
        var position = 0; // current position of carousal
        var sliderIntervalID; // used to clear autoplay

        // Add a Dot for each slide
        $slider.append("<ul></ul>");
        $slider.find("> div").each(function () {
            $slider.find("> ul").append("<li></li>");
        });

        // Put .show on the first Slide
        $slider.find("div:first-of-type").addClass("show");

        // Put .showLi on the first dot
        $slider.find("li:first-of-type").addClass("showli");

        //fadeout all items except .show
        $slider.find("> div").not(".show").fadeOut();

        // If Autoplay is set to 'on' than start it
        if (set.autoPlay === "on") {
            startSlider();
        }

        // If showarrows is set to 'on' then don't hide them
        if (set.showArrows === "on") {
            $slider.addClass("showArrows");
        }

        // If hideDots is set to 'on' then hide them
        if (set.hideDots === "on") {
            $slider.addClass("hideDots");
        }

        // If hoverZoom is set to 'off' then stop it
        if (set.hoverZoom === "off") {
            $slider.addClass("hoverZoomOff");
        }

        // If titleBarTop is set to 'on' then move it up
        if (set.titleBarTop === "on") {
            $slider.addClass("titleBarTop");
        }

        // function to start auto play
        function startSlider() {
            sliderIntervalID = setInterval(function () {
                nextSlide();
            }, set.slidePause);
        }

        // on mouseover stop the autoplay
        $slider.mouseover(function () {
            if (set.autoPlay === "on") {
                clearInterval(sliderIntervalID);
            }
        });

        // on mouseout starts the autoplay
        $slider.mouseout(function () {
            if (set.autoPlay === "on") {
                startSlider();
            }
        });

        //on right arrow click
        $slider.find("> .right").click(nextSlide);

        //on left arrow click
        $slider.find("> .left").click(prevSlide);

        // Go to next slide
        function nextSlide() {
            position = $slider.find(".show").index() + 1;
            if (position > size - 1) position = 0;
            changeCarousel(position);
        }

        // Go to previous slide
        function prevSlide() {
            position = $slider.find(".show").index() - 1;
            if (position < 0) position = size - 1;
            changeCarousel(position);
        }

        //when user clicks slider button
        $slider.find(" > ul > li").click(function () {
            position = $(this).index();
            changeCarousel($(this).index());
        });

        //this changes the image and button selection
        function changeCarousel() {
            $slider.find(".show").removeClass("show").fadeOut();
            $slider
                .find("> div")
                .eq(position)
                .fadeIn(set.fadeSpeed)
                .addClass("show");
            // The Dots
            $slider.find("> ul").find(".showli").removeClass("showli");
            $slider.find("> ul > li").eq(position).addClass("showli");
        }

        return $slider;
    };
})(jQuery);

//////////////////////////////////////////////
// Activate each slider - change options
//////////////////////////////////////////////
$(document).ready(function () {
    $("#slider1").sliderResponsive({
        // Using default everything
        // slidePause: 5000,
        // fadeSpeed: 800,
        // autoPlay: "on",
        // showArrows: "off",
        // hideDots: "off",
        // hoverZoom: "on",
        // titleBarTop: "off"
    });

    $("#slider2").sliderResponsive({
        fadeSpeed: 300,
        autoPlay: "off",
        showArrows: "on",
        hideDots: "on"
    });

    $("#slider3").sliderResponsive({
        hoverZoom: "off",
        hideDots: "on"
    });
});

      
      </script>

<script>
  // JS UNTUK SLIDE KEDUA

  $(document).ready(function () {
  $("#itemslider").carousel({ interval: 3000 });

  $(".carousel-showmanymoveone .item").each(function () {
    var itemToClone = $(this);

    for (var i = 1; i < 6; i++) {
      itemToClone = itemToClone.next();

      if (!itemToClone.length) {
        itemToClone = $(this).siblings(":first");
      }

      itemToClone
        .children(":first-child")
        .clone()
        .addClass("cloneditem-" + i)
        .appendTo($(this));
    }
  });
});

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

<script>
  // JS UNTUK NAVBAR
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
document.getElementById("navbar").style.padding = "15px 10px";
document.getElementById("logo").style.fontSize = "15px";
document.getElementById("navbar").style.background = "#FFFFFF";
document.getElementById("roll_back").style.display = "flex";
} else {
document.getElementById("navbar").style.padding = "20px 10px";
document.getElementById("logo").style.fontSize = "25px";
document.getElementById("navbar").style.background = "none";
document.getElementById("roll_back").style.display = "none";
}
}
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

</body>
</html>