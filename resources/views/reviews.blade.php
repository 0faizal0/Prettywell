<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prettywell</title>
</head>

<style>
  #gallery {
  padding-top: 40px;
}
@media screen and (min-width: 991px) {
  #gallery {
    padding: 60px 30px 0 30px;
  }
}

.img-wrapper {
  position: relative;
  margin-top: 15px;
}
.img-wrapper img {
  width: 100%;
}

.img-overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
}
.img-overlay i {
  color: #fff;
  font-size: 3em;
}

#overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
#overlay img {
  margin: 0;
  width: 80%;
  height: auto;
  -o-object-fit: contain;
     object-fit: contain;
  padding: 5%;
}
@media screen and (min-width: 768px) {
  #overlay img {
    width: 60%;
  }
}
@media screen and (min-width: 1200px) {
  #overlay img {
    width: 50%;
  }
}

#nextButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
}
#nextButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #nextButton {
    font-size: 3em;
  }
}

#prevButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
}
#prevButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #prevButton {
    font-size: 3em;
  }
}

#exitButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  position: absolute;
  top: 15px;
  right: 15px;
}
#exitButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #exitButton {
    font-size: 3em;
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
    background-color: #FC9CAA;
    color: white;
  }
  
  #navbar-right {
    float: right;
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
    height: 600px;
    /* height: 100vh; */ /* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #000;
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
        /* STYLE UNTUK FOOTER */
html {
  scroll-behavior: smooth;
}

body {
  padding: 0;
  margin: 0;
}

section {
  text-align: justify;
  padding: 0 2em 2em;
}

h1 {
  text-align: center;
  font-family: roboto;
  font-weight: 400;
  font-size: 35px;
  color: #656565;
}

.dummy-text {
  color: #3c3b3b;
  font-family: lato;
  font-size: 20px;
  line-height: 1.5;
}

.col-6 {
  width: 50%;
  display: inline-table;
}

footer {
  background-image: linear-gradient(to bottom right, rgb(255, 255, 128), rgb(255, 255, 128));
  padding: 3em 4em 2em;
}

footer .logo {
  color: rgb(0, 0, 0);
  font-size: 28px;
  font-family: roboto;
}

footer .row {
  margin: 2em 0;
  color: rgb(0, 0, 0);
  position: relative;
  border-bottom: 1px solid #cecece;
}

.footer-toggle {
  display: none;
}

.link-cat {
  cursor: pointer;
}

footer ul {
  padding: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

footer ul li {
  list-style-type: none;
  padding: 0;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  line-height: 2;
}

footer .footer-cat,
#newsletter span {
  font-size: 20px;
}

.footer-cat-links a {
  color: #cecece;
  text-decoration: none;
  position: relative;
}

.footer-cat-links.active > li a {
  pointer-events: auto;
}

.footer-cat-links a:after {
  top: 21px;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  width: 0;
  background: #fff;

  -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
}

.footer-cat-links a:hover:after,
.footer-cat-links a:focus:after {
  width: 100%;
  left: 0;
}

footer #subscribe {
  margin: 20px 0px 30px;
}

input#subscriber-email {
  outline: none;
  padding: 8px;
  background: #212121;
  border: 1px solid #cecece;
  color: #cecece;
  border-radius: 4px 0px 0px 4px;
}

input#subscriber-email::-webkit-input-placeholder {
  color: rgb(202, 196, 196);
}

input#subscriber-email:-ms-input-placeholder {
  color: #cecece;
}

input#subscriber-email::-ms-input-placeholder {
  color: #cecece;
}

input#subscriber-email::placeholder {
  color: #cecece;
}

.col-3 {
  display: inline-table;
  width: 25%;
}

.col-3#newsletter {
  width: 24%;
}

.col-3#newsletter #btn-scribe {
  margin-left: -4px;
  border: 1px solid #cecece;
  border-radius: 0px 4px 4px 0;
  padding: 8px 5px;
  background-color: #e2e2e2;
  color: #212121;
  cursor: pointer;
}

