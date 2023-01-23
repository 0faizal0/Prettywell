<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Post; 
use App\Barang;
use App\Models\PostAcne;
use App\Models\Photo;
use App\Models\User;
use Auth;
use Cloudinary;
use Session;

class PostController extends Controller
{
   public function create()
   {
       return view('post.create');
   }

   public function indexProduct($id)
    {
    	$barang = Barang::where('id', $id)->first();
        $other = Barang::all();

    	return view('pesan.index', compact('barang', 'other'));
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
    $request->image->move('images', $newImageName);
    // $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    

       $post = new Post;
   
       $post->title = $request->title;
       $post->body = $request->body;
       $post->user_id = Auth::user()->id;
       $post->image_path = $newImageName;
   
       $post->save();
       notify()->success('Successfully Make Article');

       return back();

   }

   public function store2(Request $request)
   {
 
    $request->validate([
        'title'=> 'required',
        'body' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,svg',
    ]);

    
    $newImageName = time() . '-' . $request->name . '.' .
    $request->image->extension();
    $request->image->move('images', $newImageName);
    
    // $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    

       $post = new PostAcne;
   
       $post->title = $request->title;
       $post->body = $request->body;
       $post->user_id = Auth::user()->id;
       $post->image_path = $newImageName;
   
       $post->save();
       notify()->success('Successfully Upload');

       return back();

   }

   public function barang(){
    return view('postbarang');
   }

   public function stock(Request $request)
   {
 
    $request->validate([
        'nama_barang'=> 'required',
        'keterangan' => 'required',
        'harga' => 'required',
        'stok' => 'required',
        'gambar' => 'required|mimes:jpg,png,jpeg,svg',
    ]);
    
    
    // $newImageName = $request->file('gambar')->move('images');
    $newImageName = time() . '-' . $request->name . '.' .
    $request->gambar->getClientOriginalName();
    $request->gambar->move('images', $newImageName);
    // $path = $request->file('gambar')->getClientOriginalName()->move('images');

    // $uploadedFileUrl = Cloudinary::upload($request->file('gambar')->getRealPath())->getSecurePath();
    

       $post = new Barang;
   
       $post->nama_barang = $request->nama_barang;
       $post->keterangan = $request->keterangan;
       $post->carapakai = $request->carapakai;
       $post->ingredients = $request->ingredients;
       $post->bpom = $request->bpom;
       $post->harga = $request->harga;
       $post->stok = $request->stok;
       $post->gambar = $newImageName;
   
       $post->save();
       notify()->success('Successfully Upload');

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
    $posts = Post::with('user')->take(5)->get();
    return view('welcome', ['posts' => $posts]);
}

public function welcome3()
{
    $posts = Post::with('user')->take(5)->get();
    return view('welcome3', ['posts' => $posts]);
}


public function review()
{
    $postsacne = PostAcne::with('user')->get();
    return view('reviews', ['postsacne' => $postsacne]);
}

public function acnestory()
{
    $postsacne = PostAcne::with('user')->get();
    return view('acnestory', ['postsacne' => $postsacne]);  
}

public function product(){
    $barangs = Barang::all();
    return view('product', compact('barangs'));
}

public function artikel()
{
    $posts = Post::with('user')->get();
    return view('article', ['posts' => $posts]);
}

public function adminpost()
{
    $user = User::all('id');
    $stock = Barang::all();
    $posts = Post::with('user')->get();
    $postsacne = PostAcne::with('user')->get();
    return view('post.adminpost', ['posts' => $posts, 'user' => $user, 'postsacne' => $postsacne, 'stock' => $stock]);
}

public function detail($id)
    {
        $post = Post::where('id', $id)->first();
        return view('detail', ['post'=>$post]);
    }

    public function detail2($id)
    {
        $post = Post::where('id', $id)->first();
        return view('detail2', ['post'=>$post]);
    }

    public function detail3($id)
    {
        $post = Post::where('id', $id)->first();
        return view('detail3', ['post'=>$post]);
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('edit', ['post'=>$post]);
    }
    public function editstock($id)
    {
        $stock = Barang::where('id', $id)->first();
        return view('edit-stock', ['stock'=>$stock]);
    }

    public function edit_process(Request $post)
    {
        $id = $post->id;
        $title = $post->title;
        $body = $post->body;
        $post = Post::where('id', $id)
                    ->update(['title' => $title, 'body' => $body,]);
                    notify()->success('Successfully Edit Article');
        return redirect('/adminpost');
    }

    public function stockprocess(Request $stock)
    {
        $id = $stock->id;
        $nama_barang = $stock->nama_barang;
        $keterangan = $stock->keterangan;
        $harga = $stock->harga;
        $stok = $stock->stok;
        $stock = Barang::where('id', $id)
                    ->update(['nama_barang' => $nama_barang, 'keterangan' => $keterangan, 'harga' => $harga, 'stok' => $stok,]);
                    notify()->success('Successfully Edit Product');
        return redirect('/adminpost');
    }

    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        $post = Post::where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        notify()->success('Successfully Delete Article');
        return redirect('/dashboard');
    }

    public function delete2($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        $post = PostAcne::where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        notify()->success('Successfully Delete AcneStory');
        return redirect('/adminpost');
    }

    public function delete3($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        $post = Barang::where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        notify()->success('Successfully Delete Product');
        return redirect('/adminpost');
    }

    public function admin(){
        $data = User::all();
        return view('dashboardadmin',['community_db' =>$data]);
    }
}