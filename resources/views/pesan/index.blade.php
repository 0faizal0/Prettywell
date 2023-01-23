<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prettywell</title>

  <style>

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
      color: black;
      background: #fff;
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
      text-align: center;
    }
    
    .product-image {
      display: none;
    }
    
    .image-list li {
      margin: 0;
    }
    
      .product-image img, .image-list img {
        width: 100%;
      }
    
      .product-image {
        display: block;
      }
      .product-image img {
        height: 92%;
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
    .shopee:link, .shopee:visited {
      background-color: #FC5831;
      color: white;
      padding: 8px 85px;
      margin-top: 9px;
      margin-left: 40px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
    }
    
    .shopee:hover, .shopee:active {
      background-color: #ff7552;
    }

    .tokopedia:link, .tokopedia:visited {
      background-color: #03AC0E;
      color: white;
      padding: 8px 73px;
      margin-top: 9px;
      margin-left: 40px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
    }
    
    .tokopedia:hover, .tokopedia:active {
      background-color: #46ff52;
    }
    </style>

    <style>
        .newsletter-subscribe {
  color: #313437;
  background-color: #ffffff;
  padding: 55px 74px;
}

.newsletter-subscribe p {
  color: #7d8285;
  line-height: 1.5;
}

.newsletter-subscribe h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 25px;
  line-height: 1.5;
  padding-top: 0;
  margin-top: 0;
  color: inherit;
}

.newsletter-subscribe .intro {
  font-size: 16px;
  max-width: 500px;
  margin: 0 auto 25px;
}

.newsletter-subscribe .intro p {
  margin-bottom: 35px;
}

.newsletter-subscribe form {
  justify-content: center;
}

.newsletter-subscribe form .form-control {
  background: #eff1f4;
  border: none;
  border-radius: 3px;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 9px;
  height: 45px;
  margin-right: 10px;
  min-width: 250px;
}

.newsletter-subscribe form .btn {
  padding: 16px 32px;
  border: none;
  background: none;
  box-shadow: none;
  text-shadow: none;
  opacity: 0.9;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 13px;
  letter-spacing: 0.4px;
  line-height: 1;
}

.newsletter-subscribe form .btn:hover {
  opacity: 1;
}

.newsletter-subscribe form .btn:active {
  transform: translateY(1px);
}

.newsletter-subscribe form .btn-primary {
  background-color: #055ada !important;
  color: #fff;
  outline: none !important;
}

body {
  background: #eee;
}

.newsletter {
  color: #0062cc !important;
}

.subs{
    position: relative;
    left: 600px;
    bottom: 40px;
}

@media screen and (max-width: 580px) {
      .subs{
        left: 200px;
      }
      .form-control{
        position: relative;
        right: 120px;
      }
      .container{
        margin-top: 20%;
      }
    }

    #deskripsi{
        overflow: hidden;
        font-family: sans-serif;
    }
    </style>
    <style>
      *,
::before,
::after {
  box-sizing: border-box;
}

html {
  background-color: #CFD8DC;
}

details {
  margin: 1rem auto;
  padding: 0 1rem;
  width: 35em;
  max-width: calc(100% - 2rem);
  position: relative;
  border: 1px solid #78909C;
  border-radius: 6px;
  background-color: #ECEFF1;
  color: #263238;
  transition: background-color 0.15s;
}
details > :last-child {
  margin-bottom: 1rem;
}
details::before {
  width: 100%;
  height: 100%;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-radius: inherit;
  opacity: 0.15;
  box-shadow: 0 0.25em 0.5em #263238;
  pointer-events: none;
  transition: opacity 0.2s;
  z-index: -1;
}
details[open] {
  background-color: #FFF;
}
details[open]::before {
  opacity: 0.6;
}

summary {
  padding: 1rem 2em 1rem 0;
  display: block;
  position: relative;
  font-size: 1.33em;
  font-weight: bold;
  cursor: pointer;
}
summary::before, summary::after {
  width: 0.75em;
  height: 2px;
  position: absolute;
  top: 50%;
  right: 0;
  content: "";
  background-color: currentColor;
  text-align: right;
  transform: translateY(-50%);
  transition: transform 0.2s ease-in-out;
}
summary::after {
  transform: translateY(-50%) rotate(90deg);
}
[open] summary::after {
  transform: translateY(-50%) rotate(180deg);
}
summary::-webkit-details-marker {
  display: none;
}

p {
  margin: 0 0 1em;
  line-height: 1.5;
}

