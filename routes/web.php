<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['register'=>false]);
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/',[MemberController::class,'index']);
    Route::resources([
        'service' => ServiceController::class,
        'product' => ProductController::class,
        'member' => MemberController::class,
        'post' => PostController::class,
    ]);
});
Route::resources([
    'service' => ServiceController::class,
    'product' => ProductController::class,
    'member' => MemberController::class,   
],[
    'only'=>['show','index','create']
]);
Route::resource('post',PostController::class);
Route::post('/comment',[CommentController::class,'store'])->name('comment.store');
Route::post('/comment',[CommentController::class,'store'])->name('comment.store');

Route::view('/contact','contact');
Route::view('/about','about');


