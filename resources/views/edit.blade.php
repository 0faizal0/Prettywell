<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Artikel') }}
      </h2>
    </x-slot>

    <form method="post" action="/edit_process" style="margin-left: 4%" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $post->id }}" name="id">
            <div>
                <x-label for="title" :value="__('Title')" />
                <input type="text" class="form-control" value="{{ $post->title }}" name="title" placeholder="Judul artikel" style="width: 50%"> 
            </div>
            
            <div class="form-group">
                <x-label for="body" :value="__('Body')" />
                <textarea class="form-control" name="body" rows="12" style="width: 50%">{{ $post->body }}
                </textarea>
            </div>

            {{-- <div>
                <x-label for="image" :value="__('Image')" />
                <x-input class="block mt-1 w-full" name="image" type="file" />
            </div> --}}

            <div class="flex items-center mt-4">

                <x-button class="ml-4" type="submit" class="form-control btn btn-primary" value="Edit" style="margin-left: 2%; padding-left: 2%; padding-right: 2%">
                    {{ __('Edit') }}
                 </x-button>

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard') }}" style="margin-left: 2%">
                    	{{ __('Cancel ?') }}
                </a>

            	</div>
            {{-- <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important
        <div class="form-group">
            <input  style="color: green"> --}}
            {{-- <a href="/dashboard" style="color: darkorange"> 
                kembali 
            </a> --}}
        </div>
    </div>
    </form>
    </div>
     
    
  </x-app-layout>