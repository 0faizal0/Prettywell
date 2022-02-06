<x-app-layout>

  

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
      </h2>
      <a href="/post/create" style="background-color: #3480e3; padding: 10px 21px; margin-left: 80%; color: white; border-radius: 25px">+ Tambah Artikel</a>
    </x-slot>

    
    
    <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg">
        
          @foreach ($posts as $post)
          
          @if ($post->user->id == Auth::user()->id)
          <div class="p-6 bg-white border-b border-gray-200" style="margin-bottom: 10px;">
            <h1 class="text-2xl">{{ $post->title }}</h1>
            <p>by {{ $post->user->name }}</p>
            <td>
                <a href="/edit/{{ $post->id }}"><button class="btn btn-success" style="color: green">Edit</button></a>
                <a href="/delete/{{ $post->id }}"><button class="btn btn-danger" style="color: red">Hapus</button></a>
            </td>
          </div>
          @endif
          
          @endforeach
          
        </div>
      </div>
    </div>
  </x-app-layout>