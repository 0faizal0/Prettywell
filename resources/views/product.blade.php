<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <title>Our Products</title>
</head>


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
    background-color: #FC9CAA;
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

<style>
  /* 12columns.css | Created by Katherine Kato | Released under the MIT license */
/* GitHub: https://kathykato.github.io/12columns/ */
@import url("https://fonts.googleapis.com/css?family=Pontano+Sans");
.container {
margin: auto;
padding: 0 1rem;
max-width: 71.25rem;
width: 100%;
}

.grid {
display: flex;
flex-direction: column;
flex-flow: row wrap;
}
.grid > [class*=column-] {
display: block;
}

.first {
order: -1;
}

.last {
order: 12;
}

.align-top {
align-items: start;
}

.align-center {
align-items: center;
}

.align-bottom {
align-items: end;
}

.column-xs-1 {
flex-basis: 8.3333333333%;
max-width: 8.3333333333%;
}

.column-xs-2 {
flex-basis: 16.6666666667%;
max-width: 16.6666666667%;
}

.column-xs-3 {
flex-basis: 25%;
max-width: 25%;
}

.column-xs-4 {
flex-basis: 33.3333333333%;
max-width: 33.3333333333%;
}

.column-xs-5 {
flex-basis: 41.6666666667%;
max-width: 41.6666666667%;
}

.column-xs-6 {
flex-basis: 50%;
max-width: 50%;
}

.column-xs-7 {
flex-basis: 58.3333333333%;
max-width: 58.3333333333%;
}

.column-xs-8 {
flex-basis: 66.6666666667%;
max-width: 66.6666666667%;
}

.column-xs-9 {
flex-basis: 75%;
max-width: 75%;
}

.column-xs-10 {
flex-basis: 83.3333333333%;
max-width: 83.3333333333%;
}

.column-xs-11 {
flex-basis: 91.6666666667%;
max-width: 91.6666666667%;
}

.column-xs-12 {
flex-basis: 100%;
max-width: 100%;
}

