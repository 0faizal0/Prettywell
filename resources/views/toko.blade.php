<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>Shop</title>
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
  </script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #4723D9;
    --first-color-light: #AFA5D9;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: var(--header-height);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: var(--white-color);
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
    color: var(--first-color);
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}

.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-color: var(--first-color);
    padding: .5rem 1rem 0 0;
    transition: .5s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    color: var(--first-color-light);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: calc(var(--nav-width) + 1rem)
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}

@media screen and (min-width: 768px) {
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show {
        width: calc(var(--nav-width) + 156px)
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
    }
}

* {
  box-sizing: border-box;
}

body {
  -webkit-font-smoothing: antialiased;
  color: rgb(0, 0, 0);
  font-size: 1rem;
  font-family: 'Lato', sans-serif;
}

p {
  margin: 20px 0 60px;
}

main {
  background-color: #2C3845;
}

h1 {
  text-align: center;
  font-weight: 300;
}

table {
  display: block;
}

tr, td, tbody, tfoot {
  display: block;
}

thead {
  display: none;
}

tr {
  padding-bottom: 10px;
}

td {
  padding: 10px 10px 0;
  text-align: center;
}
td:before {
  content: attr(data-title);
  color: #7a91aa;
  text-transform: uppercase;
  font-size: 1.4rem;
  padding-right: 10px;
  display: block;
}

table {
  width: 100%;
}

th {
  text-align: left;
  font-weight: 700;
}

thead th {
  background-color: #202932;
  color: #fff;
  border: 1px solid #202932;
}

tfoot th {
  display: block;
  padding: 10px;
  text-align: center;
  color: #b8c4d2;
}

.button {
  line-height: 1;
  display: inline-block;
  font-size: 1.2rem;
  text-decoration: none;
  border-radius: 5px;
  color: #fff;
  padding: 8px;
  background-color: #4b908f;
}

.select {
  padding-bottom: 20px;
  border-bottom: 1px solid #28333f;
}
.select:before {
  display: none;
}

.detail {
  background-color: #BD2A4E;
  width: 100%;
  height: 100%;
  padding: 40px 0;
  position: fixed;
  top: 0;
  left: 0;
  overflow: auto;
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.detail.open {
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

.detail-container {
  margin: 0 auto;
  padding: 40px;
  max-width: 500px;
}

dl {
  margin: 0;
  padding: 0;
}

dt {
  font-size: 2.2rem;
  font-weight: 300;
}

dd {
  margin: 0 0 40px 0;
  font-size: 1.8rem;
  padding-bottom: 5px;
  border-bottom: 1px solid #ac2647;
  box-shadow: 0 1px 0 #c52c51;
}

.close {
  background: none;
  padding: 18px;
  color: #fff;
  font-weight: 300;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 4px;
  line-height: 1;
  font-size: 1.8rem;
  position: fixed;
  right: 40px;
  top: 20px;
  -moz-transition: border 0.3s linear;
  -o-transition: border 0.3s linear;
  -webkit-transition: border 0.3s linear;
  transition: border 0.3s linear;
}
.close:hover, .close:focus {
  background-color: #a82545;
  border: 1px solid #a82545;
}

@media (min-width: 460px) {
  td {
    text-align: left;
  }
  td:before {
    display: inline-block;
    text-align: right;
    width: 140px;
  }

  .select {
    padding-left: 160px;
  }
}
@media (min-width: 720px) {
  table {
    display: table;
  }

  tr {
    display: table-row;
  }

  td, th {
    display: table-cell;
  }

  tbody {
    display: table-row-group;
  }

  thead {
    display: table-header-group;
  }

  tfoot {
    display: table-footer-group;
  }

  td {
    border: 1px solid #28333f;
  }
  td:before {
    display: none;
  }

  td, th {
    padding: 10px;
  }

  tr:nth-child(2n+2) td {
    background-color: #242e39;
  }

  tfoot th {
    display: table-cell;
  }

  .select {
    padding: 10px;
  }
}

body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #f5f5f5;
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

  </style>

</head>
<body id="body-pd">
  <header class="header" id="header">

    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <?php
    $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    if(!empty($pesanan_utama))
       {
        $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count(); 
       }
   ?>
   <a class="nav-link" href="{{ url('check-out') }}" style="width: 90%;">
       <i class="fa fa-shopping-cart"></i>
       @if(!empty($notif))
       <span class="badge badge-danger">{{ $notif }}</span>
       @endif
   </a> 

      <p style="color: black; margin-top: auto; margin-bottom: auto; margin-left: 1%;">{{ Auth::user()->name }}</p>
      <div class="header_img" style="margin-right: 10%;"> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="avatar"> </div>
      
  </header>
  <div class="l-navbar" id="nav-bar">
      <nav class="nav">
          <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
            <span class="nav_logo-name">Prettywell</span> </a>
              <div class="nav_list"> 
                <a href="/toko" class="nav_link active"> 
                  <i class="fa-solid fa-store"></i> <span class="nav_name">Shop</span> </a> 
                  <a href="/history" class="nav_link"> 
                    <i class="fa-solid fa-clock-rotate-left"></i> <span class="nav_name">History</span> </a>
                 <a href="/posts" class="nav_link">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="nav_name">All Article</span> </a> 
                    <a href="/acne" class="nav_link">
                      <i class="fa-solid fa-images"></i>
                      <span class="nav_name">Acne Story</span> </a>
                     <a href="/profile" class="nav_link"> 
                          <i class="fa-solid fa-address-card"></i> <span class="nav_name">Profile</span> 
                        </a> @role('admin') 
                        <a href="/adminku" class="nav_link"> 
                          <i class="fa-solid fa-cart-plus"></i> <span class="nav_name">Order Management</span> 
                        </a> 
                        <a href="/adminpost" class="nav_link"> 
                          <i class="fa-solid fa-hammer"></i> <span class="nav_name">Post Management</span> 
                        </a> 
                        <a href="/admin" class="nav_link">
                          <i class="fa-solid fa-user-gear"></i> <span class="nav_name">User Management</span> 
                        </a> @endrole</div>

          </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
      </nav>
  </div>
  <br>
        <h1 style="color: #4723D9; margin-top: 7%; margin-bottom: 2%; font-family: sans-serif;"><i class="fa-solid fa-store"></i> Our Products</h1>

  <!--Container Main start-->
  {{-- <div>
      <h1 style="color: #4723D9; margin-top: 7%; margin-bottom: 2%;"><i class="fa-solid fa-store"></i> Our Products</h1>

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-5">
                <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" style="width: 70%; height: auto;" alt="">
            </div>
            @foreach($barangs as $barang)
            <div class="col-md-4">
                <div class="card">
                  <img src="{{ url('images') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">
                        <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                        <strong>Stok :</strong> {{ $barang->stok }}
                        <hr>
                        <strong>Keterangan :</strong>
                        {{ Str::limit($barang->keterangan, 40) }} 
                    </p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                  </div>
                </div> 
            </div>
            @endforeach
        </div>
    </div>

  </div> --}}
  
  @foreach($barangs as $barang)
  <div class="container d-flex justify-content-center mt-50 mb-50">
            
    <div class="row">
       <div class="col-md-10">
        
            <div class="card card-body">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0">
                                
                                    <img src="../images/{{ $barang->gambar }}" width="150" height="150" alt="">
                               
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
  <!--Container Main end-->


</body>
</html>
