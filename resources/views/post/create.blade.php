{{-- //views/post/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-label for="body" :value="__('Body')" />
                {{-- <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required /> --}}
                <textarea class="form-control" name="body" rows="12" style="width: 50%" required>
                </textarea>
            </div>

            <!-- Image -->
            <div>
                <x-label for="title" :value="__('Image')" />
                <x-input class="block mt-1 w-full" name="image" type="file" />
            </div>
  
            <div class="flex items-center justify-end mt-4">
                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('new-post') }}">
                    	{{ __('Cancel') }}
                </a>

                <x-button class="ml-4">
                    	{{ __('Submit') }}
                </x-button>
            	</div>
        	</form>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>