.social-2 {
  display: none;
}

.social-links {
  bottom: 44px;
  position: absolute;
  left: 0;
}

.social-links a {
  color: #fff;
  font-size: 20px;
  border: 1px solid;
  border-radius: 20px;
  padding: 6px;

  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.social-links a:not(:last-child) {
  margin-right: 10px;
}

.social-links a:hover,
.social-links a:focus {
  background-color: #212121;
}

.social-links a i {
  width: 25px;
  height: 25px;
  text-align: center;
}

#newsletter #address li:not(:first-child) {
  padding: 20px 0;
}

#newsletter #address li i {
  font-size: 45px;
  width: auto;
  padding: 5px;
}

#newsletter #address li div {
  color: #cecece;
  font-size: 14px;
  width: 80%;
  text-align: left;
  float: right;
  line-height: 1.3;
}

#copyright {
  text-align: center;
  color: #fff;
  font-family: lato;
}

#owner {
  text-align: center;
  padding: 20px 0 0px;
  color: #fff;
  font-family: lato;
}

#owner a {
  color: #fff;
}

/* iPads to Smartphone for Common Elements ----------- */
@media only screen and (max-width: 1024px) {
  .col-3 {
    width: 100%;
    padding-bottom: 1em;
    position: relative;
  }

  .col-3#newsletter {
    width: 100%;
    position: relative;
    padding-bottom: 0;
    padding-top: 1em;
  }

  footer .footer-cat {
    margin-left: 25px;
  }

  .footer-toggle,
  .footer-toggle::after {
    background: #fff;
    height: 2px;
    width: 15px;
    position: absolute;
    -webkit-transition: all 0.4s ease-in;
    transition: all 0.4s ease-in;
  }

  .footer-toggle {
    top: 11px;
    cursor: pointer;
  }

  .footer-toggle::after {
    content: "";
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  .btnActive .footer-toggle::after {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  .footer-cat-links {
    margin: 0 0em 0px 1.6em;
  }

  .footer-cat-links a {
    pointer-events: none;
  }

  .footer-cat-links li {
    line-height: 0;
    opacity: 0;
  }

  .footer-cat-links.active > li {
    line-height: 2;
    opacity: 1;
  }

  .social-1 {
  }

  .social-2 {
    position: absolute;
    top: 7.5em;
    bottom: 0px;
    height: 20px;
    padding-bottom: 1.5em;
    width: 100%;
  }

  #address {
    margin-top: 6em;
  }

  #newsletter #address li i {
    width: auto;
  }

  #newsletter #address li div {
    font-size: 14px;
    width: auto;
    text-align: -webkit-auto;
    float: none;
    line-height: 2;
    display: inline-block;
    padding: 10px 0 15px;
  }

  #newsletter #address li div:last-child {
    padding-bottom: 0;
  }

  #newsletter #address li:not(:first-child) {
    padding: 20px 0 0;
  }
}

/* iPads (portrait)----------- */
@media only screen and (min-width: 768px) and (max-width: 1024px) and (orientation: portrait) {
  footer {
    padding-right: 3em;
    padding-left: 3em;
  }

  .col-3 {
    width: 100%;
    padding-bottom: 1em;
  }
}

/* iPads (landscape) ----------- */


/* Mini Tablet ----------- */
@media only screen and (max-width: 600px) {
  .col-3 {
    width: 100%;
    padding-bottom: 1em;
  }

  .col-6 {
    width: 100%;
    display: block;
  }

  footer {
    padding: 3em 2em 2em;
  }
}

/* Smartphones (portrait and landscape) ----------- */
@media only screen and (max-width: 480px) {
  .col-6 {
    width: 100%;
  }

  footer {
    padding-right: 1em;
    padding-left: 1em;
  }
}

    </style>

