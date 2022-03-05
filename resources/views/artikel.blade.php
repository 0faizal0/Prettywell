<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
    <title>Article</title>
</head>
<style>
    body {
      width: 100%;
      font-family: cursive;
      margin: 0;
      display: inline-block;
      align-content: center;
      color: white;
    }

    .read:visited{
  color: #946500;
  text-decoration: none;
}

.read:hover{
  color: #ffba26;
  text-decoration: none;
}

.button:link, .button:visited {
  position: relative;
  top: 110px;
  left: 10%;
  border-radius: 10px;
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.button:hover, .button:active {
  background-color: red;
}

</style>
<body style="background-color: #130d0a;">
    <a class="button" href="/#article"><i class="fa-solid fa-house"></i> Home</a>
    <p style="color: #68461a; font-size: 3em; text-align: center;">Our Articles</p>
    @foreach ($posts as $post)
  
    <div class="w3-third w3-container w3-margin-bottom">
      
      <img src="{{ URL($post->image_path) }}" alt="Image" style="width:100%; height: 250px;" class="w3-hover-opacity" id="article">
      <div style="width:90%; margin-left: 21px;">
        <p><b>{{ $post->title }}</b></p>
        <p style="text-align: left;">{{ Str::limit($post->body, 120) }}</p>

        <a href="/detail3/{{ $post->id }}" class="read">Read More</a>
        
      </div>
    </div>
    @endforeach
</body>
</html>