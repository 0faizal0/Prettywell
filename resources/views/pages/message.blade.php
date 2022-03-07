<!DOCTYPE html>
<html lang="en" style="background-color: #0B141A; font-family: Proxima Nova, system-ui, sans-serif;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Private Chat</title>
</head>
<body>
    <style>
        #chat{ 
            display: inline-block;
            height: 10%;
            background-color: #005C4B;
            border-radius: 10px;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 100%;
            color: white;
            list-style-type: none;
        }
        #chat2{
            display: inline-block;
            float: right;
            height: 10%;
            background-color: #202C33;
            border-radius: 10px;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-left: 100%;
            color: white;
            list-style-type: none;
        }
        #input{
            /* position: relative; */
            /* float: left; */
            background-color: #2A3942;
            color: white;
            width: 90%;
            height: 50px;
            margin-top: 20px;
            border-radius: 10px;
            margin-left: 5%;
            padding-left: 10px;
            display: inline-block;
        }
        #send{
            position: relative;
            margin-left: 1%;
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
            /* margin-top: 200px; */
            display: inline-block;
        }
        #send:hover {
            background-color: #3e8e41;
        }
        
        #back:link, #back:visited {
            margin: 50px;
        }

        #namechat{
            font-size: 2em;
            width: 50%;
            height: 100%;
            position: relative;
            left:25%;
            bottom: 50px;
            color: white;
        }

        #card{
            background-color: #0B141A;
            width: 100%;
            height: 900px;
            /* margin-left: 50px;
            margin-top: 30px; */
        }
        #kotakpesan{
            background-color: #202C33;
            width: 100%;
            height: 90px;
            position: fixed;
            bottom: 0;

        }
    </style>
    <div class="card" id="card">

                    <a href="/chat" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" id="back">< Kembali</a>
    
    <ul class="list-group" style="width: 80%; margin-left: auto; margin-right: auto; padding-bottom: 100px;">
            <div class="card-header text-center" id="namechat">{{$u_name->name}}</div>
            <hr style="width: 100%;">
            <br>
            @foreach ($msgs as $msg)

                @if ($msg->s_uid == auth()->user()->id)

                <li class="list-group-item list-group-item-warning text-right" id="chat">{{$msg->message}}</li>

                @else

                 <li class="list-group-item list-group-item-primary" id="chat2">{{$msg->message}}</li>

                @endif    

            @endforeach
       
            </ul> 
            <div id="kotakpesan">
            <form action="{{url('message', $id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                            <input cols="30" type="text" name="message" class="form-control border border-primary" placeholder="Ketik Pesan" aria-label="Recipient's username" aria-describedby="basic-addon2" id="input">
                            {{-- <button class="btn btn-info" type="submit" id="send">send</button> --}}
                            </div>
                    </div>

            </form>
            </div>
</body>
</html>