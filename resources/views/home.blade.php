<x-app-layout>

  

    <x-slot name="header">
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                    
                <div class="card-body">
                    <style>
                        #username:link, #username:visited {
                          background-color: white;
                          color: black;
                          border: 2px solid #9cc0ff;
                          padding: 10px 20px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          margin-top: 160px;
                          margin-left: 120px;
                          border-radius: 20px;
                          font-family: cursive;
                        }
                        
                        #username:hover, #username:active {
                          background-color: #9cc0ff;
                          color: black;
                          font-family: cursive;
                        }
                        #user{
                            display: inline-block;
                            background-color: white;
                            width: 350px;
                            height: 250px;
                            margin-left: 20px;
                            margin-right: 5px;
                            margin-top: 5px;
                            margin-bottom: 5px;
                        }
                        #indikatorOff{
                            background-color: gray;
                            width: 10px;
                            height: 10px;
                            border-radius: 50%;
                            position: relative;
                            bottom: 60px;
                            left: 130px;
                        }
                        #indikatorOn{
                            background-color: greenyellow;
                            width: 10px;
                            height: 10px;
                            border-radius: 50%;
                            position: relative;
                            bottom: 60px;
                            left: 130px;
                        }
                        </style>
                    <ul class="list-group">

                        @foreach ($users as $user)
                            @if ($user->id != auth()->user()->id)
                          
                            @if($user->isOnline())
                                    <a href="message/{{$user->id}}" class="list-group-item list-group-item-action m-2" id="username">
                            
                                        {{$user->name}}  <span class="float-right badge badge-primary">Online</span>
                                        <div id="indikatorOn"></div>
                                
                                    </a>
                                    {{-- <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; right:90px; border-radius:50%; display: inline-block;"> --}}
                            @else
                            <div class="rounded-md p-2 shadow-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="user">
                                    <a href="message/{{$user->id}}" class="list-group-item list-group-item-action m-2" id="username">
                            
                                        {{$user->name}}  <span class="float-right badge badge-dark"></span>
                                
                                    </a>
                                    
                                    <img src="{{ URL($user->avatar) }}" style="width:98px; height:98px; border-radius:50%; display: inline-block; position: relative; bottom: 80px; right: 90px;">
                                    <div id="indikatorOff"></div>
                                </div>
                             @endif
                            
                            @endif
                            
                        @endforeach
                 
                 </ul>
                </div> 
                
            </div>
        </div>
    </div>
</div>
</x-app-layout>