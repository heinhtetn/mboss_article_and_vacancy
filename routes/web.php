<?php

use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\VacancyController;
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
Auth::routes([
    
]);
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('/articles', ArticleController::class);
    Route::resource('/vacancies', VacancyController::class);
});
Route::redirect('/','/en');

Route::prefix('/{language}')->group(function(){
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/register',function(){
    return view('frontend.register');
});

Route::get('/blogs',[App\Http\Controllers\Frontend\ArticleController::class,'index'])->name('blogs');
Route::get('/search-blogs',[App\Http\Controllers\Frontend\ArticleController::class,'search'])->name('blogs.search');
Route::get('/blogs/{id}/detail',[App\Http\Controllers\Frontend\ArticleController::class,'detail'])->name('blogs.detail');



Route::get('/vacancies',[App\Http\Controllers\Frontend\VacancyController::class,'index'])->name('vacancies');
Route::get('/vacancies/{id}/detail',[App\Http\Controllers\Frontend\VacancyController::class,'detail'])->name('vacancies.detail');
Route::get('/search-vacancies',[App\Http\Controllers\Frontend\VacancyController::class,'search'])->name('vacancies.search');
});












