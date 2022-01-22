<style>
    #back:link, #back:visited {
            background-color: rgb(3, 245, 3);
            color: white;
            padding: 9px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;
        }
        #back:hover, #back:active {
            background-color: green;
        }
</style>
<div class="max-w-7xl mx-auto">
    <div class="bg-white shadow rounded-lg mt-10 p-4 space-y-4  flex flex-col" style="height: 700px;">
        <div class="card-body">
            <a href="/rooms" id="back">< Kembali</a>
        
        </div>
        <div class="border-b border-gray-200 pb-4">
            <h1 class="text-2xl font-bold">CHATROOM : {{ $room->name }}</h1>
        </div>
        <div class="flex h-full">
            <div class="w-3/12 h-full border-r border-gray-200 mr-4">
                <div class="pb-2">
                    <h3 class="text-xl font-bold">users</h3>
                </div>
                <livewire:room.users :room="$room"/>
            </div>
            <div class="w-9/12 flex flex-col justify-between">
                <livewire:room.messages :room="$room" :messages="$messages"/>

                <livewire:room.send-message :room="$room" />

            </div>
        </div>
    </div>
</div>