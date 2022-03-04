<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Post; 
use App\Models\User; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PostController::class, 'welcome'])->name('welcome');

Route::get('/article', [PostController::class, 'artikel']);

Route::get('/rooms', function () {
    return redirect()->route('rooms.index');
});

Route::get('/form', function () {
    return view('form');
});


Route::group(['as' => 'rooms.', 'prefix' => 'rooms','middleware'=>'auth'],function () {
    Route::get('/',\App\Http\Livewire\Room\Index::class)->name('index');
    Route::get('{room:slug}',\App\Http\Livewire\Room\ShowRoom::class)->name('show');
});

Route::get('/dashboard', function () {
    return redirect()->route('rooms.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/detail/{id}', [PostController::class, 'detail']);
Route::get('/detail2/{id}', [PostController::class, 'detail2']);
Route::get('/detail3/{id}', [PostController::class, 'detail3']);

Route::get('/upload-image', [UploadImageController::class, 'index'])->name('upload-image');
Route::post('/save', [UploadImageController::class, 'save']);

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        $user = User::all('id');
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts, 'user' => $user]);
    })->name('dashboard');

    Route::get('status-update/{id}', [RegisteredUserController::class, 'status_update']);
    Route::get('/post/create', [PostController::class, 'create'])->name('new-post');
    Route::post('/post/store', [PostController::class, 'store'])->name('store'); 
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/edit/{id}', [PostController::class, 'edit']);
    Route::get('/delete/{id}', [PostController::class, 'delete']);
    Route::post('/edit_process', [PostController::class, 'edit_process']); 
    // Route::group(['/admin'], function () {
    //     Route::get('/admin', [PostController::class, 'admin'])->name('admin');
    //  });
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [PostController::class, 'admin'])->name('admin');
    Route::get('/adminpost', [PostController::class, 'adminpost'])->name('adminpost');
});


//

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/chat', [App\Http\Controllers\HomeController::class, 'index'])->name('chat');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::post('avatar/profile', [App\Http\Controllers\ProfileController::class, 'update_avatar'])
    ->name('profile.update_avatar');

    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');
});

Route::get('message/{id}', [App\Http\Controllers\MessageController::class, 'show'])->name('msgshow');
Route::post('message/{id}', [App\Http\Controllers\MessageController::class, 'store'])->name('msgstor');

require __DIR__.'/auth.php';