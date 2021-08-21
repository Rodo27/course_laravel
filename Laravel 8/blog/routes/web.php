<?php

use App\Http\Controllers\ContactusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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
/*
Route::get('/', function () {
    //return view('welcome');

    return "Bienvenido a la pagina principal";
});
*/

Route::get('/', HomeController::class)->name('home');


Route::resource('courses', CourseController::class);

Route::view('aboutus', 'aboutus')->name('aboutus');

Route::get('contactus', [ContactusController::class, 'index'])->name('contactus.index');

Route::post('contactus', [ContactusController::class, 'store'])->name('contactus.store');

//Route::resource('asignaturas', CourseController::class)->parameters(['asignaturas' => 'courses'])->names('courses');

/* Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::post('courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');

Route::put('courses/{course}', [CourseController::class, 'update'])->name('courses.update');

Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
 */

/*
Route::get('coursess/{Course}/{categoria?}', function ($Course, $categoria = null) {
    //return "Bienvenido al Course: $Course de la categoria: $categoria";

    if($categoria){
        return "Bienvenido al Course: $Course de la categoria: $categoria";
    }else{
        return "Bienvenido al Course: $Course";
    }   
});
*/
