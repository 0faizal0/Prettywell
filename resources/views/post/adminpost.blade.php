<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Admin Posts') }}
      </h2>
    </x-slot>

    <div class="py-12" style="background-color: #3480e3; margin-left: 80px; margin-right: 80px; border-radius: 20px; margin-top: 20px;">
      <div class="flex">
            
        <h1 style="background-color: white; padding: 50px; width: 20%; margin-left: 25%; border-radius: 5%">
          Total User : {{ $user->count() }}
        </h1>
        
        <h1 style="background-color: white; padding: 50px; width: 20%; margin-left: 10%; border-radius: 5%">
          Total Artikel : {{ $posts->count() }}
        </h1>
      </div>
    </div>

    <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
          @foreach ($posts as $post)
           
          <div class="p-6 bg-white border-b border-gray-200" style="background-color: #9eff7a; margin-bottom: 10px;">
            <h1 class="text-2xl">{{ $post->title }}</h1>
            <p>by {{ $post->user->name }}</p>
            <td>
                <a href="/edit/{{ $post->id }}"><button class="btn btn-success" style="color: green">Edit</button></a>
                <a href="/delete/{{ $post->id }}"><button class="btn btn-danger" style="color: red">Hapus</button></a>
            </td>
          </div>
           
          @endforeach
        </div>
      </div>
    </div>
  </x-app-layout>