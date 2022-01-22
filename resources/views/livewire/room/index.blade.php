<div>
    {{-- The whole world belongs to you --}}
    <div class="bg-white shadow rounded-lg mt-10">
        <div class="border-b border-gray-200 p-6">
            <h2 class="text-2xl font-bold">Public Chat Rooms</h2>
        </div>
        <div class="p-6">
            <livewire:room.create-room />
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold pb-4 border-b mb-4">List Chat Room</h3>
            @foreach($rooms as $room)
                <div>
                    <style>
                        .grup:link, .grup:visited {
                          background-color: rgb(200, 253, 121);
                          color: black;
                          padding: 14px 25px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          border-radius: 10px;
                          margin-bottom: 10px;
                        }
                        
                        .grup:hover, .grup:active {
                          background-color: greenyellow;
                        }
                        </style>
                    <a href="{{ $room->path }}"  class="grup">{{ $room->name }}</a>
                </div>
            @endforeach
        </div>
    </div>

</div>