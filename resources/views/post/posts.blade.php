<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <title>All Article</title>
</head>
<body>
  <style>

    #user{
                                display: inline-block;
                                background-color: #353746;
                                width: 400px;
                                height: 450px;
                                float: left;
                                margin-left: 1%;
                                margin-right: 5px;
                                margin-top: 10px;
                                margin-bottom: 5px;
                                box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
                                cursor: pointer;
                                transition: 0.4s;
                            }
        #user:hover{
          transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

        

/* Please ❤ this if you like it! */


@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');

body{
	font-family: 'Montserrat', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: #ececee;
	background-color: #1f2029;
	/* overflow: hidden; */
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
  background-position: center;
  background-repeat: repeat;
  background-size: 4%;
  height: 100vh;
  width: 100%;
  padding-top: 200px;
}
.section-center{
  position: absolute;
  left: 0;
  top: 15%;
  width: 100%;
  padding: 0;
  margin: 0;
  z-index: 6;
  text-align: center;
  transform: translateY(-50%);
}
h1{
  font-family: 'Montserrat', sans-serif;
  font-weight: 800;
  font-size: 7vw;
  line-height: 1;
  color: #ffeba7;
  text-align: center;
  -webkit-text-stroke: 2px #ffeba7;
  text-stroke: 2px #ffeba7;
  -webkit-text-fill-color: transparent;
  text-fill-color: transparent;
  color: transparent;
  padding-top: 20px;
}

