<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        

    //    event(new Registered($user));

    //     Auth::login($user); 

        return redirect('/login');
        
        
    }

   
    public function status_update($id){

        $data = \DB::table('users')->where('id',$id)->first();
        $status = $data->isban;

        if($status == 1){
            \DB::table('users')->where('id',$id)->update([
                'isban'=>0
            ]);
        }else{
            \DB::table('users')->where('id',$id)->update([
                'isban'=>1
            ]);
        }
        
        session()->flash('message','Member status has been updated succesfully.');
        return redirect('admin');

    }
}
