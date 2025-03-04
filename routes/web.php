<?php

use App\Http\Controllers\Admin\UploadController;
use App\Http\Livewire\AdminIndex;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Post\CreatePost;
use App\Http\Livewire\Post\EditPost;
use App\Http\Livewire\PostList;
use App\Http\Livewire\System\Setting;
use App\Http\Livewire\System\User;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('admin')->group(function () {
    Route::prefix('auth')->group(function () {
       Route::get('login', Login::class)->name('login');
        Route::middleware(['auth'])->group(function () {
            Route::post('/logout', function (){
                auth()->logout();
                return redirect()->route('home');
            })->name('logout');
        });
    });
    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/', AdminIndex::class)->name('admin.index');

        Route::prefix('posts')->group(function () {

            Route::get('/',PostList::class)->name('admin.posts');
            Route::get('/create',CreatePost::class)->name('admin.posts.create');
            Route::get('/{id}/edit',EditPost::class)->name('admin.posts.edit');


        });

        Route::prefix('system')->group(function () {
            Route::get('users',User::class)->name('admin.system.users');
            Route::get('users/create',User\CreateUser::class)->name('admin.system.users.create');
            Route::get('users/{id}/edit',User\EditUser::class)->name('admin.system.users.edit');
            Route::get('settings',Setting::class)->name('admin.system.settings');

        });
        Route::post('/tiny-upload',[UploadController::class,'tinyUpload'])->name('admin.tiny.upload');
    });
});
