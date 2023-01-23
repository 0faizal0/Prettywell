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
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <title>Create Product</title>

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

body {
    background: #eee
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
       <i class="fa fa-shopping-cart" style="color: #007bff"></i>
       @if(!empty($notif))
       <span class="badge badge-danger">{{ $notif }}</span>
       @endif
   </a>

      <p style="color: black; margin-top: auto; margin-bottom: auto; margin-left: 1%;">{{ Auth::user()->name }}</p>
      <div class="header_img" style="margin-right: 10%;"> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="avatar"> </div>
      @notifyCss
    <x:notify-messages />
    @notifyJs
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
        <span class="nav_logo-name">Prettywell</span> </a>
          <div class="nav_list"> 
            <a href="/toko" class="nav_link"> 
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
  <!--Container Main start-->
  <div>
    <h1 style="color: black; text-align: center;
    font-weight: 300; font-size: calc(1.375rem + 1.5vw); margin-top: 7%;">Create Product</h1>

      <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200">
                <form enctype="multipart/form-data" method="POST" action="{{ route('upload-stock') }}">
            @csrf

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="nama_barang" :value="old('title')" required autofocus />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-label for="body" :value="__('Description')" />
                {{-- <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required /> --}}
                <textarea class="form-control" name="keterangan" rows="12" style="width: 31%; resize: none;" required></textarea>
            </div>
            <div class="mt-4">
                <x-label for="body" :value="__('Cara Pakai')" />
                {{-- <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required /> --}}
                <textarea class="form-control" name="carapakai" rows="6" style="width: 31%; resize: none;" required></textarea>
            </div>
            <div class="mt-4">
                <x-label for="body" :value="__('ingredients')" />
                {{-- <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required /> --}}
                <textarea class="form-control" name="ingredients" rows="3" style="width: 31%; resize: none;" required></textarea>
            </div>

            <div>
                <x-label for="title" :value="__('BPOM')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="bpom" :value="old('title')" />
            </div>


            <!-- harga -->
            <div>
                <x-label for="title" :value="__('Harga')" />
                <x-input id="title" class="block mt-1 w-full" type="number" name="harga" :value="0" required autofocus />
            </div>

            <!-- stok -->
            <div>
                <x-label for="title" :value="__('Stock')" />
                <x-input id="title" class="block mt-1 w-full" type="number" name="stok" :value="0" required autofocus />
            </div>

            <!-- Image -->
            <div>
                <x-label for="title" :value="__('Image')" />
                <x-input class="block mt-1 w-full" name="gambar" type="file" />
            </div>
  
            <div class="flex items-center justify-end mt-4">
                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('adminpost') }}">
                    	{{ __('Cancel') }}
                </a>

                <x-button class="ml-4">
                    	{{ __('Submit') }}
                </x-button>
            	</div>
        	</form>
               </div>
            </div>
        </div>
    </div>
  <!--Container Main end-->

</body>
</html>