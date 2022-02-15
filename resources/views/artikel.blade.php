<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Article</title>
</head>
<style>
    body {
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

#home:visited{
  color: #001b94;
  text-decoration: none;
  font-size: 30px; 
  position: relative; 
  top: 110px; 
  left: 100px
}

#home:hover{
  color: #7d6eff;
  text-decoration: none;
}

</style>
<body style="background-color: #130d0a; padding-bottom: 100px;">
    <a id="home" href="/#article" style="font-size: 30px; text-decoration: none;  position: relative; top: 110px; left: 100px;">Home</a>
    <p style="color: #68461a; font-size: 50px; text-align: center;">Our Articles</p>
    @foreach ($posts as $post)
  
    <div class="w3-third w3-container w3-margin-bottom">
      
      <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" style="width:100%; height: 250px;" class="w3-hover-opacity" id="article">
      <div style="width:90%; margin-left: 21px;">
        <p><b>{{ $post->title }}</b></p>
        <p style="text-align: left;">{{ Str::limit($post->body, 120) }}</p>

        <a href="/detail/{{ $post->id }}" class="read">Read More</a>
        
      </div>
    </div>
    @endforeach
</body>
</html>