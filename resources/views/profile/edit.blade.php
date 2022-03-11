<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Profile</title>

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

.card {
    border: none;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer
}

.card:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #E1BEE7;
    transform: scaleY(1);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #8E24AA;
    transform: scaleY(0);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:hover::after {
    transform: scaleY(1)
}

.fonts {
    font-size: 11px
}

.social-list {
    display: flex;
    list-style: none;
    justify-content: center;
    padding: 0
}

.social-list li {
    padding: 10px;
    color: #8E24AA;
    font-size: 19px
}

.buttons button:nth-child(1) {
    border: 1px solid #8E24AA !important;
    color: #8E24AA;
    height: 40px
}

.buttons button:nth-child(1):hover {
    border: 1px solid #8E24AA !important;
    color: #fff;
    height: 40px;
    background-color: #8E24AA
}

.buttons button:nth-child(2) {
    border: 1px solid #8E24AA !important;
    background-color: #8E24AA;
    color: #fff;
    height: 40px
}

  </style>

</head>
<body id="body-pd">
  <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <p style="color: black; margin-top: auto; margin-bottom: auto; margin-left: 80%;">{{ Auth::user()->name }}</p>
      <div class="header_img" style="margin-right: 10%;"> <img src="{{ URL(Auth::user()->avatar) }}" alt="avatar"> </div>
      @notifyCss
    <x:notify-messages />
    @notifyJs
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
                <span class="nav_name">All Article</span> </a> <a href="/rooms" class="nav_link"> 
                  <i class="fa-solid fa-comments"></i> <span class="nav_name">Group Chat</span> </a> 
                  <a href="/chat" class="nav_link"><i class="fa-solid fa-comment-dots"></i> 
                    <span class="nav_name">Private Chat</span> </a> <a href="/profile" class="nav_link active"> 
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
  <div>
    <h1 style="color: black; text-align: center;
    font-weight: 300; font-size: calc(1.375rem + 1.5vw); margin-top: 7%;">Profile</h1>
  </div>

<div class="container mt-5">
  <div class="row d-flex justify-content-center">
      <div class="col-md-7">
          <div class="card p-3 py-4">
              <div class="text-center"> <img src="{{ URL($user->avatar) }}" width="100" class="rounded-circle">
                <form enctype="multipart/form-data" action="{{ route('profile.update_avatar') }}" method="POST">
                  <input type="file" name="avatar">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="submit">
              </form> </div>
              <div class="text-center mt-3">
                  <h5 class="mt-2 mb-0">{{ Auth::user()->name }}</h5> <span>Edit Name And Email Here</span>
                  <div class="px-4 mt-1">
                    <form method="POST" action="{{ route('profile.update') }}" value="POST">
                      @method('post')
                      @csrf

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row" style="margin-top: 2%;">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0" style="margin-top: 2%;">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="update">
                                  Update Profile
                              </button>
                          </div>
                      </div>
                      <br>
                      <br>
                  </form>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
</div>
    
      {{-- <div>
    
        <h3 class="text-lg font-medium text-gray-900" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">Profile Picture</h3>
        <p class="mt-1 text-sm text-gray-600" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">
            Update your profile picture.
        </p>
        <div class="bg-white shadow rounded-lg" style=" margin-left: 37%; margin-right: 10%; margin-bottom: 1%; margin-top: 1%; height: 250px; width: 50%;">
    
                    <br>
                    <br>
                            <img src="{{ URL($user->avatar) }}" style="width:150px; height:150px; float:left;  margin-right:25px; margin-left: 40px; border-radius:50%;">
                            <br>
                            <form enctype="multipart/form-data" action="{{ route('profile.update_avatar') }}" method="POST" style="margin-top: 80px; ">
                                <input type="file" name="avatar" style="width: 35%;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="submit">
                            </form>
    
        </div>
    
        <h3 class="text-lg font-medium text-gray-900" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">Profile Information</h3>
        <p class="mt-1 text-sm text-gray-600" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">
        Update your account's profile information and email address.
        </p>
    
                    <div class="bg-white shadow rounded-lg" style=" margin-left: 37%; margin-right: 10%; margin-bottom: 1%; margin-top: 1%; height: 280px; overflow: hidden; width: 50%;">
                        <form method="POST" action="{{ route('profile.update') }}" value="POST" style="position: relative; top: 50px; left: 50px;">
                            @method('post')
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
    
                            <div class="form-group row" style="margin-top: 2%;">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0" style="margin-top: 2%;">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="update">
                                        Update Profile
                                    </button>
                                </div>
                            </div>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div> --}}
  <!--Container Main end-->

</body>
</html>