{{-- STYLE UNTUK SLIDESHOW KEDUA --}}

    <style>
      #slider-text {
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6 {
  overflow: hidden;
}

#slider-text h2 {
  font-family: "Josefin Sans", sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after {
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
}

#itemslider h4 {
  font-family: "Josefin Sans", sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5 {
  font-family: "Josefin Sans", sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6 {
  font-family: "Josefin Sans", sans-serif;
  font-weight: 300;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: "Josefin Sans", sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #fff;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img {
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px) {
  #slider-control img {
    padding-top: 70px;
    margin: 0 auto;
  }
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d),
  all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6 {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d),
  all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
    </style>

<style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #FDE0CC;
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

  .fa-times{
    color: whitesmoke;
  }
  .fa-chevron-right{
    color: whitesmoke;
  }
  .fa-chevron-left{
    color: whitesmoke;
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

i {
  color: black;
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
    <div class="site">
	
      <div id="navbar">
        <div class="topnav" id="myTopnav">
        <img src="../img/ptlogo.png" alt="logo" style="width: 100px; height: 80px;" id="logo">
        <div id="navbar-right">
          <a href="/">Home</a>
          <a href="/product">Product</a>
          <a class="active" href="/reviews">ACNE STORY</a>
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
      <h1>ACNE STORY</h1>
      <section id="gallery">
        <div class="container">
          <div id="image-gallery">
            <div class="row">

              @foreach($postsacne as $post)
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                <div class="img-wrapper" data-aos="fade-up">
                  <a href="../images/{{ $post->image_path }}"><img src="../images/{{ $post->image_path }}" class="img-responsive"></a>
                  <div class="img-overlay">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              @endforeach

            </div><!-- End row -->
          </div><!-- End image gallery -->
        </div><!-- End container -->
      </section>
      <br>


  

        <!-- Footer -->
  <footer class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="../img/ptlogo.png" alt="" width="120" class="mb-3" style="margin-bottom: 20px;">
          <p class="font-italic text-muted">You deserve skincare that works #Prettywell</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="https://twitter.com/prettywell_co" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/prettywell.co/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.tiktok.com/@prettywell.co" target="_blank" title="tiktok"><i class="fab fa-tiktok"></i></a></li>

          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Info</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="/product" class="text-muted">Product</a></li>
            <li class="mb-2"><a href="/aboutus" class="text-muted">About Us</a></li>
            <li class="mb-2"><a href="/ourstore" class="text-muted">Our Stores</a></li>
            <li class="mb-2"><a href="/shipping" class="text-muted">Shipping</a></li>
            <li class="mb-2"><a href="/article" class="text-muted">Our Article</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Help</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="/contactus" class="text-muted">Contact Us</a></li>
            
            <li class="mb-2"><a href="/termncondition" class="text-muted">Term & Condition</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">

          <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
          <p class="text-muted mb-4">Subscribe to our newsletter in order not to miss new arrivals
            promotions and discounts of our store.</p>

            <form
  action="https://formspree.io/f/xpznadew"
  method="POST"
>
          <div style="padding-bottom: 30px;">
              <input type="email" name="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0" style="width: 190px; display: inline-block;">

                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>

              </div>
            </form>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2022 CV Pretty Abadi Indonesia.</p>
      </div>
    </div>
  </footer>
  <!-- End -->

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
} else {
document.getElementById("navbar").style.padding = "20px 10px";
document.getElementById("logo").style.fontSize = "25px";
}
}
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script>
          // Gallery image hover
$(".img-wrapper").hover(
  function () {
    $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
  },
  function () {
    $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $(
  '<div id="prevButton"><i class="fa fa-chevron-left"></i></div>'
);
var $nextButton = $(
  '<div id="nextButton"><i class="fa fa-chevron-right"></i></div>'
);
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay
  .append($image)
  .prepend($prevButton)
  .append($nextButton)
  .append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function (event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function () {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function (event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) {
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function (event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function () {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});

        </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>