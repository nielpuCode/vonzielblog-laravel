<?php

use App\Models\Post;
use App\Models\Editprofile;
use App\Models\Editproject;
use Illuminate\Http\Request;
use App\Models\Editeducation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditPortfolio;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    $ProjectData = Editproject::all();
    $profileData = Editprofile::latest()->get();
    $educationData = Editeducation::all();
    return view('Homepage', ['allProject' => $ProjectData, 'allProfile' => $profileData, 'allEducation' => $educationData]);
});

Route::get('/Allblog', function() {
    $variablePost = Post::orderBy('updated_at', 'desc')->get();
    return view('Allblog', ['thePost' => $variablePost]);
});

Route::get('/MyBlog', function() {
    // $variablePost = Post::all(); This is for if you want to get all post from all user

    $variablePost = Post::where('user_id', auth()->id())->orderBy('updated_at', 'desc')->get(); //This is for getting the post only form user that login

    return view('MyBlog', ['thePost' => $variablePost]);
});


Route::get('/WriteNew', function() {
    return view('WriteNew');
});

Route::get('/Login', function() {
    return view('Login');
});

Route::get('/Register', function() {
    return view('Register');
});

Route::get('/Alreadylogin', function() {
    return view('Alreadylogin');
});

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/Registered', [UserController::class, 'Registered']);

Route::post('/Logined', [UserController::class, 'Logined']);

Route::post('/NewPosted', [PostController::class, 'NewPosted']);

Route::get('/Edited/{post}', [PostController::class, 'EditPost']);
Route::put('/DoneEdit/{post}', [PostController::class, 'SaveChange']);

Route::delete('/DeletePost/{post}', [PostController::class, 'DeletePost']);


Route::get('/Viewpost/{post}', [PostController::class, 'ViewPost']);

Route::get('/Editportfolio', function() {
    $profileData = Editprofile::latest()->get();
    return view('Editportfolio', ['profile' => $profileData]);
});

Route::post('/NewProject', [EditPortfolio::class, 'NewProject']);

Route::delete('/DeleteProject/{editproject}', [EditPortfolio::class, 'DeleteProject']);

Route::put('/NewProfile/{id}', [Editportfolio::class, 'NewProfile']);

Route::post('/NewEducation', [Editportfolio::class, 'NewEducation']);

Route::put('/ProfileChange', [UserController::class, 'UpdateProfile']);
