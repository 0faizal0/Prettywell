<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    </style>
    <style>
        /* Style the body */
        body {
          margin: 0;
          background-color: rgb(70, 70, 70);
          width: 100%;
          height: 900px;
        }
        
        a:link, a:visited {
background-color: #f44336;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;
display: inline-block;
}

a:hover, a:active {
background-color: red;
}

    #img{
      width:100%;
      height: 50%;
      /* margin-left: 90px; */
    }
    #title{
      text-align: center;

    }
    #posted{
      color: gray;
      text-align: center;
    }
    #isi{
      max-width: 1000px;
      overflow: hidden;
      text-align: left;
    }
    .card{
      float: right;
      width: 60%;
      background-color: whitesmoke;
      padding-top: 120px;
      padding-bottom: 120px;
      padding-left: 20%;
      padding-right: 20%;
    }

        </style>



<div class="card-body" style="background-image: url('../images/blogbag.png'); width: 100%; height: 700px;">

<div class="card">

<img src="{{ URL($post->image_path) }}" alt="Image" id="img">

<p id="posted">posted by | {{ $post->user->name }}</p>

<h1 id="title">{{ $post->title }}</h1>

<p id="isi">{{ $post->body }}</p>

<a href="/posts">< Kembali</a>



</div>






    </div>
</div>


</div>
</body>
</html>