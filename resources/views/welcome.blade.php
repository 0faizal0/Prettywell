<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<style>
    /* Style the body */
    body {
      font-family: Arial;
      margin: 0;
    }
    
    /* Header/Logo Title */
    .header {
      padding: 60px;
      text-align: center;
      background: #43377a;
      color: white;
      font-size: 18px;
    }
    
    /* Page Content */
    .content {padding:20px;}

    a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid maroon;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-bottom: 5%;
}

a:hover, a:active {
  background-color: #7d2439;
  color: white;
}
    </style>
    <title>Document</title>
</head>
<body class="flex w3-light-grey w3-content" style="max-width:1600px">
    <div class="header">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    <!-- First Photo Grid-->
    @foreach ($posts as $post)
  
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" style="width:100%;" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>{{ $post->title }}</b></p>
        <p>by {{ $post->user->name }}</p>

        <a href="/detail/{{ $post->id }}" class="btn btn-primary">Baca Artikel</a>
        <p></p>

      </div>
    </div>
    @endforeach

    {{-- @foreach ($posts as $post)
                    <div class="card" style="width: 25%; background-color: azure; padding: 1%; border-style: solid; border-width: 5px; border-color: black">
                   <div class="card-body"> 
                   <h1 class="text-2xl">{{ $post->title }}</h1>
               <p>by {{ $post->user->name }}</p>
                   <a href="/detail/{{ $post->id }}" class="btn btn-primary" style="color: blue">> Baca Artikel <</a>
               </div>
               </div>

             @endforeach --}}
            </div>
</body>
</html>