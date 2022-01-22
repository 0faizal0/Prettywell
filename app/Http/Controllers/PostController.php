<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Post; 
use App\Models\User; 
use Auth;
use Session;

class PostController extends Controller
{
   public function create()
   {
       return view('post.create');
   }
   
   public function store(Request $request)
   {
 
    $request->validate([
        'title'=> 'required',
        'body' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,svg',
    ]);

    $newImageName = time() . '-' . $request->name . '.' .
    $request->image->extension();
    $request->image->move(public_path('images'), $newImageName);

       $post = new Post;
   
       $post->title = $request->title;
       $post->body = $request->body;
       $post->user_id = Auth::user()->id;
       $post->image_path = $newImageName;
   
       $post->save();

       return back();

   }

   public function index()
{
    //        MAKE model_has_permission v v v
    // auth()->user()->givePermissionTo('admin');
    //        MAKE model_has_role V V V
    // auth()->user()->assignRole('admin');
    //       MAKE ROLE   V V V
    // $role = Role::create(['name' => 'admin']);
    // $permission = Permission::create(['name' => 'admin']); 

    $posts = Post::with('user')->get();
    return view('post.posts', ['posts' => $posts]);
}

public function welcome()
{
    $posts = Post::with('user')->get();
    return view('welcome', ['posts' => $posts]);
}

public function adminpost()
{
    $user = User::all('id');
    $posts = Post::with('user')->get();
    return view('post.adminpost', ['posts' => $posts, 'user' => $user]);
}

public function detail($id)
    {
        $post = Post::where('id', $id)->first();
        return view('detail', ['post'=>$post]);
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('edit', ['post'=>$post]);
    }

    public function edit_process(Request $post)
    {
        $id = $post->id;
        $title = $post->title;
        $body = $post->body;
        $post = Post::where('id', $id)
                    ->update(['title' => $title, 'body' => $body,]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect()->action('App\Http\Controllers\PostController@index');
    }

    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        $post = Post::where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'Artikel berhasil dihapus');
        return redirect()->action('App\Http\Controllers\PostController@index');
    }

    public function admin(){
        $data = User::all();
        return view('dashboardadmin',['community_db' =>$data]);
    }
}