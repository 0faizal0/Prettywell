
      <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
        <style>
            /* Style the body */
            body {
              font-family: cursive;
              margin: 0;
              background-color: rgb(70, 70, 70);
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
          width:80%;
          height: 50%;
          margin-left: 90px;
        }
        #title{
          font-family: cursive;
          text-align: center;

        }
        #posted{
          color: gray;
          font-family: cursive;
          text-align: center;
        }
        #isi{
          font-family: cursive;
          max-width: 650px;
          overflow: hidden;
          text-align: left;
        }
        .card{
          float: right; 
          background-color: whitesmoke;
          margin-top: 50px; 
          margin-right: 100px;
          padding-top: 120px;
          padding-bottom: 120px;
          padding-left: 200px;
          padding-right: 200px;
        }

            </style>



<div class="card-body" style="background-image: url('../images/blogbag.png'); width: 1360px; height: 700px;">

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
           
       
