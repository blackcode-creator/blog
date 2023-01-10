<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
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
// if we are going to render static pages we use Closures
// Route::get('/', function () {
//     return "<h1>Programming is Knowledge</h1>";
// });

// Using Controllers
// Installation of Controller: php artisan make: controller Name of the Controller
// We use Controller when the webpages are dynamics

// Welcome Page Route - Landing page
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');

// Blog Page route
// We are using index since it will give us all the blog post
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Single-post-blog - we will use show method
Route::get('/blog/single-blog-post',[BlogController::class, 'show'])->name('blog.show');

// Contact Page
Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');

// About page which is static - which require the use of closure
Route::get('/about', function(){
    return view('about');
})->name('about');


