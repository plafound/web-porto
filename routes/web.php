<?php

use App\Http\Controllers\portofolio;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('maintenance');
    // return view('welcome');
});
// Route::get('/', [portofolio::class, 'index'])->name('welcome');
Route::get('/contact', [portofolio::class, 'contact'])->name('contact');
Route::get('/project', [portofolio::class, 'project'])->name('project');
Route::get('/resume', [portofolio::class, 'resume'])->name('resume');
Route::get('/maintenance', [portofolio::class,'maintenance'])->name('maintenance');
