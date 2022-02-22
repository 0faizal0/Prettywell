<x-app-layout>

  

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
      </h2>
      <a href="/post/create" style="background-color: #3480e3; padding: 10px 21px; margin-left: 80%; color: white; border-radius: 25px">+ Tambah Artikel</a>
    </x-slot>
    
    <style>
      table.darkTable {
  font-family: "Comic Sans MS", cursive, sans-serif;
  width: 80%;
  height: 500px;
  /* background-color:#000000; */
  text-align: center;
  border-radius:8px;
  border-collapse: collapse;
  overflow: hidden;
  -moz-border-radius:6px;
}
/* table.darkTable td, table.darkTable th {
  border: 2px solid #4A4A4A;
  padding: 3px 2px;
} */
table.darkTable tbody td {
  font-size: 13px;
  border-bottom: 1px solid #b5b5b3;
}
/* table.darkTable tr:nth-child(even) {
  background: #888888;
} */
table.darkTable thead {
  background: #067479;
  border-bottom: 3px solid #000000;
}
table.darkTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #3d5657;
  text-align: center;
  border-left: 2px solid #4A4A4A;
}
table.darkTable thead th:first-child {
  border-left: none;
}

tr.border_bottom td {
border-bottom: 1px solid black;
}

table.darkTable tfoot td {
  font-size: 12px;
}
  </style>

<table cellspacing="0" cellpadding="0" class="darkTable" style="margin-left:auto;margin-right:auto;margin-top: 5px;">
  <tr style="background-color:#4d76b3; color:#ffffff;">
      <td>Id</td>
      <td>Name</td>
      <td>title</td>
      <td>edit</td>
      <td>hapus</td>
  </tr>
  @foreach ($posts as $post)
  @if ($post->user->id == Auth::user()->id)
  <tr style="background-color: #ffffff; color:Gray;">
      <td>{{$post['id']}}</td>
      <td>{{ $post->user->name }}</td>
      <td>{{ $post->title }}</td>
      <td><a href="/edit/{{ $post->id }}"><button class="btn btn-success" style="color: green">Edit</button></a></td>
      <td> <a href="/delete/{{ $post->id }}"><button class="btn btn-danger" style="color: red">Hapus</button></a></td>

      @endif
      @endforeach
  </tr>
</table>
    
    {{-- <div class="py-8">
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
    </div> --}}
  </x-app-layout>