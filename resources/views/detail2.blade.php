<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Article</title>
</head>
<body>
 <style>
   * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  background-color: salmon;
  padding-top: 50px;
  padding-bottom: 50px;
}

.container {
  width: 80%;
  min-height: 100vh;
  display: flex;
  flex-wrap: wrap;
  margin-left: auto;
  margin-right: auto;
}

.center {
  align-items: center;
  justify-content: center;
}

.card {
  background-color: white;
  width: 70%;
  min-height: 404.5px;
  display: flex;
  flex-direction: column;
  padding: 20px;
  margin: 5px;
  box-shadow: -20px -20px 0px 0px #fb968b;
  border-radius: 10px;
  -webkit-animation-name: shadow-show;
  /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 1.5s;
  /* Safari 4.0 - 8.0 */
  animation-name: shadow-show;
  animation-duration: 1.5s;
  transition-timing-function: cubic-bezier(0.795, 0, 0.165, 1);
  /* custom */
}
.card h1, .card h2, .card h3, .card h4, .card h5 {
  margin: 0px;
  padding: 0px 0px 15px 0px;
  font-family: "Noto Sans KR", sans-serif;
  font-size: 30px;
  color: #282828;
}
.card hr {
  display: block;
  border: none;
  height: 3px;
  background-color: salmon;
  margin: 0px;
  -webkit-animation-name: line-show;
  /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 0.3s;
  /* Safari 4.0 - 8.0 */
  animation-name: line-show;
  animation-duration: 0.3s;
  transition-timing-function: cubic-bezier(0.795, 0, 0.165, 1);
  /* custom */
}

a:link, a:visited {
  background-color: salmon;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  transition: 0.3s;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  width: 100px;
}

a:hover, a:active {
  background-color: red;
  transition: 1s;
}
.card p {
  margin: 15px 0px 0px 0px;
  font-family: "Noto Sans KR", sans-serif;
  font-weight: 100;
  letter-spacing: -0.25px;
  line-height: 1.25;
  font-size: 16px;
  word-break: break-all;
  word-wrap: pre-wrap;
  color: #282828;
  -webkit-animation-name: p-show;
  /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 1.5s;
  /* Safari 4.0 - 8.0 */
  animation-name: p-show;
  animation-duration: 1.5s;
}
.card button {
  border: none;
  background-color: salmon;
  width: 50%;
  margin: 10px auto;
  padding: 10px 30px;
  color: white;
  font-family: "Noto Sans KR", sans-serif;
  text-transform: uppercase;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes line-show {
  from {
    margin: 0px 100px;
  }
  to {
    margin: 0px;
  }
}
/* Standard syntax */
@keyframes line-show {
  from {
    margin: 0px 100px;
  }
  to {
    margin: 0px;
  }
}
/* Safari 4.0 - 8.0 */
@-webkit-keyframes p-show {
  from {
    color: white;
  }
  to {
    color: #282828;
  }
}
/* Standard syntax */
@keyframes p-show {
  from {
    color: white;
  }
  to {
    color: #282828;
  }
}
/* Safari 4.0 - 8.0 */
@-webkit-keyframes shadow-show {
  from {
    box-shadow: 0px 0px 0px 0px #e0e0e0;
  }
  to {
    box-shadow: -20px -20px 0px 0px #fb968b;
  }
}
/* Standard syntax */
@keyframes shadow-show {
  from {
    box-shadow: 0px 0px 0px 0px #e0e0e0;
  }
  to {
    box-shadow: -20px -20px 0px 0px #fb968b;
  }
}
 </style>

<div class="container center">

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