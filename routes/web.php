<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Client\AspirasiController as ClientAspirasiController;
use App\Http\Controllers\Client\Beasiswa;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\GaleriController as ClientGaleriController;
use App\Http\Controllers\MabimController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Client Side
|--------------------------------------------------------------------------
*/

Route::get('/',[ClientHomeController::class, 'index'])->name('client.home');
Route::get('/about',[AboutController::class, 'index'])->name('client.about');
Route::get('/beasiswa',[Beasiswa::class, 'index'])->name('client.beasiswa');
Route::get('/beasiswa/{id}',[Beasiswa::class, 'show']);
Route::get('/aspirasi',[ClientAspirasiController::class, 'index'])->name('client.aspirasi');
Route::post('/aspirasi/create',[ClientAspirasiController::class, 'create'])->name('client.aspirasiCreate');
Route::get('/galeri',[ClientGaleriController::class, 'index'])->name('client.galeri');
Route::get('/blog',[PostController::class, 'index'])->name('client.blog');
Route::get('/blog/category/{slug}',[PostController::class, 'category'])->name('client.blogCategory');
Route::get('/article/{slug}',[PostController::class, 'show'])->name('client.blogShow');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/kominfo', [CommentController::class, 'kominfo']);

Route::get('/mabim/create', [MabimController::class, 'create'])->name('create.mabim');
Route::post('/mabim/store', [MabimController::class, 'store'])->name('store.mabim');
Route::get('/mabim/show/{id}', [MabimController::class, 'show'])->name('show.mabim');