[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.menu-icon:checked + label,
.menu-icon:not(:checked) + label{
  position: fixed;
  top: 63px;
  right: 75px;
  display: block;
  width: 30px;
  height: 30px;
  padding: 0;
  margin: 0;
  cursor: pointer;
  z-index: 10;
}
.menu-icon:checked + label:before,
.menu-icon:not(:checked) + label:before{
  position: absolute;
  content: '';
  display: block;
  width: 30px;
  height: 20px;
  z-index: 20;
  top: 0;
  left: 0;
  border-top: 2px solid #ececee;
  border-bottom: 2px solid #ececee;
  transition: border-width 100ms 1500ms ease, 
              top 100ms 1600ms cubic-bezier(0.23, 1, 0.32, 1),
              height 100ms 1600ms cubic-bezier(0.23, 1, 0.32, 1), 
              background-color 200ms ease,
              transform 200ms cubic-bezier(0.23, 1, 0.32, 1);
}
.menu-icon:checked + label:after,
.menu-icon:not(:checked) + label:after{
  position: absolute;
  content: '';
  display: block;
  width: 22px;
  height: 2px;
  z-index: 20;
  top: 10px;
  right: 4px;
  background-color: #ececee;
  margin-top: -1px;
  transition: width 100ms 1750ms ease, 
              right 100ms 1750ms ease,
              margin-top 100ms ease, 
              transform 200ms cubic-bezier(0.23, 1, 0.32, 1);
}
.menu-icon:checked + label:before{
  top: 10px;
  transform: rotate(45deg);
  height: 2px;
  background-color: #ececee;
  border-width: 0;
  transition: border-width 100ms 340ms ease, 
              top 100ms 300ms cubic-bezier(0.23, 1, 0.32, 1),
              height 100ms 300ms cubic-bezier(0.23, 1, 0.32, 1), 
              background-color 200ms 500ms ease,
              transform 200ms 1700ms cubic-bezier(0.23, 1, 0.32, 1);
}
.menu-icon:checked + label:after{
  width: 30px;
  margin-top: 0;
  right: 0;
  transform: rotate(-45deg);
  transition: width 100ms ease,
              right 100ms ease,  
              margin-top 100ms 500ms ease, 
              transform 200ms 1700ms cubic-bezier(0.23, 1, 0.32, 1);
}

.nav{
  position: fixed;
  top: 33px;
  right: 50px;
  display: block;
  width: 80px;
  height: 80px;
  padding: 0;
  margin: 0;
  z-index: 9;
  overflow: hidden;
  box-shadow: 0 8px 30px 0 rgba(0,0,0,0.3);
  background-color: #353746;
  animation: border-transform 7s linear infinite;
  transition: top 350ms 1100ms cubic-bezier(0.23, 1, 0.32, 1),  
              right 350ms 1100ms cubic-bezier(0.23, 1, 0.32, 1),
              transform 250ms 1100ms ease,
              width 650ms 400ms cubic-bezier(0.23, 1, 0.32, 1),
              height 650ms 400ms cubic-bezier(0.23, 1, 0.32, 1);
}
@keyframes border-transform{
    0%,100% { border-radius: 63% 37% 54% 46% / 55% 48% 52% 45%; } 
  14% { border-radius: 40% 60% 54% 46% / 49% 60% 40% 51%; } 
  28% { border-radius: 54% 46% 38% 62% / 49% 70% 30% 51%; } 
  42% { border-radius: 61% 39% 55% 45% / 61% 38% 62% 39%; } 
  56% { border-radius: 61% 39% 67% 33% / 70% 50% 50% 30%; } 
  70% { border-radius: 50% 50% 34% 66% / 56% 68% 32% 44%; } 
  84% { border-radius: 46% 54% 50% 50% / 35% 61% 39% 65%; } 
}

.menu-icon:checked ~ .nav {
  animation-play-state: paused;
  top: 50%;
  right: 50%;
  transform: translate(50%, -50%);
  width: 200%;
  height: 200%;
  transition: top 350ms 700ms cubic-bezier(0.23, 1, 0.32, 1),  
              right 350ms 700ms cubic-bezier(0.23, 1, 0.32, 1),
              transform 250ms 700ms ease,
              width 750ms 1000ms cubic-bezier(0.23, 1, 0.32, 1),
              height 750ms 1000ms cubic-bezier(0.23, 1, 0.32, 1);
}

.nav ul{
  position: absolute;
  top: 50%;
  left: 0;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  z-index: 6;
  text-align: center;
  transform: translateY(-50%);
  list-style: none;
}
.nav ul li{
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  margin: 10px 0;
  text-align: center;
  list-style: none;
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
  transform: translateY(30px);
  transition: all 250ms linear;
}
.nav ul li:nth-child(1){
  transition-delay: 200ms;
}
.nav ul li:nth-child(2){
  transition-delay: 150ms;
}
.nav ul li:nth-child(3){
  transition-delay: 100ms;
}
.nav ul li:nth-child(4){
  transition-delay: 50ms;
}
.nav ul li a{
  font-family: 'Montserrat', sans-serif;
  font-size: 5vh;
  text-transform: uppercase;
  line-height: 1.2;
  font-weight: 800;
  display: inline-block;
  position: relative;
  color: #ececee;
  transition: all 250ms linear;
}
.nav ul li a:hover{
  text-decoration: none;
  color: #ffeba7;
}
.nav ul li a:after{
  display: block;
  position: absolute;
  top: 50%;
  content: '';
  height: 2vh;
  margin-top: -1vh;
  width: 0;
  left: 0;
  background-color: #353746;
  opacity: 0.8;
  transition: width 250ms linear;
}
.nav ul li a:hover:after{
  width: 100%;
}


.menu-icon:checked ~ .nav  ul li {
  pointer-events: auto;
  visibility: visible;
  opacity: 1;
  transform: translateY(0);
  transition: opacity 350ms ease,
              transform 250ms ease;
}
.menu-icon:checked ~ .nav ul li:nth-child(1){
  transition-delay: 1400ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(2){
  transition-delay: 1480ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(3){
  transition-delay: 1560ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(4){
  transition-delay: 1640ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(5){
  transition-delay: 1720ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(6){
  transition-delay: 1800ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(7){
  transition-delay: 1880ms;
}
.menu-icon:checked ~ .nav ul li:nth-child(8){
  transition-delay: 1960ms;
}

.menu-icon:checked ~ .nav ul li:nth-child(9){
  transition-delay: 2040ms;
}

.logo {
	position: absolute;
	top: 60px;
	left: 50px;
	display: block;
	z-index: 11;
	transition: all 250ms linear;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
}



@media screen and (max-width: 991px) {
  .menu-icon:checked + label,
  .menu-icon:not(:checked) + label{
    right: 55px;
  }
  .logo {
    left: 30px;
  }
  .nav{
    right: 30px;
  }
  h1{
    font-size: 9vw;
    -webkit-text-stroke: 2px transparent;
    text-stroke: 2px transparent;
    -webkit-text-fill-color: #ffeba7;
    text-fill-color: #ffeba7;
    color: #ffeba7;
  }
  .nav ul li a{
    font-size: 3vh;
  }
}
        </style>

<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
<label for="menu-icon"></label>
<nav class="nav">
  <ul class="pt-5">
    <li><a href="/"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
    <li><a href="/dashboard"><i class="fa-solid fa-house-user"></i> Dashboard</a></li>
      <li><a href="/post/create"><i class="fa-solid fa-square-plus"></i> Create Article</a></li>
    <li><a href="/rooms"><i class="fa-solid fa-comments"></i> Group Chat</a></li>
      <li><a href="/chat"><i class="fa-solid fa-comment-dots"></i> Private Chat</a></li>
      <li><a href="/profile"><i class="fa-solid fa-address-card"></i> Profile</a></li>
      @role('admin')
      <li><a href="/adminpost"><i class="fa-solid fa-hammer"></i> Admin Page</a></li>
      <li><a href="/admin"><i class="fa-solid fa-user-gear"></i> User Management</a></li>
      @endrole
      <li><a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
  </ul>
</nav>

<div class="section-center">
  <h1 class="mb-0">All Article</h1>
</div>

  @foreach ($posts as $post)
        
          <div class="w3-third w3-container w3-margin-bottom">
          <div class="rounded-md p-2 shadow-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="user">
            
            <img src="{{ URL($post->image_path) }}" alt="Image" style="width:100%; height: 250px;" class="w3-hover-opacity">
            <div style="width:60%; margin-left: 21px; color: #130d0a;">
              <p style="font-size: 2em; color: whitesmoke;"><b>{{ Str::limit($post->title, 10) }}</b></p>
              <p style="text-align: left; color: whitesmoke;">{{ Str::limit($post->body, 60) }}</p>
      
              <a href="/detail2/{{ $post->id }}" style="margin-top: 10px;" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Read More..</a>
              
            </div>
          </div>
          @endforeach
    
</body>
</html>