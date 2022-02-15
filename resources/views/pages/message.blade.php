<x-app-layout>

  

    <x-slot name="header">
    </x-slot>
    <style>
        #chat{
            background-color: peachpuff;
            border-radius: 20px;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            margin-left: 240px;
            margin-right: 240px;
        }
        #input{
            position: relative;
            float: left;
            width: 800px;
            margin-top: 200px;
            border-radius: 10px;
            margin-left: 200px;
        }
        #send{
            position: relative;
            float: left;
            margin-left: 10px;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 27px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            float: left;
            border-radius: 10px;
            margin-top: 200px;
        }
        #send:hover {
            background-color: #3e8e41;
        }
        
        #back:link, #back:visited {
            background-color: rgb(3, 245, 3);
            color: white;
            padding: 9px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;
            margin: 20px;
        }
        #back:hover, #back:active {
            background-color: green;
        }  
        #namechat{
            font-size: 30px;
            font-family: cursive;
            border: 2px solid #750073;
            width: 90%;
            margin-left: 60px;
            border-radius: 20px;
        }

        #card{
            background-color: white;
            width: 1380px;
            height: 600px;
            margin-left: 50px;
            margin-top: 30px;
        }
    </style>
    <div class="rounded-md p-2 shadow-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="card">

    <div id="app">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 p-0 m-0">
            <div class="card">
        
                <div class="card-body">
                    <a href="/chat" id="back">< Kembali</a>
            
                </div>

    <ul class="list-group">
            <div class="card-header text-center" id="namechat">{{$u_name->name}}</div>
            @foreach ($msgs as $msg)

                @if ($msg->s_uid == auth()->user()->id)

                 <li class="list-group-item list-group-item-warning text-right" id="chat">{{$msg->message}}</li>

                @else

                 <li class="list-group-item list-group-item-primary" id="chat">{{$msg->message}}</li>

                @endif    

            @endforeach
       
            </ul> 
            <form action="{{url('message', $id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="input-group">
                            <input type="text" name="message" class="form-control border border-primary" placeholder="message" aria-label="Recipient's username" aria-describedby="basic-addon2" id="input">
                            <div class="input-group-append">
                            <button class="btn btn-info" type="submit" id="send">send</button>
                            </div>
                    </div>

            </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</x-app-layout>