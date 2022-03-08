<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Edit Article</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');

body{
	font-family: 'Montserrat', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: #ececee;
	background-color: #1f2029;
	overflow: hidden;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
  background-position: center;
  background-repeat: repeat;
  background-size: 4%;
  height: 100vh;
  width: 100%;
  padding-top: 50px;
}
    </style>

    <form method="post" action="/edit_process" style="margin-left: 4%; color: whitesmoke" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $post->id }}" name="id">
            <div>
                <x-label for="title" :value="__('Title')" style="color: whitesmoke"/>
                <input type="text" class="form-control" value="{{ $post->title }}" name="title" placeholder="Judul artikel" style="width: 50%; background-color: #353746; color: whitesmoke;"> 
            </div>
            
            <div class="form-group">
                <x-label for="body" :value="__('Body')" style="color: whitesmoke"/>
                <textarea class="form-control" name="body" rows="12" style="width: 50%; padding-left: 10px; background-color: #353746; color: whitesmoke;">{{ $post->body }}
                </textarea>
            </div>

            <div class="flex items-center mt-4">

                <x-button class="ml-4" type="submit" class="form-control btn btn-primary" value="Edit" style="margin-left: 2%; padding-left: 2%; padding-right: 2%">
                    {{ __('Edit') }}
                 </x-button>

                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('dashboard') }}" style="margin-left: 2%">
                    	{{ __('Cancel') }}
                </a>

            	</div>
 
        </div>
    </div>
    </form>
    </div>
</body>
</html>