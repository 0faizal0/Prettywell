   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <title>Add Article</title>

       <style>
           

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
}
.section-center{
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
    font-size: 8vh;
  }
}
       </style>
   </head>
   <body>
  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
            <li><a href="/">Home</a></li>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/posts">All Article</a></li>
            <li><a href="/rooms">Group Chat</a></li>
            <li><a href="/chat">Private Chat</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/adminpost">Admin Page</a></li>
            <li><a href="/admin">User Management</a></li>
  		</ul>
  	</nav>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
     
     html {
       font-family: 'Montserrat', Arial, sans-serif;
       -ms-text-size-adjust: 100%;
       -webkit-text-size-adjust: 100%;
     }
     
     body {
       color: #F2F3EB;
     }
     
     button {
       overflow: visible;
     }
     
     button, select {
       text-transform: none;
     }
     
     button, input, select, textarea {
       color: #5A5A5A;
       font: inherit;
       margin: 0;
     }
     
     input {
       line-height: normal;
     }
     
     textarea {
       overflow: auto;
     }
     
     #container {
       border: solid 3px #474544;
       max-width: 768px;
       margin: 60px auto;
       position: relative;
     }
     
     form {
       padding: 37.5px;
       margin: 50px 0;
     }
     
     h1 {
       color: #474544;
       font-size: 32px;
       font-weight: 700;
       letter-spacing: 7px;
       text-align: center;
       text-transform: uppercase;
     }
     
     .underline {
       border-bottom: solid 2px #474544;
       margin: 1em auto;
       width: 80px;
     }
     
     .icon_wrapper {
       margin: 50px auto 0;
       width: 100%;
     }
     
     .icon {
       display: block;
       fill: #474544;
       height: 50px;
       margin: 0 auto;
       width: 50px;
     }
     
     .email {
         float: right;
         width: 45%;
     }
     
     input[type='text'], [type='email'], select, textarea {
         background: none;
       border: none;
         border-bottom: solid 2px #474544;
         color: whitesmoke;
         font-size: 1.000em;
       font-weight: 400;
       letter-spacing: 1px;
         margin: 0em 0 1.875em 0;
         padding: 0 0 0.875em 0;
         width: 100%;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -ms-box-sizing: border-box;
         -o-box-sizing: border-box;
         box-sizing: border-box;
         -webkit-transition: all 0.3s;
         -moz-transition: all 0.3s;
         -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
         transition: all 0.3s;
     }
     
     input[type='text']:focus, [type='email']:focus, textarea:focus {
         outline: none;
         padding: 0 0 0.875em 0;
     }
     
     .message {
         float: none;
     }
     
     .name {
         float: left;
         width: 45%;
     }
     
     select {
       background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
       outline: none;
       -moz-appearance: none;
       -webkit-appearance: none;
     }
     
     select::-ms-expand {
       display: none;
     }
     
     .subject {
       width: 100%;
     }
     
     .telephone {
       width: 100%;
     }
     
     textarea {
         line-height: 150%;
         height: 150px;
         resize: none;
       width: 100%;
       color: whitesmoke;
     }
     
     ::-webkit-input-placeholder {
         color: #474544;
     }
     
     :-moz-placeholder { 
         color: #474544;
         opacity: 1;
     }
     
     ::-moz-placeholder {
         color: #474544;
         opacity: 1;
     }
     
     :-ms-input-placeholder {
         color: #474544;
     }
     
     #form_button {
       background: none;
       border: solid 2px #474544;
       color: #474544;
       cursor: pointer;
       display: inline-block;
       font-family: 'Helvetica', Arial, sans-serif;
       font-size: 0.875em;
       font-weight: bold;
       outline: none;
       padding: 20px 35px;
       -webkit-transition: all 0.3s;
         -moz-transition: all 0.3s;
         -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
         transition: all 0.3s;
     }
     
     #form_button:hover {
       background: #474544;
       color: #F2F3EB;
     }
     
     @media screen and (max-width: 768px) {
       #container {
         margin: 20px auto;
         width: 95%;
       }
     }
     
     @media screen and (max-width: 480px) {
       h1 {
         font-size: 26px;
       }
       
       .underline {
         width: 68px;
       }
       
       #form_button {
         padding: 15px 25px;
       }
     }
     
     @media screen and (max-width: 420px) {
       h1 {
         font-size: 18px;
       }
       
       .icon {
         height: 35px;
         width: 35px;
       }
       
       .underline {
         width: 53px;
       }
       
       input[type='text'], [type='email'], select, textarea {
         font-size: 0.875em;
       }
     }
       </style>
       
       <div id="container">
         <h1>&bull; Create Article &bull;</h1>
         <div class="underline">
         </div>
         <div class="icon_wrapper">
           <svg class="icon" viewBox="0 0 145.192 145.192">
             <path d="M126.82,32.694c-2.804,0-5.08,2.273-5.08,5.075v2.721c-1.462,0-2.646,1.185-2.646,2.647v1.995    c0,1.585,1.286,2.873,2.874,2.873h20.577c1.462,0,2.646-1.185,2.646-2.647v-3.041c0-1.009-0.816-1.825-1.823-1.825v-2.722    c0-2.802-2.276-5.075-5.079-5.075h-1.985v-3.829c0-3.816-3.095-6.912-6.913-6.912h-0.589h-20.45c0-2.67-2.164-4.835-4.833-4.835    H56.843c-2.67,0-4.835,2.165-4.835,4.835H34.356v-3.384h-9.563v3.384v1.178h-7.061v1.416c-2.67,0.27-10.17,1.424-13.882,5.972    c-1.773,2.17-2.44,4.791-1.983,7.793c0.463,3.043,1.271,6.346,2.128,9.841c2.354,9.616,5.024,20.515,0.549,28.077    C2.647,79.44-3.125,90.589,2.201,99.547c4.123,6.935,13.701,10.44,28.5,10.44c1.186,0,2.405-0.023,3.658-0.068v9.028h-0.296    c-2.516,0-4.558,2.039-4.558,4.558v4.566h100.04v-4.564c0-2.519-2.039-4.558-4.558-4.558h-0.297V84.631h0.297    c2.519,0,4.558-2.037,4.558-4.556v-0.009c0-2.516-2.039-4.556-4.556-4.556l-36.786-0.009V61.973c0-2.193-1.777-3.971-3.972-3.971    v-4.711h0.456c1.629,0,2.952-1.32,2.952-2.949h14.227V34.459h1.658c2.672,0,4.834-2.165,4.834-4.834h20.45v3.069H126.82z     M34.06,75.511c-2.518,0-4.558,2.04-4.558,4.556v0.009c0,2.519,2.042,4.556,4.558,4.556h0.296v24.12l-0.042-1.168    c-15.994,0.574-26.122-2.523-30.106-9.229C-0.464,90.5,4.822,80.347,6.55,77.423c4.964-8.382,2.173-19.774-0.29-29.825    c-0.843-3.442-1.639-6.696-2.088-9.638c-0.354-2.35,0.129-4.3,1.484-5.958c3.029-3.714,9.509-4.805,12.076-5.1v1.233h7.061v1.49    v2.684c-2.403,1.114-4.153,2.997-4.676,5.237H18.15c-0.584,0-1.056,0.474-1.056,1.056v0.83c0,0.584,0.475,1.056,1.056,1.056h1.984    c0.561,2.18,2.304,3.999,4.658,5.092v0.029c0,0-2.282,20.823,16.479,22.099v1.102c0,1.177,0.955,2.133,2.133,2.133h3.297    c1.178,0,2.133-0.956,2.133-2.133V50.135c0-1.177-0.955-2.132-2.133-2.132h-3.297c-1.178,0-2.133,0.955-2.133,2.132    c-1.575-0.235-5.532-1.17-6.635-4.547c2.36-1.092,4.109-2.913,4.669-5.097h1.308c0.722,0,1.309-0.584,1.309-1.308v-0.578    c0-0.584-0.475-1.056-1.056-1.056h-1.539c-0.542-2.332-2.416-4.271-4.968-5.363v-2.559h17.651c0,2.67,2.166,4.835,4.836,4.835 h2.392v15.88h13.639c0,1.629,1.321,2.949,2.951,2.949h0.899v4.711c-2.194,0-3.972,1.778-3.972,3.971v13.529L34.06,75.511z     M95.188,101.78c0,8.655-7.012,15.665-15.664,15.665c-8.653,0-15.667-7.01-15.667-15.665c0-8.647,7.014-15.664,15.667-15.664    C88.177,86.116,95.188,93.132,95.188,101.78z M97.189,45.669h-9.556c0-0.896-0.726-1.62-1.619-1.62H74.494    c-0.896,0-1.621,0.727-1.621,1.62h-8.967v-11.21h33.283V45.669z"></path>
             <path d="M70.865,101.78c0,4.774,3.886,8.657,8.66,8.657c4.774,0,8.657-3.883,8.657-8.657c0-4.773-3.883-8.656-8.657-8.656    C74.751,93.124,70.865,97.006,70.865,101.78z"></path>
           </svg>
         </div>
         <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title')" style="color: whitesmoke;" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-label for="body" :value="__('Body')" style="color: whitesmoke;"/>
                {{-- <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required /> --}}
                <textarea class="form-control" name="body" rows="12" required>
                </textarea>
            </div>

            <!-- Image -->
            <div>
                <x-label for="title" :value="__('Image')" style="color: whitesmoke;"/>
                <input class="block mt-1 w-full" name="image" type="file" style="color: whitesmoke;"/>
            </div>
  
            <div class="flex items-center justify-end mt-4" style="position: relative; bottom: 50px;">
                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('new-post') }}">
                        {{ __('Cancel') }}
                </a>

                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" style="margin-left: 10px;">
                        {{ __('Submit') }}
                </button>
                </div>
            </form>
       </div><!-- // End #container -->
   </body>
   </html>