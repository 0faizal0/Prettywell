<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <title>Asteriks</title>
</head>

<style>
  

/* Please ❤ this if you like it! */


@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');

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
  text-decoration: none;
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
  text-decoration: none;
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
  text-decoration: none;
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
    -webkit-text-fill-color: #000000;
    text-fill-color: #000000;
    color: #000000;
  }
  .nav ul li a{
    font-size: 3vh;
  }
}

/*************************************************************
  HEADER
**************************************************************/
header {
  position: relative;
  min-height: 100vh;
  width: 100%;
  transform-style: inherit;
  z-index: -1;
}

header::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  display: block;
  background: url(https://picsum.photos/1921/1081?random) top center;
  background-size: cover;
  transform: translateZ(-1px) scale(2.1);
  min-height: 100%;
  z-index: -2;
}


/*************************************************************
  SECTIONS
**************************************************************/
section {
  position: relative;
  min-height: 100vh;
  width: 100%;
  position: relative;
  transform-style: inherit;
}

.section1 {
  background: #fafafa;
  box-shadow: 0 0 20px #333;
  z-index: 1;
}

.section2::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  display: block;
  background: url(https://picsum.photos/g/1920/1080?random) top center;
  background-size: cover;
  transform: translateZ(-.5px) scale(1.6);
  z-index: -1;
}

.section4::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  display: block;
  background: url(https://picsum.photos/1920/1080?random) top center;
  background-size: cover;
  transform: translateZ(-.5px) scale(1.6);
  z-index: -1;
}

.section5::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  display: block;
  background: url(https://picsum.photos/g/1919/1081?random) top center;
  background-size: cover;
  transform: translateZ(-.5px) scale(1.6);
  z-index: -1;
}

.section7::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  display: block;
  background: url(https://picsum.photos/1919/1081?random) top center;
  background-size: cover;
  transform: translateZ(-.5px) scale(1.6);
  z-index: -1;
}

/*************************************************************
  HEADINGS
**************************************************************/
h1 {
  font-size: 4em;
  text-align: center;
  position: absolute;
  padding: 1rem;
  background: #fafafa;
  box-shadow: 0 0 20px #333;
  top: 50%;
  left: 50%;
  transform: translateZ(-1px) scale(2) translate(-25%, -25%);
}

.section1 h1 {
  z-index: 3;
  transform: translate(-50%, -50%);
  box-shadow: none;
}

.section2 h1 {
  transform: translateZ(-.3px) scale(1.3) translate(-39%, -39%);
  z-index: 3;
}

.section4 h1 {
  transform: translateZ(-.3px) scale(1.3) translate(-39%, -39%);
  z-index: 3;
}

.section5 h1 {
  transform: translateZ(-.3px) scale(1.3) translate(-39%, -39%);
  z-index: 3;
}

p {
  font-size: 3em;
  text-align: center;
  position: absolute;
  padding: 1em;
  background: #fafafafa;
  box-shadow: 0 0 50px #333;
  top: 50%;
  left: 50%;
  transform: translateZ(-1px) scale(2) translate(-25%, -25%);
  width: 80%;
}

.section3 {
  background: #fafafa;
  box-shadow: 0 0 20px #333;
  z-index: 1;
}

.section6 {
  background: #fafafa;
  box-shadow: 0 0 20px #333;
  z-index: 1;
}

.section3 p {
  z-index: 3;
  transform: translate(-50%, -50%);
  box-shadow: none;
}

