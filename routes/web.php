<?php
use App\Http\Controllers\kebunpediacontroller;
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

Route::get('/', [kebunpediacontroller::class,'home'])
    ->name('home');
Route::get('/shop', [kebunpediacontroller::class,'shop'])
    ->name('shop');
Route::get('/forum', [kebunpediacontroller::class,'forum'])
    ->name('forum');
Route::get('/lah{id}', [kebunpediacontroller::class,'isiforum'])
    ->name('isiforum');
Route::get('/createForum', [kebunpediacontroller::class,'createforum'])
    ->name('createForum');
Route::post('/createForum/create', [kebunpediacontroller::class,'createforumsub'])
    ->name('createForumSub');



Route::get('/start', [kebunpediacontroller::class,'start'])
    ->name('start');
Route::get('/login', [kebunpediacontroller::class,'login'])
    ->name('login');
Route::get('/register', [kebunpediacontroller::class,'register'])
    ->name('register');
Route::get('/logout', [kebunpediacontroller::class,'logout'])
    ->name('logout');




Route::get('/admin', [kebunpediacontroller::class,'admin'])
    ->name('admin');




Route::get('/delete/{id}', [kebunpediacontroller::class, 'delete']);
Route::post('/last',[kebunpediaController::class,'store'])
    ->name('members.store');
Route::post('/auth',[kebunpediaController::class,'autentikasi'])
    ->name('autentikasi');
Route::post('/send', [kebunpediacontroller::class,'sendForum'])
    ->name('sendForum');
Route::get('/force', [kebunpediacontroller::class,'force'])
    ->name('force');





Route::get('/test',[kebunpediaController::class,'insert'])
    ->name('test');



