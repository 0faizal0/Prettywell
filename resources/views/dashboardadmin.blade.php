<!DOCTYPE html>
<html lang="en">
<head>
  <x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Admin Posts') }}
    </h2>
  </x-slot>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel User</title> 
    <p style="text-align: center; font-family: Comic Sans MS; font-size: 200%">Tabel User</p>

</head>
<body>

    <style>
                            table.darkTable {
                        font-family: "Comic Sans MS", cursive, sans-serif;
                        width: 80%;
                        height: 200px;
                        /* background-color:#000000; */
                        text-align: center;
                        border-radius:8px;
                        border-collapse: collapse;
                        overflow: hidden;
                        -moz-border-radius:6px;
                      }
                      /* table.darkTable td, table.darkTable th {
                        border: 2px solid #4A4A4A;
                        padding: 3px 2px;
                      } */
                      table.darkTable tbody td {
                        font-size: 13px;
                        border-bottom: 1px solid #b5b5b3;
                      }
                      /* table.darkTable tr:nth-child(even) {
                        background: #888888;
                      } */
                      table.darkTable thead {
                        background: #067479;
                        border-bottom: 3px solid #000000;
                      }
                      table.darkTable thead th {
                        font-size: 15px;
                        font-weight: bold;
                        color: #3d5657;
                        text-align: center;
                        border-left: 2px solid #4A4A4A;
                      }
                      table.darkTable thead th:first-child {
                        border-left: none;
                      }
                      
                      tr.border_bottom td {
                      border-bottom: 1px solid black;
                    }
                    
                      table.darkTable tfoot td {
                        font-size: 12px;
                      }
                        </style>
                        @if(session('message'))
                        <div class="alert alert-succes">
                            {{session('message')}}
                        </div>
                        @endif
                        <table cellspacing="0" cellpadding="0" class="darkTable" style="margin-left:auto;margin-right:auto;">
                            <tr style="background-color:#4d76b3; color:#ffffff;">
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Added On</td>
                                <td>Active/Inactive</td>
                            </tr>
                            @foreach ($community_db as $member)
                            <tr style="background-color: #ffffff; color:Gray;">
                                <td>{{$member['id']}}</td>
                                <td>{{$member['name']}}</td>
                                <td>{{$member['email']}}</td>
                                <td>{{$member['role']}}</td>
                                <td>{{ $member->created_at }}</td>
                                <td>
                                    
                               <?php if($member->isban == '1'){ ?>
                               <a href="{{ url('/status-update',$member->id) }} " class="badge badge-pill btn-danger px3 py-2">Inactive</a>
                               <?php }else{ ?>
                               <a href="{{ url('/status-update',$member->id) }}" class="badge badge-pill btn-success px3 py-2">Active</a>
                               <?php } ?>
                            </tr>
                            @endforeach
                        </table>
</body>
</x-app-layout>
</html>