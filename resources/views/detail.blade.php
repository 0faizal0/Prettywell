{{-- @extends('master')
 
<!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
@section('title')
{{ $post->title }}
@endsection
 
<!-- menampilkan gambar, judul, dan isi artikel -->
@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
    <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" >
    <div class="p-4">
        <h2>{{ $post->title }}</h2>
        <p class="mt-5">{{ $post->body }}</p>
    </div>
</div>
@endsection
 
<!-- menampilkan tombol kembali ke halaman utama -->
@section('sidebar')
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
   <center> 
        <a href="/dashboard"> 
            <button class="btn btn-info text-white w-100">Kembali</button> 
        </a>
    </center>
</div>
@endsection --}}


    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Baca Artikel') }}
        </h2>
      </x-slot> --}}

      <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
        <style>
            /* Style the body */
            body {
              font-family: Arial;
              margin: 0;
              background-color: #b485ff
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
            .content {padding:20px; background-color: #b485ff}
        
            #back:link, #back:visited {
            background-color: rgb(3, 245, 3);
            color: white;
            padding: 9px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;
            margin: 20px;
        }
        #back:hover, #back:active {
            background-color: green;
        }  
        p{
          text-align: center;
        }
            </style>

<div class="card-body" style="background-color: #b485ff;">
  <a href="/" style="margin-left: 80px; margin-top: 80px;" id="back">< Kembali</a>


    <div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
        <div class="p-4">
          <h2 style="font-size: 200%; font-weight: bold; text-align: center">{{ $post->title }}</h2>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" style="width:30%; margin-left: auto; margin-right: auto; display: block;" class="center">
            
            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; margin-left: 600px; margin-top: 10px; border-radius:50%;">
            <p>by {{ $post->user->name }}</p>

            <p style="text-align: center; margin-top: 50px; text-orientation: upright">{{ $post->body }}</p>
            <br><br><br><br><br><br><br><br>

        </div>
    </div>

    
    </div>
           
       
