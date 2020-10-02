<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    return view('students.index');
});

// Route::get('/students/{id}/{age}', function ($id, $age) {
//     dd($id." - ".$age); 
// });
// Route::get('students', function(){
//     return view('students.index');
// });

// Second choice

// Route::view('students', 'students.index');

//

// Route::get('students', function(){

//     $students = DB::table('students')->get();

//     // $student = DB::table('students')->where('id' ,'<=', 5)->get();

//     return view('students.index', ['students'=>$students]);
// });


// Route::get('students-list', function () {
//     $students = DB::table('students')->orderBy('id', 'desc')->get();
//     return view('students.list', [
//         'students' => $students,
//         'error' => null,
//         ]);
// })->name('student-list');

Route::get('/login', function(){
    return view('login');
})->name('get-login');

Route::post('/post-login', function(Request $request){
    $username = $request->username;
    $student = DB::table('students')
                ->where('name', 'like', "%$username%")
                ->first();

    if($student){
        return redirect()->route('student-list');
    } else{
        return redirect()->route('get-login');
    }
})->name('post-login');


Route::resource('students', StudentController::class);
    //->only(['index'])
    //->except(['edit'])

Route::get('/subjects', [SubjectController::class, 'index'])
    ->name('subject.index');
