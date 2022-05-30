<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\MessageController as MessageController;
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

Route::redirect('/anasayfa','/home')->name('profile');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function (){
    return view('home.index');
});

Route::get('/test/{id}',[HomeController::class, 'test'])->where('id', '[0-9]+')->name('test');

Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/service',[HomeController::class, 'service'])->name('service');
Route::get('/team',[HomeController::class, 'team'])->name('team');
Route::get('/portfolio',[HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/single',[HomeController::class, 'single'])->name('single');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/appointment',[HomeController::class, 'appointment'])->name('appointment');
Route::post('/storemessage',[HomeController::class, 'storemessage'])->name('storemessage');
Route::view('/login','home.login')->name('login');
Route::view('/loginBlank','home.loginBlank');
//try

//admin
//Route::get('/admin', [AdminHomeController::class,'index'])->name('adminhome')->middleware('auth')
Route::get('/admin', [AdminHomeController::class,'index'])->name('adminhome');

Route::get('/admin/login', [AdminHomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [AdminHomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [AdminHomeController::class, 'logout'])->name('admin_logout');

//Route::middleware('auth')->prefix('admin')->group(function () {
// admin category

Route::get('/admin/category', [AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class,'update'])->name('admin_category_update');
Route::post('/admin/category/destroy/{id}', [AdminCategoryController::class,'destroy'])->name('admin_category_destroy');
Route::get('/admin/category/show/{id}', [AdminCategoryController::class,'show'])->name('admin_category_show');








  //  Route::get('category', [AdminCategoryController::class, 'index'])->name('admin_category');
 //   Route::get('category/add', [AdminCategoryController::class, 'add'])->name('admin_category_add');
  //  Route::get('category/update', [AdminCategoryController::class, 'update'])->name('admin_category_update');
  //  Route::get('category/delete', [AdminCategoryController::class, 'destroy'])->name('admin_category_delete');
  //  Route::get('category/show', [AdminCategoryController::class, 'show'])->name('admin_category_show');


    Route::get('/message', [MessageController::class, 'index'])->name('admin_message');

    // *****ADMIN****
Route::prefix('/admin')->name('admin.')->group(function (){


        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/destroy/{id}','destroy')->name('destroy');

        });
});
//});


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
