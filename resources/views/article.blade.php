<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Article</title>
</head>

<style>
    @charset "UTF-8";
/*PEN STYLES*/
* {
  box-sizing: border-box;
}

body {
  background: #f1f1f1;
  margin: 2rem;
}

.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card a:hover {
  color: #5ad67d;
}
.blog-card:hover .photo {
  transform: scale(1.3) rotate(3deg);
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}
.blog-card .photo {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: transform 0.2s;
}
.blog-card .details,
.blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  transition: left 0.2s;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: 0.9rem;
}
.blog-card .details a {
  -webkit-text-decoration: dotted underline;
          text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "";
}
.blog-card .details .tags ul:before {
  font-family: FontAwesome;
  content: "";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: #fff;
  position: relative;
  z-index: 1;
}
.blog-card .description h1,
.blog-card .description h2 {
  font-family: Poppins, sans-serif;
}
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #a2a2a2;
  margin-top: 5px;
}
.blog-card .description .read-more {
  text-align: right;
}
.blog-card .description .read-more a {
  color: #5ad67d;
  display: inline-block;
  position: relative;
}
.blog-card .description .read-more a:after {
  content: "";
  font-family: FontAwesome;
  margin-left: -10px;
  opacity: 0;
  vertical-align: middle;
  transition: margin 0.3s, opacity 0.3s;
}
.blog-card .description .read-more a:hover:after {
  margin-left: 5px;
  opacity: 1;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}
.blog-card p:first-of-type:before {
  content: "";
  position: absolute;
  height: 5px;
  background: #5ad67d;
  width: 35px;
  top: -0.75rem;
  border-radius: 3px;
}
.blog-card:hover .details {
  left: 0%;
}
@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card .description:before {
    transform: skewX(-3deg);
    content: "";
    background: #fff;
    width: 30px;
    position: absolute;
    left: -10px;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
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
  font-family: "Pontano Sans", sans-serif;
  font-size: 1.125rem;
  line-height: 1.5;
  margin: 0;
  padding: 0;
  color: #888;
  background-color: #FDE0CC;
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
  color: #888;
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

<body>

  <div class="site">
	
    <div id="navbar">
      <div class="topnav" id="myTopnav">
      <img src="../img/ptlogo.png" alt="logo" style="width: 100px; height: 80px; display: inline-block;" id="logo">
      <div id="navbar-right">
        <a href="/">Home</a>
        <a href="/product">Product</a>
        <a href="/reviews">ACNE STORY</a>
        <a class="active" href="/article">Article</a>

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
    <br><br><br><br><br>

    <div class="container">
        <div class="grid second-nav">
          <div class="column-xs-12">
            <nav>
              <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Article</li>
              </ol>
            </nav>
          </div>
        </div>
    
        @foreach ($posts as $post)
        
          {{-- <div class="w3-third w3-container w3-margin-bottom">
          <div class="rounded-md p-2 shadow-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="user">
            
            <img src="{{ URL($post->image_path) }}" alt="Image" style="width:100%; height: 250px;" class="w3-hover-opacity">
            <div style="width:60%; margin-left: 21px; color: #130d0a;">
              <p style="font-size: 2em; color: black;"><b>{{ Str::limit($post->title, 10) }}</b></p>
              <p style="text-align: left; color: black;">{{ Str::limit($post->body, 60) }}</p>
      
              <a href="/detail2/{{ $post->id }}" style="margin-top: 10px;" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Read More..</a>
              
            </div>
          </div> --}}

          
          

          <div class="blog-card">
            <div class="meta">
                <div class="photo" style="background-image: url(../images/{{ $post->image_path }})"></div>
                
            </div>
            <div class="description">
                <h1>{{ Str::limit($post->title, 30) }}</h1>
                <p> {{ Str::limit($post->body, 200) }}</p>
                <p class="read-more">
                    <a href="/detail3/{{ $post->id }}">Read More</a>
                </p>
            </div>
        </div>
        
        @endforeach

</body>

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

</html>