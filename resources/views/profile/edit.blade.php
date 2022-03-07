<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Profile') }}
        </h2>
      </x-slot>

<div>
    
    <h3 class="text-lg font-medium text-gray-900" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">Profile Picture</h3>
    <p class="mt-1 text-sm text-gray-600" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">
        Update your profile picture.
    </p>
    <div class="bg-white shadow rounded-lg" style=" margin-left: 37%; margin-right: 10%; margin-bottom: 1%; margin-top: 1%; height: 250px; width: 50%;">

                <br>
                <br>
                        <img src="{{ URL($user->avatar) }}" style="width:150px; height:150px; float:left;  margin-right:25px; margin-left: 40px; border-radius:50%;">
                        <br>
                        <form enctype="multipart/form-data" action="{{ route('profile.update_avatar') }}" method="POST" style="margin-top: 80px; ">
                            <input type="file" name="avatar" style="width: 35%;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="submit">
                        </form>

    </div>

    <h3 class="text-lg font-medium text-gray-900" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">Profile Information</h3>
    <p class="mt-1 text-sm text-gray-600" style="position: relative; top: 120px; width: 20%; margin-left: 50px;">
    Update your account's profile information and email address.
    </p>

                <div class="bg-white shadow rounded-lg" style=" margin-left: 37%; margin-right: 10%; margin-bottom: 1%; margin-top: 1%; height: 280px; overflow: hidden; width: 50%;">
                    <form method="POST" action="{{ route('profile.update') }}" value="POST" style="position: relative; top: 50px; left: 50px;">
                        @method('post')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row" style="margin-top: 2%;">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="margin-top: 2%;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="update">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</x-app-layout>