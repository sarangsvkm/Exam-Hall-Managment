<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [App\Http\Controllers\Controller::class, 'home'])->name('home');

Route::get('/login', [App\Http\Controllers\loginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\loginController::class, 'loginsubmit'])->name('loginsubmit');
Route::get('/registration', [App\Http\Controllers\loginController::class, 'register'])->name('register');
Route::post('/registration', [App\Http\Controllers\loginController::class, 'registrationsubmit'])->name('registrationsubmit');


Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\DashboardController::class, 'logout'])->name('logout');
        Route::get('/analyst', [App\Http\Controllers\DashboardController::class, 'analyst'])->name('analyst');
        Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin');
        Route::get('/admin-addmore', [App\Http\Controllers\AdminController::class, 'addmore'])->name('addmore');
        Route::get('/admin-order', [App\Http\Controllers\AdminController::class, 'order'])->name('order');
        route::get('/user', [App\Http\Controllers\AdminController::class, 'user'])->name('dashuser');
        Route::get('/user/delete/{id}', [App\Http\Controllers\AdminController::class, 'user_del'])->name('dashuser_del');

        Route::get('/dash', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('alldashboard');
        Route::post('/dashh', [App\Http\Controllers\AdminController::class, 'dashboard_post'])->name('alldashboard_post');

        Route::get('/admin/class', [App\Http\Controllers\AdminController::class, 'classtable'])->name('classtable');
        Route::get('/admin/subject', [App\Http\Controllers\AdminController::class, 'subjecttable'])->name('subjecttable');
        Route::get('/admin/students', [App\Http\Controllers\AdminController::class, 'studenttable'])->name('studentview');
        Route::get('/admin/exam', [App\Http\Controllers\AdminController::class, 'examtable'])->name('examtable');
        Route::get('/admin/examadd', [App\Http\Controllers\AdminController::class, 'examadd'])->name('examadd');
        Route::get('/admin/allotment', [App\Http\Controllers\AdminController::class, 'allotmenttable'])->name('allotment');
        Route::get('/admin/teacher', [App\Http\Controllers\AdminController::class, 'teachertable'])->name('teacher');
        Route::get('/admin/roomtype', [App\Http\Controllers\AdminController::class, 'roomtype'])->name('roomtable');
        Route::get('/admin/room', [App\Http\Controllers\AdminController::class, 'room'])->name('room');

        Route::get('/session', [App\Http\Controllers\SessionController::class, 'allotment'])->name('allotmentsessionadd');
        Route::post('/session', [App\Http\Controllers\SessionController::class, 'allotment_post'])->name('allotmentsessionaddpost');

        Route::get('/admin/classadd', [App\Http\Controllers\AdminController::class, 'classadd'])->name('classadd');
        Route::post('/admin/classadd', [App\Http\Controllers\FormController::class, 'classadd'])->name('classaddpost');
        Route::get('/admin/class/edit/{id} ', [App\Http\Controllers\FormController::class, 'class_edit'])->name('class_edit');
        Route::post('/admin/class/edit/{id} ', [App\Http\Controllers\FormController::class, 'class_editpost'])->name('class_editpost');
        Route::get('/admin/class/view/{id}', [App\Http\Controllers\FormController::class, 'class_view'])->name('class_view');
        Route::get('/admin/class/delete/{id}', [App\Http\Controllers\FormController::class, 'class_del'])->name('class_del');




        Route::get('/admin/subjectadd', [App\Http\Controllers\AdminController::class, 'subjectadd'])->name('subjectadd');
        Route::post('/admin/subjectadd', [App\Http\Controllers\FormController::class, 'subjectadd'])->name('subjectaddpost');
        Route::get('/admin/subject/edit/{id} ', [App\Http\Controllers\FormController::class, 'subject_edit'])->name('subject_edit');
        Route::post('/admin/subject/edit/{id} ', [App\Http\Controllers\FormController::class, 'subject_editpost'])->name('subject_editpost');
        Route::get('/admin/subject/view/{id}', [App\Http\Controllers\FormController::class, 'subject_view'])->name('subject_view');
        Route::get('/admin/subject/delete/{id}', [App\Http\Controllers\FormController::class, 'subject_del'])->name('subject_del');


        Route::get('/admin/student', [App\Http\Controllers\AdminController::class, 'studentatt'])->name('studentadd');
        Route::post('/admin/student', [App\Http\Controllers\FormController::class, 'studentatt'])->name('studentaddpost');
        Route::get('/admin/student/edit/{id} ', [App\Http\Controllers\FormController::class, 'student_edit'])->name('student_edit');
        Route::post('/admin/student/edit/{id} ', [App\Http\Controllers\FormController::class, 'student_editpost'])->name('student_editpost');
        Route::get('/admin/student/view/{id}', [App\Http\Controllers\FormController::class, 'student_view'])->name('student_view');
        Route::get('/admin/student/delete/{id}', [App\Http\Controllers\FormController::class, 'student_del'])->name('student_del');


        Route::post('/admin/examadd', [App\Http\Controllers\FormController::class, 'examadd'])->name('examaddpost');
        Route::get('/admin/exam/edit/{id} ', [App\Http\Controllers\FormController::class, 'exam_edit'])->name('exam_edit');
        Route::post('/admin/exam/edit/{id} ', [App\Http\Controllers\FormController::class, 'exam_editpost'])->name('exam_editpost');
        Route::get('/admin/exam/view/{id}', [App\Http\Controllers\FormController::class, 'exam_view'])->name('exam_view');
        Route::get('/admin/exam/delete/{id}', [App\Http\Controllers\FormController::class, 'exam_del'])->name('exam_del');


        Route::get('/admin/allotmentadd', [App\Http\Controllers\AdminController::class, 'allotmentadd'])->name('allotmentadd');
        Route::post('/admin/allotmentadd', [App\Http\Controllers\FormController::class, 'allotmentadd'])->name('allotmentaddpost');
        Route::get('/admin/allotment/edit/{id} ', [App\Http\Controllers\FormController::class, 'allotment_edit'])->name('allotment_edit');
        Route::post('/admin/allotment/edit/{id} ', [App\Http\Controllers\FormController::class, 'allotment_editpost'])->name('allotment_editpost');
        Route::get('/admin/allotment/view/{id}', [App\Http\Controllers\FormController::class, 'allotment_view'])->name('allotment_view');
        Route::get('/admin/allotment/delete/{id}', [App\Http\Controllers\FormController::class, 'allotment_del'])->name('allotment_del');


        Route::get('/admin/teacheradd', [App\Http\Controllers\AdminController::class, 'teacheradd'])->name('teacheradd');
        Route::post('/admin/teacheradd', [App\Http\Controllers\FormController::class, 'teacheradd'])->name('teacheraddpost');
        Route::get('/admin/teacher/edit/{id} ', [App\Http\Controllers\FormController::class, 'teacher_edit'])->name('teacher_edit');
        Route::post('/admin/teacher/edit/{id} ', [App\Http\Controllers\FormController::class, 'teacher_editpost'])->name('teacher_editpost');
        Route::get('/admin/teacher/view/{id}', [App\Http\Controllers\FormController::class, 'teacher_view'])->name('teacher_view');
        Route::get('/admin/teacher/delete/{id}', [App\Http\Controllers\FormController::class, 'teacher_del'])->name('teacher_del');

        Route::get('/admin/roomtypeadd', [App\Http\Controllers\AdminController::class, 'roomtypeadd'])->name('roomtypeadd');
        Route::post('/admin/roomtypeadd', [App\Http\Controllers\FormController::class, 'roomtypeadd'])->name('roomtypeaddpost');
        Route::get('/admin/roomtype/edit/{id} ', [App\Http\Controllers\FormController::class, 'roomtype_edit'])->name('roomtype_edit');
        Route::post('/admin/roomtype/edit/{id} ', [App\Http\Controllers\FormController::class, 'roomtype_editpost'])->name('roomtype_editpost');
        Route::get('/admin/roomtype/view/{id}', [App\Http\Controllers\FormController::class, 'roomtype_view'])->name('roomtype_view');
        Route::get('/admin/roomtype/delete/{id}', [App\Http\Controllers\FormController::class, 'roomtype_del'])->name('roomtype_del');

        Route::get('/admin/roomadd', [App\Http\Controllers\AdminController::class, 'roomadd'])->name('roomadd');
        Route::post('/admin/roomadd', [App\Http\Controllers\FormController::class, 'roomadd'])->name('roomaddpost');
        Route::get('/admin/room/edit/{id} ', [App\Http\Controllers\FormController::class, 'room_edit'])->name('room_edit');
        Route::post('/admin/room/edit/{id} ', [App\Http\Controllers\FormController::class, 'room_editpost'])->name('room_editpost');
        Route::get('/admin/room/view/{id}', [App\Http\Controllers\FormController::class, 'room_view'])->name('room_view');
        Route::get('/admin/room/delete/{id}', [App\Http\Controllers\FormController::class, 'room_del'])->name('room_del');
    });
});


Route::get('/admin/ordertable', [App\Http\Controllers\AdminController::class, 'ordertable'])->name('ordertable');


Route::get('/forgetpassword', [App\Http\Controllers\forgetpassword::class, 'forgetpassword'])->name('forgetpassword');
Route::post('/forgetpassword', [App\Http\Controllers\forgetpassword::class, 'fgpasswordsent'])->name('forgetpasswordpost');



Route::get('/edit/{passwordreset}', [App\Http\Controllers\Forgetpassword::class, 'form_edit_get'])->name('form_edit_get');
Route::post('/edit/{passwordreset}', [App\Http\Controllers\Forgetpassword::class, 'form_edit_post'])->name('form_edit_post');




Route::get('/allotmentlist', [App\Http\Controllers\AllotmentController::class, 'Allotment'])->name('allotmentlist');

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});



Route::get('/admin/make/user/{id}', [App\Http\Controllers\AdminController::class, 'make_user'])->name('make_user');



// display of student page after login
// Route::get('/page', function() {return view('dashboard.student_page');
// });
