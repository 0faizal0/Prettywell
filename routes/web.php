<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\notification;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HistoryController;
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

Route::get('/toko', [HomeController::class, 'toko'])->name('toko');

Route::get('/article', [PostController::class, 'artikel']);

Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function () {
    return view('form');
});

Route::get('/detail/{id}', [PostController::class, 'detail']);
Route::get('/detail2/{id}', [PostController::class, 'detail2']);
Route::get('/detail3/{id}', [PostController::class, 'detail3']);

Route::middleware(['auth'])->group(function () {
    
    // Route::get('/dashboard', function () {
    //     $user = User::all('id');
    //     $posts = Post::with('user')->get();
    //     return view('dashboard', ['posts' => $posts, 'user' => $user]);
    // })->name('dashboard');

    Route::get('status-update/{id}', [RegisteredUserController::class, 'status_update']);
    Route::post('/post/store', [PostController::class, 'store'])->name('store');
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::post('/edit_process', [PostController::class, 'edit_process']); 
    // Route::group(['/admin'], function () {
    //     Route::get('/admin', [PostController::class, 'admin'])->name('admin');
    //  });
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [PostController::class, 'admin'])->name('admin');
    Route::get('/adminpost', [PostController::class, 'adminpost'])->name('adminpost');
    Route::get('/adminku', [App\Http\Controllers\HistoryController::class, 'admin'])->name('admin');

    Route::get('/upload-image', [UploadImageController::class, 'index'])->name('upload-image');
    Route::post('/save', [PostController::class, 'store2'])->name('save');

    Route::get('/stock', [PostController::class, 'barang'])->name('stock');
    Route::post('/upload-stock', [PostController::class, 'stock'])->name('upload-stock');
    Route::get('/edit-stock/{id}', [PostController::class, 'editstock'])->name('editstock');
    Route::post('/process-stock', [PostController::class, 'stockprocess'])->name('process-stock');

    Route::get('/post/create', [PostController::class, 'create'])->name('new-post');
    Route::get('/edit/{id}', [PostController::class, 'edit']);
    Route::get('/delete/{id}', [PostController::class, 'delete']);
    Route::get('/delete2/{id}', [PostController::class, 'delete2']);
    Route::get('/delete3/{id}', [PostController::class, 'delete3']);
});


//

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::post('avatar/profile', [App\Http\Controllers\ProfileController::class, 'update_avatar'])
    ->name('profile.update_avatar');

    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');
});

Route::get('pesan/{id}', [App\Http\Controllers\PostController::class, 'indexProduct']);
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);
Route::get('check-out', [App\Http\Controllers\PesanController::class, 'check_out']);
Route::post('check-out2', [App\Http\Controllers\PesanController::class, 'submit']);
Route::get('/province/{id}/cities', [App\Http\Controllers\PesanController::class, 'getCities']);
Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete']);
Route::get('payment', [App\Http\Controllers\PesanController::class, 'payment']);
Route::post('payment', [App\Http\Controllers\PesanController::class, 'payment_post']);


// Route::get('check-ongkir', 'OngkirController@check_out');

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail'])->name('detail');
Route::post('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail_post']);

Route::post('/payment-handler', [App\Http\Controllers\HistoryController::class, 'payment_handler']);

Route::post('/payment-handler', function () {

	// Handle Midtrans notification here

    $order = Order::where('order_id', $json->order_id)->first();
    $order->update(['status'=>$json->transaction_status]);
	return Response::json(['status' => 'ok'], 200);
});

Route::get('/contactus', function () {
    return view('contactus');   
});

Route::get('/ourstore', function () {
    return view('ourstore');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/termncondition', function () {
    return view('term');
});

Route::get('/reviews', [PostController::class, 'review']);
Route::get('/acne', [PostController::class, 'acnestory']);
Route::get('/product', [PostController::class, 'product'])->name('product');

require __DIR__.'/auth.php';