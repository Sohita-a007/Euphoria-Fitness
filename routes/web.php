<?php

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
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('admin.dashboard');
// });


Route::group(['middleware' => ['auth']], function () {
    Route::get('/item', [ItemController::class, 'index'])->name('item');
    Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');


    Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    //maintaince
    Route::get('/admin/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('admin.blog');
    Route::get('/admin/create/blog', [\App\Http\Controllers\BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/store/blog', [\App\Http\Controllers\BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/edit/blog/{id}', [\App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/admin/update/blog/{id}', [\App\Http\Controllers\BlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/admin/delete/blog/{id}', [\App\Http\Controllers\BlogController::class, 'destroy'])->name('admin.blog.delete');
});
// Route::get('/', [\App\Http\Controllers\PagesController::class, 'index'])->name('index');
// Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about'])->name('about');
// Route::get('/tour', [\App\Http\Controllers\PagesController::class, 'tour'])->name('tour');
// Route::get('/services', [\App\Http\Controllers\PagesController::class, 'services'])->name('services');
// Route::get('/favourite/{id}', [\App\Http\Controllers\PagesController::class, 'blog_single'])->name('blog.single');
// // Route::get('/blog', [\App\Http\Controllers\PagesController::class, 'index'])->name('index');
// Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
// Route::post('/contact', [\App\Http\Controllers\PagesController::class, 'contact_store'])->name('contact.store');