ul {
  margin: 0 0 1em;
  padding: 0 0 0 1em;
}

li:not(:last-child) {
  margin-bottom: 0.5em;
}

code {
  padding: 0.2em;
  border-radius: 3px;
  background-color: #E0E0E0;
}
pre > code {
  display: block;
  padding: 1em;
  margin: 0;
}
    </style>
    <style>
      .demo{ background-color: #e7e7e7; }
.product-grid{
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    margin: 5px 15px 0;
    border-radius: 10px;
    box-shadow:  0 0 3px rgba(0,0,0,0.1);
    transition: all 0.5s;
}
.product-grid:hover{ box-shadow:  0 0 15px rgba(0,0,0,0.1); }
.product-grid .product-image{ position: relative; }
.product-grid .product-image a.image{
    border-radius: 10px 10px 0 0;
    overflow: hidden;
    display: block;
}
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-grid .product-sale-label{
    color: #fff;
    background: #009de1;
    font-size: 13px;
    text-transform: uppercase;
    padding: 2px 6px;
    border-radius: 3px;
    position: absolute;
    left: -4px;
    top: -2px;
}
.product-grid .price{
    color: #fff;
    background: #009de1;
    font-size: 13px;
    padding: 2px 6px 2px 18px;
    border: 1px solid rgba(0,0,0,0.08);
    border-radius: 1px 3px 3px 1px;
    position: absolute;
    top: 25px;
    left: -15px;
    clip-path: polygon(10% 0, 100% 0, 100% 100%, 10% 100%, 0 50%);
}
.product-grid  .price span{
    font-weight: 400;
    text-decoration: line-through;
    opacity: 0.5;
}
.product-grid .price:before{
    content: "";
    background: #fff;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    position: absolute;
    top: 8px;
    left: 7px;
}
.product-grid .price.fixed{
    background: #b71540;
    top: -4px;
}
.product-grid .add-to-cart{
    color: #fff;
    background: #b71540;
    font-size: 13px;
    text-transform: uppercase;
    padding: 8px 10px;
    border-radius: 3px;
    box-shadow: 0px 8px 8px 0px rgba(0,0,0,0.1);
    opacity: 0;
    position: absolute;
    right: 10px;
    bottom: 10px;
    transition: all 0.2s ease-out;
}
.product-grid .add-to-cart:hover{ text-shadow: 0 0 5px #000; }
.product-grid:hover .add-to-cart{ opacity:1; }
.product-grid .product-content{
    background-color: #fff;
    text-align: left;
    padding: 15px 10px;
    border-top: 1px solid transparent;
    border-radius: 0 0 10px 10px;
    transition: all 0.3s;
}
.product-grid:hover .product-content{ border-top-color: #dbdbdb; }
.product-grid .title{
    font-size: 15px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0;
}
.product-grid .title a{
    color: #323b45;
    transition: all 0.4s ease-out;
}
.product-grid .title a:hover{ color: #b71540; }
.product-grid .rating{
    padding: 0;
    margin: 0;
    list-style: none;
}
.product-grid .rating li{
    color: #f1c40f;
    font-size: 12px;
    display: inline-block;
}
.product-grid .rating li.far{ color: #dbdbdb; }
@media screen and (max-width:990px){
    .product-grid{ margin: 5px 15px 30px; }
}
    </style>

    <style>
      .tcb-product-slider {
  background: #333;
  background-image: url(https://unsplash.it/1240/530?image=721);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px 0;
}
.tcb-product-slider .carousel-control {
  width: 5%;
}
.tcb-product-item a {
  color: #147196;
}
.tcb-product-item a:hover {
  text-decoration: none;
}
.tcb-product-item .tcb-hline {
  margin: 10px 0;
  height: 1px;
  background: #ccc;
}
@media all and (max-width: 768px) {
  .tcb-product-item {
    margin-bottom: 30px;
  }
}
.tcb-product-photo {
  text-align: center;
  height: 180px;
  background: #fff;
}
.tcb-product-photo img {
  height: 100%;
  display: inline-block;
}
.tcb-product-info {
  background: #f0f0f0;
  padding: 15px;
}
.tcb-product-title h4 {
  margin-top: 0;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.tcb-product-rating {
  color: #acacac;
}
.tcb-product-rating .active {
  color: #ffb500;
}
.tcb-product-price {
  color: firebrick;
  font-size: 18px;
}

.details {
  margin: 50px 0;
}
.details h1 {
  font-size: 32px;
  text-align: center;
  margin-bottom: 3px;
}
.details .back-link {
  text-align: center;
}
.details .back-link a {
  display: inline-block;
  margin: 20px 0;
  padding: 15px 30px;
  background: #333;
  color: #fff;
  border-radius: 24px;
}
.details .back-link a svg {
  margin-right: 10px;
  vertical-align: text-top;
  display: inline-block;
}

html,
body {
  font-family: "Hind", sans-serif;
  margin: 0;
  padding: 0;
  background-color: #d9e2fd;
  width: 100%;
  height: 100%;
}

    </style>


    <style>
      input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin: 0;
}
input[type="number"] {
  -moz-appearance: textfield;
}

/* not necessary*/
* {
  margin: 0;
  padding: 0;
}
body {
  display: flex;
  min-height: 100vh;
}
.quantity-block {
  margin: auto;
  font-size: 20px;
}
.quantity-arrow-minus,
.quantity-arrow-plus {
  cursor: pointer;
  font-size: 20px;
  padding: 5px 12px;
  width: 40px;
  box-sizing: border-box;
  border-radius: 4px;
  outline: none;
}
.quantity-num {
  font-size: 20px;
  width: 35px;
  padding: 5px 10px;
  border-radius: 4px;
  outline: none;
}

    </style>
    
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap");
body {
  font-family: "Chakra Petch", sans-serif;
}

    </style>

</head>
<body>

  <main>
    <br><br>
    <div class="container">
      <div class="grid second-nav">
        <div class="column-xs-12">
          <nav>
            <ol class="breadcrumb-list" style="margin-left: 8%;">
              <li class="breadcrumb-item" style="display: inline-block"><a href="/product" style="text-decoration: none; display: inline-block">Home</a></li>
              <li class="breadcrumb-item active">/ {{ $barang->nama_barang }}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="grid product" style="padding-left: 40px;">
        <div class="column-xs-12 column-md-7">
          <div class="product-gallery">
            <div class="product-image">
              <img class="active" src="../images/{{ $barang->gambar }}">
            </div>

          </div>
        </div>
        <div class="column-xs-12 column-md-5">
          <h1>{{ $barang->nama_barang }}</h1>
          <h2>Rp {{ number_format($barang->harga) }}</h2>

          <details>
            <summary>Description</summary>
            <p>
              {!! nl2br(e($barang->keterangan)) !!}
            </p>
          </details>
          
          <details>
            <summary>Cara Pakai</summary>
            <p>
              {!! nl2br(e($barang->carapakai)) !!}
            </p>
          </details>
          
          <details>
            <summary>Ingredients</summary>
            <p>
              {!! nl2br(e($barang->ingredients)) !!}
            </p>
              
          </details>
          
          <details>
            <summary>BPOM</summary>
            <p>
              {{ $barang->bpom }}
            </p>
          </details>


          
          <tr>
            <td>Jumlah Pesan :</td>
            <br><br>
            <td>
                 <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}" >
                @csrf
                    <div class="quantity-block" style="display: inline;">
                      <a class="quantity-arrow-minus"> - </a>
                      <input class="quantity-num" type="number" value="1" name="jumlah_pesan" required/>
                      <a class="quantity-arrow-plus"> + </a>
                    </div>
                    <button type="submit" class="btn btn-primary" style="display: inline; margin-left: 4%;"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </form>
            </td>
        </tr>
        </div>
      </div>

      <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />


<br><br><br>

  </main>


  
<script>
    const activeImage = document.querySelector(".product-image .active");
const productImages = document.querySelectorAll(".image-list img");
const navItem = document.querySelector("a.toggle-nav");

function changeImage(e) {
activeImage.src = e.target.src;
}

function toggleNavigation() {
this.nextElementSibling.classList.toggle("active");
}

productImages.forEach((image) => image.addEventListener("click", changeImage));
navItem.addEventListener("click", toggleNavigation);

  </script>

  

<script>
  $(function () {
  (function quantityProducts() {
    var $quantityArrowMinus = $(".quantity-arrow-minus");
    var $quantityArrowPlus = $(".quantity-arrow-plus");
    var $quantityNum = $(".quantity-num");

    $quantityArrowMinus.click(quantityMinus);
    $quantityArrowPlus.click(quantityPlus);

    function quantityMinus() {
      if ($quantityNum.val() > 1) {
        $quantityNum.val(+$quantityNum.val() - 1);
      }
    }

    function quantityPlus() {
      $quantityNum.val(+$quantityNum.val() + 1);
    }
  })();
});

</script>

</body>
</html>