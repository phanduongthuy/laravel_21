<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Task\TaskController;
// use \App\Http\Controllers\Fontend\TaskController;
// use \App\Http\Controllers\Task;

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
// home
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');

//list task
Route::prefix('task')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('task.index');
    Route::get('/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/store', [TaskController::class, 'store'])->name('task.store');
    Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/{id}', [TaskController::class, 'update'])->name('task.update');
    Route::delete('/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
    Route::get('/{id}', [TaskController::class, 'show'])->name('task.show');
    Route::get('/complete/{id}', [TaskController::class, 'complete'])->name('todo.task.complete');
    Route::get('/reset/{id}', [TaskController::class, 'reComplete'])->name('todo.task.reset');

    // Route::get('/', 'Task\TaskController@index')->name('task.index');
    // Route::get('/create', 'TaskController@create')->name('task.create');	
    // Route::get('/edit/{id}', 'TaskController@edit')->name('task.edit');
    // Route::delete('/delete/{id}', 'TaskController@destroy')->name('task.destroy');  
});
// Route::resource('task', 'Task\TaskController');
// Route::resource('task', 'Frontend\TaskController');

//nhiều tham số trong cùng một URI.
// Route::get('/user/{id}/post/{post}', function($id, $idPost) {
//     return "This is post $idPost of user $id"; 
// });
// Route::get('user/{id?}', function($id = null) {
//     if ($id == null) {
//         return 'List users';
//     }

//     return "User $id";
// });



Route::prefix('hwunit02')->group(function () {
    Route::get('/profile', function () {
        return view('tasks.tasks.hwunit02.profile')->with([
            'name'  => 'Phan Dương Thùy',
            'year'  => 2001,
            'edu'   => 'Đại học Kinh doanh và Công nghệ Hà Nội.',
            'home'  => 'Vĩnh Phúc.',
            'inf'   => 'Tôi tên Phan Dương Thùy, sinh năm 2001, quê ở Vĩnh Phúc, sinh viên năm 2 trường đại học Kinh doanh và Công nghệ Hà Nội.',
            'obj'   => 'Chuyên viên lập trình web.'
        ]);
    });
    Route::get('/list', function () {
        $list = [
            [
                'name'      => 'Học Route trong Laravel',
                'status'    => 0
            ],
            [
                'name'      => 'Học View trong Laravel',
                'status'    => 1
            ],
            [
                'name'      => 'Học Blade trong Laravel',
                'status'    => 1
            ],
            [
                'name'      => 'Làm bài tập Route trong Laravel',
                'status'    => -1
            ],
            [
                'name'      => 'Làm bài tập View trong Laravel',
                'status'    => 1
            ],
            [
                'name'      => 'Làm bài tập Blade trong Laravel',
                'status'    => 0
            ],
        ];
        return view('tasks.tasks.hwunit02.list', compact([
            'list'
        ]));
    });
});