/*
|--------------------------------------------------------------------------
| Auth Side
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Server Side
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
  Route::get('/admin/dashboard',[HomeController::class, 'dashboard'])->name('dashboard.admin');

  // CRUD DATA ADMIN
  Route::get('/administrator', [AdminController::class, 'index'])->name('index.admin');
  Route::get('/administrator/create', [AdminController::class, 'create'])->name('create.admin');
  Route::post('/administrator/store', [AdminController::class, 'store'])->name('store.admin');
  Route::get('/administrator/edit/{id}', [AdminController::class, 'edit'])->name('edit.admin');
  Route::put('/administrator/update/{id}', [AdminController::class, 'update'])->name('update.admin');
  Route::delete('/administrator/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

  // CRUD HOME
  Route::get('/admin/home', [HomeController::class, 'index'])->name('index.home');
  Route::get('/admin/home/create', [HomeController::class, 'create'])->name('create.home');
  Route::post('/admin/home/store', [HomeController::class, 'store'])->name('store.home');
  Route::get('/admin/home/edit/{id}', [HomeController::class, 'edit'])->name('edit.home');
  Route::put('/admin/home/update/{id}', [HomeController::class, 'update'])->name('update.home');
  Route::delete('/admin/home/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

  // CRUD AGENDA
  Route::get('/admin/agenda', [AgendaController::class, 'index'])->name('index.agenda');
  Route::get('/admin/agenda/create', [AgendaController::class, 'create'])->name('create.agenda');
  Route::post('/admin/agenda/store', [AgendaController::class, 'store'])->name('store.agenda');
  Route::get('/admin/agenda/edit/{id}', [AgendaController::class, 'edit'])->name('edit.agenda');
  Route::put('/admin/agenda/update/{id}', [AgendaController::class, 'update'])->name('update.agenda');
  Route::delete('/admin/agenda/destroy/{id}', [AgendaController::class, 'delete'])->name('agenda.destroy');

  // CRUD PENGURUS
  Route::get('/admin/pengurus', [PengurusController::class, 'index'])->name('index.pengurus');
  Route::get('/admin/pengurus/create', [PengurusController::class, 'create'])->name('create.pengurus');
  Route::post('/admin/pengurus/store', [PengurusController::class, 'store'])->name('store.pengurus');
  Route::get('/admin/pengurus/edit/{id}', [PengurusController::class, 'edit'])->name('edit.pengurus');
  Route::put('/admin/pengurus/update/{id}', [PengurusController::class, 'update'])->name('update.pengurus');
  Route::delete('/admin/pengurus/destroy/{id}', [PengurusController::class, 'destroy'])->name('pengurus.destroy');

  // CRUD GALERI
  Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('index.galeri');
  Route::get('/admin/galeri/create', [GaleriController::class, 'create'])->name('create.galeri');
  Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('store.galeri');
  Route::get('/admin/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('edit.galeri');
  Route::put('/admin/galeri/update/{id}', [GaleriController::class, 'update'])->name('update.galeri');
  Route::delete('/admin/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

  // CRUD ASPIRASI
  Route::get('/admin/aspirasi', [AspirasiController::class, 'index'])->name('index.aspirasi');
  Route::get('/admin/aspirasi/create', [AspirasiController::class, 'create'])->name('create.aspirasi');
  Route::post('/admin/aspirasi/store', [AspirasiController::class, 'store'])->name('store.aspirasi');
  Route::get('/admin/aspirasi/show/{id}', [AspirasiController::class, 'show'])->name('show.aspirasi');

  // CRUD BEASISWA
  Route::get('/admin/beasiswa', [BeasiswaController::class, 'index'])->name('index.beasiswa');
  Route::get('/admin/beasiswa/create', [BeasiswaController::class, 'create'])->name('create.beasiswa');
  Route::post('/admin/beasiswa/store', [BeasiswaController::class, 'store'])->name('store.beasiswa');
  Route::get('/admin/beasiswa/show/{id}', [BeasiswaController::class, 'show'])->name('show.beasiswa');
  Route::get('/admin/beasiswa/edit/{id}', [BeasiswaController::class, 'edit'])->name('edit.beasiswa');
  Route::put('/admin/beasiswa/update/{id}', [BeasiswaController::class, 'update'])->name('update.beasiswa');
  Route::delete('/admin/beasiswa/destroy/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');

  // CRUD CATEGORY BLOG ADMIN
  Route::get('/admin/category', [CategoryPostController::class, 'index'])->name('index.categoryPost');
  Route::get('/admin/category/create', [CategoryPostController::class, 'create'])->name('create.categoryPost');
  Route::post('/admin/category/store', [CategoryPostController::class, 'store'])->name('store.categoryPost');
  Route::get('/admin/category/show/{id}', [CategoryPostController::class, 'show'])->name('show.categoryPost');
  Route::get('/admin/category/edit/{id}', [CategoryPostController::class, 'edit'])->name('edit.categoryPost');
  Route::put('/admin/category/update/{id}', [CategoryPostController::class, 'update'])->name('update.categoryPost');
  Route::delete('/admin/category/destroy/{id}', [CategoryPostController::class, 'destroy'])->name('categoryPost.destroy');

  // CRUD TAGS BLOG ADMIN
  Route::get('/admin/tag', [TagController::class, 'index'])->name('index.tagPost');
  Route::get('/admin/tag/create', [TagController::class, 'create'])->name('create.tagPost');
  Route::post('/admin/tag/store', [TagController::class, 'store'])->name('store.tagPost');
  Route::get('/admin/tag/show/{id}', [TagController::class, 'show'])->name('show.tagPost');
  Route::get('/admin/tag/edit/{id}', [TagController::class, 'edit'])->name('edit.tagPost');
  Route::put('/admin/tag/update/{id}', [TagController::class, 'update'])->name('update.tagPost');
  Route::delete('/admin/tag/destroy/{id}', [TagController::class, 'destroy'])->name('tagPost.destroy');

  // CRUD POST BLOG ADMIN
  Route::get('/admin/post', [AdminPostController::class, 'index'])->name('index.post');
  Route::get('/admin/post/create', [AdminPostController::class, 'create'])->name('create.post');
  Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('store.post');
  Route::get('/admin/post/show/{id}', [AdminPostController::class, 'show'])->name('show.post');
  Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('edit.post');
  Route::put('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('update.post');
  Route::delete('/admin/post/destroy/{id}', [AdminPostController::class, 'destroy'])->name('post.destroy');

    // CRUD DATA MABIM
    Route::get('/admin/mabim', [MabimController::class, 'index'])->name('index.mabim');

    Route::get('/admin/mabim/edit/{id}', [MabimController::class, 'edit'])->name('edit.mabim');
    Route::put('/admin/mabim/update/{id}', [MabimController::class, 'update'])->name('update.mabim');
    Route::delete('/admin/mabim/destroy/{id}', [MabimController::class, 'destroy'])->name('mabim.destroy');
    Route::get('/admin/mabim/cetak_pdf', [MabimController::class, 'cetak_pdf'])->name('cetak_pdf');
});