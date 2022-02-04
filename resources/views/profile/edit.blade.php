<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Profile') }}
        </h2>
      </x-slot>

      <style> 
        #submit {
          background-color: #750073;
          border: none;
          color: white;
          padding: 6px 22px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
        }
        #update {
          background-color: #750073;
          border: none;
          color: white;
          padding: 6px 22px;
          text-decoration: none;
          margin: 24px 2px;
          cursor: pointer;        }
        </style>

    <!-- /#sidebar-wrapper -->
    <div class="bg-white shadow rounded-lg" style=" margin-left: 80px; margin-right: 80px; margin-bottom: 40px; margin-top: 20px; height: 550px; background-color: #ff4d36;">
<div class="container" style="padding-left: 80px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card">
                </div>
                <br>
                <h3 style="height:50px; font-size: 30px; color:#750073; margin-left: 50px; font-weight: bold;">EDIT INFORMATION</h3>
                <br>
                <div style=" height: 200px;" class="rounded">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left;  margin-right:25px; margin-left: 40px; border-radius:50%;">
                        <br>
                        <form enctype="multipart/form-data" action="{{ route('profile.update_avatar') }}" method="POST" style="margin-top: 80px; ">
                            <input type="file" name="avatar" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary" id="submit">
                        </form>
                    </div>
                </div>

                <h3 style="height:20px; font-size: 30px; color:#3d3d3d; margin-left: 50px; font-weight: bold;">ACCOUNT INFORMATION</h3>
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" value="POST">
                        @method('post')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="update">
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