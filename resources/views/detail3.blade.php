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
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <title>Article</title>
</head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,700);
* {
  /* I know I could write "margin: 0; padding: 0;". But that's not performant. */
  font-family: "Open Sans";
  line-height: 170%;
  color: #444;
}
body,
p,
h1,
h2 {
  margin: 0;
  padding: 0;
}
h2 {
  margin-top: 20px;
}
mark {
  background-color: white;
  padding: 0px 3px;
}

.wrapper {
  padding: 100px;
  margin: 0 0 50px 0;
  text-align: left;
  height: 80vh;
  background: url("../images/{{ $post->image_path }}") no-repeat
    center center fixed;
  background-size: cover;
  transition: all 0.4s ease;
}
.articleText {
  margin: 0 10% 30px 20%;
  width: 60%;
  max-width: 800px;
  padding-left: 30px;
  border-left: 1px solid #cccccc;
  transition: all 0.4s ease;
}
.introduction {
  margin-bottom: 20px;
}
.accountInfo {
  transition: all ease 0.5s;
  display: none;
  height: 420px;
  width: 250px;
  background: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.accountInfo .header {
  background: url("../images/{{ $post->image_path }}") no-repeat
  height: 120px;
  width: 100%;
  padding: 20px 10px;
}
.accountInfo .profilePicture {
  z-index: 1;
  margin: -25px auto 10px auto;
  background: url("../images/{{ $post->image_path }}") no-repeat
  height: 100px;
  width: 100px;
  border-radius: 5px;
}
.accountInfo .profileText {
  text-align: center;
  margin-bottom: 20px;
}
button {
  font-size: 16px;
  width: 100%;
  background: white;
  border: 0;
  padding: 12px 0px;
  transition: all ease 0.5s;
  cursor: pointer;
}
button:hover {
  box-shadow: inset 400px 0 0 0 #444;
  color: white;
}

@media only screen and (max-width: 1000px) {
  /* For tablets: */
  .articleText {
    margin: 0 10% 30px 10%;
    width: 80%;
    max-width: 800px;
    padding-left: 0px;
    border: 0;
  }
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .articleText {
    margin: 0 5% 30px 5%;
    width: 90%;
  }
  .wrapper {
    padding: 5%;
  }
}

#back{
  font-size: .8em; 
  padding-left: 10px; 
  color: #5AD67D; 
  text-decoration: none;
}

#back:hover {
  color: #24853f;
}

</style>

<body>

{{-- <div class="container center">

<div class="card">

<img src="{{ URL($post->image_path) }}" alt="Image" id="img">

<p id="posted">posted by | {{ $post->user->name }}</p>

<h1 id="title">{{ $post->title }}</h1>

<p id="isi">{{ $post->body }}</p>

<a href="/posts">< Kembali</a> --}}

<div class="article">
  <div class="wrapper">
    <div class="wrapperText">
      <h1>
        <mark>{{ $post->title }}</mark>
      </h1>
      <p id="author">
        <mark>by {{ $post->user->name }}</mark>
      </p>
      <div id="accountDetail" class="accountInfo">
        <div class="header">
          <h2><mark>Lina Regental</mark></h2>
          <p><mark>Producer & Author</mark></p>
        </div>
        <div class="profilePicture"></div>
        <p class="profileText">Chef, Community Volunteer, Conveyor of Messages, Electro Producer, Scapegoat. Is that a double rainbow? D:.</p>
        <button>Check me out ></button>
      </div>
    </div>
  </div>
  <!--The Text is generated with hipsum.co :) Check it out! -->
  <div class="articleText">
    <h4 class="introduction">{{ $post->body }} <a href="/article" id="back">< back </a></h4>
  </div>
</div>

</body>
</html>