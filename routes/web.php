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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
})->name('welcome');


Route::get('/availiable-courses', function() {
   return view('pages.courses');
})->name('courses');

Route::get('/faqs', function() {
   return view('pages.faqs');
})->name('faqs');

Route::get('/resources', function() {
   return view('pages.resources');
})->name('resources');

Route::post('submit-contact', function() {
    $data = request();
   
    \Mail::to('support@smesabi.com')->send(new \App\Mail\ContactMail($data));
   
    return redirect()->back()->with('message','Email sent successfully, you will be contacted soon by a SMEsabi support staff');
})->name('contact.form');