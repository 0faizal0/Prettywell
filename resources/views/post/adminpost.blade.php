<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('All Article') }}
      </h2>
    </x-slot>

    {{-- <div class="py-12" style="background-color: #3480e3; margin-left: 80px; margin-right: 80px; border-radius: 20px; margin-top: 20px;">
      <div class="flex">
            
        <h1 style="background-color: white; padding: 50px; width: 20%; margin-left: 25%; border-radius: 5%">
          Total User : {{ $user->count() }}
        </h1>
        
        <h1 style="background-color: white; padding: 50px; width: 20%; margin-left: 10%; border-radius: 5%">
          Total Artikel : {{ $posts->count() }}
        </h1>
      </div>
    </div> --}}

    {{-- <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
          @foreach ($posts as $post)
           
          <div class="p-6 bg-white border-b border-gray-200" style="margin-bottom: 10px;">
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
    </div> --}}
    <style>
      table.darkTable {
  font-family: "Comic Sans MS", cursive, sans-serif;
  width: 80%;
  height: 200px;
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

<table cellspacing="0" cellpadding="0" class="darkTable" style="margin-left:auto;margin-right:auto;margin-top: 20px;">
  <tr style="background-color:#4d76b3; color:#ffffff;">
      <td>No</td>
      <td>Name</td>
      <td>title</td>
      <td>edit</td>
      <td>hapus</td>
  </tr>
  @foreach ($posts as $post)
  <tr style="background-color: #ffffff; color:Gray;">
      <td>{{$post['id']}}</td>
      <td>{{ $post->user->name }}</td>
      <td>{{ $post->title }}</td>
      <td><a href="/edit/{{ $post->id }}"><button class="btn btn-success" style="color: green">Edit</button></a></td>
      <td> <a href="/delete/{{ $post->id }}"><button class="btn btn-danger" style="color: red">Hapus</button></a></td>

      @endforeach
  </tr>
</table>
  </x-app-layout>