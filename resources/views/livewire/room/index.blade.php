<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Group Chat</title>

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

.grup:link, .grup:visited {
          background-color: #fff;
          color: black;
          padding: 20px 31px;
          font-size: 2em;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          border-radius: 10px;
          margin-bottom: 20px;
          margin-left: 20px;
          box-shadow: 2px 2px 27px 4px rgba(0,0,0,0.25), -2px -2px 27px 4px rgba(0,0,0,0.22);
          cursor: pointer;
          transition: 0.4s;
        }
        
        .grup:hover, .grup:active {
          background-color: rgb(197, 197, 197);
          transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
        }

  </style>

</head>
<body id="body-pd">
  <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <p style="color: black; margin-top: auto; margin-bottom: auto; margin-left: 80%;">{{ Auth::user()->name }}</p>
      <div class="header_img" style="margin-right: 10%;"> <img src="{{ URL(Auth::user()->avatar) }}" alt="avatar"> </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
        <span class="nav_logo-name">Asteriks</span> </a>
          <div class="nav_list"> <a href="/dashboard" class="nav_link"> 
            <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
            <a href="/post/create" class="nav_link"> <i class="fa-solid fa-square-plus"></i>
              <span class="nav_name">Create Article</span> </a> <a href="/posts" class="nav_link"> 
                <i class="fa-solid fa-newspaper"></i>
                <span class="nav_name">All Article</span> </a> <a href="/rooms" class="nav_link active"> 
                  <i class="fa-solid fa-comments"></i> <span class="nav_name">Group Chat</span> </a> 
                  <a href="/chat" class="nav_link"><i class="fa-solid fa-comment-dots"></i> 
                    <span class="nav_name">Private Chat</span> </a> <a href="/profile" class="nav_link"> 
                      <i class="fa-solid fa-address-card"></i> <span class="nav_name">Profile</span> 
                    </a> @role('admin') <a href="/adminpost" class="nav_link"> 
                      <i class="fa-solid fa-hammer"></i> <span class="nav_name">Admin Page</span> 
                    </a> 
                    <a href="/admin" class="nav_link">
                      <i class="fa-solid fa-user-gear"></i> <span class="nav_name">User Management</span> 
                    </a> @endrole</div>

      </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
  </nav>
  </div>
  <!--Container Main start-->
  <div class="height-100 bg-light">
    <h1 style="color: black; text-align: center;
    font-weight: 300; font-size: calc(1.375rem + 1.5vw);">Group Chat</h1>
    
      {{-- The whole world belongs to you --}}
      <div class="bg-white shadow rounded-lg mt-10" style="width: 90%; height: 100%; background-color: #353746; margin: 0; margin-left: auto; margin-right: auto; padding-bottom: 200px;">
        <div class="border-b border-gray-200 p-6">
            <h2 class="text-2xl font-bold">Public Chat Rooms</h2>
        </div>
        <div class="p-6">
            <livewire:room.create-room />
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold pb-4 border-b mb-4">List Chat Room</h3>
            @foreach($rooms as $room)
                <div style="display: inline-block;">
                    <a href="{{ $room->path }}"  class="grup">{{ $room->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
  <!--Container Main end-->


</body>
</html>