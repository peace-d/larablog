<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\post\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('app_dashboard');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/edit', [UserController::class, 'editProfile'])->name('app_edit_user')->middleware('auth');
Route::post('/user', [UserController::class, 'updateProfile'])->name('app_update_user')->middleware('auth');


Route::get('/post', [PostController::class, 'getAllMyPosts'])->name('app_get_all_my_posts')->middleware('auth');
Route::get('/post/{post_id}/view', [PostController::class, 'viewPost'])->name('app_view_post');
Route::get('/post/{post_id}/edit', [PostController::class, 'editPost'])->name('app_edit_post')->middleware('auth');
Route::put('/post/{post_id}', [PostController::class, 'updatePost'])->name('app_update_post')->middleware('auth');
Route::get('/post/new', [PostController::class, 'createNewPostView'])->name('app_create_new_post_view')->middleware('auth');
Route::post('/post', [PostController::class, 'createNewPost'])->name('app_create_new_post')->middleware('auth');
Route::delete('/post/{post_id}', [PostController::class, 'deletePost'])->name('app_delete_post')->middleware('auth');


Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload')->middleware('auth');