@media (min-width: 48rem) {
.column-sm-1 {
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-sm-2 {
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-sm-3 {
  flex-basis: 25%;
  max-width: 25%;
}

.column-sm-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-sm-5 {
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-sm-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-sm-7 {
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-sm-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-sm-9 {
  flex-basis: 75%;
  max-width: 75%;
}

.column-sm-10 {
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-sm-11 {
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-sm-12 {
  flex-basis: 100%;
  max-width: 100%;
}
}
@media (min-width: 62rem) {
.column-md-1 {
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-md-2 {
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-md-3 {
  flex-basis: 25%;
  max-width: 25%;
}

.column-md-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-md-5 {
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-md-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-md-7 {
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-md-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-md-9 {
  flex-basis: 75%;
  max-width: 75%;
}

.column-md-10 {
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-md-11 {
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-md-12 {
  flex-basis: 100%;
  max-width: 100%;
}
}
@media (min-width: 75rem) {
.column-lg-1 {
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-lg-2 {
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-lg-3 {
  flex-basis: 25%;
  max-width: 25%;
}

.column-lg-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-lg-5 {
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-lg-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-lg-7 {
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-lg-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-lg-9 {
  flex-basis: 75%;
  max-width: 75%;
}

.column-lg-10 {
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-lg-11 {
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-lg-12 {
  flex-basis: 100%;
  max-width: 100%;
}
}
@supports (display: grid) {
.grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  grid-template-rows: auto;
}
.grid > [class*=column-] {
  margin: 0;
  max-width: 100%;
}

.column-xs-1 {
  grid-column-start: span 1;
  grid-column-end: span 1;
}

.column-xs-2 {
  grid-column-start: span 2;
  grid-column-end: span 2;
}

.column-xs-3 {
  grid-column-start: span 3;
  grid-column-end: span 3;
}

.column-xs-4 {
  grid-column-start: span 4;
  grid-column-end: span 4;
}

.column-xs-5 {
  grid-column-start: span 5;
  grid-column-end: span 5;
}

.column-xs-6 {
  grid-column-start: span 6;
  grid-column-end: span 6;
}

.column-xs-7 {
  grid-column-start: span 7;
  grid-column-end: span 7;
}

.column-xs-8 {
  grid-column-start: span 8;
  grid-column-end: span 8;
}

.column-xs-9 {
  grid-column-start: span 9;
  grid-column-end: span 9;
}

.column-xs-10 {
  grid-column-start: span 10;
  grid-column-end: span 10;
}

.column-xs-11 {
  grid-column-start: span 11;
  grid-column-end: span 11;
}

.column-xs-12 {
  grid-column-start: span 12;
  grid-column-end: span 12;
}

@media (min-width: 48rem) {
  .column-sm-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-sm-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-sm-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-sm-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-sm-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-sm-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-sm-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-sm-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-sm-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-sm-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-sm-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-sm-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }
}
@media (min-width: 62rem) {
  .column-md-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-md-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-md-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-md-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-md-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-md-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-md-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-md-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-md-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-md-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-md-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-md-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }
}
@media (min-width: 75rem) {
  .column-lg-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-lg-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-lg-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-lg-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-lg-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-lg-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-lg-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-lg-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-lg-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-lg-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-lg-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-lg-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }
}
}
* {
box-sizing: border-box;

}
*::before, *::after {
box-sizing: border-box;
}

body {
font-size: 1.125rem;
line-height: 1.5;
margin: 0;
padding: 0;
text-rendering: optimizeLegibility;
}

ul {
padding: 0;
margin: 0;
list-style: none;
}
ul li {
margin: 0 1.75rem 0 0;
}

a {
text-decoration: none;
transition: all 0.2s ease;
}
a:hover {
color: #333;
}
a.active {
color: #333;
}

h1, h2, h3, h4 {
color: #333;
font-weight: normal;
margin: 1.75rem 0 1rem 0;
}

h1 {
font-size: 2.5rem;
}

h2 {
font-size: 2.125rem;
margin: 0;
}

h3 {
font-size: 2rem;
}

h4 {
font-size: 1.5rem;
margin: 1rem 0 0.5rem 0;
}

section {
display: block;
}

img {
max-width: 100%;
height: auto;
-o-object-fit: cover;
   object-fit: cover;
}

nav {
display: block;
}
nav li {
font-size: 1.125rem;
margin: 0;
}

.flex-nav ul {
position: absolute;
z-index: 1;
list-style: none;
margin: 0;
padding: 0;
display: flex;
flex-wrap: wrap;
flex-direction: column;
display: none;
width: 100%;
left: 0;
padding: 1rem;
background: #fff;
text-align: center;
}
.flex-nav ul.active {
display: flex;
}
.flex-nav ul li {
margin: 0.5rem 0;
}

.toggle-nav {
display: flex;
justify-content: flex-end;
font-size: 1.125rem;
line-height: 1.7;
margin: 1rem 0;
}
.toggle-nav i {
font-size: 1.5rem;
line-height: 1.4;
margin: 0 0 0 0.5rem;
}

#highlight {
color: #333;
font-size: 1.125rem;
text-transform: uppercase;
}

.price {
margin: 0;
}

.breadcrumb-list {
display: flex;
flex-wrap: wrap;
padding: 0;
margin: 1rem 0 0 0;
list-style: none;
}
.breadcrumb-list li {
font-size: 0.85rem;
letter-spacing: 0.125rem;
text-transform: uppercase;
}

.breadcrumb-item.active {
color: #333;
}
.breadcrumb-item + .breadcrumb-item::before {
content: "/";
display: inline-block;
padding: 0 0.5rem;
color: #d5d5d5;
}

.description {
border-top: 0.0625rem solid #e3dddd;
margin: 2rem 0;
padding: 1rem 0 0 0;
}

.add-to-cart {
position: relative;
display: inline-block;
background: #3e3e3f;
color: #fff;
border: none;
border-radius: 0;
padding: 1.25rem 2.5rem;
font-size: 1rem;
text-transform: uppercase;
cursor: pointer;
transform: translateZ(0);
transition: color 0.3s ease;
letter-spacing: 0.0625rem;
}
.add-to-cart:hover::before {
transform: scaleX(1);
}
.add-to-cart::before {
position: absolute;
content: "";
z-index: -1;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: #565657;
transform: scaleX(0);
transform-origin: 0 50%;
transition: transform 0.3s ease-out;
}

.container {
margin: auto;
padding: 0 1rem;
max-width: 75rem;
width: 100%;
}

.grid > [class*=column-] {
padding: 1rem;
}
.grid.menu, .grid.product {
border-bottom: 0.0625rem solid #e3dddd;
}
.grid.menu > [class*=column-] {
padding: 0.5rem 1rem 0.5rem 1rem;
}
.grid.product {
padding: 0 0 1.5rem 0;
}
.grid.second-nav > [class*=column-] {
padding: 0.5rem 1rem;
}

footer {
padding: 1rem 0;
}

.copyright{
  text-align: center;
}

.product-image {
display: none;
}

.image-list li {
margin: 0;
}

@media (min-width: 62rem) {
.product-image img, .image-list img {
  width: 100%;
}

.product-image {
  display: block;
}
.product-image img {
  height: 52vh;
}
.product-image img.active {
  display: block;
  margin: 0 0 0.75rem 0;
}

.image-list {
  display: flex;
  overflow: hidden;
}
.image-list li {
  margin: 0 0.75rem 0 0;
  flex-basis: 100%;
}
.image-list li:nth-child(3) {
  margin: 0;
}
.image-list img {
  height: 10rem;
  width: 100%;
  transition: opacity 0.3s ease;
  cursor: pointer;
}
.image-list img:hover {
  opacity: 0.7;
}

nav ul {
  justify-content: flex-end;
}

.toggle-nav {
  display: none;
}

.flex-nav {
  display: block;
}
.flex-nav ul {
  display: flex;
  flex-direction: row;
  position: relative;
  justify-content: flex-end;
}
.flex-nav ul li {
  font-size: 1.125rem;
  margin: 0 1.5rem 0 0;
}
.flex-nav ul li:nth-child(4) {
  margin: 0;
}
}
@-webkit-keyframes fadeImg {
from {
  opacity: 0;
}
to {
  opacity: 1;
}
}
@keyframes fadeImg {
from {
  opacity: 0;
}
to {
  opacity: 1;
}
}
</style>

{{-- STYLE FOR SUBSCRIBE --}}
<style>
  @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap");

* {
  margin: 0;
  padding: 0;
}

.wrapper {
  height: 80vh;
  position: realtive;
}

.fas.fa-envelope {
  color: #fff;
  font-size: 2rem;
  background: #333;
  padding: 1rem;
  border-radius: 100%;
  margin: 0 0 1rem 0;
}

.card-content {
  max-width: 30rem;
  background-color: #fff;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 1rem;
  padding: 4rem 0.5rem;
  box-shadow: 1px 1px 2rem rgba(0, 0, 0, 0.3);
  text-align: center;
}

.card-content h1 {
  text-transform: uppercase;
  margin: 0 0 1rem 0;
}

.card-content p {
  font-size: 0.8rem;
  margin: 0 0 2rem 0;
}

input {
  padding: 0.8rem 1rem;
  width: 40%;
  border-radius: 5rem;
  outline: none;
  border: 0.1rem solid #d1d1d1;
  font-size: 0.7rem;
}

::placeholder {
  color: #d1d1d1;
}

.subscribe-btn {
  padding: 0.8rem 2rem;
  border-radius: 5rem;
  background: linear-gradient(90deg, #ff9966, #ff5e62);
  color: #fff;
  font-size: 0.7rem;
  border: none;
  outline: none;
  cursor: pointer;
}

</style>

<style>
  body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #FDE0CC;
}

.mt-50{
    margin-top: 50px;
}
.mb-50{
    margin-bottom: 50px;
}


.bg-teal-400 { 
    background-color: #26a69a;
}

a{
    text-decoration: none !important;
}


.fa {
        color: whitesmoke;
}
</style>



<body>

  
  <div class="site">
	
    <div id="navbar">
      <div class="topnav" id="myTopnav">
      <img src="../img/ptlogo.png" alt="logo" style="width: 100px; height: 80px; display: inline-block;" id="logo">
      <div id="navbar-right">
        <a href="/">Home</a>
        <a class="active" href="/product">Product</a>
        <a href="/reviews">ACNE STORY</a>
        <a href="/article">Article</a>

        @if (Route::has('login'))
        @auth
  			<a href="{{ url('/toko') }}"><i class="fa-solid fa-house-user"></i> Dashboard</a>
        @else
  			<a href="{{ route('login') }}"><i class="fa-solid fa-user-ninja"></i> Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}"><i class="fa-solid fa-user-ninja"></i> Register</a>
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

    <br><br><br><br><br><br><br>

    <div class="container">
      <div class="grid second-nav">
        <div class="column-xs-12">
          <nav>
            <ol class="breadcrumb-list">
              <li class="breadcrumb-item" style="color: #888"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </nav>
        </div>
      </div>

      @foreach($barangs as $barang)
  <div class="container d-flex justify-content-center mt-50 mb-50">
            
    <div class="row">
       <div class="col-md-10">
        
            <div class="card card-body">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0">
                                
                                    <img src="{{ URL($barang->gambar) }}" width="150" height="150" alt="">
                               
                            </div>

                            <div class="media-body">
                                <h4 class="media-title font-weight-semibold">
                                    <a href="#" data-abc="true">{{ $barang->nama_barang }}</a>
                                </h4>

                                <p class="mb-3">{{ Str::limit($barang->keterangan, 200) }}</p>

                                <ul class="list-inline list-inline-dotted mb-0">
                                    <li class="list-inline-item"><h5>Stock : {{ $barang->stok }}</h5></li>
                                </ul>
                            </div>

                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                <h3 class="mb-0 font-weight-semibold">Rp. {{ number_format($barang->harga)}}</h3>

                                <div style="margin-top: 5px;">
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>

                                </div>

                                <br>
                                {{-- <div class="text-muted">1985 reviews</div> --}}

                                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                         
    </div>                     
    </div>
</div>
@endforeach
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">

  <div class="wrapper">
    <form action="https://formspree.io/f/xpznadew" method="POST" class="card-content">
      <div class="container">
        <div class="image">
          <i class="fas fa-envelope"></i>
        </div>
        <h1>Subscribe</h1>
        <p>Subscribe to our newsletter and stay updated.</p>
      </div>
      <div class="form-input">
        <label for="email"></label>
        <input type="email" name="email" placeholder="Your Email">
        <button class="subscribe-btn">Subscribe</button>
      </div>
    </form>
  </div>

<footer>
  <div class="grid">
    <div class="column-xs-12">
      <p class="copyright">&copy; Copyright 2022 <a href="/" title="prettywell" target="_blank" >Pretty Well</a></p>
    </div>
  </div>
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