<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Posts') }}
      </h2>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    </x-slot>

    <style>
      .read:link {
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.read:visited{
  color: #946500;
  text-decoration: none;
}

.read:hover{
  color: #ffba26;
  text-decoration: none;
}

#user{
                            display: inline-block;
                            background-color: white;
                            width: 400px;
                            height: 400px;
                            float: left;
                            margin-left: 20px;
                            margin-right: 5px;
                            margin-top: 10px;
                            margin-bottom: 5px;
                        }
    </style>

      @foreach ($posts as $post)
    
      <div class="w3-third w3-container w3-margin-bottom">
      <div class="rounded-md p-2 shadow-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="user">
        
        <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" style="width:100%; height: 250px;" class="w3-hover-opacity">
        <div style="width:60%; margin-left: 21px; color: #130d0a;">
          <p><b>{{ $post->title }}</b></p>
          <p style="text-align: left;">{{ Str::limit($post->body, 80) }}</p>
  
          <a href="/detail2/{{ $post->id }}" class="read">Read More..</a>
          
        </div>
      </div>
      @endforeach
  </x-app-layout>