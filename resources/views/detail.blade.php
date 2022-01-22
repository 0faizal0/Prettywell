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

    <div class="col-md-7 col-sm-12 mb-5 bg-white p-0" style="padding-top: 5%">
        <div class="p-4">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" style="width:30%; margin-left: auto; margin-right: auto; display: block;" class="center">
            <h2 style="font-size: 200%; font-weight: bold; text-align: center">{{ $post->title }}</h2>
            <p class="mt-5" style="text-align: center">{{ $post->body }}</p>
        </div>
    </div>

    <div class="card-body">
        <a href="/" style="margin-left: 46%">Kembali</a>

    </div>
           
       
