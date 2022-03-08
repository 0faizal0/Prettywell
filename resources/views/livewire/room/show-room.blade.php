
<div class="max-w-7xl mx-auto">
    <div class="shadow rounded-lg mt-10 p-4 space-y-4  flex flex-col" style="height: 700px; background-color: #353746; color: whitesmoke;">
        <div class="card-body">
            <a href="/rooms" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="back">< Kembali</a>
        
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