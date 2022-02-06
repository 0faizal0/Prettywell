<!DOCTYPE html>
<html style="background-color: rgb(201, 201, 201);">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    /* Style the body */
    body {
      font-family: cursive;
      margin: 0;
    }
    
    /* Header/Logo Title */
    .header {
      padding-top: 20px;
      text-align: center;
      color: white;
      font-size: 18px;
      background-image: url('../images/planet2.png');
      width: 1366px;
      height: 700px;
    }
    .aboutus {
      padding-top: 5px;
      margin-bottom: 5px;
      width: 1366px;
      height: 700px;
      background-image: url('../images/planet1.png');
    }
    
/* .button{
  position: relative;
  left: 500px;
  bottom: 70px;
  font-size: 20px;
  color: rgb(59, 0, 126);
  border: 2px solid rgb(156, 215, 255);
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
} */

.button:link, .button:visited {
  position: relative;
  left: 500px;
  bottom: 100px;
  color: rgb(59, 0, 126);
  border: 2px solid rgb(156, 215, 255);
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.button:hover, .button:active {
  background-color: rgb(0, 2, 128);
  color: white;
}

p{
  color: black;
}
#judul{
  position: relative;
  top: 200px;
  color: black;
  font-family: cursive;
  /* mix-blend-mode: overlay; */
  font-size: 50px;
}

#about{
  position: relative;
  top: 200px;
  font-size: 30px;
}

.read:link, .read:visited {
  background-color: #ffdb8e;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: relative; 
  bottom: 20px; 
  left: 100px;
}

.read:hover, .read:active {
  background-color: rgb(255, 233, 137);
}
    </style>
    <title>Asteriks</title>
</head>
<body>
    <div class="header">
      <h1 id="judul"><b> Welcome To Community Website <br>Asteriks`</b></h1>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="button">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="button">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button">Register</a>
                    @endif
                @endauth
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <div class="aboutus">
              <p id="about">About Us</p>
              <p id="about">We created this website for our community to communicate through the website,<br>
                build our community more solid with chat system, and give us some updates <br>
                for events or news with articles. </p>
            </div>
        @endif
    <!-- First Photo Grid-->
    <p style="color: rgb(104, 70, 26); position: relative; font-size: 50px;">Our Articles</p>
    @foreach ($posts as $post)
  
    <div class="w3-third w3-container w3-margin-bottom" id="article">
      
      <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" style="width:90%; height: 300px; padding: 5%; background-color: antiquewhite" class="w3-hover-opacity">
      <div style="background-color: antiquewhite; padding-top: 3px; width:90%; margin-left: 21px;">
        <p style="color: gray; position: relative; bottom: 20px;">posted by |{{ $post->user->name }}</p>
        <p style="position: relative; bottom: 30px;"><b>{{ $post->title }}</b></p>

        <a href="/detail/{{ $post->id }}" class="read" style="color: black; ">> Read More</a>
        <p></p>
      </div>
    </div>
    @endforeach

            </div>
</body>
</html>