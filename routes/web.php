<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

/* Page Routes */
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/users/new_user', function () {
    return view('pages.users.new');
});

Route::resource('users', UsersController::class);






// Route::get('users/tutors', 'TutorsController@tutorsPage');
// Route::get('users/students', 'StudentsController@studentsPage');
// Route::get('academics/courses', 'AcademicsController@coursesPage');
// Route::get('academics/units', 'AcademicsController@unitsPage');