/*************************************************************
  BASIC STYLES
**************************************************************/
*,
*::before,
*::after,
:root {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

@import 'https://fonts.googleapis.com/css?family=Overlock:400,400i,700|Oleo+Script';

html {
  overflow: hidden;
  height: 100%;
}

body {
  overflow-x: hidden;
  overflow-y: scroll;
  height: 100%;
  perspective: 1px;
  transform-style: preserve-3d;
  font-size: 62.5%;
  font-family: 'Overlock', Arial, Helvetica, sans-serif;
}


/*
=====
DEMO DEPENDENCIES
=====
*/

/* The component will reset button browser styles */

.r-button{
    --uirButtonBackgroundColor: var(--rButtonBackgroundColor, transparent);
    --uirButtonPadding: var(--rButtonPadding, var(--rButtonPaddingTop, 0) var(--rButtonPaddingRight, 0) var(--rButtonPaddingBottom, 0) var(--rButtonPaddingLeft, 0));
    --uirButtonBorderWidth: var(--rButtonBorderWidth, 0);
    --uirButtonBorderStyle: var(--rButtonBorderWidth, solid);
    --uirButtonBorderColor: var(--rButtonBorderColor, currentColor);
    --uirButtonFontFamily: var(--rButtonFontFamily, inherit);
    --uirButtonFontSize: var(--rButtonFontSize,  inherit);
    --uirButtonColor: var(--rButtonColor);
  
    background-color: var(--uirButtonBackgroundColor);
    padding: var(--uirButtonPadding);
  
    border-width: var(--uirButtonBorderWidth);
    border-style: var(--uirButtonBorderStyle);
    border-color: var(--uirButtonBorderColor);
  
    cursor: pointer;
  
    font-family: var(--uirButtonFontFamily);
    font-size: var(--uirButtonFontSize);
  }
  
  .r-button::-moz-focus-inner,
  .r-button[type="button"]::-moz-focus-inner,
  .r-button[type="reset"]::-moz-focus-inner,
  .r-button[type="submit"]::-moz-focus-inner {
    
    /* Remove the inner border and padding in Firefox. */
    
    border-style: none;
    padding: 0;
  }
  
  /* The component will reset browser's styles of link */
  
  .r-link{
    --uirLinkDisplay: var(--rLinkDisplay, inline-flex);
    --uirLinkTextColor: var(--rLinkTextColor);
    --uirLinkTextDecoration: var(--rLinkTextDecoration, none);
    display: var(--uirLinkDisplay) !important;
    color: var(--uirLinkTextColor) !important;
    text-decoration: var(--uirLinkTextDecoration) !important;
  }
  
  /*
  =====
  CORE STYLES
  =====
  */
  
  .ai-element{
      --uiaiElementDisplay: var(--aiElementDisplay, inline-flex);	
      --uiaiElementPadding: var(--aiElementPadding, var(--aiElementPaddingTop, 0) var(--aiElementPaddingRight, 0) var(--aiElementPaddingBottom, 0) var(--aiElementPaddingLeft, 0));
      --uiaiElementColor: var(--aiElementColor);
  
      display: var(--uiaiElementDisplay);
      position: relative;
      overflow: hidden;
  }
  
  a.ai-element{
      padding: var(--uiaiElementPadding);
  }
  
  button.ai-element{
      --rButtonPadding: var(--uiaiElementPadding);	
  }
  
  .ai-element__label{
      color: var(--uiaiElementColor);
  }
  
  /* 
  Styles of elements with the border on all sides
  */ 
  
  .ai-element_type1{
      --uiaiElementLineWeight: var(--aiElementLineWeight, 2px);
      --uiaiElementLineColor: var(--aiElementLineColor, #000);	
  }
  
  .ai-element_type1::before, 
  .ai-element_type1::after{
      width: 100%;
      height: var(--uiaiElementLineWeight);
      left: 0;
  }
  
  .ai-element_type1::before{
      top: 0;
  }
  
  .ai-element_type1::after{
      bottom: 0;
  }
  
  .ai-element_type1 .ai-element__label::before,
  .ai-element_type1 .ai-element__label::after{
      width: var(--uiaiElementLineWeight);
      height: 100%;
      top: 0;
  }
  
  .ai-element_type1 .ai-element__label::before{
      left: 0;
  }
  
  .ai-element_type1 .ai-element__label::after{
      right: 0;
  }
  
  .ai-element_type1::before,
  .ai-element_type1::after,
  .ai-element_type1 .ai-element__label::before,
  .ai-element_type1 .ai-element__label::after{
      content: "";     
      background-color: var(--uiaiElementLineColor);
      position: absolute; 
      opacity: 1;
  
      will-change: transform, opacity;
      transition-property: transform, opacity;
  }
  
  .ai-element_type1:hover::before,
  .ai-element_type1:hover::after,
  .ai-element_type1:hover .ai-element__label::before,
  .ai-element_type1:hover .ai-element__label::after{
      opacity: 0;
  }
  
  /* 
  Styles of elements with the bottom border
  */ 
  
  .ai-element_type2{
      --uiaiElementLineWeight: var(--aiElementLineWeight, 2px);
      --uiaiElementLineColor: var(--aiElementLineColor, #000);	
      --aiElementPaddingBottom: var(--uiaiElementLineWeight);	
      
      position: relative;
  }
  
  .ai-element_type2::after{
      content: "";
      width: 100%;
      height: var(--uiaiElementLineWeight);
      background-color: var(--uiaiElementLineColor);
  
      position: absolute;
      left: 0;
      bottom: 0;
  }
  
  /* 
  Styles of elements with background
  */ 
  
  .ai-element_type3 {
      --uiaiElementLineColor: var(--aiElementLineColor, #000);	
      --uiaiElementPadding: var(--aiElementPadding, 10px);
      transition: color .3s ease-out;
      z-index: 1;
  }
  
  .ai-element_type3::before, 
  .ai-element_type3::after{
      content: "";
      background-color: var(--uiaiElementLineColor);	
      opacity: 1;
      position: absolute;
      z-index: -1;
  
      transition: transform .35s ease-out, opacity .35s ease-out .03s;
  }
  
  .ai-element_type3:hover::before, 
  .ai-element_type3:hover::after{
      opacity: 0;
      transition-delay: 0s;
  }
  
  .ai-element_text::before{
      content: attr(data-ai-element-text);
      color: var(--uiaiElementColorHover);
      position: absolute;
  }
  
  .ai-element_text::before, 
  .ai-element_text .ai-element__label{
      transition-property: transform;
      transition-timing-function: cubic-bezier(.86, .6, .08, 1.01); 
      transition-duration: .4s;
  }
  
  .ai-element_text:hover::before,
  .ai-element_text:hover .ai-element__label{
      transition-duration: .3s;
  }
  
  /*
  =====
  EFFECTS
  =====
  */
  
  /* effect 1 */
  
  .ai-element1::before,
  .ai-element1::after,
  .ai-element1 .ai-element__label::before,
  .ai-element1 .ai-element__label::after{
      transform: translate3d(0, 0, 0);
      transition-timing-function: ease-out;
      transition-duration: .2s, .15s;
  }
  
  .ai-element1:hover::before,
  .ai-element1:hover::after,
  .ai-element1:hover .ai-element__label::before,
  .ai-element1:hover .ai-element__label::after{
      transition-duration: .25s;
  }
  
  .ai-element1:hover::before{
      transform: translate3d(-105%, 0, 0);
  }
  
  .ai-element1:hover::after{
      transform: translate3d(105%, 0, 0);
  }
  
  .ai-element1:hover .ai-element__label::before{
      transform: translate3d(0%, -100%, 0);
  }
  
  .ai-element1:hover .ai-element__label::after{
      transform: translate3d(0%, 100%, 0);
  }
  
  /* effect 2 */
  
  .ai-element2::after{
      transform: translate3d(0, 0, 0);
      transition: transform .2s ease-in;
  }
  
  .ai-element2:hover::after{
      transform: translate3d(-100%, 0, 0);
  }
  
  /* effect 3 */
  
  .ai-element3::after{
      opacity: 1;
      transform: translate3d(0, 0, 0);
      transition: transform .3s ease-out, opacity .3s ease-out;
  }
  
  .ai-element3:hover::after{
      opacity: 0;
      transform: translate3d(0, 100%, 0);
  }
  
  /* effect 4 */
  
  .ai-element4::before,
  .ai-element4::after,
  .ai-element4 .ai-element__label::before,
  .ai-element4 .ai-element__label::after{
      transition-timing-function: ease-out;
      transition-duration: .2s, .2s;
      transform: translate3d(0, 0, 0);
  }
  
  .ai-element4:hover::before,
  .ai-element4:hover::after,
  .ai-element4:hover .ai-element__label::before,
  .ai-element4:hover .ai-element__label::after{
      transition-delay: 0s, .05s;	
  }
  
  .ai-element4:hover::before{
      transform: translate3d(-100%, 0, 0);
  }
  
  .ai-element4:hover::after{
      transform: translate3d(100%, 0, 0);
  }
  
  .ai-element4:hover .ai-element__label::before{
      transform: translate3d(0, 100%, 0);
  }
  
  .ai-element4:hover .ai-element__label::after{
      transform: translate3d(0, -100%, 0);
  }
  
  /* effect 5 */
  
  .ai-element5::before,
  .ai-element5::after, 
  .ai-element5 .ai-element__label::before,
  .ai-element5 .ai-element__label::after{
      transition-duration: .2s;
      transition-timing-function: ease-out;
      transform: translate3d(0, 0, 0);
  }
  
  .ai-element5::before, 
  .ai-element5::after{
      width: 100%;
      height: var(--uiaiElementLineWeight);
      left: 0;
  }
  
  .ai-element5 .ai-element__label::before,
  .ai-element5 .ai-element__label::after{
      width: var(--uiaiElementLineWeight);
      height: 100%;
      top: 0;
  }
  
  .ai-element5::before{
      top: 0;
  }
  
  .ai-element5::after{
      bottom: 0;
  }
  
  .ai-element5 .ai-element__label::before{
      left: 0;
  }
  
  .ai-element5 .ai-element__label::after{
      right: 0;
  }
  
  .ai-element5:hover::before,
  .ai-element5:hover .ai-element__label::before{
      transition-delay: 0s;
  }
  
  .ai-element5::after,
  .ai-element5:hover .ai-element__label::after{
      transition-delay: .25s;
  }
  
  .ai-element5 .ai-element__label::after,
  .ai-element5:hover::after{
      transition-delay: .15s;
  }
  
  .ai-element5 .ai-element__label::before,
  .ai-element5:hover::before{
      transition-delay: .35s;
  }
  
  .ai-element5:hover::before{
      transform: translate3d(-105%, 0, 0);
  }
  
  .ai-element5:hover::after{
      transform: translate3d(105%, 0, 0);
  }
  
  .ai-element5:hover .ai-element__label::before{
      transform: translate3d(0, 105%, 0);
  }
  
  .ai-element5:hover .ai-element__label::after{
      transform: translate3d(0, -105%, 0);
  }
  
  /* effect 6 */
  
  .ai-element6::before,
  .ai-element6::after{
      width: 50%;
      height: 100%;
      top: 0;
      transform: translate3d(0, 0, 0);  
  }
  
  .ai-element6::before{
      left: 0;
  }
  
  .ai-element6::after{
      right: 0;
  }
  
  .ai-element6:hover::before{
      transform: translate3d(-100%, 0, 0);
  }
  
  .ai-element6:hover::after{
      transform: translate3d(100%, 0, 0);
  }
  
  /* effect 7 */
  
  .ai-element7::before,
  .ai-element7::after{
      width: 100%;
      height: 50%;
      left: 0;
      transform: translate3d(0, 0, 0);
  }
  
  .ai-element7::before{
      top: 0;
  }
  
  .ai-element7::after{
      bottom: 0;
  }
  
  .ai-element7:hover::before{
      transform: translate3d(0, -50%, 0);
  }
  
  .ai-element7:hover::after{
      transform: translate3d(0, 50%, 0); 
  }
  
  /* effect 8 */
  
  .ai-element8::before,
  .ai-element8::after{
      width: 51%;
      height: 100%;
      transform: rotate(0);
      top: 0;
  }
  
  .ai-element8::before{
      left: 0;
  }
  
  .ai-element8::after{
      right: 0;
  }
  
  .ai-element8:hover::before,
  .ai-element8:hover::after{
      transform: rotate(360deg);
  }
  
  /* effect 9 */
  
  .ai-element9::before,
  .ai-element9::after{
      width: 51%;
      height: 100%;
      top: 0; 
      transform: translate3d(0, 0, 0);
  }
  
  .ai-element9::before{
      left: 0;
  }
  
  .ai-element9::after{
      right: 0;
  }
  
  .ai-element9:hover::before{
      transform: translate3d(-100%, 0, 0) rotate(-45deg);
  }
  
  .ai-element9:hover::after{
      transform: translate3d(100%, 0, 0) rotate(-45deg);	
  }
  
  /*
  =====
  DEMO STYLES
  =====
  */
  
  .section{
    text-align: center;
    display: flex;
    text-align: center;
	
    font-weight: 700;
      
    font-size: 6em;
    
  }
  
  /* .section:nth-child(2n+1){
    background-color: #f1f4fa;
  } */
  
  .section__item{
    margin: auto;
    position: relative;
    top: 300px;
  }
  
  .section__box:nth-child(n+2){
    margin-top: 40px;
  }
  
  .ai-element__label{
      --uiaiElementColorHover: var(--aiElementColorHover);	
      font-weight: 700;
      /* text-transform: uppercase; */
  }
  
  .ai-element:hover .ai-element__label{
      color: var(--uiaiElementColorHover);
  }
  
  /*
  =====
  SETTINGS
  =====
  */
  
  .ai-element{
      --aiElementLineWeight: 5px;
      --aiElementLineColor: #243aab;
      --aiElementColor: #000000;
      --aiElementColorHover: #243aab;
  }
  
  .ai-element_type1,
  .ai-element_type3{
      --aiElementPadding: 10px 15px;
  } 
  
  .ai-element_type3{
      --aiElementColor: #fff;
  }

  #imgteam{
    margin-top: 10%;
    margin-left: 9%;
    display: inline-block;
  }

  @import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Open Sans';
  background: #fafafa;
}

a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 30em;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  margin: 1em;
  display: inline-block;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card:hover {
  transform: rotate(0);
}

.card h3 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card 4 {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    /margin-left: 0;
    /text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}
</style>

<body>
  <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
        @if (Route::has('login'))
        @auth
  			<li><a href="{{ url('/dashboard') }}"><i class="fa-solid fa-house-user"></i> Dashboard</a></li>
        @else
  			<li><a href="{{ route('login') }}"><i class="fa-solid fa-user-ninja"></i> Login</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}"><i class="fa-solid fa-user-ninja"></i> Register</a></li>
        @endif
          @endauth
        @endif
  		</ul>
  	</nav>

    
<header>
  <h1>Welcome to website community Asteriks</h1>
</header>

<section class="section1">
  <div class="section">
    <div class="section__item">
      <div class="section__box">
        <a href="/form" class="r-link ai-element ai-element_type1 ai-element1">
          <span class="ai-element__label">Ask us anything here !</span>
        </a>
      </div>
</section>
  
  

<section class="section2">
  <h1>About Us</h1>
</section>

<section class="section3">
  <p>"We created this website for our community to communicate through the website,
    build our community more solid with chat system, and give us some updates
    for events or news with articles."</p>
  </section>

  <section class="section4">
    <h1>Our Mission</h1>
  </section>

  <section class="section3">
    <p style="text-align: left; margin-left: auto; margin-right: auto;">'To make this community more solid'<br>
      'To make this community more bigger'<br>
      'To make this website more popular'<br>
      'To make the people have fun in our community'<br>
    </p>
    </section>

    <section class="section5">
      <h1>Our Team</h1>
    </section>

    <section class="section6">
      <img src="../images/team1.png" alt="team1" id="imgteam">
      <img src="../images/team2.png" alt="team2" id="imgteam">
      <img src="../images/team3.png" alt="team3" id="imgteam">
      </section>


      <section class="section7">
      <h2 style="font-size: 6em; margin-left: 3%; margin-top: 4%; box-shadow: 0 0 20px #333; background-color: white; width: 25%; padding: 1rem;">Our Article</h2>
                  @foreach ($posts as $post)
                    <div class="card-grid-space" style="display: inline-block;">
                      <a class="card" href="/detail/{{ $post->id }}" style="--bg-img: url({{ URL($post->image_path) }})">
                        <div>
                          <h3>{{ $post->title }}</h3>
                          <h4>{{ Str::limit($post->body, 50) }}</h4>
                          <div class="tags">
                            <div class="tag">Read More</div>
                          </div>
                        </div>
                      </a>
                    </div>
                    @endforeach
                    {{-- <a href="/article" class="read2">> Read More Article here</a> --}}
                    <div class="section" style="position: relative; bottom: 410px;">
                      <div class="section__item">
                        <div class="section__box">
                          <a href="/article" class="r-link ai-element ai-element_type3 ai-element6">
                            <span class="ai-element__label" style="font-size: 0.8em;">Read More..</span>
                          </a>
                        </div>
                  </section>

                  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

</body>
</html>