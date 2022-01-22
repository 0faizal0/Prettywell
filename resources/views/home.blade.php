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
                          border: 2px solid green;
                          padding: 10px 20px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          margin-top: 40px;
                          margin-left: 20px;
                        }
                        
                        #username:hover, #username:active {
                          background-color: green;
                          color: white;
                        }
                        </style>
                    <ul class="list-group">

                        @foreach ($users as $user)
                            @if ($user->id != auth()->user()->id)
                          
                            @if($user->isOnline())
                                    <a href="message/{{$user->id}}" class="list-group-item list-group-item-action m-2" id="username">
                            
                                        {{$user->name}}  <span class="float-right badge badge-primary">Online</span>
                                
                                    </a>
                            @else
                                    <a href="message/{{$user->id}}" class="list-group-item list-group-item-action m-2" id="username">
                            
                                        {{$user->name}}  <span class="float-right badge badge-dark">Offline</span>
                                
                                    </a>
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